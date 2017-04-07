<?php

    // display errors, warnings, and notices
    ini_set("display_errors", true);
    error_reporting(E_ALL);

    $mysqli = new mysqli("localhost", "election_commission", "SuperSecurePassword", "elections");
    
?>
