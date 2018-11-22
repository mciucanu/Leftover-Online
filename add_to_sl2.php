<?php
header("Access-Control-Allow-Origin: *");

try {
  $conn = new PDO("mysql:host=hngomrlb3vfq3jcr.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=uvbqzg1cry7a0pna", "ap3ttbobpo61kgde", "sgf7jmj09390vqcc");
} catch (PDOException $e) {
  echo "Error".$e->getMessage();
}

$item_id = $_POST['item_id'];
$name = $_POST['name'];
$image = $_POST['image'];
$user_id = $_POST['user_id'];

$query = "INSERT INTO shopping_list (item_id, user_id, name, image) VALUES ('$item_id', '$user_id', '$name', '$image')";

$result = $conn->query($query);
if($result){
  echo json_encode(true);
} else {
  echo json_encode(false);
}

/*
CREATE TABLE shopping_list (
 slitem_id INT NOT NULL AUTO_INCREMENT,
 item_id INT (11),
 user_id INT (11) NOT NULL,
 name VARCHAR (255) NOT NULL,
 image LONGTEXT NOT NULL,
 PRIMARY KEY (slitem_id)
);
*/

?>