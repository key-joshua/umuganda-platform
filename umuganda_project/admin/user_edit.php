<?php
require 'connection.php';
$id_number = $_GET['id_number'];
$sql = 'SELECT * FROM 	users WHERE id_number=:id_number';
$statement = $db->prepare($sql);
$statement->execute([':id_number' => $id_number ]);
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

if ( isset ($_POST['username']) && isset ($_POST['password']) && isset($_POST['level']) ) 
{
  $username = $_POST['username'];
  $password=$_POST['password'];
  $level=$_POST['level'];

  $sql = 'UPDATE users SET username=:username, password=:password, level=:level WHERE id_number=:id_number';
  $statement = $db->prepare($sql);


  if ($statement->execute([':id_number' => $id_number,':username' => $username, ':password' => $password, ':level' => $level])) 
  {
    header("Location: /umuganda_project/admin/users_details.php");
  }
}
?>

</div>
<form method="post" >
<div class="input-group"  >
<label>ID_NUMBER</label>
<input type="text" name="id_number" value="<?= $person->id_number; ?>" required="">
<label>DISTRICT</label>
<input type="text" name="username" value="<?= $person->username; ?>" required="">
<label>PASSWORD</label>
<input type="text" name="password" value="<?= $person->password; ?>" required="">
<label>CATEGORY</label>
<input type="text" name="level" value="<?= $person->level; ?>" required="">
<br>
<button onclick="return confirm('Are you sure!! You want to submit Data ?')" type="submit" name="next" class="btn">Change</button>	

</div>



<p>
	
	Wanna Check_Data ? 
	&nbsp;
	<a onclick="return confirm('Are you sure!! You want to Check Data ?')" href="users_details.php" style="color: #271c02; font-size: 20px;"  >Check Now !!</a>

</p>





</form>

</body>
</html>