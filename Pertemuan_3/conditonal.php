<?php
    //jika nilai di atas 90, dapat A
    //jika nilai di atas 80, dapat B
    // jika nilai di atas 70, dapat C
    // selain itu =D

    $nilai = 65;

    if($nilai>90) {
        echo "A";
    }
    elseif ($nilai>80) {
        echo "B";
    }
    elseif ($nilai>70) {
        echo "C";
    }
    else {
        echo "D";
    }

?>