<?php

    // configuration
    require("../includes/config.php");

    $id = $_SESSION["id"];
    $bhavan_row = ($mysqli -> query("SELECT bhavan FROM voters WHERE id = '$id'")) -> fetch_assoc();
    $bhavan = $bhavan_row["bhavan"];

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // render form
        if ($bhavan === "MM" || $bhavan === "M")
        {
            render("cultsec_g_form.php", ["title" => "Cultural Secretary (Girls)"]);
        }
        else
        {
            render("cultsec_b_form.php", ["title" => "Cultural Secretary (Boys)"]);
        }
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (empty($_POST["vote"]))
        {
            apologize("You must vote for someone.");
        }
        else
        {
            $vote = $_POST["vote"];
            $mysqli -> query("UPDATE voters SET cultsec = '$vote' WHERE id = '$id'");
            redirect("sportssec.php");
        }
    }

?>
