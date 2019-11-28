<?php
include('connection.php');
$sql = "INSERT INTO user_results(ID_NUMBER, YEARS, MONTHS, DATES, HOURS, STATUS, CHARGES) VALUES (?,?,?,?,?,?,?)";
$x = $db -> prepare($sql);

$ID_NUMBER=$_POST['ID_NUMBER'];
$YEARS=date("Y");
$MONTHS="Jan";
$DATES="25";
$HOURS=$_POST['HOURS'];
$STATUS=$_POST['STATUS'];
$CHARGES=$_POST['CHARGES'];

$x -> execute(array($ID_NUMBER,$YEARS,$MONTHS,$DATES,$HOURS,$STATUS,$CHARGES));


if($x)
{
	header("Location: bonus_successfully.php");
}
else
{
 echo '<p> Insert Bonuss Failed..!! Hey Try Again</p>';
 header("Location: new_user_bonus.php");
}

?>