<?php

include_once("ControllerNasabah.php");

    $cn = new ControllerNasabah();
    echo "<hr>";

    $cn->addRecord("1234567890", "Berliana Ramadhani", "Jambi", "089529626256", "brlianaramdhni@gmail.com", "1000000000");
    $cn->addRecord("1234567890123456", "Isagi Yoichi", "Osaka", "089929323253", "isagi@gmail.com", "1100000000");
    $cn->addRecord("12312312345678", "Nagi Seishiro", "Busan", "089119616236", "nagi@gmail.com", "1200000000");
    $cn->addRecord("9876543210", "Reo Mikage", "Tokyo", "089555626256", "reo@gmail.com", "9000000000");
    $cn->addRecord("0987654321", "Michael Kaiser", "Munchen", "089549621234", "kaiser@gmail.com", "5000000000");
    echo "<hr>";

    $cn->viewAllRecord();
    echo "<hr>";

    $cn->viewSingleRecord(2);
    echo "<hr>";

    $xnasabah = new Nasabah("12312312345678", "Nagi Seisiro", "Okinawa", "089119616236", "nagi@gmail.com", "1200000000");
    $cn->updateRecord(3, $xnasabah);
    $cn->viewSingleRecord(3);
    echo "<hr>";

    $cn->viewAllRecord();
    echo "<hr>";

