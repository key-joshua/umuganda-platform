<?php
require 'connection.php';
$id_number = $_GET['id_number'];
$sql = 'DELETE FROM users WHERE id_number=:id_number';
$statement = $db->prepare($sql);


if ($statement->execute([':id_number' => $id_number])) {
  header("Location: users_details.php");
}

?>