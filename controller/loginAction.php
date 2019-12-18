    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<?php 
  include '../databaseconnection.php'; 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login | CMSS</title>

    <?php
      include '../view/sections/controller/cHeader.php';
    ?>

  </head>

<body>

<?php
      include '../view/sections/controller/cFrame.php';
    ?>

  <br><br>

    <div>
        <div class="dashboard">
        <?php
        include_once("../model/databaseconnection.php");

        session_start();

        if($_SERVER["REQUEST_METHOD"] == "POST") {
        // username and password sent from form 
        
        $myemail = mysqli_real_escape_string($conn,$_POST['email']);
        $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
        $mypassword = md5 ($_POST['password']);

        $query = mysqli_query($conn, "SELECT * FROM user WHERE email='$myemail' AND DBpassword='$mypassword'");
  
        $rows = mysqli_num_rows($query);
        if($rows == 1){


          echo '<div class="member-dashboard">Welcome<b><?php echo $email; ?></b>, You have successfully logged in<br>';
        header("Location: ../view/pages/welcome.php"); // Redirecting to other page
        }
        else
        {
        $error = "Username or Password is Invalid";
        echo $error;
        }
    }
?>
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



