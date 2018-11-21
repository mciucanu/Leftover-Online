<?php
header("Access-Control-Allow-Origin: *");

try {
  $conn = new PDO("mysql:host=hngomrlb3vfq3jcr.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=uvbqzg1cry7a0pna", "ap3ttbobpo61kgde", "sgf7jmj09390vqcc");
} catch (PDOException $e) {
  echo "Error".$e->getMessage();
}

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username='$username'";

$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0){
  $row = mysqli_fetch_assoc($result);
  $allowed = password_verify($password,$row["password"]);
  if($allowed){
    echo json_encode(true);
  } else {
    echo json_encode(false);
  }
}

//$result = $conn->query($query);
//if($result){
//  $item = $result->fetchAll();
//  echo json_encode($item);
//} else {
//  echo json_encode(false);
//}
?>