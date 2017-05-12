<?php


//var_dump($_GET);
/*
if(isset($_GET["valor1"]["valor2"]["valor3"]))
{*/

    

    switch ($_GET["valor3"]) {
        case "p":
            echo $_GET["valor1"]+$_GET["valor2"]; 
            break;
            case "-":
            echo $_GET["valor1"]-$_GET["valor2"]; 
            break;
            case "*":
            echo $_GET["valor1"]*$_GET["valor2"];
            break;
            case "/":
            echo $_GET["valor1"]/$_GET["valor2"]; 
            break;
        default:
            break;
    }
    /*
}
else{ if(isset($_POST["valor"]))
    echo $_POST["valor"];
}*/
?>