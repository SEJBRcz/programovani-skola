
<?php

#Obsah lekce: Kombinace PHP a PHP OOP  vytvořit funkci jménem getPrice() s prefixem jmena a příjmení  bude dostávat dva parametry. První parametr bude cena, decimal a druhy parametr bude string, mena "CZK".  Funkce bude vracet měnu na dvě des. místa. Přes funkci number_format() bude cena formátovaná na dvě des. místa. Oddělení tisíců bude mezera a des. číslo bude děleno čárkou.  Funkce to bude vracet jako return na obrazovku se vypíse pomoci echo getPrice(par1, par2);  přiklad použití: number_format(100.58545, 2, ',', '.'); round(100.58545, 3);  použijete funkce php round(), a number_format()  Na moodle print screen prohlížeče a naGitlab odevzdej kód.


#vars

$par1 = 27.60;
$xy = $par1;
$par2 = "CZK";


#code

function getPrice($x, $y)
{

 echo $y;
 echo "<br>";
 return number_format($x, 2,',','.');
 
};



echo getPrice($par1, $par2);
echo "<br>";
echo "rounded:";
echo round($xy);
?>