<?php 

$data = [
    "name"=> $_POST['name'],
    "email"=> $_POST['email'],
    "message"=> $_POST['message']
];

$connection = new PDO('mysql:host=localhost;dbname=tw', 'root', '');
$sql = 'INSERT INTO lab5 (name, email, message) VALUES (:name, :email, :message)';
$statement = $connection->prepare($sql);
$result = $statement->execute($data);
var_dump($result);

?>