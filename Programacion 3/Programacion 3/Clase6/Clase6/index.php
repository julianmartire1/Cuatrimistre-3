<?php
try {

  $nombre="Pepe";
  $pdo=new PDO("mysql:dbname=cdcol","root","");
  /*$band=$pdo->prepare("INSERT INTO `cds`(`titel`)
  VALUES (:titel)");

  $band->bindParam(":titel",$nombre);*/
  $band=$pdo->prepare("INSERT INTO `cds`(`titel`) VALUES (?)");

  $band->bindParam(1,$nombre);
  $band->execute();







  //$band=$pdo->query("SELECT * FROM cds");

  //FETCHALL
  /*$rr=$band->fetch(PDO::FETCH);
  var_dump($rr);*/
  //FETCHASSOC
  /*
  $rr=$band->fetch(PDO::FETCHASSOC);
  while ($fila = mysql_fetch_assoc($resultado)){
  echo $fila["titel"];
      echo $fila["interpret"];
      echo $fila["jahr"];

    }*/



} catch (PDOException $e) {
  echo $e->getMessage();
}




 ?>
