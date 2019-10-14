<?php 
include('connection.php');
$ID_NUMBER=$_POST['ID_NUMBER'];


if($ID_NUMBER)
{

	$id = $_POST['ID_NUMBER'];
	$url = "people_check.php?ID_NUMBER=";
	$target = $url.$id;


	header("Location: $target");

}

?>
  