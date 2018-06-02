<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Narrow Jumbotron Template for Bootstrap</title>
        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="jumbotron-narrow.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
    <body>
        <div class="container">
            <div class="header clearfix">
                <nav>
                    <ul class="nav nav-pills pull-right">
                        <li role="presentation" class="active">
                            <a href="#">Home</a>
                        </li>
                        <li role="presentation">
                            <a href="admin_login.html">Admin</a>
                        </li>
                        <li role="presentation">
                            <a href="#">Contact</a>
                        </li>
                        <br>
                        <li role="presentation">
                            <form action="/ticket_options.php">
                                Ticket ID: <input type="text" name="id">
                                <input type="submit" value="Submit">
                            </form>
                    </ul>
                </nav>
                <h3 class="text-muted">eM<small>Bringing events to you!</small></h3>
            </div>
            <div class="jumbotron">
                <h1>Current Events</h1>
                <p class="lead">View all of our upcoming events below and make your selection.</p>
            </div>
            <div class="row marketing">
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
   }

   $sql =<<<EOF
      SELECT * FROM event_information;
EOF;

   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
         //id, name, Venue_id, event_name, event_date, event_price, event_contact, event_description
      echo "<div class=\"col-lg-6\">";
      echo "<h4>Event:";
      echo $row['event_name'] . "</br>";
      echo "<small>" . $row['event_date'] ."</small></h4>";
      echo "<p>".$row['event_description'] ."</p>";
      echo "<p><i>$" . $row['event_price'] . " | ph. " . $row['event_contact'] . "</i></p>";
      echo "<form action=\"/create_customer_and_ticket_nice.php\">
            <input type=\"hidden\" name=\"eventid\" value=\"" .$row['id'] ."\">
            <input type=\"submit\" value=\"Book!\">
            </form>";
      echo "</div>";
   }
   $db->close();
?>
            </div>
            <footer class="footer">
                <p>© Alexander Nicholson as part of CSIT214 Assignment 2017</p>
            </footer>
        </div>         
        <!-- /container -->
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
