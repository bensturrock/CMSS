    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <?php 
    include 'model/databaseconnection.php'; 
  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>IoT | CMSS</title>

    <?php 
     include 'view/sections/root/rootHeader.php'; 
    ?>
  
  </head>
  <body>

    <?php 
      include 'view/sections/root/rootFrame.php'; 
    ?>

      <div class="container-fluid">	
          <h1 class="mt-4">Newest IoT Data and 'Light Switch'</h1>
          <p>

              <div class="btn-group" style="margin:5px 0 10px 0;">
                  <a href=https://agent.electricimp.com/fggLy0n6FfNV?state=1&led=5 target="_blank" class="btn btn-primary" role="button">Turn on Orange</a>
                  <a href=https://agent.electricimp.com/fggLy0n6FfNV?state=1&led=7 target="_blank" class="btn btn-primary" role="button">Turn on Blue</a>
              </div>
      </div>
          <div class="container-fluid">	
              <div class="btn-group" style="margin:5px 0 10px 0;">
                  <a href=https://agent.electricimp.com/fggLy0n6FfNV?state=0&led=5 target="_blank" class="btn btn-primary" role="button">Turn off Orange</a>
                  <a href=https://agent.electricimp.com/fggLy0n6FfNV?state=0&led=7 target="_blank" class="btn btn-primary" role="button">Turn off Blue</a>
              </div>
          </div>
      </p>
      <div class="container mt-4">
      <?php
      include 'model/databaseconnection.php'; 

  $stmt = mysqli_stmt_init($conn);
  $sqld = "SELECT * FROM `db_imp` ORDER BY `datetime` DESC LIMIT 10" ;
  //echo $sql;

  $result = $conn->query($sqld);

  if ($result->num_rows > 0) {
      echo "<table><tr><th>ID</th><th>Date Time</th><th>Temp</th></tr>";
      // output data of each row
      while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["eidevice"]. '</td><td align:"right">' . $row["datetime"]. '</td><td align:>' . $row["state"]. "</td></tr>";
      }
      echo "</table>";
  } else {
      echo "0 results";
  }
      ?>

      <script type="text/javascript">
          $(document).ready(function(){
          refreshTable();
          });

          function refreshTable(){
              $('#tableHolder').load('model/getIotTable.php', function(){
              setTimeout(refreshTable, 10000); //refresh every 10 seconds, the same time the ElectricImp updates the db table
              });
          }
      </script>

      <?php
      echo $data["internal"];
      ?>
    
    </div>	
    
      </div>
      <br><br><br><br><br><br>
        </div>
      </div>
  
      <?php 
        include 'view/sections/footer.php'; 
      ?>

    </body>
</html>
