<?php
  session_start();
?>

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
    <script src="./vendor/jquery/jquery-3.2.1.min.js"></script>
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

      body {
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
    .container {
      padding: 2rem 0rem;
    }

    h4 {
      margin: 2rem 0rem 1rem;
    }

    td img{
        width: 120px;
        height: 180px;
    }
    .delete-button{
      border: 1px solid #f04f01;
      border-radius: 5px;
      background-color: #f04f01;
      font-size: 18px;
      color: white;
    }
    .stars{
        font-size: 40px;
        margin-left: -100px;
    }
    .checked{
        color: orange;
    }
    .mov_name{
        font-size: 27px;
        color: #f04f01;
    }
    .review{
        font-size: 17px;
        overflow-wrap: break-word;
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
    </div>
    </nav>
    <form method="post">
        <div class="container rounded bg-white mt-5 " style="width: 400px;">
            <h2 style="text-align: center; padding-top: 30px;">Profile</h2>
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
                if(isset($_SESSION['email'])){
                    $email = $_SESSION['email'];
                    $sql = pg_query($db, "SELECT * FROM login WHERE email = '$email'");
                    while ($row = pg_fetch_array($sql)) {
                        ?>
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5" style="margin-top: -70px;">
                            <img class="rounded-circle mt-5" width="150px" src="./profile/<?php echo $row['profile']; ?>"><br>
                            <span class="font-weight-bold" style="font-size: 23px;"><?php echo $row['username']; ?></span>
                            <span class="text-black-50"><?php echo $row['email']; ?></span>
                        </div>
                        <?php
                    }
                }
            }
            ?>
        </div>
    </form> 
            <div class="container rounded bg-white mt-4 ">
              <table class="table table-image">
            <?php
            if (!$db) {
                echo "Error : Unable to open database\n";
            }
            if ($db){
                if(isset($_SESSION['email'])){
                    $email = $_SESSION['email'];
                    $sql = pg_query($db, "SELECT * FROM movie NATURAL JOIN rating WHERE email = '$email'");
                      while ($row = pg_fetch_assoc($sql)) {
                        ?>
                            <tr>
                            <td class="w-25">
                                <img src="<?php echo $row['poster']; ?>" alt="Sheep">
                            </td>
                            <td>
                            <div class="stars">
                            <i class="fa fa-star checked"></i><?php echo $row['stars']; ?>
                            </div>
                            </td>
                            <td>
                                <div class="mov_name">
                                    <?php echo $row['mov_name']; ?>
                                </div>
                                <div class="review" style="width: 560px;">
                                    <?php echo $row['review']; ?>
                                </div></td>
                            <td><form method="post">
                            <input type="text" name="mov_id" value="<?php echo $row['mov_id']?>" style='visibility:hidden'>
                            <input type="submit" value="Delete" class="delete-button" name="delete" style="margin-left: 100px;">
                          </form></td>
                        </tr>
                        <?php
                      }
                }
            }
            if (isset($_POST['delete'])){
              $str = $_POST['mov_id'];
              $email = $_SESSION['email'];
              $sql1 = pg_query($db, "DELETE FROM rating WHERE email='$email' AND mov_id='$str'");
              if ($sql1){
                echo '<script>window.alert("Your review deleted!!!");</script>';
              }
            }
            ?>
        </table> 
    </div>
</body>
</html>