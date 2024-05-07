<?php

include_once("Anggota.php");
include_once("Koleksi.php");

class Sirkulasi {
    private $id_sirkulasi;
    private $anggota;
    private $koleksi = array();

    function __construct($id_sirkulasi, $anggota, $koleksi) {
        $this->id_sirkulasi = $id_sirkulasi;
        $this->anggota = $anggota;
        $this->koleksi = $koleksi;
    }

    public function cetak() {
        echo "<b> ID Sirkulasi: </b>" . $this->id_sirkulasi . "<br>";
        echo "<b> Data Anggota: </b> <br>";
        $this->anggota->cetak();
        echo "<b> Data Koleksi: </b> <br>";
        foreach ($this->koleksi as $koleksi) {
            $koleksi->cetak();
            echo "<br>";
        }
    }
}
