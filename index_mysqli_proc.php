<?php

   //Datenquelle beschreiben
   $server="127.0.0.1";
   $user = "root";
   $psw = null;
   $dbName = "myDB";
   //verbinden mit Datenquelle ($server,$user, $psw,$dbName)
   $conn = mysqli_connect($server,$user, $psw,$dbName);
   //test Verbindung
   if (!$conn){
     echo "Fail: ", mysqli_connect_error();
   }else{
      //SQL-Statement 
      $sql="select * from User";
      // send SQL-Statemt(req.)/ empfangen(resive)Data
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