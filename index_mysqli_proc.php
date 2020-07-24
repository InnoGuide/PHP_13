<?php

   //Datenquelle beschreiben
   $server="127.0.0.1"; //deine IP
   $user = "root"; //dein Username
   $psw = null; //dein Password
   $dbName = "myDB"; //deine Datenbank
   //verbinden mit Datenquelle ($server,$user, $psw,$dbName)
   $conn = mysqli_connect($server,$user, $psw,$dbName);
   //test Verbindung
   if (!$conn){
     echo "Fail: ", mysqli_connect_error();
   }else{
      //SQL-Statement 
      $sql="select * from User";
      // send SQL-Statemt(req.)/ empfangen(receive)Data
      $result = mysqli_query($conn, $sql );
      //test auf Daten
      if(mysqli_num_rows($result)){
         //Daten verarbeiten
        echo "Daten:",mysqli_num_rows($result);
        while($rows=mysqli_fetch_assoc($result)){
          var_dump($rows);
        };
        
      }else{
        echo "Keine Daten in der Tabelle!";
      }
   }
   //Verbindung mit Datenquelle beenden
   mysqli_close($conn);
?>