<?php
header("Access-Control-Allow-Origin: *");

try {
  $conn = new PDO("mysql:host=hngomrlb3vfq3jcr.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=uvbqzg1cry7a0pna", "ap3ttbobpo61kgde", "sgf7jmj09390vqcc");
} catch (PDOException $e) {
  echo "Error".$e->getMessage();
}
  
$query = "SELECT * FROM shopping_list";

$result = $conn->query($query);
if($result){
  $users = $result->fetchAll();
  echo json_encode($users);
} else {
  echo json_encode(false);
}

?>