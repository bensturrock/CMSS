  <?php 
    include '../../model/databaseconnection.php'; 
    include 'dx.php';
  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CMSS</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="">
    <meta name="author" content="Ben Sturrock">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this specific site -->
    <link href="../styles.css" rel="stylesheet">
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
      <a href="weeks/week1.php" class="list-group-item list-group-item-action bg-light">Week 1</a>
      <a href="weeks/week2.php" class="list-group-item list-group-item-action bg-light">Week 2</a>
      <a href="weeks/week3.php" class="list-group-item list-group-item-action bg-light">Week 3</a> 
      <a href="weeks/week4.php" class="list-group-item list-group-item-action bg-light">Week 4</a> 
      <a href="weeks/week5.php" class="list-group-item list-group-item-action bg-light">Week 5</a> 
      <a href="#" class="list-group-item list-group-item-action bg-light">Week 6</a> 
      <a href="#" class="list-group-item list-group-item-action bg-light">Week 7</a> 
      <a href="#" class="list-group-item list-group-item-action bg-light">Week 8</a> 
      <a href="#" class="list-group-item list-group-item-action bg-light">Week 9</a> 
      <a href="#" class="list-group-item list-group-item-action bg-light">Week 10</a> 
      <a href="#" class="list-group-item list-group-item-action bg-light">Week 11</a> 
      <a href="#" class="list-group-item list-group-item-action bg-light">Week 12</a> 
    </div>
  </div>
  <!-- /#sidebar-wrapper -->

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
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about/about.html">About Us</a>
            </li>
            <!-- Dropdrown Navigation Bar -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="manufacturers/audi.php">Audi</a>
                <a class="dropdown-item" href="manufacturers/bmw.php">BMW</a>
                <a class="dropdown-item" href="manufacturers/citroen.php">Citroen</a>
                <a class="dropdown-item" href="manufacturers/dacia.php">Dacia</a>
                <a class="dropdown-item" href="manufacturers/ford.php">Ford</a>
                <a class="dropdown-item" href="manufacturers/honda.php">Honda</a>
                <a class="dropdown-item" href="manufacturers/kia.php">Kia</a>
                <a class="dropdown-item" href="manufacturers/landrover.php">Land Rover</a>
                <a class="dropdown-item" href="manufacturers/mercedes.php">Mercedes-Benz</a>
                <a class="dropdown-item" href="manufacturers/nissan.php">Nissan</a>
                <a class="dropdown-item" href="manufacturers/renault.php">Renault</a>
                <a class="dropdown-item" href="manufacturers/volkswagen.php">Volkswagen</a>

                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="controller/login.php">Log In</a>
                <a class="dropdown-item" href="controller/register.php">Register</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

<div class="container-fluid">	
<h1 class="mt-4">Welcome to the Car Manufacturers Showcase Site!</h1>
<p>These pages will be showing various Car Manufacturers, as well as models that those Manufacturers actively, and in some cases historically, have made.</p>
<?php 
echo '<div class="container mt-4">';
  '<div class="row"> ';
  ?>

	<?php
		include("model/api-cmss.php") ;
		$employeetxt = getAllManufacturers() ;
		// echo $employeetxt ;
		$employeejson = json_decode($employeetxt) ;
		// var_dump($employeejson) ;
		for ($i=0 ; $i<sizeof($employeejson) ; $i++) {
      echo " " ;		
      echo '<div class="col-auto mb-3">';	
      echo '<div class="card" style="width: 18rem;">';
      echo '<div class="card-body">';
      echo " " ;
			echo $employeejson[$i] -> manufacturer_name ;
      echo "</a><br/>" ;
      echo $employeejson[$i] -> manufacturer_desc ;
      echo "</a><br/>" ;
      echo "<a href=displaymanufacturer.php?id=" ;
			echo $employeejson[$i] -> manufacturer_id ;
      echo ">" ;
		}
	?> 
        </div>
	</div>	
	
</div>
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
    <script src="packages/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Hide/Show Menu Script -->
    <script>
      $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>
  </body>
</html>
