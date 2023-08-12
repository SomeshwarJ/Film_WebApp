<?php
  session_start();
  $mov_id=$_GET['mov_id'];
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
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
    .front-image img{
      width: 100%;
      height: 500px;
      object-position: 0% 0%;
      object-fit: cover;
    }
    .movie-info{
      margin: 0px 70px 0px 70px;
    }
    .movie-left{
      float: left;
      width: 70%;
    }
    .movie-name p{
      font-size: 50px;
    }
    .movie-name p1{
      font-size: 20px;
    }
    .movie-genre{
      font-size: 20px;
      margin-top: -20px;
    }
    .rating p{
      float: left;
    }
    .rating p2{
      font-size: 25px;
    }
    .rating p1{
      font-size: 23px;
    }
    .movie-right{
      float: right;
      width: 30%;
      margin-top: 20px;
      padding-left: 200px;
    }
    .runtime p p2{
      font-size: 20px;
      font-weight: bold;
    }
    .runtime p1{
      font-size: 20px;
    }
    .poster{
      width: 60%;
      float: left;
    }
    .poster img{
      float: left;
      margin-right: 30px;
      width: 300px;
      height: 428px;
    }
    .director p{
      font-size: 20px;
      font-weight: bold;
    }
    .dir-name{
      margin-top: -10px;
    }
    .cast-heading{
      margin-top: 13px;
    }
    .youtube{
      float: right;
      width: 40%;
    }
    .youtube-video iframe{
      margin-top: 30px;
      margin-left: 40px;
    }
    .button {
      background-color: #f04f01;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      width: 90%;
      margin-left: 40px;
    }
    .sample-images img{
      width: 350px;
      margin: 25px;
    }
    .movie-images p{
      font-size: 25px;
      font-weight: bold;
      margin-left: 25px;
    }
    .review p{
      font-size: 25px;
      font-weight: bold;
      margin-left: 25px;
    }
    .hidden-review p{
      font-size: 25px;
      font-weight: bold;
      text-align: center;
    }
    .review-box{
      border: none;
      padding: 10px;
    }
    .username p1{
      font-size: 22px;
      color: #f04f01;;
      font-weight: bold;
    }
    .username p3{
      font-size: 13px;
    }
    .review p2{
      margin-left: 50px;
      font-size: 17px;
      overflow-wrap: break-word;
    }
    .delete-button{
      border: 1px solid #f04f01;
      margin-left: 1100px;
      border-radius: 5px;
      background-color: #f04f01;
      font-size: 18px;
      color: white;
    }
    .review-button{
      border: 1px solid #f04f01;
      margin-left: 1040px;
      border-radius: 5px;
      background-color: #f04f01;
      font-size: 18px;
      color: white;
      padding: 8px;
    }
    .form-popup {
      margin-left: 350px;
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
      margin-top: -70px;
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

    .rate {
        float: left;
        height: 46px;
    }
    .rate:not(:checked) > input {
        position:absolute;
        top:-9999px;
    }
    .rate:not(:checked) > label {
        float:right;
        width:1em;
        margin-left: 5px;
        overflow:hidden;
        white-space:nowrap;
        cursor:pointer;
        font-size:35px;
        color:#ccc;
    }
    .rate:not(:checked) > label:before {
        content: '★  ';
    }
    .rate > input:checked ~ label {
        color: #ffc700;    
    }
    .rate:not(:checked) > label:hover,
    .rate:not(:checked) > label:hover ~ label {
        color: #deb217;  
    }
    .rate > input:checked + label:hover,
    .rate > input:checked + label:hover ~ label,
    .rate > input:checked ~ label:hover,
    .rate > input:checked ~ label:hover ~ label,
    .rate > label:hover ~ input:checked ~ label {
        color: #c59b08;
    }
    .footer-clean {
      padding:50px 0;
      background-color:#fff;
      color:#4b4c4d;
    }

    .footer-clean h3 {
      margin-top:0;
      margin-bottom:12px;
      font-weight:bold;
      font-size:16px;
    }

    .footer-clean ul {
      padding:0;
      list-style:none;
      line-height:1.6;
      font-size:14px;
      margin-bottom:0;
    }

    .footer-clean ul a {
      color:inherit;
      text-decoration:none;
      opacity:0.8;
    }

    a:hover{
      text-decoration: none;
    }

    .footer-clean ul a:hover {
      opacity:1;
    }

    .footer-clean .item.social {
      text-align:right;
    }

    @media (max-width:767px) {
      .footer-clean .item {
        text-align:center;
        padding-bottom:20px;
      }
    }

    @media (max-width: 768px) {
      .footer-clean .item.social {
        text-align:center;
      }
    }

    .footer-clean .item.social > a {
      font-size:24px;
      width:40px;
      height:40px;
      line-height:40px;
      display:inline-block;
      text-align:center;
      border-radius:50%;
      border:1px solid #ccc;
      margin-left:10px;
      margin-top:22px;
      color:inherit;
      opacity:0.75;
    }

    .footer-clean .item.social > a:hover {
      opacity:0.9;
    }

    @media (max-width:991px) {
      .footer-clean .item.social > a {
        margin-top:40px;
      }
    }

    @media (max-width:767px) {
      .footer-clean .item.social > a {
        margin-top:10px;
      }
    }

    .footer-clean .copyright {
      margin-top:14px;
      margin-bottom:0;
      font-size:13px;
      opacity:0.6;
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
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light">
    <a href="index.php" class="navbar-brand"><i class="fa fa-film" aria-hidden="true"></i> Movie<b>Info</b></a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
      <div class="navbar-nav">
        <a href="index.php" class="nav-item nav-link">Home</a>
        <div class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle">Genre</a>
				<div class="dropdown-menu">					
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
              $sql = pg_query($db, "SELECT DISTINCT genre FROM movie ORDER BY genre");
              while ($row = pg_fetch_array($sql)){
                ?>
                <a href="index.php?genre=<?php echo $row['genre']; ?>" class="dropdown-item"><?php echo $row['genre']; ?></a>
                <?php
              }
            }
            ?>
          </div>
        </div>     
        <a href="about.php" class="nav-item nav-link">About</a>
        <a href="contact.php" class="nav-item nav-link">Contact</a>
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
            if (isset($_SESSION['email'])){
              ?>
              <a href="logout.php" class="nav-item nav-link">Log out</a>
              <?php
            }
            if (!isset($_SESSION['email'])){
              ?>
              <a href="login.php" class="nav-item nav-link">Log In</a>
              <?php
            }
          }
        ?>
      </div>
      <form class="navbar-form form-inline ml-auto" method="post" action="index.php">
        <div class="input-group search-box">
          <input type="text" class="form-control" placeholder="Search....." name="search">
          <div class="input-group-append">
            <button type="submit" class="btn btn-danger" name="submit" value="submit"><span>Search</span></button>
          </div>
        </div>
      </form>
      <div class="navbar-nav">
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
            if (isset($_SESSION['email'])){
              $email = $_SESSION['email'];
              $sql = pg_query($db, "SELECT * FROM login WHERE email='$email'");
              $row = pg_fetch_array($sql);
              if ($row['email'] == 'admin@gmail.com'){
                ?>
                <a href="dashboard.php" class="avatar">&#160;&#160;&#160;<img src="./profile/<?php echo $row['profile']; ?>"><span class="tooltiptext"><?php echo $row['username']; ?></span></a>
                <?php
              }
              else{
                ?>
                <a href="account.php" class="avatar">&#160;&#160;&#160;<img src="./profile/<?php echo $row['profile']; ?>"><span class="tooltiptext"><?php echo $row['username']; ?></span></a>
                <?php
              }
              ?>
              <?php
            }
          }
        ?>
      </div>
    </div>
  </nav>
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
    $str = $_GET['mov_id'];
    $sql = pg_query($db, "SELECT * FROM movie WHERE mov_id='$str'");
    $row = pg_fetch_array($sql);
    ?>
    <div class="front-image">
      <img src="<?php echo $row['cover_pic']; ?>">
    </div>
    <div class="movie-info">
      <div class="movie-left">
        <div class="movie-name">
          <p><?php echo $row['mov_name'];?>                     <p1>(<?php echo $row['lang'];?>)</p1></p>
        </div>
        <div class="movie-genre">
          <p><?php echo $row['genre'];?></p>
        </div>
        <div class="rating">
          <p>
            <p2>&#11088;</p2>
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
              $str = $_GET['mov_id'];
              $sql1 = pg_query($db, "SELECT count(*) as row_count,AVG(stars) AS avg, COUNT(mov_id) FROM rating WHERE mov_id='$str'");
              $row1 = pg_fetch_array($sql1);
              $avg = $row1['avg'];
              $count = $row1['row_count'];
              if($count!=0){
                ?>
                <p1><?php echo number_format("$avg",1).""; ?> / 10 </p1>   from <p1><?php echo $row1['count']; ?></p1> Ratings
                <?php
              }
              else{
                ?>
                <p1>No Reviews yet!!!</p1>
                <?php
              }
            }
            ?>
          </p>
        </div>
      </div>
      <div class="movie-right">
        <div class="runtime">
          <p><p2>RUNNING TIME : </p2><p1><?php echo $row['runtime']; ?> mins</p1></p>
        </div>
        <div class="runtime">
          <p><p2>RELEASE DATE : </p2><p1><?php echo $row['mov_date']; ?></p1></p>
        </div>
      </div>
      <br><br><br><br><br><br><br><br><hr>
      <div class="poster">
        <img src="<?php echo $row['poster']; ?>">
        <div class="director">
          <p>DIRECTOR </p>
          <p1>
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
              $str = $_GET['mov_id'];
              $sql = pg_query($db, "SELECT dir_name FROM movie NATURAL JOIN direction NATURAL JOIN director WHERE mov_id='$str'");
              $row = pg_fetch_array($sql);
            }
            ?>
            <div class="dir-name">
              <?php echo $row['dir_name']; ?>
            </div>
          </p1>
          <div class="cast-heading">
            <p>CAST</p>
            <p1>
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
                $str = $_GET['mov_id'];
                $sql = pg_query($db, "SELECT act_name FROM movie NATURAL JOIN movie_cast NATURAL JOIN actor WHERE mov_id='$str'");
                while ($row = pg_fetch_array($sql)){
                  ?>
                  <div class="act-name">
                    <p1><?php echo $row['act_name']; ?></p1>
                  </div>
                  <?php
                }
              }
              ?>
            </p1>
          </div>
          <div class="cast-heading">
            <p>PLOT</p><p1>
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
                $str = $_GET['mov_id'];
                $sql = pg_query($db, "SELECT des FROM movie WHERE mov_id='$str'");
                $row = pg_fetch_array($sql);
                ?>
                <div class="act-name">
                  <p1><?php echo $row['des']; ?></p1>
                </div>
                <?php
              }
              ?>
            </p1>
          </div>
        </div>
      </div>
      <div class="youtube">
        <button class="button">Watch on Amazon Prime</button>
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
          $str = $_GET['mov_id'];
          $sql = pg_query($db, "SELECT youtube FROM movie WHERE mov_id='$str'");
          $row = pg_fetch_array($sql);
          ?>
          <div class="youtube-video">
            <iframe width="450" height="350" src="<?php echo $row['youtube']; ?>"></iframe>
          </div>
          <?php
        }
        ?>
      </div>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><hr>
      <div class="movie-images">
        <p>IMAGES</p>
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
          $str = $_GET['mov_id'];
          $sql = pg_query($db, "SELECT * FROM movie WHERE mov_id='$str'");
          $row = pg_fetch_array($sql);
          ?>
          <div class="sample-images">
            <img src="<?php echo $row['image1']; ?>">
            <img src="<?php echo $row['image2']; ?>">
            <img src="<?php echo $row['image3']; ?>">
          </div>
          <?php
        }
        ?>
      </div>
      <hr>
      <div class="review">
        <p>REVIEWS</p>
        <form method="post" class="form-container1">
          <button type="submit" class="btn" name="write" onclick="hiddenform(event)">Write a review</button>
        </form><br>
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
          $str = $_GET['mov_id'];
          $sql_rc = pg_query($db, "SELECT count(*) as rc FROM rating WHERE mov_id='$str'");
          $row_c = pg_fetch_array($sql_rc);
          if($row_c['rc'] > 0){
            $sql = pg_query($db, "SELECT login.username as username, rating.review as review, CAST(rating.time AS date) as time, rating.email as email FROM login INNER JOIN rating ON rating.email=login.email 
              WHERE rating.mov_id='$str'");
            while ($row = pg_fetch_array($sql)){
            ?>
            <div class="review-box">
              <div class="username">
                <p><p1><?php echo $row['username']; ?></p1> &nbsp;&nbsp;&nbsp;&nbsp;   <p3><?php echo $row['time']; ?></p3></p>
              </div>
              <div class="review">
                <p2><?php echo $row['review']; ?></p2>
              </div>
            </div>
            <?php
            if (isset($_SESSION['email'])){
              if ($row['email']==$_SESSION['email']){
                ?>
                <form method="post">
                  <input type="submit" name="delete" class="delete-button" value="Delete">
                </form>
                <?php
              }
            }
            ?>
            <hr>
            <?php
            }
          }
          else{
            ?>
            <div class="review">
              <p2>There are no reviews for this title yet.<br><br>
                <p2>Be the first to leave one!</p2></p2>
            </div><hr>
            <?php
          }
        }
        if (isset($_POST['delete'])){
          $str = $_GET['mov_id'];
          $email = $_SESSION['email'];
          $sql1 = pg_query($db, "DELETE FROM rating WHERE email='$email' AND mov_id='$str'");
          if ($sql1){
            echo "<script>location.href='movie.php?mov_id={$str}';</script>";
          }
        }
        ?>
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
      <div class="form-popup"id="hiddenform" style="display: none;">
        <form method="post" class="form-container" >
          <div class="hidden-review">
            <p>WRITE YOUR REVIEW</p>
          </div>
          <p>Score: </p>
          <div class="rate">
            <input type="radio" id="star10" name="rate" value="10" />
            <label for="star10" title="text">10 stars</label>
            <input type="radio" id="star9" name="rate" value="9" />
            <label for="star9" title="text">9 stars</label>
            <input type="radio" id="star8" name="rate" value="8" />
            <label for="star8" title="text">8 stars</label>
            <input type="radio" id="star7" name="rate" value="7" />
            <label for="star7" title="text">7 stars</label>
            <input type="radio" id="star6" name="rate" value="6" />
            <label for="star6" title="text">6 star</label>
            <input type="radio" id="star5" name="rate" value="5" />
            <label for="star5" title="text">5 stars</label>
            <input type="radio" id="star4" name="rate" value="4" />
            <label for="star4" title="text">4 stars</label>
            <input type="radio" id="star3" name="rate" value="3" />
            <label for="star3" title="text">3 stars</label>
            <input type="radio" id="star2" name="rate" value="2" />
            <label for="star2" title="text">2 stars</label>
            <input type="radio" id="star1" name="rate" value="1" />
            <label for="star1" title="text">1 star</label>
          </div><br><br><br>
          <p>Review: </p>
          <textarea name="review" class="review-written" required></textarea>
          <button type="submit" class="btn1" name="close" onclick="closeform(event)">Close</button>
          <input type="submit" class="btn" value="Submit" name="submit" onClick="document.location.reload(true)">
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
          if (isset($_SESSION['email'])){
            if (isset($_POST['submit'])){
              $email =$_SESSION['email'];
              $str = $_GET['mov_id'];
              $rate = $_POST['rate'];
              $review = $_POST['review'];
              $sql = pg_query($db, "SELECT email, mov_id FROM rating WHERE email='$email' AND mov_id='$str'");
              $num = pg_num_rows($sql);
              if ($num==1){
                echo '<script>window.alert("You have already review this movie");</script>';
              }
              else{
                $email =$_SESSION['email'];
                $str = $_GET['mov_id'];
                $rate = $_POST['rate'];
                $review = $_POST['review'];
                $sql = pg_query($db, "INSERT INTO rating VALUES ('$email', '$str', '$rate', '$review', CURRENT_TIMESTAMP)");
              }
            }
          }
          if (!isset($_SESSION['email'])){
            if (isset($_POST['submit'])){
              echo '<script>window.alert("To review this movie, first login to our website");</script>';
              echo "<script>location.href='login.php'</script>";
            }
          }
        }
      ?>
    </div>
    <?php
  }
  ?>
  <div class="footer-clean">
    <footer>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-sm-4 col-md-3 item">
            <h3>About</h3>
            <ul>
              <li>movieInfo, the world's most popular and authoritative source for movie, TV and celebrity content.</li>
            </ul>
          </div>
          <div class="col-sm-4 col-md-3 item">
            <h3>Genre</h3>
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
              $sql = pg_query($db, "SELECT DISTINCT genre FROM movie ORDER BY genre");
              while ($row = pg_fetch_array($sql)){
                ?>
                <ul><li><a href="index.php?genre=<?php echo $row['genre']; ?>"><?php echo $row['genre']; ?></a></li></ul>
                <?php
              }
            }
            ?>
          </div>
          <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a>
            <p class="copyright">movieInfo © 2021</p>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>