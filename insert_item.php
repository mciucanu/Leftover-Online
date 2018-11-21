<?php
header("Access-Control-Allow-Origin: *");

try {
  $conn = new PDO("mysql:host=hngomrlb3vfq3jcr.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=uvbqzg1cry7a0pna", "ap3ttbobpo61kgde", "sgf7jmj09390vqcc");
} catch (PDOException $e) {
  echo "Error".$e->getMessage();
}

$name = $_POST['name'];
$added_date = $_POST['added_date'];
$expiry_date = $_POST['expiry_date'];
$days_left = $_POST['days_left'];
$exact_time = $_POST['exact_time'];
$image = $_POST['image'];

$query = "INSERT INTO items (name, added_date, expiry_date, days_left, image, exact_time) VALUES ('$name', '$added_date', '$expiry_date', '$days_left', '$image', '$exact_time')";

$result = $conn->query($query);
if($result){
  echo json_encode(true);
} else {
  echo json_encode(false);
}

/*
CREATE TABLE items (
 item_id INT NOT NULL AUTO_INCREMENT,
 name VARCHAR (255) NOT NULL,
 added_date VARCHAR(10),
 expiry_date VARCHAR(10) NOT NULL,
 days_left VARCHAR(4),
 image VARCHAR(255),
 user_id INT(11),
 PRIMARY KEY (item_id)
);
*/

/*
ALTER TABLE items
ADD COLUMN exact_time VARCHAR(24) NOT NULL;
*/

?>