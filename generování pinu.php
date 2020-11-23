<?php

    // PHP >= 7
    function str_rand(int $length = 4){
        $x = '';
        for($i = 1; $i <= $length; $i++){
            $x .= dechex(rand(0,255));
        }
        return substr($x, 0, $length);
        
        return substr($x, 1, $length);
        
        return substr($x, 2, $length);
        
        return substr($x, 3, $length);
        
        return substr($x, 4, $length);
    }
    var_dump(str_rand());
?>