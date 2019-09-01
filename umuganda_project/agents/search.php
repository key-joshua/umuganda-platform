
<?php
require 'connection.php';
$sql="SELECT * FROM umuganda_project where PROVINCE like ?";
$statement = $db->prepare($sql);
$search = $_POST['search'];
$statement->execute(array("%$search%"));
$people = $statement->fetchAll(PDO::FETCH_OBJ);

$sql1="SELECT * FROM umuganda_project where DISTRICT like ?";
$statement1 = $db->prepare($sql1);
$search1 = $_POST['search'];
$statement1->execute(array("%$search1%"));
$people1 = $statement1->fetchAll(PDO::FETCH_OBJ);

$sql2="SELECT * FROM umuganda_project where CELL like ?";
$statement2 = $db->prepare($sql2);
$search2 = $_POST['search'];
$statement2->execute(array("%$search2%"));
$people2 = $statement2->fetchAll(PDO::FETCH_OBJ);



$sql3="SELECT * FROM umuganda_project where VILLAGE like ?";
$statement3 = $db->prepare($sql3);
$search3 = $_POST['search'];
$statement3->execute(array("%$search3%"));
$people3 = $statement3->fetchAll(PDO::FETCH_OBJ);




$sql4="SELECT * FROM umuganda_project where FIRST_NAME like ?";
$statement4 = $db->prepare($sql4);
$search4 = $_POST['search'];
$statement4->execute(array("%$search4%"));
$people4 = $statement4->fetchAll(PDO::FETCH_OBJ);



$sql5="SELECT * FROM umuganda_project where LAST_NAME like ?";
$statement5 = $db->prepare($sql5);
$search5 = $_POST['search'];
$statement5->execute(array("%$search5%"));
$people5 = $statement5->fetchAll(PDO::FETCH_OBJ);



$sql6="SELECT * FROM umuganda_project where GENDER like ?";
$statement6 = $db->prepare($sql6);
$search6 = $_POST['search'];
$statement6->execute(array("%$search6%"));
$people6 = $statement6->fetchAll(PDO::FETCH_OBJ);



$sql7="SELECT * FROM umuganda_project where ID_NUMBER like ?";
$statement7 = $db->prepare($sql7);
$search7 = $_POST['search'];
$statement7->execute(array("%$search7%"));
$people7 = $statement7->fetchAll(PDO::FETCH_OBJ);



$sql8="SELECT * FROM umuganda_project where TELEPHONE like ?";
$statement8 = $db->prepare($sql8);
$search8 = $_POST['search'];
$statement8->execute(array("%$search8%"));
$people8 = $statement8->fetchAll(PDO::FETCH_OBJ);



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

  <div class="reg" style="width: 14%; "> 

<h2>

  <a onclick="return confirm('Are you sure !! You want to Make Attendance ?')" style="color: #674d0d; font-size: 20px; " href="attendance.php" >Make Attendance</a>

</h2>

  </div>

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
            <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp


              <a style="color: #08024f;font-size: 25px;" onclick="return confirm('Are you sure you want to Check this User?')" href="people_check.php?ID_NUMBER=<?= $person->ID_NUMBER ?>" class='btn btn-danger'>Check Me</a>

            </td>
          </tr>
        <?php endforeach; ?>





<?php foreach($people1 as $person1): ?>
          <tr><td><?= $person1->PROVINCE; ?></td>
            <td><?= $person1->DISTRICT; ?></td>
            <td><?= $person1->SECTOR; ?></td>
            <td><?= $person1->CELL; ?></td>
            <td><?= $person1->VILLAGE; ?></td>
            <td><?= $person1->GENDER; ?></td>
            <td><?= $person1->ID_NUMBER; ?></td>
            <td><?= $person1->FIRST_NAME; ?></td>
            <td><?= $person1->LAST_NAME; ?></td>
            <td><?= $person1->TELEPHONE; ?></td>
            <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

              <a style="color: #134805; font-size: 25px;" onclick="return confirm('Are you sure you want to Edit this User?')" href="people_edit.php?ID_NUMBER=<?= $person1->ID_NUMBER ?>" class="btn btn-info">Edit</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp


              <a style="color: #7d0511;font-size: 25px;" onclick="return confirm('Are you sure you want to delete this User?')" href="people_delete.php?ID_NUMBER=<?= $person1->ID_NUMBER ?>" class='btn btn-danger'>Delete</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp


              <a style="color: #08024f;font-size: 25px;" onclick="return confirm('Are you sure you want to Check this User?')" href="people_check.php?ID_NUMBER=<?= $person1->ID_NUMBER ?>" class='btn btn-danger'>Check Me</a>

            </td>
          </tr>
        <?php endforeach; ?>







<?php foreach($people2 as $person2): ?>
          <tr><td><?= $person2->PROVINCE; ?></td>
            <td><?= $person2->DISTRICT; ?></td>
            <td><?= $person2->SECTOR; ?></td>
            <td><?= $person2->CELL; ?></td>
            <td><?= $person2->VILLAGE; ?></td>
            <td><?= $person2->GENDER; ?></td>
            <td><?= $person2->ID_NUMBER; ?></td>
            <td><?= $person2->FIRST_NAME; ?></td>
            <td><?= $person2->LAST_NAME; ?></td>
            <td><?= $person2->TELEPHONE; ?></td>
            <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp


              <a style="color: #08024f;font-size: 25px;" onclick="return confirm('Are you sure you want to Check this User?')" href="people_check.php?ID_NUMBER=<?= $person2->ID_NUMBER ?>" class='btn btn-danger'>Check Me</a>

            </td>
          </tr>
        <?php endforeach; ?>






<?php foreach($people3 as $person3): ?>
          <tr><td><?= $person3->PROVINCE; ?></td>
            <td><?= $person3->DISTRICT; ?></td>
            <td><?= $person3->SECTOR; ?></td>
            <td><?= $person3->CELL; ?></td>
            <td><?= $person3->VILLAGE; ?></td>
            <td><?= $person3->GENDER; ?></td>
            <td><?= $person3->ID_NUMBER; ?></td>
            <td><?= $person3->FIRST_NAME; ?></td>
            <td><?= $person3->LAST_NAME; ?></td>
            <td><?= $person3->TELEPHONE; ?></td>
            <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

        

              <a style="color: #08024f;font-size: 25px;" onclick="return confirm('Are you sure you want to Check this User?')" href="people_check.php?ID_NUMBER=<?= $person3->ID_NUMBER ?>" class='btn btn-danger'>Check Me</a>

            </td>
          </tr>
        <?php endforeach; ?>




<?php foreach($people4 as $person4): ?>
          <tr><td><?= $person4->PROVINCE; ?></td>
            <td><?= $person4->DISTRICT; ?></td>
            <td><?= $person4->SECTOR; ?></td>
            <td><?= $person4->CELL; ?></td>
            <td><?= $person4->VILLAGE; ?></td>
            <td><?= $person4->GENDER; ?></td>
            <td><?= $person4->ID_NUMBER; ?></td>
            <td><?= $person4->FIRST_NAME; ?></td>
            <td><?= $person4->LAST_NAME; ?></td>
            <td><?= $person4->TELEPHONE; ?></td>
            <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

       

              <a style="color: #08024f;font-size: 25px;" onclick="return confirm('Are you sure you want to Check this User?')" href="people_check.php?ID_NUMBER=<?= $person4->ID_NUMBER ?>" class='btn btn-danger'>Check Me</a>

            </td>
          </tr>
        <?php endforeach; ?>





<?php foreach($people5 as $person5): ?>
          <tr><td><?= $person5->PROVINCE; ?></td>
            <td><?= $person5->DISTRICT; ?></td>
            <td><?= $person5->SECTOR; ?></td>
            <td><?= $person5->CELL; ?></td>
            <td><?= $person5->VILLAGE; ?></td>
            <td><?= $person5->GENDER; ?></td>
            <td><?= $person5->ID_NUMBER; ?></td>
            <td><?= $person5->FIRST_NAME; ?></td>
            <td><?= $person5->LAST_NAME; ?></td>
            <td><?= $person5->TELEPHONE; ?></td>
            <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

          

              <a style="color: #08024f;font-size: 25px;" onclick="return confirm('Are you sure you want to Check this User?')" href="people_check.php?ID_NUMBER=<?= $person5->ID_NUMBER ?>" class='btn btn-danger'>Check Me</a>

            </td>
          </tr>
        <?php endforeach; ?>





<?php foreach($people6 as $person6): ?>
          <tr><td><?= $person6->PROVINCE; ?></td>
            <td><?= $person6->DISTRICT; ?></td>
            <td><?= $person6->SECTOR; ?></td>
            <td><?= $person6->CELL; ?></td>
            <td><?= $person6->VILLAGE; ?></td>
            <td><?= $person6->GENDER; ?></td>
            <td><?= $person6->ID_NUMBER; ?></td>
            <td><?= $person6->FIRST_NAME; ?></td>
            <td><?= $person6->LAST_NAME; ?></td>
            <td><?= $person6->TELEPHONE; ?></td>
            <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

         
              <a style="color: #08024f;font-size: 25px;" onclick="return confirm('Are you sure you want to Check this User?')" href="people_check.php?ID_NUMBER=<?= $person6->ID_NUMBER ?>" class='btn btn-danger'>Check Me</a>

            </td>
          </tr>
        <?php endforeach; ?>




<?php foreach($people7 as $person7): ?>
          <tr><td><?= $person7->PROVINCE; ?></td>
            <td><?= $person7->DISTRICT; ?></td>
            <td><?= $person7->SECTOR; ?></td>
            <td><?= $person7->CELL; ?></td>
            <td><?= $person7->VILLAGE; ?></td>
            <td><?= $person7->GENDER; ?></td>
            <td><?= $person7->ID_NUMBER; ?></td>
            <td><?= $person7->FIRST_NAME; ?></td>
            <td><?= $person7->LAST_NAME; ?></td>
            <td><?= $person7->TELEPHONE; ?></td>
            <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

              

              <a style="color: #08024f;font-size: 25px;" onclick="return confirm('Are you sure you want to Check this User?')" href="people_check.php?ID_NUMBER=<?= $person7->ID_NUMBER ?>" class='btn btn-danger'>Check Me</a>

            </td>
          </tr>
        <?php endforeach; ?>




<?php foreach($people8 as $person8): ?>
          <tr><td><?= $person8->PROVINCE; ?></td>
            <td><?= $person8->DISTRICT; ?></td>
            <td><?= $person8->SECTOR; ?></td>
            <td><?= $person8->CELL; ?></td>
            <td><?= $person8->VILLAGE; ?></td>
            <td><?= $person8->GENDER; ?></td>
            <td><?= $person8->ID_NUMBER; ?></td>
            <td><?= $person8->FIRST_NAME; ?></td>
            <td><?= $person8->LAST_NAME; ?></td>
            <td><?= $person8->TELEPHONE; ?></td>
            <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp


              <a style="color: #08024f;font-size: 25px;" onclick="return confirm('Are you sure you want to Check this User?')" href="people_check.php?ID_NUMBER=<?= $person8->ID_NUMBER ?>" class='btn btn-danger'>Check Me</a>

            </td>
          </tr>
        <?php endforeach; ?>




</table>

</body>
</html>

