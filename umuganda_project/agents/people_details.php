
<?php
require 'connection.php';
$sql = 'SELECT * FROM umuganda_project';
$statement = $db->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>

<!DOCTYPE html>
<html>
<head>
    
	<title>all people's details</title> 
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


<div class="header"><h2>All People's Details</h2></div>



<div class="reg" style="width: 8%; "> 

<h2>

 <a onclick="return confirm('Are you sure !! You want Move ?')" style="color: #674d0d; font-size: 20px; " href="../index.php" >Home Page </a>


</h2>

  </div>

  <div class="reg" style="width: 12%; "> 

<h2>

  <a onclick="return confirm('Are you sure !! You want to add new people ?')" style="color: #674d0d; font-size: 20px; " href="umuganda_form1.php" >Add New People</a>

</h2>

  </div> </div>


   <div class="regs" style="width: 5%; "> 

<h2>

  <a onclick="return confirm('Are you sure you want to print report ?')" href="people_details_report.php"style="color: #674d0d; font-size: 20px; " >Report</a>

</h2>
</div>

<form method="post" action="search.php" style="float: right;margin-right: 20px">
<table border=0>
<tr> <td><input type="text" name="search"></td>
<td><input type="submit" name="search2" value="search"></td></tr>
</table>
</form>



  <div class="all_mentors" style="width: 85.5%">
<h2>All People's Details</h2>

  </div>







  <table class="table"style="width: 88%" border="5" align="center" > 

<tr class="tr"> 
<th class="th"> PROVINCE </th> 
<th class="th"> DISTRICT </th>
<th class="th"> SECTOR </th>
<th class="th"> CELL </th>
<th class="th"> VILLAGE </th>
<th class="th"> GENDER </th>
<th class="th"> ID_NUMBER </th> 
<th class="th"> FIRST NAME </th>
<th class="th"> LAST NAME </th>
<th class="th"> TELEPHONE </th>
<th class="th"> ACTION </th>  
</tr>



<?php foreach($people as $person): ?>
          <tr><td><?= $person->PROVINCE; ?></td>
            <td><?= $person->DISTRICT; ?></td>
            <td><?= $person->SECTOR; ?></td>
            <td><?= $person->CELL; ?></td>
            <td><?= $person->VILLAGE; ?></td>
            <td><?= $person->GENDER; ?></td>
            <td><?= $person->ID_NUMBER; ?></td>
            <td><?= $person->FIRST_NAME; ?></td>
            <td><?= $person->LAST_NAME; ?></td>
            <td><?= $person->TELEPHONE; ?></td>
            <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp


            

              <a style="color: #08024f;font-size: 25px;" onclick="return confirm('Are you sure you want to Check this User?')" href="people_check.php?ID_NUMBER=<?= $person->ID_NUMBER ?>" class='btn btn-danger'>Check Me</a>

            </td>
          </tr>
        <?php endforeach; ?>





</table>

</body>
</html>

