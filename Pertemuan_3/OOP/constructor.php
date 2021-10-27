<?php

# membuat class Person
class Person
{
  # membuat property
  public $nama;
  public $alamat;
  public $jurusan;

  #membuat constructor
  function __construct ($nama, $alamat, $jurusan) {
      $this->nama = $nama;
      $this->alamat = $alamat;
      $this->jurusan = $jurusan;
  }

  # membuat method
  function setNama($data)
  {
    $this->nama = $data;
  }
  function getNama()
  {
    return $this->nama;
  }

  # buat setter dan getter untuk alamat dan jurusan
  function setAlamat($data)
  {
    $this->alamat = $data;
  }
  function getAlamat()
  {
    return $this->alamat;
  }

  function setJurusan($data)
  {
    $this->jurusan = $data;
  }
  function getJurusan()
  {
    return $this->jurusan;
  }
}

# membuat object
$aufa = new Person("Aufa", "Depok", "TI");
echo $aufa->getNama();

$ismail = new Person("Ismail", "Cibubur", "SI");
echo $ismail->getNama();

