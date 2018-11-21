<?php
header("Access-Control-Allow-Origin: *");

try {
  $conn = new PDO("mysql:host=hngomrlb3vfq3jcr.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=uvbqzg1cry7a0pna", "ap3ttbobpo61kgde", "sgf7jmj09390vqcc");
} catch (PDOException $e) {
  echo "Error".$e->getMessage();
}

$name = $_POST['name'];

$query = "SELECT * FROM shopping_list WHERE name='$name'";

$result = $conn->query($query);

//$item = $result->fetchAll();

if($result){
  $item = $result->fetchAll();
  echo json_encode($item);
} else {
  echo json_encode(null);
}

?>