<?php declare (strict_types=1); //menerapkan aturan yang ketat
    #membuat fungsi
    function hitungLuasLingkaran($jariJari) {
        $phi = 3.14;
        $luasLingkaran = $phi * $jariJari * $jariJari;
        return $luasLingkaran; // mengembalikan/ memberi nilai kepada siapa yg memanggil
    }

    #membuat alternative function
    function hitungLuasLingkaran2(int $jariJari) {
        return 3.14 * $jariJari * $jariJari; // mengembalikan/ memberi nilai kepada siapa yg memanggil
    }
    echo hitungLuasLingkaran(5);
    echo "<br>";
    echo hitungLuasLingkaran2 (5.0); // hasilnya akan error karena yg diberikan float, padahal yg diminta int
?>