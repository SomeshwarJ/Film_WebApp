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
    <meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta name = "language" content = "EN" />
  	<meta name="description" content="Free Web tutorials">
  	<meta name="keywords" content="HTML,CSS,XML,JavaScript">
  	<meta name = "author" content = "Someshwar J" />
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway|Open+Sans">
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
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
  		width: 16.3%; 
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
    .avatar .tooltiptext {
      visibility: hidden;
      width: 120px;
      font-size: 18px;
      background-color: white;
      color: black;
      text-align: center;
      border-radius: 6px;
      padding: 5px 0;
      position: absolute;
      z-index: 1;
      top: 75px;
      right: 10px;
    }

    .avatar:hover .tooltiptext {
      visibility: visible;
    }
    .form-popup {
      margin-left: 270px;
      width: 550px;
      flex-wrap: nowrap;
      border: none;
      border-radius: 10px;
    }

    .form-container {
      border-radius: 10px;
      max-width: 550px;
      padding: 10px;
      background-color: white;
    }

    .form-container input[type='text']{
    	height: 50px;
    }

    .form-container select{
    	height: 50px;
    }

    .form-container1 .btn {
      margin-left: 25px;
      border: 1px solid #f04f01;
      border-radius: 5px;
      background-color: #f04f01;
      font-size: 20px;
      color: white;
      padding: 8px;
      cursor: pointer;
      opacity: 0.8;
    }

    .review-written{
      width: 100%;
      height: 150px;
      margin: 5px 0 22px 0;
      border: none;
      background: #f1f1f1;
    }

    .form-container .btn {
      margin-left: 440px;
      margin-top: -50px;
      border: 1px solid #f04f01;
      border-radius: 5px;
      background-color: #f04f01;
      font-size: 20px;
      color: white;
      padding: 8px;
      cursor: pointer;
      opacity: 0.8;
    }

    .form-container .btn1 {
      margin-top: 1px;
      text-align: center;
      width: 90px;
      border: 1px solid #f04f01;
      border-radius: 5px;
      background-color: #f04f01;
      font-size: 20px;
      color: white;
      padding: 8px;
      cursor: pointer;
      opacity: 0.8;
    }

    .form-container .btn1:hover, .open-button:hover {
      opacity: 1;
    }

    .form-container .btn:hover, .open-button:hover {
      opacity: 1;
    }

    .hidden-review p{
      font-size: 25px;
      font-weight: bold;
      text-align: center;
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

		<script>
	        function hiddenform(e){
	          e.preventDefault();
	          document.getElementById('hiddenform').style.display='block';
	        }
	        function closeform(e){
	          e.preventDefault();
	          document.getElementById('hiddenform').style.display='none';
	        }
	     </script>

		<div class="content-container">
		  <div class="container-fluid">
		    <div class="jumbotron">
		      <h1>Celebrities</h1>
		      <form class="navbar-form form-inline ml-auto" method="post" style="float: left; width: 50%;">
		        <div class="input-group search-box">
		          <input type="text" class="form-control" placeholder="Search....." name="search">
		          <div class="input-group-append">
		            <button type="submit" class="btn btn-danger" name="submit" value="submit"><span>Search</span></button>
		          </div>
		        </div>
		      </form>
		      <form class="navbar-form form-inline ml-auto" method="post" style="float: right; width: 50%; padding-left: 350px">
		          <div class="input-group search-box">
		          <div class="input-group-append">
		            <button type="submit" class="btn btn-danger" name="submit" onclick="hiddenform(event)" value="submit"><span>Add Celebrity</span></button>
		          </div>
		        </div>
		      </form>

		      <br><br><br><br>
		      <div class="form-popup"id="hiddenform" style="display: none;">
		        <form method="post" class="form-container" >
		          <div class="hidden-review">
		            <p>ADD CELEBRITY</p>
		          </div>
		          <p>Celebrity Name: </p>
		          <input type="text" name="cname" class="review-written" required>
		          <p>Known for: </p>
		          <select class="review-written" name="ctype">
		          	<option value="Actor">Actor</option>
		          	<option value="Director">Director</option>
		          </select>
		          <button type="submit" class="btn1" name="close" onclick="closeform(event)">Close</button>
		          <input type="submit" class="btn" value="Add" name="add" onClick="document.location.reload(true)">
		        </form><br><br>
		      </div>
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
            	if (isset($_POST['add'])){
            		 $cname = $_POST['cname'];
            		 $ctype = $_POST['ctype'];
            		 $sql = pg_query($db, "SELECT * FROM director WHERE dir_name='$cname'");
            		 $num = pg_num_rows($sql);
            		 $sql1 = pg_query($db, "SELECT * FROM actor WHERE act_name='$cname'");
            		 $num1 = pg_num_rows($sql1);
            		 if ($num == 0 || $num1 == 0){
            		 	if ($ctype == 'Director' && $num == 0){
	            		 	$sql1 = pg_query($db, "INSERT INTO director values (default, '$cname', '$ctype')");
		            		 if ($sql1){
		            		 	echo '<script>alert("New Celebrity added");</script>';
		            		 }
	            		 }
	            		 else if ($ctype == 'Actor' && $num1 == 0){
	            		 	$sql11 = pg_query($db, "INSERT INTO actor values (default, '$cname', '$ctype')");
		            		 if ($sql11){
		            		 	echo '<script>alert("New Celebrity added");</script>';
		            		 }
	            		 }
            		 }
            	}
            }
		    ?>
		    <?php
		    if (isset($_POST['search'])){
		    	if (isset($_POST['submit'])){
		    		$cname = $_POST['search'];
		    		$sql = pg_query($db, "SELECT * from actor WHERE act_name ilike '%$cname%' UNION SELECT * from director WHERE dir_name ilike '%$cname%'");
		    		$i = 1;
		        ?>
		        <table class="table table-striped">
				  <thead>
				    <tr>
				      <th scope="col">S.No</th>
				      <th scope="col">Name</th>
				      <th scope="col">Known for</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php
			   		while($row = pg_fetch_array($sql)){
			   			?>
			   			<tr>
			   			<th scope="row">
			   			<?php echo $i; ?></th>
			   			<td><?php echo $row[1]; ?></td>
			   			<td><?php echo $row[2]; ?></td>
			   			<?php
			   			$i++;
			   		}
				    ?>
					</tr>
					</tbody>
				  </tbody>
				</table>
		        <?php
		    	}
		    }
		    else{
		    $host        = "host = localhost";
		    $port        = "port = 5432";
		    $dbname      = "dbname = movies";
		    $credentials = "user = postgres password=1812";
		    $db = pg_connect( "$host $port $dbname $credentials"  );
		    if (!$db) {
		      echo "Error : Unable to open database\n";
		    } 
		    if ($db) {
		    	$sql = pg_query($db, "SELECT * from actor UNION SELECT * from director");
		        $i = 1;
		        ?>
		        <table class="table table-striped">
				  <thead>
				    <tr>
				      <th scope="col">S.No</th>
				      <th scope="col">Name</th>
				      <th scope="col">Known for</th>
				    </tr>
				  </thead>
				  <tbody>
		        <?php
		   		while($row = pg_fetch_array($sql)){
		   			?>
		   			<tr>
		   			<th scope="row">
		   			<?php echo $i; ?></th>
		   			<td><?php echo $row[1]; ?></td>
		   			<td><?php echo $row[2]; ?></td>
		   			<?php
		   			$i++;
		   		}
		    }
		    ?>
				</tr>
				</tbody>
			  </tbody>
			</table>
			<?php
		    }
		    ?>
		    </div>
		  </div>
		</div>
    </body>
</head>