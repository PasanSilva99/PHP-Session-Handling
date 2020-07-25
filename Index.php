<?php
    //start the session
    session_start();

    //get the values which was created on the login page
    $userName = $_SESSION["userName"];

    echo $userName;

?>