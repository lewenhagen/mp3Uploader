<?php
$title = "Slackify";
include("includes/header.php");
// include("includes/functions.php");
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.8.0/xlsx.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.8.0/jszip.js"></script>
<script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
<script type="text/javascript" src="js/assoc.js"></script>

<div class="container">
    <div class="row">
        <!-- <img src="img/lessonqueue.svg" style="width: 100%"> -->
        <!-- <div class="jumbotron center"> -->
            <h1 class="title">Logga in</h1>
        <!-- </div> -->

    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="form-group">
                <label for="assoc">Välj förening</label>
                <select class="form-control" id="assoc" onchange="listStarts(this)">

                </select>
            </div>




        <form onSubmit="return uploadFile()">
            <div class="form-group">
                <label for="file-upload">Välj .mp3</label>
                <input class="form-control-file" aria-describedby="fileHelp" type="file" id="file-upload" disabled="true">
            </div>
            <div class="form-group">
                <button class="btn btn-lg btn-success" type="submit" disabled="true">Ladda upp</button>
            </div>

        </form>
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
