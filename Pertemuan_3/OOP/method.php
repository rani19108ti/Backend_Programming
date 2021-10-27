<?php
    #membuat class Person (nama class harus Capital)
    #property = variable yang ada di dalam class, ada modifier (hak akses: public, private, protected)
    class Person {
        #membuat property
        public $nama;
        public $alamat;
        public $jurusan;

        #membuat method -- konvensi penggunaan set = ubah
        function setNama ($data) {
            $this->nama = $data; //$this == tolong carikan saya property/ variable $nama yang ada di kelas ini
        }
        function getNama () {
            return $this->nama;
        }
        function setAlamat ($data) {
            $this->alamat = $data; 
        }
        function getAlamat () {
            return $this->alamat;
        }
    }

    #membuat object (Object adalah turunan/ instance dari Class)
    $rani = new Person (); // membuat object baru dan object baru itu otomatis variable $aufa punya $nama, $alamat, $jurusan
    $rani->setNama("Rani");
    echo $rani->getNama() . "<br>";

    $rani->setAlamat("Cibubur");
    echo $rani->getAlamat() . "<br";

?>