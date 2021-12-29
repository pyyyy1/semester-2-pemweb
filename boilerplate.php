<?php

# Nama  : Muhamad Ismail
echo "Nama    : Muhamad Ismail <br>";
# Kelas : TI05
echo "Jurusan : TI05 <br>";
# NIM   : 0110220125
echo "NIM     : 0110220125 <br>";
# Tugas : Pemrogramman Backend
echo "Tugas   : Pemrogramman Backend";

echo "<br>";
echo "=========================================== <br>";

# membuat class Animal
class Animal
{
  # property animals
  public $animal;

  # method constructor - mengisi data awal
  # parameter: data hewan (array)
  public function __construct($nama)
  {
    $this->animal = $nama;
  }

  # method index - menampilkan data animals
  public function index()
  {
    # gunakan foreach untuk menampilkan data animals (array)
    foreach ($this->animal as $nimals) {
      echo "- $nimals <br>";
    }
  }

  # method store - menambahkan hewan baru
  # parameter: hewan baru
  public function store($nama)
  {
    # gunakan method array_push untuk menambahkan data baru
    array_push($this->animal, $nama);
  }

  # method update - mengupdate hewan
  # parameter: index dan hewan baru
  public function update($index, $nama)
  {
    $this->animal[$index] = $nama;
  }

  # method delete - menghapus hewan
  # parameter: index
  public function destroy($index)
  {
    # gunakan method unset atau array_splice untuk menghapus data array
    array_splice($this->animal, $index, 1);
  }
}

# membuat object
# kirimkan data hewan (array) ke constructor
$animal = new Animal(['Ayam', 'Ikan']);

echo "Index - Menampilkan seluruh hewan <br>";
$animal->index();
echo "<br>";

echo "Store - Menambahkan hewan baru (Burung) <br>";
$animal->store('Burung');
$animal->index();
echo "<br>";

echo "Update - Mengupdate hewan <br>";
$animal->update(0, 'Kucing Anggora');
$animal->index();
echo "<br>";

echo "Destroy - Menghapus hewan <br>";
$animal->destroy(1);
$animal->index();
echo "<br>";