<!DOCTYPE html>
<html>
<head>
	<title>insert</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body  style="background-image: linear-gradient(135deg, #fdfcfb 0%, #423107 100%);" >

<div class="header">
	
	<h2>Make Attendance</h2>

</div>

<form method="post" action="attendance_inserts.php" style="background-image: linear-gradient(135deg, #fdfcfb 0%, #423107 100%);" >


<div class="input-group">

<label>ID_NUMBER</label>	
<input type="text" name="ID_NUMBER" pattern=".{16}" id="id_number"  title="  Please ID_NUMBER must be Only 16 digit" value="199" onkeypress="setTimeout(when_is_confirming_password(), 4000);" />
<input type="text" name="YEARS" id="years" style="display: none;">
<input type="text" name="MONTHS" id="months" style="display: none;">	
<input type="text" name="DATES" id="dates" style="display: none;">	
<input type="text" name="HOURS" id="hours" style="display: none;">	
<input type="text" name="STATUS" value="PRESENT" style="display: none;">	
<input type="text" name="CHARGES" value="NONE" style="display: none;">	

<div class="input-group">
<button type="submit" name="Register" id="bt" class="btn">submit</button>	
<button type="reset" name="reset" class="clear" id="clear">Clear</button>	

</div>
<div id="result"> </div>

</form>

<script type="text/javascript">

	var id_numbers = document.querySelector("#id_number");
	var dispay = document.querySelector("#result");
	var button = document.getElementById("bt");


        var when_is_confirming_password = () => 

		{

			document.getElementById('result').innerHTML = "<span style='color: #4a6611;'>Hey !! Insert 16 digits</span>"; 
		}

	var check_id_number = () =>
	{
		let check_input_id = id_numbers.value;

		if (check_input_id.length!== 16) 
		{
			dispay.innerHTML="<span style='color: #790707;'>Hey !! ID_NUMBER must be equal to 16 digits</span>";
		}
	}

	button.addEventListener("click", check_id_number);




var date = new Date();

var year = date.getFullYear();


var today = year;

document.getElementById('years').value = today;      



var date = new Date();

var month = date.getMonth() + 1;

month = (month < 10 ? "0" : "") + month;

var today =  month ;

document.getElementById('months').value = today;      




var date = new Date();

var day = date.getDate();
day = (day < 10 ? "0" : "") + day;

var today =  day;

document.getElementById('dates').value = today;  


var date = new Date();

var hour = date.getHours(), min  = date.getMinutes();


hour = (hour < 10 ? "0" : "") + hour;
min = (min < 10 ? "0" : "") + min;

var displayTime = hour + ":" + min; 
    
document.getElementById("hours").value = displayTime; 



</script>

</body>
</html>