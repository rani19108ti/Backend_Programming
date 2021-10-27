<?php
    // menampilkan o - 9

    // 3 statements
    // statement 1 = nilai awal
    // statement 2 = batasan looping (finish)
    // statement 3 = terus menambah 
    // statement 1 hanya sekali aja dibaca, setelah itu baca nya dari statement 2 dan 3
    for ($start =0; $start < 10; $start = $start + 2 ) {
        echo $start;
    }

    //coba untuk menampilkan angka ganjil bisa $start nya diganti jadi 1
    // atau body-nya pakai modulus If ($start % 2 != 0) dst
?>