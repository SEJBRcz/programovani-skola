<html lang="cs">
    <head> 
        <title lang="cs">Vít Voráček ZT2B 2019-2020</title>
        <meta charset='UTF-8'> 
    </head>
    <form action="index.html">
        <body style="background-color: white;">
            <br>
            <a href="http://seznam.cz">doguse </a>
            <h1>bruh</h1>
            <h2>another bruh</h2>
            <h3>last bruhuble bruh</h3>
            <form action="index.html" method="post">
                <input name="zaskrtny" type="checkbox" value="to">somethink1   
                <input name="zaskrtny" type="checkbox" value="todle">somethink2
                <input name="zaskrtny" type="checkbox" value="tamto">somethink3
                <br>
                <input name="jmeno" type="text" value="">
                <input name="heslo" type="password" value="">
                <br>
                <input name="radio" type="radio">random nebruh moment
                <input name="radio" type="radio">random bruh moment
                <br>
                <select name="vaha"> 
                    <option value="0"selected>choose
                    <option value="1">A</option>
                    <option value="2">B</option>
                    <option value="3">C</option>
                    <option value="4">D</option>
                </select>

                <br><br><br>
                <img src="img/obrazek.jpg" alt="" title="">
            </form>
            <table border="3" >
                <td>či broa</td>
                <tr>sfgdegw</tr>
                <td>dogozzilla</td>
                <td>clash</td>
                <td>aatom</td>

            </table>


            <?php
            $data1 = 5;
            $data2 = 7;


            /**   var_dump($data1);
              var_dump($data2);
              echo '$data1';
              var_dump($data2);
              $ovoce = array("jablko", "broskev", "mango");
              $zelenina = array("celer", "petržel", "mrkev", "meloun");
              var_dump($zelenina);
              var_dump($ovoce);

              array_merge($zelenina, $ovoce);
              echo '<br>';
              var_dump($zelenina, $ovoce);
              echo '<br>';
              var_dump($data3);
              var_dump($data1 == $data2);
              echo '<br>';
              //   var_dump($data1 + $data2);
              //   var_dump($data1++);
              //   echo '<br>';
              //   var_dump($data1 - $data2);
              //   var_dump($data1--);
              echo '<br>';
              echo '<br>';
              echo '<br>';
              echo '<br>';
              echo '<br>';
              echo '<br>';
              echo '<br>';
              echo '<br>';

              // echo cena(125);
              //echo cena(100);

             */

            /**
             * @todo vypocte cenu
             * @param float $cena
             * @param float $dph
             * @param string $mnena
             * @return string
             */
            function cena($cena, $dph = 1.21, $mnena = 'CZK') {
                $cena_end = $cena * $dph;
                $cena_end = round($cena, 2);
                $cena_end = number_format($cena_end, 2, '.', '.', '.');

                return $cena . " " . $mena;
            }

            $string = "random text koronavir random text rohlík randomtext čína.";

            $param2 = 'rohlík' . 'koronavir' . 'kripl';

            echo "<br>";
            echo "<br>";


            var_dump(isvalid($string, $param2));
/**
 * 
 * @param type $string
 * @param type $param2
 * @return string
 */
            function isvalid($string, $param2) {
                if (strpos($string, $param2) !== false) {
                    return "false";
                } else {
                    return "True";
                }
            }

            var_dump(isValid($param1, $param2));
            
            ?>
        </body> 

</html>
