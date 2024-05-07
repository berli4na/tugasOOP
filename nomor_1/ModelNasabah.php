<?php
//agar kita dapat menggunakan objek dari class Nasabah
include_once("Nasabah.php");

class ModelNasabah{
    //properti "data" merupakan array yg digunakan menyimpan objek dari class nasabah
    private $data=array();
    //fungsi ini digunakan untuk inisiasi baru dari class Model nasabah
    //isinya memang kosong, tujuannya agar kelas dapat diinisialisasi
    function __construct(){}
    //fungsi ini digunakan untuk menambahkan objek nasabah baru
    function insert ($xnasabah){
        $this->data[]=$xnasabah;
    }
    //mengembalikan seluruh data nasabah yang tersimpah dalam array data
    function getAll(){
        return $this->data;
    }
    //digunakan untuk mengambil objek nasabah dari array "data" berdasarkan indeksnya
    function get($rec){
        return $this->data[$rec];
    }
    //fungsi ini digunakan untuk memperbarui data nasabah yang sudah ada dalam array "data"
    function update ($rec, $xnasabah){
        $this->data[$rec]= $xnasabah;
    }
}

