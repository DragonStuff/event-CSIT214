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
   
   $del_id = $_POST["name"];

   $sql =<<<EOF
      DELETE FROM event_information WHERE id = $del_id;
EOF;

   $ret = $db->query($sql);   
   echo "<meta http-equiv=\"refresh\" content=\"0; url=view_nice_events.php\" />Operation done successfully</br>";
   $db->close();
?>
