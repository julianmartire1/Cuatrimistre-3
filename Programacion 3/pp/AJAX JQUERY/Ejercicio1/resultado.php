<?php

for ($i=0; $i <= $_POST["numero"]; $i++)
{ 
    if($i%2 != 0)
    {
        echo "\nNumero: ".$i;
    }
}

?>