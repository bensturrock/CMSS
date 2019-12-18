    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<?php 
    include 'model/databaseconnection.php'; 
    session_start();
  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CMSS</title>

    <?php
      include 'view/sections/root/rootHeader.php';
    ?>

  </head>
  <body>

      <?php
        include 'view/sections/root/rootFrame.php';
      ?>

    <div class="container-fluid">	
    <h1 class="mt-4">Welcome to the Car Manufacturers Showcase Site!</h1>
      <div class="container mt-4">
        <p>These pages will be showing various Car Manufacturers, as well as models that those Manufacturers actively, and in some cases historically, have made.</p>
          <div class="row">
                
          <?php 
            include 'model/api-cmss.php'; 
            getAllItems()
          ?>
          </div>
      </div>	
    </div>
    <br><br><br><br>
          </div>
        </div>
    
        <?php
        include 'view/sections/footer.php';
        ?>
   </body>
</html>
