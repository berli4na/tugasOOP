<?php
 
 include_once("Koleksi.php");

 class ModelKoleksi{
    private $data = array();

    function __construct(){}

    function insert($koleksi){
        $this->data[]= $koleksi;
    }
    function getAll(){
        return $this->data;
    }
 }