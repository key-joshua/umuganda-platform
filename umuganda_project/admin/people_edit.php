<?php
require 'connection.php';
$ID_NUMBER = $_GET['ID_NUMBER'];
$sql = 'SELECT * FROM 	umuganda_project WHERE ID_NUMBER=:ID_NUMBER';
$statement = $db->prepare($sql);
$statement->execute([':ID_NUMBER' => $ID_NUMBER ]);
$person = $statement->fetch(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html>
<head>
	<title>edit existing data</title>
	<link rel="stylesheet" type="text/css" href="css/Style.css">
</head>
<body  style="
        background: #aaaea2;">


<div class="header">
	
	<h2>

	Update User  Data


	</h2>



</div>
	
	<?php

if ( isset ($_POST['PROVINCE']) && isset ($_POST['DISTRICT']) && isset ($_POST['SECTOR']) && isset($_POST['CELL']) && isset ($_POST['VILLAGE']) && isset ($_POST['RECORD_DATE'])&& isset ($_POST['GENDER']) && isset ($_POST['FIRST_NAME']) && isset ($_POST['LAST_NAME']) && isset($_POST['TELEPHONE']) && isset ($_POST['RESULT']) && isset ($_POST['AVATAR'])) 
{
  $PROVINCE = $_POST['PROVINCE'];
  $DISTRICT = $_POST['DISTRICT'];
  $SECTOR=$_POST['SECTOR'];
  $CELL=$_POST['CELL'];
  $VILLAGE = $_POST['VILLAGE'];
  $RECORD_DATE = $_POST['RECORD_DATE'];
  $GENDER=$_POST['GENDER'];
  $FIRST_NAME = $_POST['FIRST_NAME'];
  $LAST_NAME = $_POST['LAST_NAME'];
  $TELEPHONE=$_POST['TELEPHONE'];
  $RESULT=$_POST['RESULT'];
  $AVATAR=$_POST['AVATAR'];

  $sql = 'UPDATE umuganda_project SET PROVINCE=:PROVINCE, DISTRICT=:DISTRICT, SECTOR=:SECTOR, CELL=:CELL, VILLAGE=:VILLAGE, RECORD_DATE=:RECORD_DATE, GENDER=:GENDER, FIRST_NAME=:FIRST_NAME, LAST_NAME=:LAST_NAME, TELEPHONE=:TELEPHONE, RESULT=:RESULT, AVATAR=:AVATAR WHERE ID_NUMBER=:ID_NUMBER';
  $statement = $db->prepare($sql);


  if ($statement->execute([':PROVINCE' => $PROVINCE, ':DISTRICT' => $DISTRICT, ':SECTOR' => $SECTOR, ':CELL' => $CELL,':VILLAGE' => $VILLAGE, ':RECORD_DATE' => $RECORD_DATE, ':ID_NUMBER' => $ID_NUMBER, ':GENDER' => $GENDER, ':FIRST_NAME' => $FIRST_NAME, ':LAST_NAME' => $LAST_NAME, ':TELEPHONE' => $TELEPHONE, ':RESULT' => $RESULT, ':AVATAR' => $AVATAR])) 
  {
    header("Location: /umuganda_project/admin/people_details.php");
  }
}
?>

</div>
<form method="post" >
<div class="input-group"  >
<label>PROVINCE</label>
<input type="text" name="PROVINCE" value="<?= $person->PROVINCE; ?>" required="">
<label>DISTRICT</label>
<input type="text" name="DISTRICT" value="<?= $person->DISTRICT; ?>" required="">
<label>SECTOR</label>
<input type="text" name="SECTOR" value="<?= $person->SECTOR; ?>" required="">
<label>CELL</label>
<input type="text" name="CELL" value="<?= $person->CELL; ?>" required="">
<label>VILLAGE</label>
<input type="text" name="VILLAGE" value="<?= $person->VILLAGE; ?>" required="">
<label>RECORD_DATE</label>
<input type="text" name="RECORD_DATE" value="<?= $person->RECORD_DATE; ?>" required="">
<label>GENDER</label>
<input type="text" name="GENDER" value="<?= $person->GENDER; ?>" required="">
<label>FIRST_NAME</label>
<input type="text" name="FIRST_NAME" value="<?= $person->FIRST_NAME; ?>" required="" >
<label>LAST_NAME</label>
<input type="text" name="LAST_NAME" value="<?= $person->LAST_NAME; ?>" required="">	
<label>TELEPHONE</label>
<input type="phone" name="TELEPHONE" value="<?= $person->TELEPHONE; ?>" required="" >	
<input type="text" name="RESULT" value="approval" style="display: none;">
<input type="text" name="AVATAR" value="AVATAR" style="display: none;"><br><br>
<button onclick="return confirm('Are you sure!! You want to submit Data ?')" type="submit" name="next" class="btn">Change</button>	

</div>



<p>
	
	Wanna Check_Data ? 
	&nbsp;
	<a onclick="return confirm('Are you sure!! You want to Check Data ?')" href="people_details.php" style="color: #271c02; font-size: 20px;"  >Check Now !!</a>

</p>





</form>

</body>
</html>