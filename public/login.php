<?php

    // configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // render form
        render("login_form.php", ["title" => "Log In"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["id_no"]))
        {
            apologize("You must provide your ID Number.");
        }
        else if (empty($_POST["password"]))
        {
            apologize("You must provide your password.");
        }

        // hash id_no and password
        $id_no = strtoupper($_POST["id_no"]);
        $hashed_id = hash("sha256", $id_no);
        $hashed_password = hash("sha256", $_POST["password"]);
        // query database for user
        $res = $mysqli -> query("SELECT * FROM voters WHERE id_no = '$hashed_id'");
        // if we found user, check password
        if ($res != FALSE)
        {
            // first (and only) row
            $row = $res -> fetch_assoc();
            //echo $hashed_password."\n";
            //echo $row["pass"]."\n";
            // compare hash of user's input against hash that's in database
            if ($hashed_password === $row["pass"])
            {
                // remember that user's now logged in by storing user's ID in session
                $_SESSION["id"] = $row["id"];

                // redirect to president voting page
                redirect("/");
            }
        }

        // else apologize
        apologize("Invalid username and/or password.");
    }

?>
