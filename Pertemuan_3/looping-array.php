<?php
    $animals = ['kucing', 'ayam', 'singa'];

    // menampilkan isi dari array
    echo $animals[0];

    // menampilkan semua
    foreach ($animals as $animal_sementara) {
        echo $animal_sementara;
        echo "<br>";
    }
?>