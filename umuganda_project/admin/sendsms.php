<!DOCTYPE html>
<html>
<head>
	<title>Notify Absent User</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Josue BYIRINGIRO">
    <link rel="stylesheet" type="text/css" href="css/sms.css">

</head>


<body >

	<div class="header" ><h2>Notify Users</h2></div>
<?php

include('connection.php');
$ID_NUMBER = $_GET['ID_NUMBER'];
$sql1 = 'SELECT * FROM   umuganda_project WHERE ID_NUMBER=:ID_NUMBER';
$query1 = $db -> prepare($sql1);
$query1->execute([':ID_NUMBER' => $ID_NUMBER ]);
$results1 = $query1 -> fetchAll(PDO::FETCH_OBJ);

if($query1 -> rowCount() > 0)
{
foreach($results1 as $resulta)
{
  
} 

}
?>
	<div class="input-group">
		<form method="post" action="sendapismsphp.php">
			<label>ID_NUMBER</label>  
            <input name="ID_NUMBER"  value="<?= $resulta->ID_NUMBER; ?>" class="in"/>
			<br><label>Name:</label><br>
			<input type="text" name="username" value="Umuganda" class="in" />
			<br><label>hash:</label><br>
			<input type="text" name="hash" value="key07202020"  class="in" />
			<br><label>sender:</label><br>
			<input type="text" name="sender"value="0789619442"  class="in" />
			<br><label>number:</label><br>                
			<input type="text" name="num"  value="<?= $resulta->TELEPHONE; ?>" />
			<br><label>message</label><br>
			<textarea  name="mess" value="hdbsds" >Muributswa Kwishyura Amafaranga Y 'amanade Y'umuganda</textarea>
			<br><input type="submit" name="sender" class="send" value="SEND" />
		</form>
	</div>

</body>
</html>