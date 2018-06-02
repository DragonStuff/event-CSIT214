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

   $name = $_POST["full_name"];
   $email = $_POST["email"];
   $amount = 1;
   $event = $_POST["event_information_id"]; 

   $sql =<<<EOF
      INSERT INTO customer (full_name, email)
      VALUES ("$name", "$email");
EOF;
   $ret2 = $db->exec($sql);

   if(!$ret2){
      echo $db->lastErrorMsg();
   }

   $sql2 =<<<EOF
      INSERT INTO `order` (order_no, client_id, amount, discount, event_information_id)
      VALUES ("A", (SELECT id FROM customer WHERE email = "$email"), "$amount", 0, "$event");
EOF;

   $ret = $db->exec($sql2);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "<meta http-equiv=\"refresh\" content=\"0; url=payment.html\" />";
   }
   $db->close();
?>
