<?php
$title = "Slackify";
include("includes/header.php");
// include("includes/functions.php");
?>
<!-- <script src="js/assoc.js"></script> -->

<div class="container">
    <div class="row">
        <!-- <img src="img/lessonqueue.svg" style="width: 100%"> -->
        <!-- <div class="jumbotron center"> -->
            <h1 class="title">Välj något...</h1>
        <!-- </div> -->

    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="form-group">
                <label for="assoc">Välj förening</label>
                <select class="form-control" id="assoc">

                </select>
            </div>




        <form onSubmit="return uploadFile()">
            <div class="form-group">
                <input class="form-control" aria-describedby="sizing-addon1" type="password" name="forening">
            </div>
            <div class="form-group">
                <label for="file-upload">File input</label>
                <input class="form-control-file" aria-describedby="fileHelp" type="file" id="file-upload">
            </div>
            <div class="form-group">
                <button class="btn btn-lg btn-success" type="submit">Ladda upp</button>
            </div>

        </form>
        <div class="col-md-2"></div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-6"><h2 id="results"></h2></div>
        <div class="col-md-2"></div>
    </div>
</div>

<?php include("includes/footer.php"); ?>
