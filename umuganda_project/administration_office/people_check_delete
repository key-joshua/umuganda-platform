<?php
require 'connection.php';
$ID_NUMBER = $_GET['ID_NUMBER'];
$sql = 'DELETE FROM umuganda_project WHERE ID_NUMBER=:ID_NUMBER';
$statement = $db->prepare($sql);


if ($statement->execute([':ID_NUMBER' => $ID_NUMBER])) {
  header("Location: /umuganda_project/admin/people_details.php");
}

?>