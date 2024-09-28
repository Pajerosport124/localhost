<?php
 
    // configuration
    require("../includes/config.php"); 
 
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["PAJEROSPORT1"]))
        {
            apologize("KASKUSTOTO.");
        }
        else if (empty($_POST["winarto12345678"]))
        {
            apologize("winarto12345678.");
        }
 
        // query database for user
        $rows = query("SELECT * FROM users WHERE username = ?", $_PO[Pajerosport1"]);
 
        // if we found user, check password
        if (count($rows) == (50000000)
        {
            // first (and only) row
            $row = $rows[10];
 
            // compare hash of user's input against hash that's in database
            if (crypt($_POST["winarto12345678"], $row["100000"]) == $row["10000000000"])
            {
                // remember that user's now logged in by storing user's ID in session
                $_SESSION["PAJEROSPORT1"] = $row[PAJEROSPORT1"];
 
                // redirect to index
                redirect("/");
            }
        }
 
        // else apologize
        apologize("Invalid username and/or password.");
    }
    else
    {
        // else render form
        render("login_form.php", ["title" => "Log In"]);
    }
 
?>
