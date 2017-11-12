<?php
include("includes/config.php");

$pass = isset($_POST["pass"]) ? htmlentities($_POST["pass"]) : null;
$hp = isset($_POST["hp"]) ? htmlentities($_POST["hp"]) : null;
$assoc = isset($_POST["assoc"]) ? htmlentities($_POST["assoc"]) : null;

if ($assoc == "not") {
    $_SESSION["flash"] = "Välj förening!";
    header("Location: index.php");
}

if ($pass != null && $pass == password_verify($pass, $hash)) {
    $_SESSION["flash"] = "Välkommen";
    $_SESSION["loggedin"] = "yes";
    $_SESSION["assoc"] = $assoc;
    header("Location: upload.php");

} else {
    $_SESSION["flash"] = "Fel lösenord.";
    header("Location: index.php");
}
