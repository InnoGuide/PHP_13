<?php
   
   //Datenquelle beschreiben
   $server="127.0.0.1"; //deine IP
   $user = "root"; //dein Username
   $psw = null; //dein Password
   $dbName = "myDB"; //deine Datenbank

   //verbinden mit Datenquelle ($server,$user, $psw,$dbName)
   //test Verbindung
   try{
    //$conn = new PDO("sqlsrv:Server=$server; Database=$dbName", $user, $psw);
    $conn = new PDO("mysql:host=$server; dbname=$dbName", $user, $psw);
   }catch(PDOException $e){
     echo $e->getMessage();
   }
      //SQL-Statement 
      $sql="select * from Person";

      // send SQL-Statemt(req.)/ empfangen(receive)Data
      $result = $conn->query($sql);
      //test auf Daten
      $rows=$result->fetchAll();
      echo count($rows)."<br>";
      if (count($rows)>0){
         //Daten verarbeiten
        var_dump($rows);
      }
   //Verbindung mit Datenquelle beenden
   $conn =null;
  
  ?>