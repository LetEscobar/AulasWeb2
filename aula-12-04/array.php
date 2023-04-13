<?php
    $a = array();
    $a[2009] = "Lançado PHP 5.3";
    $a[1995] = "Criado PHP";
    $a[2000] = "Lançado PHP 4";
    $a[2004] = "Lançado PHP 5";
    asort($a);
    foreach ($a as $ano => $texto){
        echo "Em {$ano}: $texto. \n";
    }
?>