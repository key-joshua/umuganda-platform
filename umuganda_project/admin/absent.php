
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
<br>

<table class="all_mentors" style="width: 30%;" border="5" align="center" > 

<tr class="tr"> 
<th class="th"> ID_NUMBER </th>
<th class="th"> STATUS </th> 
</tr>




<?php

include('connection.php');

$target =23;
// $sql = 'SELECT ID_NUMBER, STATUS FROM user_results WHERE DATES !== 23';
// $sql = 'SELECT ID_NUMBER, STATUS FROM user_results WHERE DATES = 23';
$sql = 'SELECT ID_NUMBER, STATUS FROM user_results WHERE DATES = :target';
$query = $db -> prepare($sql);
// $query->execute([23]);
$query->execute([':target' => $target ]);
$results = $query -> fetchAll(PDO::FETCH_OBJ);

if($query -> rowCount() > 0)
{
foreach($results as $result)
{
  print "<tr><td>";
  echo $result -> ID_NUMBER   . "";
  print "</td>";
  print "<td>";
  echo $result -> STATUS;
  print "</td></tr>";
}}
?>

</table>

<!-- this is tricks because it takes only last Retrieved ID_NUMBER -->
<div class="regs" style="width: 5%; ">
<h2>

  <a onclick="return confirm('Are you sure you want to remind ?')" href="sendsms.php?ID_NUMBER=<?= $result->ID_NUMBER ?>"style="color: #674d0d; font-size: 20px; " >Remind</a>

</h2>
<!-- this is tricks -->

</div>
</body>
</html>
