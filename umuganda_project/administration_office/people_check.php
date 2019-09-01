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


//DISPLAY PROFILES CODES


?>
<!DOCTYPE html>
<html>
<head>
    
  <title>check people's profile</title> 
  <style type="text/css">


*
{
  margin: 0px;
  padding: 0px;
}

.heads{

  margin: 50px 50px auto;
  color: #674d0d;
  font-size: 25px;
  font-family: "Times New Roman", Times, serif;


  
}


.header{

  margin: auto;
  color: #674d0d;
  text-align: center;
  font-family: "Times New Roman", Times, serif;


  
}

.description{
  
  
 
  margin: 30px auto;
  text-align: center;
  
}
.reg{
  
  margin: 5px auto 0px;
  color: white;
  background-color: #9d9c9c;
  text-align: center;
  border-bottom: none;
  border-radius: 20px 20px 20px 20px;
  
}

.regs{
  
  margin-left: 10px;
  color: white;
  background-color: #9d9c9c;
  text-align: center;
  border-bottom: none;
  border-radius: 20px 20px 20px 20px;
  
}

.all_mentors{

  margin: 0px auto 0px;
  background-image: linear-gradient(135deg, #fdfcfb 0%, #423107 100%);
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;;
  border-radius: 20px 20px 0px 0px;
  padding: 20px;
}



table{

  background-color: #4c390c;
  margin: auto;
}

table th{
  height: 50px;
}
  



  </style>


</head>

<body style="
        background: #aaaea2;">

 <div class="heads"><h2>

<?php   echo $resulta -> LAST_NAME   . ""; ?> <?php   echo $resulta -> FIRST_NAME   . ""; ?> 's Profile </h2>
<?php   echo $resulta -> AVATAR   . ""; ?>
<h4> LAST_NAME : <?php   echo $resulta -> LAST_NAME   . ""; ?> </h4>
<h4> FIRST_NAME : <?php   echo $resulta -> FIRST_NAME   . ""; ?> </h4>
<h4> ID_NUMBER : <?php   echo $resulta -> ID_NUMBER   . ""; ?> </h4>

</div>






<div class="reg" style="width: 7%; "> 



<h2>

 <a onclick="return confirm('Are you sure !! You want Move ?')" style="color: #674d0d; font-size: 20px; " href="../index.php" >Home Page </a>


</h2>

  </div>

  <div class="reg" style="width: 12%; "> 

<h2>

  <a onclick="return confirm('Are you sure !! You want to move to All peoples details ?')" style="color: #674d0d; font-size: 20px; " href="people_details.php" >All People's Details</a>

</h2>
</div>

 <div class="regs" style="width: 5%; "> 

<h2>

  <a onclick="return confirm('Are you sure you want to print report ?')" href="report.php?ID_NUMBER=<?= $resulta->ID_NUMBER ?>"style="color: #674d0d; font-size: 20px; " >Report</a>

</h2>
</div>

<div class="header" style=" color: #674d0d ;width: 76%"><h2>

<?php   echo $resulta -> FIRST_NAME   . ""; ?>'s Attendance Details</h2></div>

  <table class="all_mentors" style="width: 80%;" border="5" align="center" > 

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


</body>
</html>
