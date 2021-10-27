<?php
    #membuat array
    $people = ['budi', 'fajar', 'handoko', 'aufa', 'serly'];

    #mengakses array
    echo $people[3];

    #untuk mengetahui get index key
    echo array_search ('fajar', $people);

    #pakai algoritma
    for ($start = 0; $people < count($people); $people++) {
        if( 'budi' == $people[$start]) {
            echo $start;

        }
    }
?>