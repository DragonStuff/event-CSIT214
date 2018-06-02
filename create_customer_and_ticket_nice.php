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
</li>
                        <li role="presentation">
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </nav>
                <h3 class="text-muted">eM - Book now!</h3>
            </div>
            <div class="row marketing">
                <h2>Your Order</h2>
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

   $name_a = $_GET["eventid"];

   $sql =<<<EOF
      SELECT id, event_name, event_price FROM event_information WHERE id="$name_a";
EOF;

   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
         //id, name, Venue_id, event_name, event_date, event_price, event_contact, event_description
      echo "<p style=\"margin-left: 40px\"><b>". $row['event_name'] . "</b></br>";
      echo "<p style=\"margin-left: 40px\"><b>Total Price ". $row['event_price'] ."</b></br>";
   }
   $db->close();
?>

                <div class="col-lg-6">
                    <form action="create_customer_custom.php" method="post" role="form"> 
                        <div class="form-group"> 
                            <label class="control-label" for="full_name">Full Name</label>                             
                            <input type="text" name="full_name" class="form-control" id="full_name" placeholder="Enter your name"> 
                        </div>                         
                        <div class="form-group"> 
                            <label class="control-label" for="email">Email</label>                             
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email"> 
                        </div>
                        <div class="form-group"> 
</div>
                        <div class="form-group"> 
</div>
                        <div class="form-group"> 
                            <?php 
                                echo "<input type=\"hidden\" name=\"event_information_id\" value=\"" .$row['id'] ."\">"; 
                            ?>
                            <label class="control-label" for="formInput746">Discount Code</label>
                            <input type="text" name="discount" class="form-control" id="discount" placeholder="Enter a code if you have one">
                        </div>                         
                        <button type="submit" class="btn">Proceed to Payment with CC</button>                         
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
