<?php
    function somar($a, $b){
        return $a + $b;
    }
    function debug($a, $tag = '[Debug]'){
        $tipo = gettype($a);
        echo $tag.$a."({$tipo})";
    }
    echo somar(2,3) . "\n";
    echo debug("42");
?>