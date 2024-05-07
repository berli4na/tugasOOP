<?php

include_once("Anggota.php");

class ModelAnggota{
    private $data = array();

    function __construct(){}
    
    function insert($anggota){
        $this->data[] = $anggota;
    }
    function getAll(){
        return $this->data;
    }
}