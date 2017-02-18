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
        if ($bhavan === "MM")
        {
            render("hrep_mm_form.php", ["title" => "H-Rep (Girls Malviya)"]);
        }
        else if ($bhavan === "M")
        {
            render("hrep_m_form.php", ["title" => "H-Rep (Meera)"]);
        }
        else if ($bhavan === "BM")
        {
            render("hrep_bm_form.php", ["title" => "H-Rep (Boys Malviya)"]);
        }
        else if ($bhavan === "G")
        {
            render("hrep_g_form.php", ["title" => "H-Rep (Gandhi)"]);
        }
        else if ($bhavan === "V")
        {
            render("hrep_v_form.php", ["title" => "H-Rep (Vyas)"]);
        }
        else if ($bhavan === "B")
        {
            render("hrep_b_form.php", ["title" => "H-Rep (Budh)"]);
        }
        else if ($bhavan === "K")
        {
            render("hrep_k_form.php", ["title" => "H-Rep (Krishna)"]);
        }
        else if ($bhavan === "R")
        {
            render("hrep_r_form.php", ["title" => "H-Rep (Ram)"]);
        }
        else if ($bhavan === "S")
        {
            render("hrep_s_form.php", ["title" => "H-Rep (Shankar)"]);
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
            $mysqli -> query("UPDATE voters SET hrep = '$vote' WHERE id = '$id'");
            redirect("thanks.php");
        }
    }

?>
