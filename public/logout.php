<?php

    // configuration
    require("../includes/config.php"); 

    $my_id = $_SESSION["id"];

    // Update has_voted in database

    $res = $mysqli -> query("SELECT * FROM voters WHERE id = '$my_id'");

    $res = $mysqli -> query("UPDATE `voters` SET `has_voted` = 1 WHERE id = '$my_id'");

    // log out current user, if any
    logout();

    // redirect user
    redirect("/");

?>
