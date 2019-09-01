<?php
session_start(); // Session starts here.
if (isset($_POST['PROVINCE'])){
 if (empty($_POST['PROVINCE'])
 || empty($_POST['DISTRICT'])
 || empty($_POST['SECTOR'])
 || empty($_POST['CELL'])
 || empty($_POST['VILLAGE'])
 || empty($_POST['RECORD_DATE'])){ 
 	
 // Setting error message
 $_SESSION['error'] = "Some field(s) are missing, Please fill again";
 header("location: umuganda_form1.php"); // Redirecting to first page 
 
 }
 else {
 // Fetching all values posted from second page and storing it in variable.
 foreach ($_POST as $key => $value) {
 $_SESSION['post'][$key] = $value;
 }
 }}
 else {
 if (empty($_SESSION['error_page2'])) {
 header("location: umuganda_form1.php");// Redirecting to first page.
 }
}
?>

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
if (!empty($_SESSION['error_page2'])) {
 echo $_SESSION['error_page2'];
 unset($_SESSION['error_page2']);
}
?>



</span>

<form method="post" action="umuganda_form3.php" onsubmit="return ID_NUMBERss();" style="background-image: linear-gradient(135deg, #fdfcfb 0%, #423107 100%);">


<div class="input-groups">

<label>GENDER</label><br><br>
 <input type="radio" name="GENDER" value="male" required="">Male
 <input type="radio" name="GENDER" value="female" required="">Female
<br><br>

<div class="input-group">

<label>ID_NUMBER</label>	
<input type="text" name="ID_NUMBER" pattern=".{16}"   required title="  Please ID_NUMBER must be Only 16 digit" style="width: 88.5%; height: 50%;" value="199" />


<br><br>

<label>FIRST_NAME</label>
<input type="text" name="FIRST_NAME" required=""  style="width: 88.5%; height: 50%;">	

<br><br>

<label>LAST_NAME</label>
<input type="text" name="LAST_NAME" required=""  style="width: 88.5%; height: 50%;">	

<br><br>

<label>TELEPHONE</label>
<input type="phone" name="TELEPHONE" required="" style="width: 88.5%; height: 50%;">	



<div class="input-group">
<button onclick="return confirm('Are you sure!! You want to Save Data ?')" type="submit" name="next" class="btns">Next</button>	
<button onclick="return confirm('Are you sure!! You want to Clear Data ?')" type="reset" name="reset" class="clear" id="clear">Clear</button>	


</div>
<br><br><br>

<p style="color: #ffffff;float: left;">
	
	Wanna Check_Data ? &nbsp&nbsp<a onclick="return confirm('Are you sure!! you want to check users')" href="people_details.php" style="color: #271c02; font-size: 20px; border: 10px; "  >Check Now !!</a>

</p>

<br>



</form>

</body>
</html>