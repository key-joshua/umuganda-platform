<?php
include('connection.php');
$sql = "INSERT INTO user_results(ID_NUMBER, YEARS, MONTHS, DATES, HOURS, STATUS, CHARGES) VALUES (?,?,?,?,?,?,?)";
$x = $db -> prepare($sql);

$ID_NUMBER=$_POST['ID_NUMBER'];
$YEARS=date("Y");
$MONTHS=date("M");
$DATES=date("d");
$HOURS=$_POST['HOURS'];
$STATUS=$_POST['STATUS'];
$CHARGES=$_POST['CHARGES'];

$x -> execute(array($ID_NUMBER,$YEARS,$MONTHS,$DATES,$HOURS,$STATUS,$CHARGES));


if($x)
{
	header("Location: attendance_successfully.php");
}
else
{
	header("Location: attendance_Fails.php");
}

?>