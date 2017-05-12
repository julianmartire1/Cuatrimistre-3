<?php

switch ($_POST["cboOperacion"])
{
    case 'sumar':
        echo $_POST["valorUno"]+$_POST["valorDos"];
        break;
    case 'restar':
        echo $_POST["valorUno"]-$_POST["valorDos"];
        break;
    case 'multiplicar':
        echo $_POST["valorUno"]*$_POST["valorDos"];
        break;
    case 'division':
        echo $_POST["valorUno"]/$_POST["valorDos"];
        break;
    default:

        break;
}

?>