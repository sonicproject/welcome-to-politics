<!DOCTYPE html>
<html lang="en" ng-app="questions">
<head>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Welcome to Politics!</title>

    <link href="_/css/bootstrap.css" rel="stylesheet">
    <link href="_/css/mystyle.css" rel="stylesheet">

	<!-- animated menu icon -->
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <script src="_/js/menu_icon.js"></script>
</head>


  <body ng-controller="MainCtrl">
  	<div id="wrapper">						<!-- wrapper -->
  		<?php include 'sidebar.php'; ?>			<!-- Sidebar -->
  		<?php include 'page_content.php'; ?> 	<!-- Page Content -->
  	</div>									<!-- /#wrapper -->


<!-- JS links -->
	<script src="_/js/bootstrap.js"></script>					<!-- bootstrap.js, angular.js, questions.js -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	<script type="text/javascript" src="app/questions.js"></script>
    <script src="_/js/myscript.js"></script>					<!-- myscript.js -->
  </body>
</html>
