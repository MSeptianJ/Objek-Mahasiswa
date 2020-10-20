<?php
    require "Mahasiswa.php";

$Septian = new Mahasiswa(
    "Septian",
    "Indihiang",
    "Ngoding",
    "Universitas Siliwangi",
    "Informatika",
    "3"
);

$Diaz = new Mahasiswa(
    "Diaz",
    "Cibeureum",
    "Tugas",
    "Universitas Komputer (UNIKOM)",
    "Informatika",
    "3"
);

$Ridan = new Mahasiswa(
    "Ridansyah",
    "Bandung",
    "Malas",
    "Universitas Siliwangi",
    "Agroteknologi",
    "3"
);

$Fadli = new Mahasiswa(
    "Fadliansyah",
    "Kawalu",
    "Tugas",
    "Universitas Siliwangi",
    "Manajemen",
    "1"
);

$Uden = new Mahasiswa(
    "Fahryan",
    "Tajur",
    "Malas",
    "Politeknik Bandung",
    "Ekonomi Pembangunan",
    "1"
);

//Septian
$Septian->perkenalan();
$Septian->Tempat();
$Septian->kegiatan();

$Septian->setUang(10000);
echo "Saya mempunyai uang sebanyak ". $Septian->getUang();
echo "<br><br>";

//Diaz
$Diaz->perkenalan();
$Diaz->Tempat();
$Diaz->kegiatan();

$Diaz->setUang(30000);
echo "Saya mempunyai uang sebanyak ". $Diaz->getUang();
echo "<br><br>";

//Ridan
$Ridan->perkenalan();
$Ridan->Tempat();
$Ridan->kegiatan();

$Ridan->setUang(1000);
echo "Saya mempunyai uang sebanyak ". $Ridan->getUang();
echo "<br><br>";

//Fadli
$Fadli->perkenalan();
$Fadli->Tempat();
$Fadli->kegiatan();

$Fadli->setUang(100000);
echo "Saya mempunyai uang sebanyak ". $Fadli->getUang();
echo "<br><br>";

//Uden
$Uden->perkenalan();
$Uden->Tempat();
$Uden->kegiatan();

$Uden->setUang(500);
echo "Saya mempunyai uang sebanyak ". $Uden->getUang();