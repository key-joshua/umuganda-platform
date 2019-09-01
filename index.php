<?php 
session_start();
include_once('umuganda_project/login_admin.php');
$admin = new Admin();
if(isset($_POST['login']))
{
	$user = trim(strip_tags($_POST['user']));
	$pass = trim(strip_tags($_POST['pass']));
	$level = trim(strip_tags($_POST['level']));
	if($admin->login($user, $pass, $level))
	{
		$_SESSION['id_number'] = $user;
		$_SESSION['level'] = $level;
		header('location:index.php');
	}
	else
	{
		$msg = 'Hey!! Check Well Details';
	}
}
if(isset($_GET['logout']))
{
	session_destroy();
	header('location:home.php');
}
if(!$admin->cekSession())
{
?>

<!DOCTYPE html>
<html>
<head>
	<title>login into the system</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">



	<style type="text/css">

    body
{
  
  margin: 0;
  background: #aaaea2;"
}

.header{
	width: 24%;
	margin: 20px auto 0px;
	color: #674d0d;
	background-image: linear-gradient(135deg, #fdfcfb 0%, #423107 100%);
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

.signins{
	margin-top: 10px;
	padding: 10px;
	font-size: 15px;
	color: white;
	background: #4c390c;
	border-radius: 5px;
	display: none;
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

	<div class="header" ><h2>Sign_In</h2></div>
	






	<div class="input-group">


<form method="post">

		<label>User Name</label><br><br>
		<input type="text" name="user" id="email"  >


		<label>Password</label>
		<input type="Password" name="pass" id="pas"  >

		 <br><br>
    <select name="level" id="category" onchange="show('1','2','3','4', this)" required="">
    	<option value="">Category</option>
    	<option value="1">Reporter</option>
    	<option value="2">Agent </option>
    	<option value="3">Administration Officer</option>
    	<option value="4">Admin</option>
    </select>
    <br><br>


		<button id="user" name="login" class="signins" >Sign_In</button>
		<button id="mentor" name="login" class="signins" >Sign_In</button>
		<button id="admins" name="login" class="signins">Sign_In</button>
		<button id="admin" name="login" class="signins">Sign_In</button>


		<div id="result">               </div>

<center><?php print $msg = isset($msg) ? $msg : ''; ?></center>

</form>

	</div>


	



	<script type="text/javascript">

		var inpts = document.querySelector("#email");
		var inptss = document.querySelector("#pas");
		var dispaly_message = document.querySelector("#result");
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


        var when_is_writting_string = () => 

		{

			document.getElementById('result').innerHTML = "Hey !! You are Confirming... "; 
		}

		var Sig = ()=>

		{
			let check_fields = inpts.value;	
			let check_fieldss = inptss.value;	

			if (check_fields.length===0 ) 
			{
				dispaly_message.innerHTML="<span style='color: #790707;'>Hey !! Insert User Name</span>";
			}
			else if ( check_fieldss.length===0 ) 
			{
				dispaly_message.innerHTML="<span style='color: #790707;'>Hey !! Insert Password</span>";
			}
			else
			{
				window.location = "../users/home.html";
			}}
			but.addEventListener("click", Sig);

		var Sign = ()=>

		{
			let check_fields = inpts.value;	
			let check_fieldss = inptss.value;	

			if (check_fields.length===0 ) 
			{
				dispaly_message.innerHTML="<span style='color: #790707;'>Hey !! Insert User Name</span>";
			}
			else if ( check_fieldss.length===0 ) 
			{
				dispaly_message.innerHTML="<span style='color: #790707;'>Hey !! Insert Password</span>";
			}
			else
			{
				window.location = "../mentors/home.html";
			}}
		butt.addEventListener("click", Sign);

		var Sign_ = ()=>

		{
			let check_fields = inpts.value;	
			let check_fieldss = inptss.value;	

			if (check_fields.length===0 ) 
			{
				dispaly_message.innerHTML="<span style='color: #790707;'>Hey !! Insert User Name</span>";
			}
			else if ( check_fieldss.length===0 ) 
			{
				dispaly_message.innerHTML="<span style='color: #790707;'>Hey !! Insert Password</span>";
			}
			else
			{
				window.location = "../admin/home.html";
			}}
		butto.addEventListener("click", Sign_);

		var Sign_In = ()=>

		{
			let check_fields = inpts.value;	
			let check_fieldss = inptss.value;	

			if (check_fields.length===0 ) 
			{
				dispaly_message.innerHTML="<span style='color: #790707;'>Hey !! Insert User Name</span>";
			}
			else if ( check_fieldss.length===0 ) 
			{
				dispaly_message.innerHTML="<span style='color: #790707;'>Hey !! Insert Password</span>";
			}
			else
			{
				window.location = "../admin/home.html";
			}}
		butto.addEventListener("click", Sign_In);

	</script>



</body>
</html>

<?php } ?>