<?php
include('connection.php');
$sql = "INSERT INTO user_results(ID_NUMBER, YEARS, MONTHS, DATES, HOURS, STATUS, CHARGES) VALUES (?,?,?,?,?,?,?)";
$x = $db -> prepare($sql);

$ID_NUMBER=$_POST['ID_NUMBER'];
$YEARS=$_POST['YEARS'];
$MONTHS=$_POST['MONTHS'];
$DATES=$_POST['DATES'];
$HOURS=$_POST['HOURS'];
$STATUS=$_POST['STATUS'];
$CHARGES=$_POST['CHARGES'];

$x -> execute(array($ID_NUMBER,$YEARS,$MONTHS,$DATES,$HOURS,$STATUS,$CHARGES));


if($x)
{

	$id = $_POST['ID_NUMBER'];
	$url = "people_check.php?ID_NUMBER=";
	$target = $url.$id;
	echo $target;


	header("Location: $target");





}
else
{
	header("Location: attendance_Fails.php");
	
}

?>