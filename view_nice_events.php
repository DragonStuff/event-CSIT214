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
                            <a href="choose_needed.html">Dashboard</a>
                        </li>
                        <li role="presentation"></li>
                        <li role="presentation">
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </nav>
                <h3 class="text-muted">eM - Events</h3>
            </div>
            <div class="jumbotron">
                <h1>Events</h1>
                <p class="lead">Here are all of the registered events on your Event Manager.<br></p>
                <a href="create_event_custom_go_nice.html"><button type="button" class="btn btn-success">Add</button></a>
                <a href="cancel_event_go_nice.html"><button type="button" class="btn btn-danger">Remove</button></a>
            </div>
            <div class="row marketing">
                <div class="col-lg-6">
                    <form role="form">
                        <table class="table"> 
                            <thead> 
                                <tr> 
                                    <th>#</th> 
                                    <th>Name</th> 
                                    <th>Venue ID</th> 
                                    <th>Event Name</th> 
                                    <th>Event Date</th> 
                                    <th>Event Price</th> 
                                    <th>Event Contact</th> 
                                    <th>Event Description</th> 
                                </tr>                                 
                            </thead>                             
                            <tbody> 
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
/*   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
         //id, name, Venue_id, event_name, event_date, event_price, event_contact, event_description
      echo "</br>ID = ". $row['id'] . "</br>";
      echo "Name = ". $row['name'] ."</br>";
      echo "Venue ID = ". $row['Venue_id'] ."</br>";
      echo "Event Name =  ".$row['event_name'] ."</br>";
      echo "Date = ". $row['event_date'] ."</br>";
      echo "Price =  ".$row['event_price'] ."</br>";
      echo "Contact = ". $row['event_contact'] ."</br>";
      echo "Description =  ".$row['event_description'] ."</br>";
   }*/
   while($row = $ret->fetchArray(SQLITE3_ASSOC)) {
      echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td>"."<td>".$row["Venue_id"]."</td>"."<td>".$row["event_name"]."</td>"."<td>".$row["event_date"]."</td>"."<td>".$row["event_price"]."</td>"."<td>".$row["event_contact"]."</td>"."<td>".$row["event_description"]."</td>"."</tr>";
   }
   echo "</table>";
   $db->close();
?>
                                </tr>
                            </tbody>
                        </table>                         
                    </form>
                </div>
            </div>
            <footer class="footer">
                <p>© Alexander Nicholson as part of CSIT214 Group Assignment</p>
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
