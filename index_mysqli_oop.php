<?php

   //Datenquelle beschreiben
   $server="127.0.0.1"; //deine IP
   $user = "root"; //dein Username
   $psw = null; //dein Password
   $dbName = "myDB"; //deine Datenbank
   //verbinden mit Datenquelle ($server,$user, $psw,$dbName)
   $conn = new mysqli($server,$user, $psw,$dbName);
   //test Verbindung
   if ($conn->connect_error){
     echo $conn->connect_error;
   }else{
     //SQL-Statement 
     $sql="select * from User";
     // send SQL-Statemt(req.)/ empfangen(receive)Data
     $result = $conn->query($sql);
     var_dump($result);
     //testen auf Daten
     if($result->num_rows>0){
       //Daten verarbeiten
        $rows=$result->fetch_assoc();
        var_dump($rows);
        $rows=$result->fetch_assoc();
        var_dump($rows);
     }else{
       echo "Tabelle hat keine Daten!";
     }
   }
    //Verbindung mit Datenquelle beenden
    $conn->close();
?>