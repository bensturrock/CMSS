<!DOCTYPE html>
<html lang="en">
  <head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Home | CMSS</title>

    <?php
      include 'manuHead.php';
    ?>

  </head>

  <body>


  <?php 
    include 'manuFrame.php'; 
  ?>
  <div class="container-fluid">	
  <h1 class="mt-4">Welcome to the Car Manufacturers Showcase Site!</h1>
  <p>These pages will be showing various Car Manufacturers, as well as models that those Manufacturers actively, and in some cases historically, have made.</p>
    <div class="container mt-4">
	<div class="row">
            
  <?php 
    include '../../model/api-cmss.php'; 
    getAllItems();
    //getItems();
  ?>

          </div>
        </div>
    </div>

    <?php
      include 'manuFooter.php';
    ?>

  </body>
</html>
