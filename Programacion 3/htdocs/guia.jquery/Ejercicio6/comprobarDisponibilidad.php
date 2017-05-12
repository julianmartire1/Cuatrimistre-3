<?php

$nombres = [];
$flag = FALSE;
array_push($nombres,"carlos");
array_push($nombres,"juan");
array_push($nombres,"ezequiel");

for($i = 0 ; $i < count($nombres) ; $i++)
{
    if ($nombres[$i] == $_POST["txtnombre"])
    {
        $flag = TRUE;
        break;
    }
    else
    {
        $flag = FALSE;
    }
}



if ($flag == TRUE)
{
    //sleep(5);
    echo "El nombre existe";
}
else
{
    //sleep(5);
    echo "El nombre no existe";
}


?>
