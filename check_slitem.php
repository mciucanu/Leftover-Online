<?php
header("Access-Control-Allow-Origin: *");

try {
  $conn = new PDO("mysql:host=hngomrlb3vfq3jcr.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=uvbqzg1cry7a0pna", "ap3ttbobpo61kgde", "sgf7jmj09390vqcc");
} catch (PDOException $e) {
  echo "Error".$e->getMessage();
}

$name = $_POST['name'];
$user_id = $_POST['user_id'];

$query = "SELECT * FROM shopping_list WHERE name='$name' AND user_id='$user_id'";

$result = $conn->query($query);

//$item = $result->fetchAll();

if($result){
  $item = $result->fetchAll();
  echo json_encode($item);
} else {
  echo json_encode(null);
}

?>