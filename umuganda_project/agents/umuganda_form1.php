<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>insert</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<SCRIPT language = "JavaScript" SRC = "js/valid_box.js"></SCRIPT>
</head>
<body style="
        background: #aaaea2;">

<div class="header">
	
	<h2>Register</h2>

</div>
<span id="error">


<?php
 if (!empty($_SESSION['error'])) {
 echo $_SESSION['error'];
 unset($_SESSION['error']);
 }
 ?>


</span>

<form method="post" action="umuganda_form2.php" style="background-image: linear-gradient(135deg, #fdfcfb 0%, #423107 100%);"  >

<div class="input-group"  >



<label>PROVINCE</label>
<select name="PROVINCE" id="PROVINCE" onchange="PROVINCEs(this.id,'DISTRICT')" required="" class="select">
 <option value=""></options>
 <option value="Kigali City" value="">Kigali City </options>
 <option value="Southern" value="">Southern </options>
 <option value="Northern" value="">Northern </options>
 <option value="Eastern" value="">Eastern </options>
 <option value="Western" value="">Western </options>
 </select>



<label>DISTRICT</label>
<select name="DISTRICT" id="DISTRICT" onchange="DISTRICTs(this.id,'SECTOR')" required="" class="select" >
</select>


<label>SECTOR</label>
<select name="SECTOR" id="SECTOR" onchange="SECTORs(this.id,'CELL')" required="" class="select">
</select>

<label>CELL</label>
<select name="CELL" id="CELL" onchange="CELLs(this.id,'VILLAGE')" required="" class="select">
</select>


<label>VILLAGE</label>
<select name="VILLAGE" id="VILLAGE" required="" class="select">
</select>

<label>RECORD_DATE</label>
<input type="date" name="RECORD_DATE" required=""  style="width: 88.5%; height: 50%;">	

</div>

<div class="input-group">
<button onclick="return confirm('Are you sure!! You want to Save Data ?')" type="submit" name="next" class="btn">Next</button>	
<button onclick="return confirm('Are you sure!! You want to Clear Data ?')" type="reset" name="reset" class="clear" id="clear">Clear</button>	


</div>

<p style="color: #ffffff;float: left;">
	
	Wanna Check_Data ? &nbsp&nbsp<a onclick="return confirm('Are you sure!! you want to check users')" href="people_details.php" style="color: #271c02; font-size: 20px; border: 10px; "  >Check Now !!</a>

</p>

<br>


</form>

</body>
</html>