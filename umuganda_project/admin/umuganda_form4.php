<!DOCTYPE html>
<html>
<head>
	<title>insert</title>
	<link rel="stylesheet" type="text/css" href="css/Style.css">
</head>
<body  style="
        background: #aaaea2;" >

<div class="header">
	
	<h2>Register</h2>

</div>

<form method="post" action="" style="background-image: linear-gradient(135deg, #fdfcfb 0%, #423107 100%);">
<?php
 session_start(); // Session starts here.
if (isset($_POST['RESULT'])){
 if (!empty($_SESSION['post'])){
 if(empty($_POST['RESULT'])){ 
 // Setting error message
 $_SESSION['error_page3'] = "Some field(s) are missing, Please fill again";
 header("location: umuganda_form3.php"); // Redirecting to first page 
 }
 else {
 // Fetching all values posted from second page and storing it in variable.
 foreach ($_POST as $key => $value) {
 $_SESSION['post'][$key] = $value;
 }
 
 extract($_SESSION['post']); 
 
 include 'connection.php';
 $query = "INSERT INTO umuganda_project (PROVINCE,DISTRICT,SECTOR,CELL,VILLAGE,RECORD_DATE,GENDER,ID_NUMBER,FIRST_NAME,LAST_NAME,TELEPHONE,RESULT) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)"; 
 
$x = $db -> prepare($query);
$x->bindParam(':PROVINCE',$PROVINCE,PDO::PARAM_STR);
$x->bindParam(':DISTRICT',$DISTRICT,PDO::PARAM_STR);
$x->bindParam(':SECTOR',$SECTOR,PDO::PARAM_INT);
$x->bindParam(':CELL',$CELL,PDO::PARAM_STR);
$x->bindParam(':VILLAGE',$VILLAGE,PDO::PARAM_STR);
$x->bindParam(':RECORD_DATE',$RECORD_DATE,PDO::PARAM_STR);
$x->bindParam(':GENDER',$GENDER,PDO::PARAM_STR);
$x->bindParam(':ID_NUMBER',$ID_NUMBER,PDO::PARAM_STR);
$x->bindParam(':FIRST_NAME',$FIRST_NAME,PDO::PARAM_STR);
$x->bindParam(':LAST_NAME',$LAST_NAME,PDO::PARAM_STR);
$x->bindParam(':TELEPHONE',$TELEPHONE,PDO::PARAM_STR);
$x->bindParam(':RESULT',$RESULT,PDO::PARAM_STR);
$x -> execute(array($PROVINCE,$DISTRICT,$SECTOR,$CELL,$VILLAGE,$RECORD_DATE,$GENDER, $ID_NUMBER,$FIRST_NAME,$LAST_NAME,$TELEPHONE,$RESULT));
if ($x) {
 header("location: new_user_bonus.php");
 } 

 else {
 echo '<p> Submission Failed..!!</p>';
 } 
 unset($_SESSION['post']); // Destroying session.
 }
 }
 else {
 header("location: umuganda_form1.php"); // Redirecting to first page.
 }
 }
 else {
 header("location: umuganda_form1.php"); // Redirecting to first page.
 }
 ?>

</div>


<p style="color: #ffffff;">
	
	Wanna Check_Data ? &nbsp&nbsp<a onclick="return confirm('Are you sure!! You want to check users')" href="people_details.php" style="color: #271c02; font-size: 20px; border: 10px; "  >Check Now !!</a>

</p>

<p style="color: #ffffff;">
	
	Wanna Register New Data !! ? &nbsp&nbsp<a onclick="return confirm('Are you sure!! You want Register New user')" href="umuganda_form1.php" style="color: #271c02; font-size: 20px; border: 10px; "  >Register Now !!</a>

</p>





</form>

</body>
</html>