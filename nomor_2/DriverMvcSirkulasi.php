<?php

include_once("ControllerSirkulasi.php");

$cs = new ControllerSirkulasi();
echo "<hr>";
$obj_anggota = new Anggota("2316795","Berliana Ramadhani","KOSERA","089529626256");

$obj_koleksi = array (
    new Koleksi("KL000", "Bungo Stray Dogs", "Kafka Asagiri", "Gramedia", "2020"),
    new Koleksi("KL001", "Jujutsu Kaisen", "Gege Akutami", "Gramedia", "2018"),
    new Koleksi("KL002", "Blue lock", "Muneyuki Kaneshiro", "Gramedia", "2020")
);

$cs->addSirkulasi("ABC21", $obj_anggota, $obj_koleksi);

echo "<hr>";

$cs->viewAllAnggota();
echo "<hr>";

$cs->viewAllKoleksi();
echo "<hr>";

$cs->viewAllSirkulasi();
echo "<hr>";

?>
