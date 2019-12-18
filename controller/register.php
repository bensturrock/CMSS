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
    <meta name="author" content="Ben Sturrock">

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
        <a href="view/pages/weeks/week4.php" class="list-group-item list-group-item-action bg-light">Week 4</a> 
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
                <a class="nav-link" href="../view/pages/about/about.php">About Us</a>
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
              
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header"><h1 class="mt-4">Register</h1>
            <div class="card-body">
              <form class="form-horizontal" method="post" action="registerUser.php">
                <div class="form-group">
                    <label for="fName" class="cols-sm-2 control-label">Name</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter your full name" required/>
                        </div>
                    </div>
                <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label">Email</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Enter your Email" required/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone" class="cols-sm-2 control-label">Phone Number</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter your Phone Number" required/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="cols-sm-2 control-label">Password</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter your Password" minlength="8" required/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input type="password" class="form-control" name="confirm" id="confirm" placeholder="Confirm your Password" minlength="8" required/>
                        </div>
                    </div>
                </div>
                <div class="form-group ">
                    <button type="submit" name="submit" id="submit" class="btn btn-primary btn-lg btn-block login-button">Register</button>
                </div>
                <div class="login-register">
                    <p style="color:dimgrey">Already have an account? <a href="login.php">Login here</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
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
