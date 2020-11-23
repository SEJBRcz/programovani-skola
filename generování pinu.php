<?php
  
    function GenPINVítVoráček(int $length = 4){
    
        $x = '';
        for($i = 1; $i <= $length; $i++){
            $x .= dechex(random_int(0,9));
        }
        return substr($x, 0, $length);
    }
    var_dump(GenPINVítVoráček());
    
    
    
  
    for($j = 0; $j <= 4; $j++){
        echo GenPINVítVoráček();
        echo ("<br>");
    }; 
    
     
?>