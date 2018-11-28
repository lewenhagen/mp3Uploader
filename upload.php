<?php
include("includes/config.php");

if (isset($_SESSION["loggedin"])) {
    unset($_SESSION["loggedin"]);
} else {
    header("Location: index.php");
}
?>
<!doctype html>
<html>
<head>
    <title>Upload</title>
    <!-- <meta charset="utf-8"> -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='shortcut icon' href='img/slackify_logo.png' type='image/x-icon'/ >
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/lumen/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <link rel="stylesheet" href="style/style.css">
    <script type="text/javascript">
        function fillTable(assoc) {
            var counter = 0;
            var classes = {
                "Klass 8 yngre pool 1": "A",
                "Klass 8 yngre pool 2": "B",
                "Klass 7 äldre pojkar klass C": "C",
                "Klass 8 äldre": "D"
            };
            var table = "<table class='table table-hover table-bordered'>";
            table += "<thead class='thead-dark'><tr>";
            table += "<th>Tävling / klass</th><th>#</th><th>Start</th><th>Diciplin</th><th></th></tr></thead>";
            table += "<tbody>";

            $.each($.parseJSON(window.localStorage.getItem("data")), function(key, value) {
                if (value.Förening == assoc) {
                    var id = classes[value["Tävling / klass"]] + "_" + value["#"] + "_" + value["Start"] + "_" + value["Disciplin"];

                    table += "<tr id='row-" + counter + "'>";
                    table += "<td>" + value['Tävling / klass'] + "</td>";
                    table += "<td>" + value['#'] + "</td>";
                    table += "<td>" + value['Start'] + "</td>";
                    table += "<td>" + value['Disciplin'] + "</td>";
                    table += "<td><input class='form-control-file file-upload' aria-describedby='fileHelp' type='file' id='" + id + "'></td>";
                    table += "</tr>";
                }
                counter++;
            });

            table += "</tbody></table>";

            $('#table').append(table);
        }

        function markGreen(rows) {
            for (var i = 0; i < rows.length; i++) {
                $("#" + rows[i]).css("background-color", "#80ff80");
            }
        }

        function uploadFile(event) {
            var dbx = new Dropbox({ accessToken: '3Ft6zMrDcIAAAAAAAAAAC7HvwLGDk-kZtRwpG3GJttLqXa3-oBNi6IYWCxX4Jqoh' });
            var fileInputs = document.getElementsByClassName('file-upload');

            $("#results").html("<img src='img/ajax-loader.gif'>");
            // dbx.filesListFolder({path: ''})
            //     .then(function(response) {
            //         console.log(response);
            //     })
            //     .catch(function(error) {
            //         console.log(error);
            //     });

            var goodToGo = [];
            var notAudio = [];
            var total = 0;


            var statusRows = {
                "id_ok": [],
                "id_error": []
            };

            for (var i = 0; i < fileInputs.length; i++) {
                if (fileInputs[i].files.length > 0) {
                    if (fileInputs[i].files[0].name.split('.').pop() == "mp3") {
                        goodToGo.push(i);
                    } else {
                        statusRows["id_error"].push(fileInputs[i].closest("tr").id);
                    }
                    total++;
                }
            }

            for (var i = 0; i < goodToGo.length; i++) {
                console.log(i);
                var fileId = goodToGo[i];
                var closestTr = fileInputs[fileId].closest("tr");
                var file = null;
                file = fileInputs[fileId].files[0];
                statusRows["id_ok"].push(closestTr.id);
                dbx.filesUpload({path: '/' + fileInputs[fileId].id.replace(/ /g,"-") + ".mp3", contents: file})
                    .then(function(response) {
                        markGreen(statusRows["id_ok"]);
                        var results = document.getElementById('results');
                        results.innerHTML = "<h4>" + (i) + "/" + total + " file(s) uploaded!</h4>";
                    })
                    .catch(function(error) {
                        console.error("Error: " + error);
                    });
                }
                console.log(statusRows);
                for (var i = 0; i < statusRows["id_error"].length; i++) {
                    $("#" + statusRows["id_error"][i]).css("background-color", "#ff8080");
                    $("#reason").html("Some files are not .mp3");
                }
            return false;
        }
    </script>

</head>
<body onload="fillTable($('#chosen_assoc')[0].value)">

<div class="container">
    <img class="logo" src="img/slackify_logo.png" alt="logo">
    <div class="row">
        <?php if (isset($_SESSION["flash"])): ?>
                <?php echo "<h2 class='title'>" . $_SESSION["flash"] . "</h2>";
                unset($_SESSION["flash"]);
                ?>
            <?php else: ?>
                <h2 class="title">Välj förening</h2>
        <?php endif; ?>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="form-group">
                <label for="chosen_assoc">Inloggad som:</label>
                <input type="text" class="form-control" id="chosen_assoc" value="<?=$_SESSION['assoc'];?>" readonly="readonly">
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" id="table">
            <form onSubmit="return uploadFile()">
        </div>
        <div class="col-md-2">
            <button class="btn btn-lg btn-success uploadButton" type="submit">Ladda upp</button>
        </form>
        <div id="results"></div>
        <div id="reason"></div>
        </div>
    </div>
</div>

<footer>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 centerText">&copy; Maxon/Lewenhagen 2017</div>
        <div class="col-md-2"></div>
    </div>
</footer>

<script src="https://unpkg.com/dropbox/dist/Dropbox-sdk.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
