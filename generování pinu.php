<?php
 class VítVoráčekpin{

    private $min;
    private $max;

    function getter($min, $max){
        $this->min = $min;
        $this->max = $max;
    } 
    function setter(){
        return $this->min;
    }
    function getPins(){

return $randbytes = (random_int($this->min, $this->max));


        }

}
 


for($i = 0;$i< 5;$i++){
    for($x = 0;$x < 4; $x++){
 $pinpin = new VítVoráčekpin();
$pinpin->getter(1, 4);
echo $pins = $pinpin->getPins();
file_put_contents('pins.txt', $pins, FILE_APPEND);
}
file_put_contents('pins.txt', "\n", FILE_APPEND);
echo "<br>";
}
?>