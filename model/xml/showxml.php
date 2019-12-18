<!DOCTYPE html>
<html>
<body>

<?php
$xml=simplexml_load_file("https://api.openweathermap.org/data/2.5/weather?q=arbroath,gb&mode=xml&appid=63529331b1ffd0eba7c3bd0343d55475&units=metric") or die("Error: Cannot create object");

print_r($xml);
?>

</body>
</html>