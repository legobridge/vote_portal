<?php
    require("db_config.php");
    if (empty($_GET["file_name"]))
    {
        echo "Please Specify a File Name";
    }
    else
    {
        $file_name = $_GET["file_name"];
        if (($file = @fopen($file_name, 'r')) !== FALSE)
        {
            while(!feof($file))
            {
                $row = fgetcsv($file);
                $pass = hash("sha256", $row[0]);
                $bhavan = $row[1];
                $qu = "INSERT INTO `voters` (`pass`, `bhavan`) VALUES ('" . $pass . "', '" . $bhavan . "')";
                $mysqli -> query($qu);
            }
            echo "Population Successful";
        }
        else
        {
            echo "Please Specify a Valid File Name";
        }
    }
?>