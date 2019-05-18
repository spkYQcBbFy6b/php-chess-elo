<?php

function FN_calcELO($elo1, $elo2, $result, $k=20)
{
 $newELO1 = round($elo1 + $k * ( $result - (1 / ( 1 + pow(10, ($elo2 - $elo1)/400) )) ));
 $newELO2 = $elo2 + ($elo1 - $newELO1);
 return(array($newELO1, $newELO2));
}

// $elo1: should be white
// $elo2: should be black
// $result: seen from $elo1: 1=won, 0=lost, remis=0.5
// $k: normally 20, for some exceptions there are informations to find on the net.
?>
