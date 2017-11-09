<?php include("includes/config.php"); ?>

<!doctype html>
<html>
<head>
    <title>Log in</title>
    <!-- <meta charset="utf-8"> -->
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='shortcut icon' href='img/favicon-16x16.png' type='image/x-icon'/ >
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/sandstone/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.csv.js"></script>
    <script type="text/javascript" src="js/assoc.js"></script>

    <link rel="stylesheet" href="style/style.css">

</head>
<body>

<div class="container">
    <div class="row">
        <?php if (isset($_SESSION["flash"])): ?>
                <?php echo "<h2 class='title'>" . $_SESSION["flash"] . "</h2>"; unset($_SESSION["flash"]); ?>
            <?php else: ?>
                <h2 class="title">Lösenord:</h2>
        <?php endif; ?>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form action="verify.php" method="POST">
                <div class="form-group">
                    <label for="assoc">Välj förening</label>
                    <select class="form-control" id="assoc" name="assoc"></select>
                </div>
                <div class="form-group">
                    <label for="pass">Lösenord:</label>
                    <input type="hidden" name="hp" value="human">
                    <input type="password" name="pass" id="pass"> => <button class="btn btn-sm" type="submit">Verifiera</button>
                </div>

            </form>





        <!-- <form onSubmit="return uploadFile()">
            <div class="form-group">
                <label for="file-upload">Välj .mp3</label>
                <input class="form-control-file" aria-describedby="fileHelp" type="file" id="file-upload" disabled="true">
            </div>
            <div class="form-group">
                <button class="btn btn-lg btn-success" type="submit" disabled="true">Ladda upp</button>
            </div>

        </form> -->
        <div class="col-md-2"></div>
    </div>
    <div id='my_file_output'></div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-6"><h2 id="results"></h2></div>
        <div class="col-md-2"></div>
    </div>
</div>

<footer>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 centerText">&copy; Maxon/Lewenhagen 2017</div>
        <div class="col-md-2"></div>
    </div>
</footer>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/md5.js"></script> -->
<script src="https://unpkg.com/dropbox/dist/Dropbox-sdk.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- <script type="text/javascript" src="js/assoc.js"></script> -->
<script>
    $(document).ready(function() {
        $.ajaxSetup({ cache: false });
    });
</script>
</body>
</html>
