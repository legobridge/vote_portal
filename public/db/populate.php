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
                $id_no = hash("sha256", $row[0]);
                $pass = hash("sha256", $row[1]);
                $bhavan = $row[2];
                $qu = "INSERT INTO `voters` (`id_no`, `pass`, `bhavan`) VALUES ('". $id_no . "', '" . $pass . "', '" . $bhavan . "')";
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