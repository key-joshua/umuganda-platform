
	<script type="text/javascript">
		function printDiv(report) {
     var printContents = document.getElementById('report').innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
	</script>
	<style type="text/css">
		.reg{
	
	margin: 5px auto 0px;
	color: white;
	background-color: #9d9c9c;
	text-align: center;
	border-bottom: none;
	border-radius: 20px 20px 20px 20px;
	
}
	</style>

	<center>


<?php

include('connection.php');
$ID_NUMBER = $_GET['ID_NUMBER'];
$sql1 = 'SELECT * FROM   user_results WHERE ID_NUMBER=:ID_NUMBER';
$query1 = $db -> prepare($sql1);
$query1->execute([':ID_NUMBER' => $ID_NUMBER ]);
$results1 = $query1 -> fetchAll(PDO::FETCH_OBJ);

if($query1 -> rowCount() > 0)
{
foreach($results1 as $resultA)
{
 


} 

};

?>
<?php

include('connection.php');
$ID_NUMBER = $_GET['ID_NUMBER'];
$sql1 = 'SELECT * FROM   umuganda_project WHERE ID_NUMBER=:ID_NUMBER';
$query1 = $db -> prepare($sql1);
$query1->execute([':ID_NUMBER' => $ID_NUMBER ]);
$results1 = $query1 -> fetchAll(PDO::FETCH_OBJ);

if($query1 -> rowCount() > 0)
{
foreach($results1 as $resultA)
{
 


} 

};

?>	




<div class="reg" style="width: 4%; "> 

	<h2>

  <a onclick="printDiv('printableArea')" href="" style="color: #bf6d6d; font-size: 20px;" >Print </a>

</h2>

  </div>



  <div class="reg" style="width: 5%; "> 


<h2>

  <a onclick="return confirm('Are you sure you want to Check this User?')" href="people_check.php?ID_NUMBER=<?= $resultA->ID_NUMBER ?>" style="color: #bf6d6d; font-size: 20px;" >Back </a>

</h2>



  </div>


  <div class="reg" style="width: 8%; "> 

	<h2>

 <a onclick="return confirm('Are you sure !! You want Move ?')" style="color: #674d0d; font-size: 20px; " href="../index.php" >Home Page </a>


</h2>

  </div>


	</center>

<body style="background: #444444;">
	<div id="report" style="background:#fff;opacity: 0.5;width: 210mm;height: 290mm;border:4px solid black;margin:auto;background: #ffffff;">
		<h1><center>

			<?php   echo $resultA -> LAST_NAME   . ""; ?> <?php   echo $resultA -> FIRST_NAME   . ""; ?> 's Attendance Report 



		</h2></center></h1><hr style="height: 2px;background: #000;"><br>

	 <table class="all_mentors" style="width: 80%;" border="2" align="center" > 

<tr class="tr"> 
<th class="th"> ID_NUMBER </th> 
<th class="th"> YEARS </th>
<th class="th"> MONTHS </th>
<th class="th"> DATES </th>
<th class="th"> HOURS </th>
<th class="th"> STATUS </th>
<th class="th"> CHARGES </th> 
</tr>



<?php

include('connection.php');
$ID_NUMBER = $_GET['ID_NUMBER'];
$sql = 'SELECT * FROM   user_results WHERE ID_NUMBER=:ID_NUMBER';
$query = $db -> prepare($sql);
$query->execute([':ID_NUMBER' => $ID_NUMBER ]);
$results = $query -> fetchAll(PDO::FETCH_OBJ);

if($query -> rowCount() > 0)
{
foreach($results as $result)
{
  print "<tr><td>";
  echo $result -> ID_NUMBER   . "";
  print "</td>";
  print "<td>";
  echo $result -> YEARS . "";
  print "</td>";
  print "<td>";
  echo $result -> MONTHS . "";
  print "</td>";
  print "<td>";
  echo $result -> DATES . "";
  print "</td>";
  print "<td>";
  echo $result -> HOURS . "";
  print "</td>";
  print "<td>";
  echo $result -> STATUS;
  print "</td>";
  print "<td>";
  echo $result -> CHARGES;
  print "</td></tr>";
} 

}


?>

</table>
<br>
<br>

<h3 id="dats" style="margin-left: 20px;"> </h3>
<h3 style="margin-left: 20px;"> Signature :.............................</h3>

<script type="text/javascript">


var date = new Date();

var year = date.getFullYear();
var month = date.getMonth() + 1;
month = (month < 10 ? "0" : "") + month;
var day = date.getDate();
day = (day < 10 ? "0" : "") + day;
var hour = date.getHours(), min  = date.getMinutes();
hour = (hour < 10 ? "0" : "") + hour;
min = (min < 10 ? "0" : "") + min;

var today = hour + ":" + min+"      "+"     "+"      "+"     "+day+"/ "+month+" /"+year;

var resulto = document.getElementById("dats");
resulto.innerHTML = today; 
    

</script>


</body>