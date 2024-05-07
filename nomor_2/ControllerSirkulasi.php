<?php

include_once("ModelAnggota.php");
include_once("ModelKoleksi.php");;
include_once("ModelSirkulasi.php");;

class ControllerSirkulasi {
    // private $model_anggota;
    // private $model_koleksi;

    public function __construct() {
        $this->model_anggota = new ModelAnggota();
        $this->model_koleksi = new ModelKoleksi();
        $this->model_sirkulasi = new ModelSirkulasi();
        $this->index();
    }

    public function index() {
        echo "Model View Controller Demo / Index <br>";
    }

    public function addAnggota($id_anggota, $nama, $alamat, $telp) {
        echo "Add new Anggota <br>";
        $anggota = new Anggota($id_anggota, $nama, $alamat, $telp);
        $this->model_anggota->insert($anggota); 
    }

    public function addKoleksi($id_koleksi, $judul_buku, $penulis, $penerbit, $tahun_terbit) {
        echo "Add new Koleksi <br>";
        $this->model_koleksi->insert(new Koleksi($id_koleksi, $judul_buku, $penulis, $penerbit, $tahun_terbit));
    }

    public function addSirkulasi($id_sirkulasi, $anggota, $koleksi) {
        echo "Add new Sirkulasi <br>";
        $this->model_sirkulasi->insert(new Sirkulasi($id_sirkulasi, $anggota, $koleksi));
    }

    public function viewAllAnggota() {
        echo "<b> View All Anggota </b> <br>";
        $anggota = $this->model_anggota->getAll();
        foreach ($anggota as $index => $anggota) {
            echo "Anggota No. $index <br>";
            echo $anggota->cetak();
        }
    }
    public function viewAllKoleksi() {
        echo "<b> View All Koleksi </b> <br>";
        $koleksi = $this->model_koleksi->getAll();
        foreach ($koleksi as $index => $koleksi) {
            echo "Koleksi No. $index <br>";
            echo $koleksi->cetak();
        }
    }

    public function viewAllSirkulasi() {
        echo "<b> View All Sirkulasi </b> <br>";
        $sirkulasi = $this->model_sirkulasi->getAll();
        foreach ($sirkulasi as $index => $sirkulasi) {
            echo "Sirkulasi No. $index <br>";
            echo $sirkulasi->cetak();
        }
    }

}
