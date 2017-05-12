<!doctype html>
<html>

    <head>
<meta charset="UTF-8"/> 
        <title>Ejercicio 17</title>
    </head>
    <body>
        
        <?php
                $a =array();
                $contador=0;
                for ($i=0; ;$i++) { 
                    if($i%2!=0)
                    {
                        array_push($a,$i);
                        $contador++;                     
                    }
                    if($contador==10)
                    break;
                }
                
                /*for ($i=0; $i < $contador; $i++) { 
                    
                    echo "<br/>".$a[$i];
                }*/

                /*$i=0;
                while ($i<$contador) {
                    
                    echo "<br/>".$a[$i];
                    $i++;
                }*/

                foreach ($a as $item) {
                    echo "<br/>".$item;
                }

        ?>
    </body>

</html>