<?php
    include 'databaseconnection.php'; 

$stmt = mysqli_stmt_init($conn);
$sqld = "SELECT * FROM `db_imp` ORDER BY `datetime` DESC LIMIT 10" ;
//echo $sql;

$result = $conn->query($sqld);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Date Time</th><th>Temp</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["eidevice"]. "</td><td>" . $row["datetime"]. " " . $row["state"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
    ?>