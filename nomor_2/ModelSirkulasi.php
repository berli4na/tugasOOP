<?php

include_once("Sirkulasi.php");

class ModelSirkulasi {
    private $data = array();

    function __construct(){}

    function insert($sirkulasi) {
        $this->data[] = $sirkulasi;
    }

    function getAll() {
        return $this->data;
    }
}
