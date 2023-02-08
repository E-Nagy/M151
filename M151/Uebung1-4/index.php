<?php
    //Lösung: http://localhost/M151/Uebung1-4/index.php?username=BENUTZERNAME&age=18

    $username = $_GET['username'];
    
    if($_GET['username'])
    {
    echo "Hallo {$username}!<br />";
    }

    if ($_GET['age']) {
        $age = $_GET['age'];
        echo "Du bist {$age} Jahre alt.";
    }
?>