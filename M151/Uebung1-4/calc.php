<?php

    $x = intval($_GET['x']);
    $y = intval($_GET['y']);
    $resultat = 0;
    $mode = $_GET['mode'];
    
    if($mode==='plus')
    {
    $resultat = $x + $y;
    echo "Das resultat ist: {$resultat}<br />";
    }

    if($mode==='minus')
    {
    $resultat = $x - $y;
    echo "Das resultat ist: {$resultat}<br />";
    }

    if($mode==='mal')
    {
    $resultat = $x + $y;
    echo "Das resultat ist: {$resultat}<br />";
    }

    if($mode==='div')
    {
    $resultat = $x / $y;
    echo "Das resultat ist: {$resultat}<br />";
    }
  
?>