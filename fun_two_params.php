
<?php

require 'classes/UserVitVoracek.php';
require 'classes/ZdrojVitVoracek.php';

use VitVoraceklUser\VitVoracekUtils;

$zdroj = new VitVoracekZdroj\ZdrojVitVoracek;

echo "<p>Výpis variabilních symbolů</p>";
echo "<br>";
// vypise 5 variabilnich symbolu zacinajicich 2020
echo VitVoracekUtils::getVsVitVoracek(5);
echo "<br>";
echo VitVoracekUtils::getVsVitVoracek(75);
echo "<br>";
echo VitVoracekUtils::getVsVitVoracek(625);
echo "<br>";
echo VitVoracekUtils::getVsVitVoracek(3);
echo "<br>";
echo VitVoracekUtils::getVsVitVoracek(9);
echo "<br>";
echo "<br>";

// Vypsani get metod napeti v indexu
echo $zdroj->getVitVoracekNapeti110V();
echo "<br>";
echo $zdroj->getVitVoracekNapeti48V();
echo "<br>";
echo $zdroj->getVitVoracekNapeti12V();
echo "<br>";
echo $zdroj->getVitVoracekNapeti9V();
echo "<br>";
echo $zdroj->getVitVoracekNapeti4_5V();
echo "<br>";
echo $zdroj->getVitVoracekNapeti1_5V();
echo "<br>";
