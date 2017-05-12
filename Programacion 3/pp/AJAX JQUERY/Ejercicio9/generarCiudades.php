<?php

switch ($_POST["provincias"])
{
    case 'buenosAires':
        echo "<option value='banfield'>Banfield</option>";
        echo "<option value='lomasDeZamora'>Lomas de Zamora</option>";
        echo "<option value='monteChingolo'>Monte Chingolo</option>";
        echo "<option value='ezpeleta'>Ezpeleta City</option>";
        break;
    case 'cordoba':
        echo "<option value='carlosPaz'>Carlos Paz</option>";
        echo "<option value='cordoba'>Córdoba (capital)</option>";
        echo "<option value='rioCuarto'>Río Cuarto</option>";
        break;
    case 'santaFe':
        echo "<option value='rosario'>Rosario</option>";
        echo "<option value='pergamino'>Pergamino</option>";
        echo "<option value='santaFe'>Santa Fé</option>";
    default:
        echo "";
        break;
}

?>