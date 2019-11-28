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
$sql1 = 'SELECT * FROM umuganda_project INNER JOIN user_results ON umuganda_project.ID_NUMBER=user_results.ID_NUMBER WHERE user_results.ID_NUMBER=:ID_NUMBER';

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
			<br><label>RECEIPT:</label><br>                
			<input type="text" name="phone"  value="<?= $resulta->TELEPHONE; ?>" class="in" />
			<br><label>MESSAGE</label><br>
			<textarea  name="message" ><?php echo " Muributswa Kwishyura Amafaranga Y 'amanade Y'umuganda, Amezi udafiteho ikibazo nayangaya akurikira => "; foreach($results1 as $resulta) echo "  ".$resulta -> YEARS." ".$resulta -> MONTHS.", "; echo "Ayandi mezi yose akurikiyeho ugomba kuyishyura kandi burikwezi kuzajya kwishyura 500frw"  ?></textarea>
			<br><input type="submit" name="submit" class="send" value="SEND" onclick="return confirm('Are you sure do you want to remind <?= $resulta->LAST_NAME; ?> ?')" />
		</form>
	</div>

</body>
</html>