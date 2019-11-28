<?php
require 'connection.php';
$target =date("Y");
$targeta =date("M");
$targetb = date("d");
$targetc = "PRESENT";
$targetd = "ABSENT";
$sql = 'SELECT * FROM umuganda_project';

$statement = $db->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>

<!DOCTYPE html>
<html>
<head>
    
  <title>All Rwandan People</title> 
  <style type="text/css">


*
{
  margin: 0px;
  padding: 0px;
}



.header{

  margin: 50px auto;
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

  margin: 50px auto 0px;
  color: #352603;
  background-image: linear-gradient(135deg, #fdfcfb 0%, #423107 100%);
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;;
  border-radius: 20px 20px 0px 0px;
  padding: 20px;
}



table{

  background-image: linear-gradient(135deg, #fdfcfb 0%, #423107 100%);
  margin: auto;
}

table th{

  height: 50px;
}

table tr{
  height: 30px;
}
  



  </style>


</head>

<body style="
        background: #aaaea2;">


<div class="header"><h2>All Rwandan People</h2></div>



<div class="reg" style="width: 8%; "> 

<h2>

<a onclick="return confirm('Are you sure !! You want Move ?')" style="color: #674d0d; font-size: 20px; " href="../index.php" >Home Page </a>


</h2>

  </div>

  <div class="reg" style="width: 10%; "> 

<h2>

  <a onclick="return confirm('Are you sure !! You want to move to All peoples details ?')" style="color: #674d0d; font-size: 20px; " href="people_details.php" >All People's Details</a>

</h2>
</div>

<br>
 <div class="regs" style="width: 5%; "> 
<h2>

<a onclick="return confirm('Are you sure you want to remind ?')" href="sendsmsremind.php?ID_NUMBER=<?php foreach($people as $result) echo $result -> ID_NUMBER   . ","  ?>&TELEPHONE=<?php foreach($people as $result) echo $result -> TELEPHONE   . ","  ?>"style="color: #674d0d; font-size: 20px; " >Remind</a> 

</h2>
</div>

<div class="all_mentors" style="width: 46%">
<h2>All Rwandan People</h2>
  </div>
  <table class="table"style="width: 48%" border="5" align="center" > 

<tr class="tr"> 
<th class="th"> ID_NUMBER </th>
<th class="th"> TELEPHONE </th>  
</tr>



<?php foreach($people as $person): ?>
          <tr>
            <td><?= $person->ID_NUMBER; ?></td>
            <td><?= $person->TELEPHONE; ?></td>
          </tr>
        <?php endforeach; ?>

</table>
<br><br>
</body>
</html>

