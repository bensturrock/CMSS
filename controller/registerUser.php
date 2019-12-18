    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



<?php 
    include '../databaseconnection.php'; 
  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CMSS</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this specific site -->
    <link href="../view/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
  </head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Weeks</div>
      <div class="list-group list-group-flush">
        <a href="view/pages/weeks/week1.php" class="list-group-item list-group-item-action bg-light">Week 1</a>
        <a href="view/pages/weeks/week2.php" class="list-group-item list-group-item-action bg-light">Week 2</a>
        <a href="view/pages/weeks/week3.php" class="list-group-item list-group-item-action bg-light">Week 3</a> 
        <a href="#" class="list-group-item list-group-item-action bg-light">Week 4</a> 
        <a href="#" class="list-group-item list-group-item-action bg-light">Week 5</a> 
        <a href="#" class="list-group-item list-group-item-action bg-light">Week 6</a> 
        <a href="#" class="list-group-item list-group-item-action bg-light">Week 7</a> 
        <a href="#" class="list-group-item list-group-item-action bg-light">Week 8</a> 
        <a href="#" class="list-group-item list-group-item-action bg-light">Week 9</a> 
        <a href="#" class="list-group-item list-group-item-action bg-light">Week 10</a> 
        <a href="#" class="list-group-item list-group-item-action bg-light">Week 11</a> 
        <a href="#" class="list-group-item list-group-item-action bg-light">Week 12</a> 
      </div>
    </div>

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <!-- Horizontal Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Show/Hide Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/about/about.php">About Us</a>
              </li>
              <!-- Dropdrown Navigation Bar -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="pages/manufacturers/audi.php">Audi</a>
                  <a class="dropdown-item" href="pages/manufacturers/bmw.php">BMW</a>
                  <a class="dropdown-item" href="pages/manufacturers/citroen.php">Citroen</a>
                  <a class="dropdown-item" href="pages/manufacturers/dacia.php">Dacia</a>
                  <a class="dropdown-item" href="pages/manufacturers/ford.php">Ford</a>
                  <a class="dropdown-item" href="pages/manufacturers/honda.php">Honda</a>
                  <a class="dropdown-item" href="pages/manufacturers/kia.php">Kia</a>
                  <a class="dropdown-item" href="pages/manufacturers/landrover.php">Land Rover</a>
                  <a class="dropdown-item" href="pages/manufacturers/mercedes.php">Mercedes-Benz</a>
                  <a class="dropdown-item" href="pages/manufacturers/nissan.php">Nissan</a>
                  <a class="dropdown-item" href="pages/manufacturers/renault.php">Renault</a>
                  <a class="dropdown-item" href="pages/manufacturers/volkswagen.php">Volkswagen</a>
                  
                  <div class="dropdown-divider"></div>

                  <a class="dropdown-item" href="login.php">Log In</a>
                  <a class="dropdown-item" href="register.php">Register</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
  <br><br>

<?php
include_once("../model/databaseconnection.php");

//LOL include("register.php");
//include_once("api-cmss.php");
//registerNewUser();

session_start();

if(isset($_SESSION['email'])) {

}
$error == 0;
if (isset($_POST['submit'])) {
  $error = 0;
	$name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $mobile_no = mysqli_real_escape_string($conn, $_POST['mobile_no']);
	$DBpassword = mysqli_real_escape_string($conn, $_POST['password']);
  $confirm = mysqli_real_escape_string($conn, $_POST['confirm']);	
  
	if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
		$error = true;
    $uname_error = "Name must contain only alphabets and space";
    echo "Name must contain only alphabets and space";
  }
  
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		$error = true;
    $email_error = "Please Enter Valid Email";
    echo "Please Enter Valid Email";
	}
	if(strlen($DBpassword) < 8) {
		$error = true;
    $password_error = "Password must be minimum of 8 characters";
    echo "Password must be minimum of 8 characters";
	}
	if($DBpassword != $confirm) {
		$error = true;
    $cconfirm_error = "Password and Confirm Password doesn't match";
    echo "Password and Confirm Password doesn't match";
  } 
	if ($error==false) {
    $password = md5($DBpassword);

		if(mysqli_query($conn, "INSERT INTO user (name, mobile_no, email, DBpassword) VALUES('" . $name . "', '" . $mobile_no . "', '" . $email . "', '" . $password . "')")) {
      $success_message = "Successfully Registered! <a href='login.php'>Click here to Login</a>";
      echo "<p> Successfully Registered! <a href='login.php'>Click here to Login</a></p>";
		} else {
      echo 'Error in registering...Please try again later!';
			$error_message = "Error in registering...Please try again later!";
		}
	}
}

?>


<br><br><br><br>
        </div>
        </div>
  
    <!-- Footer -->
      <div class="footer">
        <h6 class="mt-3">1806055 | Ben Sturrock</h1>
      </div>
      <!-- /#wrapper -->

      <!-- Bootstrap core JavaScript -->
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script src="../packages/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!-- Hide/Show Menu Script -->
      <script>
        $("#menu-toggle").click(function(e) {
          e.preventDefault();
          $("#wrapper").toggleClass("toggled");
        });
      </script>
  </body>
</html>



