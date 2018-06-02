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
   $name_a = $_POST["nameb"];

   $sql =<<<EOF
      INSERT INTO Venue (name) VALUES ("$name_a");

EOF;

   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "<meta http-equiv=\"refresh\" content=\"0; url=display_nice_venues.php\" />Operation done successfully</br>";
   }
   $db->close();
?>
