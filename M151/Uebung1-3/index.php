<?php
    session_start();

    $anzahl_aufrufe = 1;

    //$_SESSION = ein session array mit Date
    if (isset($_SESSION['anzahl_aufrufe'])) 
    {
        $anzahl_aufrufe = $_SESSION['anzahl_aufrufe'];
        
    }
    
    echo "Die Seite wurde {$anzahl_aufrufe}x aufgerufen.";
    
    $anzahl_aufrufe++;
    
    //Daten Speichern
    $_SESSION['anzahl_aufrufe'] = $anzahl_aufrufe;
?>