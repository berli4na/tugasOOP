<?php

class Koleksi{
    private $id_koleksi;
    private $judul_buku;
    private $penulis;
    private $penerbit;
    private $tahun_terbit;

    function __construct(
        $xid_koleksi,
        $xjudul_buku,
        $xpenulis,
        $xpenerbit,
        $xtahun_terbit
    ){
        $this->id_koleksi = $xid_koleksi;
        $this->judul_buku = $xjudul_buku;
        $this->penulis = $xpenulis;
        $this->penerbit = $xpenerbit;
        $this->tahun_terbit = $xtahun_terbit;
    }
    
    public function cetak(){
        echo "ID Koleksi : $this->id_koleksi <br>";
        echo "Judul buku : $this->judul_buku <br>";
        echo "Penulis : $this->penulis <br>";
        echo "Penerbit : $this->penerbit <br>";
        echo "Tahun terbit : $this->tahun_terbit <br>";
    }
}