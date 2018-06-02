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
                        <li role="presentation">
</li>
                        <li role="presentation">
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </nav>
                <h3 class="text-muted">eM - Venues</h3>
            </div>
            <div class="jumbotron">
                <h1>Venues</h1>
                <p class="lead">Here are all of the registered venues on your Event Manager.</p>
                <a href="create_venue_custom_go.html"><button type="button" class="btn btn-success">Add</button></a>
            </div>
            <div class="row marketing">
                <table class="table"> 
                    <thead> 
                        <tr> 
                            <th>ID#</th> 
                            <th>Venue Name</th>                                                           
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
   }

   $sql =<<<EOF
      SELECT * FROM Venue;
EOF;

   $ret = $db->query($sql);  
   //echo "<table><tr><th>ID</th><th>Name</th></tr>";
   while($row = $ret->fetchArray(SQLITE3_ASSOC)) {
      echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td>"."</tr>";
   }
   echo "</table>";
   $db->close();
?>
                    </tbody>
                </table>
            </div>
            <footer class="footer">
                <p>© Alexander Nicholson as part of CSIT214 Group Assignment<br></p>
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
