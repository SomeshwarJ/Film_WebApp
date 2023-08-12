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
    .form-popup {
      width: 100%;
      flex-wrap: nowrap;
      border: none;
      border-radius: 10px;
      display: none;
    }

    .form-container {
      border-radius: 10px;
      max-width: 100%;
      padding: 10px;
      background-color: white;
    }

    .form-container input[type='text']{
    	height: 50px;
    }

    .form-container input[type='date']{
    	height: 50px;
    }

    .form-container input[type='file']{
    	height: 50px;
    	padding: 12px 15px;
    	margin: 8px 0;
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
      margin-left: 300px;
      margin-top: -5px;
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
      margin-left: 250px;
      margin-top: 20px;
      margin-bottom: 20px;
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
    #img-upload{
	  width: 230px;
	  height: 350px;
      border-radius: 10px;
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
		        <i class="fa fa-dashboard" aria-hidden="true"></i> Dashboard
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
		      <h1>Movies</h1>
		      <br><br>
		      <form class="navbar-form form-inline ml-auto" method="post" style="float: left; width: 50%;">
		        <div class="input-group search-box">
		          <input type="text" class="form-control" placeholder="Search movie......" name="search">
		          <div class="input-group-append">
		            <button type="submit" class="btn btn-danger" name="submit" value="submit"><span>Search</span></button>
		          </div>
		        </div>
		      </form>
		      <form class="navbar-form form-inline ml-auto" method="post" style="float: right; width: 50%; padding-left: 350px">
		          <div class="input-group search-box">
		          <div class="input-group-append">
		            <button type="submit" class="btn btn-danger" onclick="hiddenform(event)"><span>Add Movies</span></button>
		          </div>
		        </div>
		      </form><br><br><br><br>

		      <div class="form-popup" id="hiddenform">
		        <form method="post" class="form-container" >
		          <div class="hidden-review">
		            <p>ADD MOVIES</p>
		          </div>
		          	<br>
		          	<div style="float: left; margin-left: 35px;">
		          		<p>Movie Title </p>
		          		<input type="text" name="mov_name" class="review-written" required style="width: 970px;margin-right: 30px;">
		          	</div>
		          	<div style="float: left; margin-left: 35px;">
		          		<p>Genre </p>
		          		<input type="text" name="genre" class="review-written" required style="width: 475px;">
		          	</div>
		          	<div style="float: left; margin-left: 20px;">
		          		<p>Language </p>
		          		<input type="text" name="lang" class="review-written" required style="width: 475px;">
		          	</div>
		          	<div style="float: left; margin-left: 35px;">
		          		<p>Runtime </p>
		          		<input type="text" name="runtime" class="review-written" required style="width: 475px;">
		          	</div>
		          	<div style="float: left; margin-left: 20px;">
		          		<p>Release Date </p>
		          		<input type="date" name="mov_date" class="review-written" value="dd-mm-yyyy" required style="width: 475px;">
		          	</div>
		          	<div style="margin-left: 35px; float: left;">
			          	<p>Plot </p>
			          		<textarea name="des" class="review-written" required 
			          		style="height: 120px;width: 970px;"></textarea>
		          	</div>
		          	<div style="float: left; margin-left: 30px;">
		          		<p>Poster </p>
		          		<input type="text" name="poster" class="review-written" required style="width: 475px;">
		          	</div>
		          	<div style="float: left; margin-left: 20px;">
		          		<p>Backdrop </p>
		          		<input type="text" name="cover_pic" class="review-written" required style="width: 475px;">
		          	</div>
		          	<div style="float: left; margin-left: 30px;">
		          		<p>Image 1 </p>
		          		<input type="text" name="image1" class="review-written" required style="width: 310px;">
		          	</div>
		          	<div style="float: left; margin-left: 20px;">
		          		<p>Image 2 </p>
		          		<input type="text" name="image2" class="review-written" required style="width: 310px;">
		          	</div>
		          	<div style="float: left; margin-left: 20px;">
		          		<p>Image 3 </p>
		          		<input type="text" name="image3" class="review-written" required style="width: 310px;">
		          	</div>
		          	<div style="float: left; margin-left: 35px;">
		          		<p>Youtube Video Link </p>
		          		<input type="text" name="youtube" class="review-written" required style="width: 475px;">
		          	</div>
		          	<div style="width: 475px; margin-left: 20px; float: left;">
			          	<p>Director </p>
			          	<input type="text" name="dir_name" list="director" class="review-written" required>
			          	<datalist id="director" class="review-written">
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
				            	$sql = pg_query($db, "SELECT * from director");
			    				while($row = pg_fetch_array($sql)){
			    					?>
			    					<option value="<?php echo $row['dir_name']; ?>"></option>
			    					<?php
			    				}
				            }
				            ?>
			          	</datalist>
				    </div>
				    <div style="width: 475px; margin-left: 35px; float: left;">
			          	<p>Cast 1</p>
			          	<input type="text" name="cast1" list="actor" class="review-written" required>
			          	<datalist id="actor" class="review-written">
			          		<?php
				            if ($db){
				            	$sql1 = pg_query($db, "SELECT * from actor");
			    				while($row1 = pg_fetch_array($sql1)){
			    					?>
			    					<option value="<?php echo $row1['act_name']; ?>"></option>
			    					<?php
			    				}
				            }
				            ?>
			          	</datalist>
				    </div>
				    <div style="width: 475px; margin-left: 20px; float: left;">
				        <p>Cast 2</p>
				        <input type="text" name="cast2" list="actor" class="review-written" required>
			          	<datalist id="actor" class="review-written">
			          		<?php
				            if ($db){
				            	$sql2 = pg_query($db, "SELECT * from actor");
			    				while($row2 = pg_fetch_array($sql)){
			    					?>
			    					<option value="<?php echo $row2['act_name']; ?>"></option>
			    					<?php
			    				}
				            }
				            ?>
			          	</datalist>
				    </div>
		          	<button type="submit" class="btn1" name="close" onclick="closeform(event)">Close</button>
		         <input type="submit" class="btn" value="Add" name="add" onClick="document.location.reload(true)">
		        </form><br><br>
		      </div>

		      <?php
		      if (isset($_POST['add'])){
		      	$mov_name = $_POST['mov_name'];
		      	$genre = $_POST['genre'];
		      	$lang = $_POST['lang'];
		      	$runtime = $_POST['runtime'];
		      	$mov_date = $_POST['mov_date'];
		      	$des = $_POST['des'];
		      	$poster = $_POST['poster'];
		      	$cover_pic = $_POST['cover_pic'];
		      	$image1 = $_POST['image1'];
		      	$image2 = $_POST['image2'];
		      	$image3 = $_POST['image3'];
		      	$youtube = $_POST['youtube'];
		      	$dir_name = $_POST['dir_name'];
		      	$cast1 = $_POST['cast1'];
		      	$cast2 = $_POST['cast2'];
				$sql = pg_query($db, "INSERT INTO movie VALUES (default, '$mov_name', '$genre', '$mov_date', '$des', '$runtime', '$lang', '$cover_pic', '$poster', '$youtube', '$image1', '$image2', '$image3')");
				$sql1 = pg_query($db, "INSERT INTO direction VALUES ((SELECT mov_id FROM movie WHERE mov_name='$mov_name'), (SELECT dir_id FROM director WHERE dir_name='$dir_name'))");
				$sql2 = pg_query($db, "INSERT INTO movie_cast VALUES ((SELECT act_id FROM actor WHERE act_name='$cast1'),(SELECT mov_id FROM movie WHERE mov_name='$mov_name'))");
				$sql3 = pg_query($db, "INSERT INTO movie_cast VALUES ((SELECT act_id FROM actor WHERE act_name='$cast2'),(SELECT mov_id FROM movie WHERE mov_name='$mov_name'))");
				if ($sql AND $sql1 AND $sql2 AND $sql3){
					echo '<script>window.alert("Movie Inserted Successfully!!!");</script>';
				}
		      }
		      ?>
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
            	if (isset($_POST['submit'])){
			    	if (isset($_POST['search'])){
			    		$name = $_POST['search'];
			    		$sql = pg_query($db, "SELECT * from movie WHERE mov_name ilike '%$name%'");
			    		$row = pg_fetch_array($sql);
			    		if ($row == NULL){
			    			echo "<div style='font-weight: bold; text-align: center; font-size: 25px;'>No Movies found!!!</div>";
			    		}
			    		else{
			    			$sql1 = pg_query($db, "SELECT * from movie WHERE mov_name ilike '%$name%'");
					        $i = 1;
					        ?>
					        <table class="table table-striped">
							  <thead>
							    <tr>
							      <th scope="col">S.No</th>
							      <th scope="col">Poster</th>
							      <th scope="col">Movie name</th>
							      <th scope="col">Release date</th>
							      <th scope="col">Genre</th>
							      <th scope="col">Language</th>
							      <th scope="col">Action</th>
							    </tr>
							  </thead>
							  <tbody>
							  	<?php
						   		while($row1 = pg_fetch_array($sql1)){
						   			?>
						   			<tr>
						   			<th scope="row"><?php echo $i; ?></th>
						   			<td class="avatar"><img src="<?php echo $row1['poster']; ?>"></td>
						   			<td><?php echo $row1['mov_name']; ?></td>
						   			<td><?php echo $row1['mov_date']; ?></td>
						   			<td><?php echo $row1['genre']; ?></td>
						   			<td><?php echo $row1['lang']; ?></td>
						   			<td>
						   				<form class="navbar-form form-inline ml-auto" method="post">
									        <div class="input-group search-box">
									          <div class="input-group-append">
									            <button type="submit" class="btn btn-danger" name="delete" value="delete" onClick="document.location.reload(true)"><span>Delete</span></button>
									          </div>
									        </div>
									        <input type="text" style="visibility: hidden; width: 10px;" name="movie" value="<?php echo $row['mov_id']; ?>">
									      </form>
						   			</td>
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
		    	}
			    else{
			    	$sql = pg_query($db, "SELECT * from movie");
			        $i = 1;
			        ?>
			        <table class="table table-striped">
					  <thead>
					    <tr>
					      <th scope="col">S.No</th>
					      <th scope="col">Poster</th>
					      <th scope="col">Movie name</th>
					      <th scope="col">Release date</th>
					      <th scope="col">Genre</th>
					      <th scope="col">Language</th>
					      <th scope="col">Action</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php
				   		while($row = pg_fetch_array($sql)){
				   			?>
				   			<tr>
				   			<th scope="row"><?php echo $i; ?></th>
							<td class="avatar"><img src="<?php echo $row['poster']; ?>"></td>
				   			<td><?php echo $row['mov_name']; ?></td>
				   			<td><?php echo $row['mov_date']; ?></td>
				   			<td><?php echo $row['genre']; ?></td>
				   			<td><?php echo $row['lang']; ?></td>
				   			<td>
				   				<form class="navbar-form form-inline ml-auto" method="post">
							        <div class="input-group search-box">
							          <div class="input-group-append">
							            <button type="submit" class="btn btn-danger" name="delete" value="delete" onClick="document.location.reload(true)"><span>Delete</span></button>
							          </div>
							        </div>
							        <input type="text" style="visibility: hidden; width: 10px;" name="movie" value="<?php echo $row['mov_id']; ?>">
							      </form>
				   			</td>
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
				if (isset($_POST['delete'])){
					if (isset($_POST['movie'])){
						$movie = $_POST['movie'];
						pg_query("BEGIN");
						$sql = pg_query($db, "DELETE FROM rating WHERE mov_id='$movie'");
						$sql1 = pg_query($db, "DELETE FROM movie_cast WHERE mov_id='$movie'");
						$sql2 = pg_query($db, "DELETE FROM direction WHERE mov_id='$movie'");
						$sql3 = pg_query($db, "DELETE FROM movie WHERE mov_id='$movie'");
						if ($sql AND $sql1 AND $sql2 AND $sql3){
							echo '<script>window.alert("Movie Deleted from the website!!!");</script>';
							pg_query("COMMIT");
						}
					}
				}
			}
					?>
		    </div>
		  </div>
		</div>
    </body>
</head>