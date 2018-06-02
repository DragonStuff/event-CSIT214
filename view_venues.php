<?php
   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('database.db');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }

   $sql =<<<EOF
      SELECT * FROM Venue;
EOF;

   $ret = $db->query($sql);   
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
      echo "</br>ID = ". $row['id'] . "</br>";
      echo "Name = ". $row['name'] ."</br>";
   }
   echo "Operation done successfully</br>";
   $db->close();
?>
