<?php

# membuat class Animal
class Animal
{
  # property animals
  public $animal;
  
  # method constructor - mengisi data awal
  # parameter: data hewan (array)
  public function __construct($animal)
  {
      $this->nama = $animal;
  }

}

# membuat object
# kirimkan data hewan (array) ke constructor
$animal = new Animal(['Kucing']);

echo "Index - Menampilkan seluruh hewan <br>";
$animal->index();
echo "<br>";
