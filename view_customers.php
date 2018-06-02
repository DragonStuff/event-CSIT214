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
      SELECT * FROM customer;
EOF;

   $ret = $db->query($sql);  

   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
         //id, name, Venue_id, event_name, event_date, event_price, event_contact, event_description
      echo "</br>ID = ". $row['id'] . "</br>";
      echo "Name = ". $row['full_name'] ."</br>";
      echo "Email = ". $row['email'] ."</br>";
   }
   echo "Operation done successfully</br>";
   echo "<table><tr><th>ID</th><th>Name</th></tr>";
   while($row = $ret->fetchArray(SQLITE3_ASSOC)) {
      echo "<tr><td>".$row["id"]."</td><td>".$row["full_name"]."</td>"."<td>".$row["email"]."</td>"."</tr>";
   }
   echo "</table>";
   $db->close();
?>
