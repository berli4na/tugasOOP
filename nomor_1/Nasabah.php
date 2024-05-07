<?php

//mendeklarasikan class Nasabah
class Nasabah{ //class berguna untuk membuat cetakan / blueprint untuk objek-objek tertentu
    //buat properti Nasabah
    //properti merepresentasikan atribut-atribut yang dimiliki nasabah
    //enskapsulasi adalah salah satu konsep dalam OOP yang digunakan untuk mengatur aksesbilitas
    
    private $norek;
    private $nama;
    private $alamat;
    private $telp;
    private $email;
    private $saldo;

    //buat konstruktor, konstruktor ini sangat berguna pada saat kita membuat parameter dari objek
    //konstruktor digunakan untuk meginisialisasi properti objek pada saat pembuatan objek
    //pada saat membuat objek class kita akan secara otomatis memanggil fungsi ini
    //Konstruktor ini menerima parameter-parameter yang diperlukan untuk menginisialisasi properti-properti objek
    function __construct($xnorek, $xnama, $xalamat, $xtelp, $xemail, $xsaldo){
        $this->norek = $xnorek;
        $this->nama = $xnama;
        $this->alamat = $xalamat;
        $this->telp = $xtelp;
        $this->email = $xemail;
        $this->saldo = $xsaldo;
    }

    public function cetak(){
        $output = "No. Rekening  : $this->norek <br>";
        $output .= "Nasabah       : $this->nama <br>";
        $output .= "Alamat        : $this->alamat <br>";
        $output .= "No. Telepon   : $this->telp <br>";
        $output .= "Email         : $this->email <br>";
        $output .= "Saldo         : $this->saldo <br>";
        return $output;
    }
    
}