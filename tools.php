<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./favicon.ico">

    <title>Tools</title>

    <!-- Bootstrap core CSS -->
    <link href="./bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
	<?php
    include_once("header.php");
	?>

	
<div class="container">
  
  <div class="text-center">
    <h1>Station data</h1>
    <br>
    <table class="table table-bordered">
<thead><tr><th>Physical</th><th></th><th>Biological</th><th></th></tr></thead>
<tbody><tr><td>PID</td><td>..</td><td>BID</td><td>..</td></tr>
       <tr><td>Pstationname</td><td>..</td><td>Bstationname</td><td>..</td></tr>
       <tr><td>Pdepth</td><td>..</td><td>Bstratummin</td><td>..</td></tr>
       <tr><td>Ptemperature</td><td>..</td><td>Bstratummax</td><td>..</td></tr>
       <tr><td>Psalinity</td><td>..</td><td>B_x</td><td>..</td></tr>
       <tr><td>Poxygen</td><td>..</td><td>B_y</td><td>..</td></tr>
       <tr><td>Pfluorescence</td><td>..</td><td>Blarvastage</td><td>..</td></tr>
       <tr><td></td><td></td><td>Bspecies</td><td>..</td></tr>
       <tr><td></td><td></td><td>Babundance</td><td>..</td></tr></tbody>
</table>
  </div>
  
</div><!-- /.container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>