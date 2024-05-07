<?php
//berguna untuk menggunakan fungsi dalam kelas ModelNasabah yang digunakan untuk memanipulasi data nasabah
include_once("ModelNasabah.php");

class ControllerNasabah{
    // private $model_nasabah;
    public function __construct(){
        $this->model_nasabah = new ModelNasabah();
        $this->index();
    }
    public function index(){
        echo "Model View Controller Demo / Index <br>";
    }
    public function addRecord($norek, $nama, $alamat, $telp, $email, $saldo){
        echo "Add new Record <br>";
        $xnasabah = new Nasabah($norek, $nama, $alamat, $telp, $email, $saldo);
        $this->model_nasabah->insert($xnasabah);   
    }

    public function viewAllRecord(){
        echo "View All Records <br>";
        $records = $this->model_nasabah->getAll();
        foreach ($records as $index => $nasabah) {
            echo "Record No. $index <br>";
            echo $nasabah->cetak();
            echo "<br>";
        }
    }
    public function viewSingleRecord($rec){
        echo "View Record No. $rec <br>";
        $result = $this->model_nasabah->get($rec);
        echo $result->cetak();
    }

    public function updateRecord($rec, $xnasabah){
        echo "Update Record No. $rec <br>";
        $result = $this->model_nasabah->update($rec, $xnasabah);
    }
}