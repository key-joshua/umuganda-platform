<!DOCTYPE html>
<html>
<head>
	<title>insert</title>
	<link rel="stylesheet" type="text/css" href="css/Style.css">
</head>
<body  style="
        background: #aaaea2;">

<div class="header">
	
	<h2>Register</h2>

</div>
<span id="error">
<?php
if (!empty($_SESSION['error_page3'])) {
 echo $_SESSION['error_page3'];
 unset($_SESSION['error_page3']);
}
?>
</span>

<form method="post" action="umuganda_form4.php" style="background-image: linear-gradient(135deg, #fdfcfb 0%, #423107 100%);">
<?php
session_start(); // Session starts here.
if (isset($_POST['GENDER'])){
 if (empty($_POST['ID_NUMBER'])
 || empty($_POST['FIRST_NAME'])
 || empty($_POST['LAST_NAME'])
 || empty($_POST['TELEPHONE'])){ 
 // Setting error message
 $_SESSION['error_page2'] = '<div style="color:#ffffff;text-align: center;font-size:28px"> Some field(s) are missing, Please fill again</div>';
 header("location: umuganda_form2.php"); // Redirecting to first page 
 }
 else {
//  if (!preg_match("/^[0-9]{10}$/", $_POST['ID_NUMBER'])){ 
//  $_SESSION['error_page2'] = '<div style="color:#ffffff;text-align: center;font-size:28px"> Please !! ID_NUMBER must be Only 16 digit.</div>';
//  header("location: umuganda_form2.php");
// }
if (!preg_match("/^[0-9\+]{13}$/", $_POST['TELEPHONE'])) {
	$_SESSION['error_page2'] = '<div style="color:#ffffff;text-align: center;font-size:28px"> Please !! Phone number should contain Country Code.</div>';
 header("location: umuganda_form2.php");
}
 // Fetching all values posted from second page and storing it in variable.
 foreach ($_POST as $key => $value) {
 $_SESSION['post'][$key] = $value;
 }}}
 
 else {
 if (empty($_SESSION['error_page3'])) {
 header("location: umuganda_form2.php");// Redirecting to first page.
 }
}
?>
<div class="input-group">


<label>ALL FILLED DATA ARE READY TO BE SAVED </label>
<input type="text" name="RESULT" value="approval" style="display: none;">	






<div class="input-group">
<button onclick="return confirm('Are you sure!! You want to submit Data ?')" type="submit" name="next" class="btn">Submit</button>	

</div>


<br>

<p style="color: #ffffff;float: left;">
	
	Wanna Check_Data ? &nbsp&nbsp<a onclick="return confirm('Are you sure!! you want to check users')" href="people_details.php" style="color: #271c02; font-size: 20px; border: 10px; "  >Check Now !!</a>

</p>

<br>

</form>

</body>
</html>