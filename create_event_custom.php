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

   $name = $_POST["name"];
   $venue_id = $_POST["venue_id"];
   $event_name = $_POST["event_name"];
   $event_date = $_POST['event_date'];
   $event_price = $_POST["event_price"];
   $event_contact = $_POST["event_contact"];
   $event_description = $_POST["event_description"]; 

   $sql =<<<EOF
      INSERT INTO event_information (name, Venue_id, event_name, event_date, event_price, event_contact, event_description)
      VALUES ("$name", "$venue_id", "$event_name", "$event_date", "$event_price", "$event_contact", "$event_description");

EOF;

   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "Records created successfully\n";
   }
   $db->close();
?>
