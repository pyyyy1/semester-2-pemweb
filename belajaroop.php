<?php

    // membuat class-class itu seperti model atau blueprint
    class Car { 
        // class == model / sketsa / kerangka / blueprint di dalam bagian
        // properties == variable
        // method == function
        // membuat atributnya, kaya buat variabel (properties)
        public $nama;
        public $warna;
        public $plat;

        // membuat perilaku maju dan mundur (methode)
        function construct($nama, $warna) {
            echo "Mobil dibuat";
            $this->nama = $nama;
            $this->warna = $warna;
        }
        function maju() {
            echo "Mobil maju";
        }
        function mundur() {
            echo "Mobil mundur";
        }
    }

    // membuat object; mobil avanza
    $avanza = new Car ("Avanza GT 101", "Merah");
    $avanza->maju();
    $avanza->mundur();
    echo $avanza->nama;
    echo $avanza->warna;
    
    echo "<br/>";

    // membuat object: toyota
    $toyota = new Car ();
    $toyota->nama = "Toyota Daihatsu Z11";
    $toyota->warna = "Biru";
    echo $toyota->nama;
    echo $toyota->warna;

?>