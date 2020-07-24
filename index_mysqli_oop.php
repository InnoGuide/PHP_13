<?php

   //Datenquelle beschreiben
   $server="127.0.0.1";
   $user = "root";
   $psw = null;
   $dbName = "myDB";
   //verbinden mit Datenquelle ($server,$user, $psw,$dbName)
   $conn = new mysqli($server,$user, $psw,$dbName);
   //test Verbindung
   if ($conn->connect_error){
     echo $conn->connect_error;
   }else{
     //SQL-Statement 
     $sql="select * from User";
     // send SQL-Statemt(req.)/ empfangen(resive)Data
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