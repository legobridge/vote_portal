<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("gensec_form.php", ["title" => "General Secretary"]);
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
            $id = $_SESSION["id"];
            $vote = $_POST["vote"];
            $mysqli -> query("UPDATE voters SET gensec = '$vote' WHERE id = '$id'");
            redirect("/cultsec.php");
        }
    }

?>
