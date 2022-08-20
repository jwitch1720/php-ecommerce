<?php

function dd($data){
  highlight_string("<?php\n " . var_export($data, true) . "?>");
  echo '<script>document.getElementsByTagName("code")[0].getElementsByTagName("span")[1].remove() ;document.getElementsByTagName("code")[0].getElementsByTagName("span")[document.getElementsByTagName("code")[0].getElementsByTagName("span").length - 1].remove() ; </script>';
  //die();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpecommerce";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  //echo "<table><tr><th>ID</th><th>Name</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // echo "<tr><td>".$row["id"]."</td><td>".$row["name"]." ".$row["description"]."</td></tr>";
    //var_dump($row);
    dd($row);
  }
  //echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?> 

