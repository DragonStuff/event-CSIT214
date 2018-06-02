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
      SELECT * FROM `order`;
EOF;

   $ret = $db->query($sql);  
   echo "Operation done successfully</br>";
   echo "<table><tr><th>ID</th><th>Name</th></tr>";
   while($row = $ret->fetchArray(SQLITE3_ASSOC)) {
      echo "<tr><td>".$row["id"]."</td><td>".$row["client_id"]."</td>"."<td>".$row["event_information_id"]."</td>"."</tr>";
   }
   echo "</table>";
   $db->close();
?>
