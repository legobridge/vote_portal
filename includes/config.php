<?php

    // display errors, warnings, and notices
    ini_set("display_errors", true);
    error_reporting(E_ALL);

    // requirements
    require("helpers.php");

    $mysqli = new mysqli("localhost", "nickfury95", "v1kCjsvLYytrBTGV", "elections");

    // enable sessions
    session_start();

    // require authentication for all pages except /login.php and /logout.php
    if (!in_array($_SERVER["PHP_SELF"], ["/login.php", "/logout.php"]))
    {
        if (empty($_SESSION["id"]))
        {
            redirect("login.php");
        }
    }

?>
