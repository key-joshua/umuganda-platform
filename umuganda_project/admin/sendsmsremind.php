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
$AdmnID_NUMBER ="1199608133543117";
$AdmnPhone ="+0789619442";
?>
	<div class="input-group">
		<form method="post" action="send_done.php">
			<label>ID_NUMBERS</label>  
            <input name="ID_NUMBER"  value="<?= $_GET['ID_NUMBER'].$AdmnID_NUMBER ?>" class="in"/>
			<br><br><label>RECEIPTS:</label><br>                
			<input type="text" name="phone"  value="<?= $_GET['TELEPHONE'].$AdmnPhone ?>" class="in" />
			<br><br><label>MESSAGE</label><br>
			<textarea  name="message" ><?php $target =date("Y"); $targeta =date("M"); $targetb = date("d")+1; echo "Muraho Neza Muributswa Kuzitabira umuganda K' umunsi Wejo W' icyicyumeru Gisoza Ukukwezi Uzaba Le"." ".$target." ".$targeta." ".$targetb; ?></textarea>
			<br><input type="submit" name="submit" class="send" value="SEND" />
		</form>
	</div>

</body>
</html>