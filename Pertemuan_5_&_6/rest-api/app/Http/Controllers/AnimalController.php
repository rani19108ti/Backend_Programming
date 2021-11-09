<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    private $animals = ['buaya','kucing','ayam'];

    //membuat method
    public function index() {
        # gunakan foreach untuk menampilkan data animals (array)
        echo 'Menampilkan nama hewan ' . '<br>';
        foreach ($this->animals as $animal) {
            echo '- ' . $animal . '<br>';  
        }
    }

    public function store(Request $request) {
        # gunakan method array_push untuk menambahkan data baru
        $store_new = $request->nama;
        array_push($this->animals, $store_new);
        echo 'Berhasil menambah ' . $store_new . '<br>';
        foreach ($this->animals as $animal) {
            echo '- ' . $animal . '<br>';   
        } 
    }

    public function update(Request $request, $id) {
        echo $request->nama . '<br>';
        $this->animals[$id] = $request->nama;
        $this->index();
    }

    public function destroy($id) {
        echo "Menghapus hewan - id $id";
        unset($this->animals[$id]);
        $this->index();
    }
}
