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
      INSERT INTO Venue (id, name)
      VALUES (1, "unibar");

      INSERT INTO event_information (name, Venue_id, event_name, event_date, event_price, event_contact, event_description)
      VALUES ('The Beatles come to town', 1, 'The Beatles come to town', "12/11/2017", 20.24, "0481793681", "Testing." );

      INSERT INTO event_information (name, Venue_id, event_name, event_date, event_price, event_contact, event_description)
      VALUES ('Two Door Cinema Club', 1, 'Playing their hit song "Lavender", live at the Unibar!', "03/01/2018", 84.10, "0481793681", "Two Door Cinema Club are an Irish indie rock band from Bangor and Donaghadee in County Down, Northern Ireland. The band formed in 2007 and is composed of three members: Alex Trimble, Sam Halliday, and Kevin Baird." );

EOF;

   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "Records created successfully\n";
   }
   $db->close();
?>
