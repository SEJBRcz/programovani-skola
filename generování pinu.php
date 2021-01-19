<?php
// pridani class za pomoci require
require 'classes/UserVitVoracek.php';
// prepisu si namespce na user
use VitVoracek as user;
use VitVoraceklUser\VitVoracekUtils;

$UserVitVoracek = new user\UserVitVoracek;
// metody set
echo "<br>";
echo $UserVitVoracek->setAgePrivateVitVoracek(15);
echo "<br>";
echo $UserVitVoracek->setFullNamePrivateVitVoracek("Vit");
echo "<br>";
// metody get
echo $UserVitVoracek->getAgePublicVitVoracek();
echo "<br>";
echo $UserVitVoracek->getFirstNamePublicVitVoracek();
echo "<br>";
echo $UserVitVoracek->getLastNamePublicVitVoracek();
echo "<br>";
echo $UserVitVoracek->getFullNamePublicVitVoracek();
echo "<br>";
echo $UserVitVoracek->getGenderPublicVitVoracek();
echo "<br>";

// cely class User ze souboru UserVitVoracek (slozka classes)
var_dump($UserVitVoracek);
echo "<br>";
// Funkce getPrice
echo $UserVitVoracek->michalVitVoracek(5500000.189, "CZK");
echo "<br>";
echo "<br>";
// staticka funkce getPin - vygeneruje 4 mistny pin
for ($i=0; $i < 5; $i++) { 
    echo VitVoracekUtils::genPinVitVoracek();
    echo "<br>";
}
