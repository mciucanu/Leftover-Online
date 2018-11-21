<?php
header("Access-Control-Allow-Origin: *");

try {
  $conn = new PDO("mysql:host=hngomrlb3vfq3jcr.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=uvbqzg1cry7a0pna", "ap3ttbobpo61kgde", "sgf7jmj09390vqcc");
} catch (PDOException $e) {
  echo "Error".$e->getMessage();
}

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$query = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$password')";

$result = $conn->query($query);
if($result){
  $allowed = $result->fetchAll();
  echo json_encode($allowed);
} else {
  echo json_encode(false);
}

/*
CREATE TABLE users (
 user_id INT NOT NULL AUTO_INCREMENT,
 email VARCHAR (255) NOT NULL,
 username VARCHAR (255) NOT NULL,
 password VARCHAR(255) NOT NULL,
 PRIMARY KEY (user_id)
);
*/

?>