<?php
  session_start();
  $host        = "host = localhost";
  $port        = "port = 5432";
  $dbname      = "dbname = movies";
  $credentials = "user = postgres password=1812";
  $db = pg_connect( "$host $port $dbname $credentials"  );
  if (!$db) {
    echo "Error : Unable to open database\n";
  }
  if ($db){
    if (isset($_POST['admin'])){
      $email = $_POST['email'];
      $pass = $_POST['pass'];
      $sql = pg_query($db, "SELECT * FROM login WHERE email='$email' AND pass='$pass'");
      if ($email =='admin@gmail.com' && $pass == 'admin'){
        $_SESSION['email'] = $_POST['email'];
        echo '<script>window.alert("Login Successful");</script>';
        echo "<script>location.href='dashboard.php'</script>";
      }
      else {
        echo '<script>alert("Wrong Login credentials!!!");</script>';
        echo '<script>window.location="index.php"</script>';
      }
    }
  }
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="stylesheet.css" type="text/css">
  <title>movie web</title>
  <style>
    
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    * {
      box-sizing: border-box;
      font-family: "Poppins" , sans-serif;
    }

  body {
    background: url(https://media.istockphoto.com/vectors/grunge-abstract-cinema-background-vector-id119050302?k=20&m=119050302&s=612x612&w=0&h=wi2GzKL1AkNPGUHJ5QKlxdt_1wQmmnahdgUPndiuMDc=);
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    height: 100vh;
    margin: -20px 0 50px;
  }
  .front-image img{
      width: 100%;
      object-position: 0% 0%;
      object-fit: cover;
    }
  h1 {
    font-weight: bold;
    margin: 0;
  }

  h2 {
    text-align: center;
  }

  p {
    font-size: 14px;
    font-weight: 100;
    line-height: 20px;
    letter-spacing: 0.5px;
    margin: 20px 0 30px;
  }

  span {
    font-size: 12px;
  }

  a {
    color: #333;
    font-size: 14px;
    text-decoration: none;
    margin: 15px 0;
  }

  .button {
    border-radius: 20px;
    border: 1px solid #FF4B2B;
    background-color: #FF4B2B;
    color: #FFFFFF;
    font-size: 12px;
    font-weight: bold;
    padding: 12px 45px;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: transform 80ms ease-in;
  }

  .button:active {
    transform: scale(0.95);
  }

  .button:focus {
    outline: none;
  }

  button {
    border-radius: 20px;
    border: 1px solid #FF4B2B;
    background-color: #FF4B2B;
    color: #FFFFFF;
    font-size: 12px;
    font-weight: bold;
    padding: 12px 45px;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: transform 80ms ease-in;
  }

  button:active {
    transform: scale(0.95);
  }

  button:focus {
    outline: none;
  }

  button.ghost {
    background-color: transparent;
    border-color: #FFFFFF;
  }

  form {
    background-color: #FFFFFF;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0 50px;
    height: 100%;
    text-align: center;
  }

  input {
    background-color: #eee;
    border: none;
    padding: 12px 15px;
    margin: 8px 0;
    width: 100%;
  }

  .container {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
        0 10px 10px rgba(0,0,0,0.22);
    position: relative;
    overflow: hidden;
    width: 400px;
    max-width: 100%;
    min-height: 480px;
  }

  .form-container {
    position: absolute;
    top: 0;
    height: 100%;
  }

  .sign-in-container {
    left: 0;
    width: 50%;
    z-index: 2;
  }
  </style>
</head>

<body>
  <div class="container" id="container">
  <div class="form-container">
    <form method="post">
      <h1>Admin Log in</h1>
      <input type="email" placeholder="Email" name="email" required>
      <input type="password" placeholder="Password" name="pass" required><br>
      <input type="submit" name="admin" class="button" value="ADMIN LOG IN">
    </form>
  </div>
</div>
</body>
</html>