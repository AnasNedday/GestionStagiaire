<?php 
include "config.php";

$id = $_POST['id'];
echo '$id';
// Delete record
$query = "DELETE FROM offre WHERE id=".$id;
$result = $conn->query($query) or  die($conn->error);


echo 1;