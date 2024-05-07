<?php

class Anggota{
    private $id_anggota;
    private $nama;
    private $alamat;
    private $telp;

    function __construct(
        $xid_anggota, 
        $xnama, 
        $xalamat, 
        $xtelp
        )
        {
        $this->id_anggota = $xid_anggota;
        $this->nama = $xnama;
        $this->alamat = $xalamat;
        $this->telp = $xtelp;
    }

    public function cetak(){
       echo "ID Anggota  : $this->id_anggota <br>";
       echo "Nama       : $this->nama <br>";
       echo "Alamat     : $this->alamat <br>";
       echo "No. Telepon: $this->telp <br>";
    
    }
}