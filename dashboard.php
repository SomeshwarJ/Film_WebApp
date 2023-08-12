<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway|Open+Sans">
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="stylesheet.css" type="text/css">
    <title>movie web</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    *{
      font-family: "Poppins" , sans-serif;
    }
    body{
      background: #eeeeee;
    }
    .navbar {
		position: fixed;
  		top: 0; 
  		width: 16.2%; 
		font-size: 14px;
		background: #fff;
		padding-left: 16px;
		padding-right: 16px;
		border-bottom: 1px solid #d6d6d6;
		box-shadow: 0 0 4px rgba(0,0,0,.1);		
	}
	.navbar .navbar-brand {
		color: #555;
		padding-left: 0;
		font-size: 20px;
		padding-right: 50px;
		font-family: 'Raleway', sans-serif;
		text-transform: uppercase;
	}
	.navbar .navbar-brand b {
		color: #f04f01;
	}
	.navbar .navbar-nav a {
		font-size: 96%;
		font-weight: bold;		
		text-transform: uppercase;
	}
	.navbar .navbar-nav a.active {
		color: #f04f01 !important;
		background: transparent !important;
	}
	.search-box input.form-control, .search-box .btn {
		font-size: 14px;
		border-radius: 2px !important;
	}
	.search-box .input-group-append {
		padding-left: 4px;		
	}
	.search-box input.form-control:focus {
		border-color: #f04f01;
		box-shadow: 0 0 8px rgba(240,79,1,0.2);
	}
	.search-box .btn-danger, .search-box .btn-danger:active {
		font-weight: bold;
		background: #f04f01 !important;
		border-color: #f04f01;
		text-transform: uppercase;
		min-width: 90px;
	}
	.search-box .btn-danger:hover, .search-box .btn-danger:focus {
		background: #eb4e01 !important;
		box-shadow: 0 0 8px rgba(240,79,1,0.2);
	}
	.search-box .btn span {
		transform: scale(0.9);
		display: inline-block;
	}
	.navbar .nav-item.open > a {
		background: none !important;
	}
	.navbar .dropdown-menu {
		border-radius: 1px;
		border-color: #e5e5e5;
		box-shadow: 0 2px 8px rgba(0,0,0,.05);
	}
	.navbar .dropdown-menu a, .navbar .dropdown-menu a:active {
		color: #777;
		padding: 8px 20px;
		font-size: 13px;
	  background: #fff;
	}
	.navbar .dropdown-menu a:hover, .navbar .dropdown-menu a:focus {
		color: #333;
	  background: #f8f9fa;
	}
	@media (min-width: 992px){
		.form-inline .input-group .form-control {
			width: 225px;			
		}
	}
	@media (max-width: 992px){
		.form-inline {
			display: block;
		}
	}
    .sidebar-container {
	  position: fixed;
	  width: 220px;
	  height: 100%;
	  left: 0;
	  margin-top: 57px;
	  overflow-x: hidden;
	  overflow-y: auto;
	  background: #d6d6d6;
	  color: black;
	}

	.content-container {
	  padding-top: 20px;
	}

	.sidebar-logo {
	  padding: 10px 15px 10px 30px;
	  font-size: 20px;
	  background-color: #f04f01;
	}

	.sidebar-navigation {
	  padding: 0;
	  margin: 0;
	  list-style-type: none;
	  position: relative;
	}

	.sidebar-navigation li {
	  background-color: transparent;
	  position: relative;
	  display: inline-block;
	  width: 100%;
	  line-height: 20px;
	}

	.sidebar-navigation li a {
	  padding: 10px 15px 10px 30px;
	  display: block;
	  color: black;
	  text-decoration: none;
	}

	.sidebar-navigation li .fa {
	  margin-right: 10px;
	}

	.sidebar-navigation li a:active,
	.sidebar-navigation li a:hover,
	.sidebar-navigation li a:focus {
	  text-decoration: none;
	  outline: none;
	}

	.sidebar-navigation li::before {
	  background-color: #f04f01;
	  position: absolute;
	  content: '';
	  height: 100%;
	  left: 0;
	  top: 0;
	  -webkit-transition: width 0.2s ease-in;
	  transition: width 0.2s ease-in;
	  width: 3px;
	  z-index: -1;
	}

	.sidebar-navigation li:hover::before {
	  width: 100%;
	}

	.sidebar-navigation .header {
	  font-size: 12px;
	  text-transform: uppercase;
	  background-color: #d6d6d6;
	  padding: 10px 15px 10px 30px;
	}

	.sidebar-navigation .header::before {
	  background-color: transparent;
	}

	.content-container {
	  padding-left: 220px;
	}
	.avatar img{
      width: 50px;
      height: 50px;
      border-radius: 5px;
      position: relative;
      display: inline-block;
    }
    </style>
    <body>
    	<nav class="navbar navbar-expand-lg navbar-light">
    		<a href="index.php" class="navbar-brand"><i class="fa fa-film" aria-hidden="true"></i> Movie<b>Info</b></a>
    		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
      			<span class="navbar-toggler-icon"></span>
    		</button>
  		</nav>
    	<div class="sidebar-container">
		  <ul class="sidebar-navigation">
		    <li>
		      <a href="index.php">
		        <i class="fa fa-home" aria-hidden="true"></i> Homepage
		      </a>
		    </li>
		    <li>
		      <a href="dashboard.php">
		        <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
		      </a>
		    </li>
		    <li>
		      <a href="celebrities.php">
		        <i class="fa fa-users" aria-hidden="true"></i> Celebrities
		      </a>
		    </li>
		    <li>
		      <a href="movie_admin.php">
		        <i class="fa fa-film" aria-hidden="true"></i> Movies
		      </a>
		    </li>
		    <li>
		      <a href="user_access.php">
		        <i class="fa fa-user" aria-hidden="true"></i> Users
		      </a>
		    </li>
		    <li>
		      <a href="logout.php">
		        <i class="fa fa-sign-out" aria-hidden="true"></i> Log out
		      </a>
		    </li>
		  </ul>
		</div>

		<div class="content-container">
		  <div class="container-fluid">
		    <div class="jumbotron">
		      <h1>Dashboard</h1>
		     	<?php
			    $host        = "host = localhost";
	            $port        = "port = 5432";
	            $dbname      = "dbname = movies";
	            $credentials = "user = postgres password=1812";
	            $db = pg_connect( "$host $port $dbname $credentials"  );
	            if (!$db) {
	              echo "Error : Unable to open database\n";
	            }
	            if ($db){
	            	$sql1 = pg_query($db, "SELECT * FROM actor UNION SELECT * FROM director");
	            	$sql2 = pg_query($db, "SELECT * FROM movie");
	            	$sql3 = pg_query($db, "SELECT * FROM login");
	            	$sql4 = pg_query($db, "SELECT * FROM rating");
	            	$num1 = pg_num_rows($sql1);
	            	$num2 = pg_num_rows($sql2);
	            	$num3 = pg_num_rows($sql3);
	            	$num4 = pg_num_rows($sql4);
	            	?>
	            	<div style="width: 50%; float: left; padding-top: 50px; padding-left: 80px;">
	            		<i class="fa fa-user" aria-hidden="true" style="font-size: 140px; float: left;"></i>
	            		<p style="font-size: 40px; font-weight: bold; color: #f04f01; padding-left: 210px;">Users</p><br>
	            		<h3 style="font-size: 40px; padding-left: 250px; margin-top: -20px;"><?php echo $num3; ?></h3>
	            	</div>
	            	<div style="padding-top: 50px; padding-left: 640px;">
	            		<i class="fa fa-film" aria-hidden="true" style="font-size: 140px; float: left;"></i>
	            		<p style="font-size: 40px; font-weight: bold; color: #f04f01; padding-left: 200px;">Movies</p><br>
	            		<h3 style="font-size: 40px; padding-left: 260px; margin-top: -20px;"><?php echo $num2; ?></h3>
	            	</div>
	            	<div style="width: 50%; float: left; padding-top: 50px; padding-left: 60px;">
	            		<i class="fa fa-users" aria-hidden="true" style="font-size: 140px; float: left;"></i>
	            		<p style="font-size: 40px; font-weight: bold; color: #f04f01; padding-left: 170px;">Celebrities</p><br>
	            		<h3 style="font-size: 40px; padding-left: 270px; margin-top: -20px;"><?php echo $num1; ?></h3>
	            	</div>
	            	<div style="padding-top: 50px; padding-left: 650px;">
	            		<i class="fa fa-star" aria-hidden="true" style="font-size: 140px; float: left;"></i>
	            		<p style="font-size: 40px; font-weight: bold; color: #f04f01; padding-left: 190px;">Ratings</p><br>
	            		<h3 style="font-size: 40px; padding-left: 250px; margin-top: -20px;"><?php echo $num4; ?></h3>
	            	</div>
	            	<?php
	            }
	            ?>
		    </div>
		  </div>
		</div>
    </body>
</head>