<?php
//error_reporting(0);
include "connection.php";
if(isset($_POST['signup']))
{
$Id_number=$_POST['id_number'];
$Username=$_POST['username']; 

$password=md5($_POST['password']); 
$Level=$_POST['level'];
$sql="INSERT INTO  users(id_number,username,password,level) VALUES(:id_number,:username,:password,:level)";
$query = $db->prepare($sql);
$query->bindParam(':id_number',$Id_number,PDO::PARAM_STR);
$query->bindParam(':username',$Username,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->bindParam(':level',$Level,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $db->lastInsertId();
if($lastInsertId)
{
	header('location:users_details.php');
}
else 
{

		header('location:users_details.php');
}
}

?>




<script>
function checkAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'id_number='+$("#id_number").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
<script type="text/javascript">
function valid()
{
if(document.signup.password.value!= document.signup.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.signup.confirmpassword.focus();
return false;
}
return true;
}
</script>




<!DOCTYPE html>
<html>
<head>
	<title>Sign_Up Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">



	<style type="text/css">

    body
{
  
  margin: 0;
  background: #aaaea2;
}

.header{
	width: 24%;
	margin: 10px auto 0px;
	color: white;background-image: linear-gradient(135deg, #fdfcfb 0%, #423107 100%);
	opacity: 0.6;
	text-align: center;
	border: 1px solid #B0C4DE;
	border-bottom: none;;
	border-radius: 20px 20px 0px 0px;
	padding: 20px;
}

.input-group{ 




	background-image: linear-gradient(135deg, #fdfcfb 0%, #423107 100%);
    width: 23.3%;
	margin: auto;
	padding: 25px;
	border: 1px solid #B0C4DE;
	border-radius: 0px 0px 10px 10px;
}






.input-group input{
  
	height: 20px;
	width: 80%;
	padding: 5px 14px;
	font-size: 16px;
	border-radius: 5px;
	border: 1px solid gray;
}

#field0{
	display: none;
}

.selec{
	width: 90%;
	padding: 0px 10px;
	border-radius: 5px;
	border: 1px solid gray;
}

.signins{
	margin-top: 10px;
	padding: 10px;
	font-size: 15px;
	color: white;
	background: #4c390c;
	border-radius: 5px;
	display: none;
}
.reg{
  
  margin: 5px auto 0px;
  color: white;
  background-color: #9d9c9c;
  text-align: center;
  border-bottom: none;
  border-radius: 20px 20px 20px 20px;
  
}


#result
{
	margin-top: 20px;
	font-size: 20px;
	font-weight: bold;
	color:#525252;


}
	</style>


</head>


<body>




	<div class="header" style="width: 570px"><h2>Welcome To The System</h2></div>

	<div class="header" ><h2>Sign_up</h2></div>
	






	<div class="input-group">

<form  method="post" name="signup" onSubmit="return valid();">

		<label>ID_NUMBER</label>
		<input type="text" class="form-control" name="id_number"  onBlur="checkAvailability()" required="required">

		<label>USERNAME</label>
		<input type="text" class="form-control" name="username"  maxlength="10" required="required">
                



		<label>PASSWORD</label>
		<input type="password" class="form-control" name="password"  required="required">
                
		<label>CONFIRM_PASSWORD</label>
		 <input type="password" class="form-control" name="confirmpassword"  required="required">

<br><br>
		<select type="number" name="level" class="form-control" id="category" onchange="show('1','2','3','4', this)" required="">
    	<option value="">Category</option>
    	<option value="1">Reporter</option>
    	<option value="2">Agent </option>
    	<option value="3">Administration Officer</option>
    	<option value="4">Admin</option>
    </select>
<input type="checkbox" id="terms_agree" required="required" checked="">

		<button id="btn" name="signup"class="signins" id="submit" class="btn btn-block" >Add User</button><br>
		<button id="user" name="signup" class="signins" id="submit" class="btn btn-block">Add User</button>
		<button id="mentor" name="signup" class="signins" id="submit" class="btn btn-block" >Add User</button>
		<button id="admins" name="signup" class="signins" id="submit" class="btn btn-block">Add User</button>
		<button id="admin" name="signup" class="signins" id="submit" class="btn btn-block">Add User</button>

  <div class="reg" style="width: 35%; "> 

<h3>
  <a onclick="return confirm('Are you sure !! You want Move ?')" style="color: #674d0d; font-size: 20px; " href="../index.php" >Home Page </a>

</h3>

  </div> 


		<div id="result">               </div>



	</div>


	



	<script type="text/javascript">

		var i = document.querySelector("#field1");
		var ins = document.querySelector("#field2");
		var inp = document.querySelector("#field3");
		var inpt = document.querySelector("#field4");
		var dispaly_message = document.querySelector("#result");
		var but = document.getElementById("btn");
		var but = document.getElementById("user");
		var butt = document.getElementById("mentor");
		var butto = document.getElementById("admins");
		var buttos = document.getElementById("admin");

		let op_1 = "1";
		let op_2 = "2";
		let op_3 = "3";
		let op_4 = "4";

  let show = (users,mentors,admin,admins,element) =>
  {
    but.style.display = element.value === op_1 ? 'block' : 'none' ;
    butt.style.display = element.value === op_2 ? 'block' : 'none' ;
    butto.style.display = element.value === op_3 ? 'block' : 'none' ;
    buttos.style.display = element.value === op_4 ? 'block' : 'none' ;
  }

	
  

  //       var when_is_confirming_password = () => 

		// {

		// 	document.getElementById('result').innerHTML = "Hey !! You are Confirming... "; 
		// }

		// var Sign_ = ()=>

		// {
		// 	let check_fields = i.value;	
		// 	let check_fieldss = ins.value;
		// 	let check_fieldsss = inp.value;	
		// 	let check_fieldssss = inpt.value;

		// 	if (check_fields.length===0 ) 
		// 	{
		// 		dispaly_message.innerHTML="<span style='color: #790707;'>Hey !! Insert ID_NUMBER</span>";
		// 	}
		// 	else if (check_fieldss.length===0 ) 
		// 	{
		// 		dispaly_message.innerHTML="<span style='color: #790707;'>Hey !! Insert User Name</span>";
		// 	}
		// 	else if (check_fieldsss.length===0 ) 
		// 	{
		// 		dispaly_message.innerHTML="<span style='color: #790707;'>Hey !! Insert Password</span>";
		// 	}
		// 	else if (check_fieldssss!==check_fieldsss ) 
		// 	{
		// 		dispaly_message.innerHTML="<span style='color: #790707;'>Hey !! Insert Same Password</span>";
		// 	}
		// 	else
		// 	{
		// 		dispaly_message.innerHTML="<span style='color: #790707;'>Hey !! Insert Same Password</span>";
		// 	}}
		// but.addEventListener("click", Sign_);


		// var Sign_i = ()=>

		// {
		// 	let check_fields = i.value;	
		// 	let check_fieldss = ins.value;
		// 	let check_fieldsss = inp.value;	
		// 	let check_fieldssss = inpt.value;

		// 	if (check_fields.length===0 ) 
		// 	{
		// 		dispaly_message.innerHTML="<span style='color: #790707;'>Hey !! Insert ID_NUMBER</span>";
		// 	}
		// 	else if (check_fieldss.length===0 ) 
		// 	{
		// 		dispaly_message.innerHTML="<span style='color: #790707;'>Hey !! Insert User Name</span>";
		// 	}
		// 	else if (check_fieldsss.length===0 ) 
		// 	{
		// 		dispaly_message.innerHTML="<span style='color: #790707;'>Hey !! Insert Password</span>";
		// 	}
		// 	else if (check_fieldssss!==check_fieldsss ) 
		// 	{
		// 		dispaly_message.innerHTML="<span style='color: #790707;'>Hey !! Insert Same Password</span>";
		// 	}
		// 	else
		// 	{
		// 		dispaly_message.innerHTML="<span style='color: #790707;'>Hey !! Insert Same Password</span>";
		// 	}}
		// butt.addEventListener("click", Sign_i);



		// var Sign_in = ()=>

		// {
		// 	let check_fields = i.value;	
		// 	let check_fieldss = ins.value;
		// 	let check_fieldsss = inp.value;	
		// 	let check_fieldssss = inpt.value;

		// 	if (check_fields.length===0 ) 
		// 	{
		// 		dispaly_message.innerHTML="<span style='color: #790707;'>Hey !! Insert ID_NUMBER</span>";
		// 	}
		// 	else if (check_fieldss.length===0 ) 
		// 	{
		// 		dispaly_message.innerHTML="<span style='color: #790707;'>Hey !! Insert User Name</span>";
		// 	}
		// 	else if (check_fieldsss.length===0 ) 
		// 	{
		// 		dispaly_message.innerHTML="<span style='color: #790707;'>Hey !! Insert Password</span>";
		// 	}
		// 	else if (check_fieldssss!==check_fieldsss ) 
		// 	{
		// 		dispaly_message.innerHTML="<span style='color: #790707;'>Hey !! Insert Same Password</span>";
		// 	}
		// 	else
		// 	{
		// 		dispaly_message.innerHTML="<span style='color: #790707;'>Hey !! Insert Same Password</span>";
		// 	}}
		// butto.addEventListener("click", Sign_in);



		// var Sign_ins = ()=>

		// {
		// 	let check_fields = i.value;	
		// 	let check_fieldss = ins.value;
		// 	let check_fieldsss = inp.value;	
		// 	let check_fieldssss = inpt.value;

		// 	if (check_fields.length===0 ) 
		// 	{
		// 		dispaly_message.innerHTML="<span style='color: #790707;'>Hey !! Insert ID_NUMBER</span>";
		// 	}
		// 	else if (check_fieldss.length===0 ) 
		// 	{
		// 		dispaly_message.innerHTML="<span style='color: #790707;'>Hey !! Insert User Name</span>";
		// 	}
		// 	else if (check_fieldsss.length===0 ) 
		// 	{
		// 		dispaly_message.innerHTML="<span style='color: #790707;'>Hey !! Insert Password</span>";
		// 	}
		// 	else if (check_fieldssss!==check_fieldsss ) 
		// 	{
		// 		dispaly_message.innerHTML="<span style='color: #790707;'>Hey !! Insert Same Password</span>";
		// 	}
		// 	else
		// 	{
		// 		dispaly_message.innerHTML="<span style='color: #790707;'>Hey !! Insert Same Password</span>";
		// 	}}
		// buttos.addEventListener("click", Sign_ins);

	</script>



</body>
</html>