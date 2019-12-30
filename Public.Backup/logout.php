<?php
include_once("header.php");
session_destroy();
if(empty($_SESSION["currentCustID"])){
    echo "There is no user";
}
?>

<div id="logoutSuccess" class="card bg-success text-white w3-animate-opacity mt-4">
    <div class="card-body">User Successfully Logged out: Redirecting</div>
</div>

<script>
    setTimeout(function(){
        document.getElementById("logoutSuccess").style.display = "none";
        window.location.replace("landing.php")
    }, 3000);
</script>
