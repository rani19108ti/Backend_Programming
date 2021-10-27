<?php
    #membuat class Person (nama class harus Capital)
    #property = variable yang ada di dalam class, ada modifier (hak akses: public, private, protected)
    class Person {
        #membuat property
        public $nama;
        public $alamat;
        public $jurusan;
    }

    #membuat object (Object adalah turunan/ instance dari Class)
    $rani = new Person (); // otomatis variable $aufa punya $nama, $alamat, $jurusan
    echo $rani-> nama = 'Rani Gunawanti'; //

    $ismail = new Person ();
    $ismail->nama = "ismail Hasan";
    $ismail->alamat = "depok";
    $ismail->jurusan = "TI";


    echo $ismail-> nama, $ismail->alamat, $ismail->jurusan;

