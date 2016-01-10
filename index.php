<!DOCTYPE html>
<html lang="en" ng-app="Poll">
<head>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Welcome to Politics! | 2016 Presidential Elections | Political Debate &amp; Polling</title>

    <link href="_/css/bootstrap.css" rel="stylesheet">
    <link href="_/css/mystyle.css" rel="stylesheet">

	<!-- animated menu icon -->
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <script src="_/js/menu_icon.js"></script>
</head>


  <body>  <!--  removed ng-controller="MainCtrl" -->
  	<div id="wrapper"  ng-controller="PollController">		<!-- wrapper -->
  		<?php include 'sidebar.php'; ?>						<!-- /sidebar -->
  		<?php include 'page_content.php'; ?> 				<!-- /page content -->
  	</div>													<!-- /wrapper -->


<!-- JS links -->
	<script src="_/js/bootstrap.js"></script>					<!-- bootstrap.js, angular.js, questions.js -->
	<script src="_/js/myscript.js"></script>					<!-- myscript.js -->

  </body>
</html>
