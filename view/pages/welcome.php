    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<?php 
  include '../databaseconnection.php'; 
?>

<html>
<head>
<title>Welcome</title>
<link href="../style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div>
        <div class="dashboard">
            <div class="member-dashboard">Welcome <b><?php echo $displayName; ?></b>, You have successfully logged in!<br>
                Click to <a href="logout.php" class="logout-button">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>

<br><br>
        </div>
        </div>
  
      <?php
        include '../view/sections/footer.php';
      ?>

  </body>
</html>



