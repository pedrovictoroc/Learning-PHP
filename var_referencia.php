<?php
    $a = 3;
    $b = 5;
    echo "1) " . ($a + $b) . "<br/>";
    $a += $b;
    echo "2) " . ($a + $b) . "<br/>";

    $c = 3;
    $d = &$c;
    echo "3) $d <br/>";
    $c = 5;
    echo "4) $d <br/>";

?>