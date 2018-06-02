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
   $num_rows = $ret->num_rows; 
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
         //id, name, Venue_id, event_name, event_date, event_price, event_contact, event_description
      echo "</br>ID = ". $row['id'] . "</br>";
      echo "Name = ". $row['name'] ."</br>";
   }
   echo "Operation done successfully</br>";
   echo "<table><tr><th>ID</th><th>Name</th></tr>";
   while($row = $ret->fetchArray(SQLITE3_ASSOC)) {
      echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td>"."</tr>";
   }
   echo "</table>";
   $db->close();
?>
