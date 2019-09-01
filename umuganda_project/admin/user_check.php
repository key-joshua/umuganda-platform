
<?php
require 'connection.php';
$sql="SELECT * FROM users where id_number like ?";
$statement = $db->prepare($sql);
$search = $_POST['search'];
$statement->execute(array("%$search%"));
$people = $statement->fetchAll(PDO::FETCH_OBJ);

$sql1="SELECT * FROM users where username like ?";
$statement1 = $db->prepare($sql1);
$search1 = $_POST['search'];
$statement1->execute(array("%$search1%"));
$people1 = $statement1->fetchAll(PDO::FETCH_OBJ);

$sql2="SELECT * FROM users where level like ?";
$statement2 = $db->prepare($sql2);
$search2 = $_POST['search'];
$statement2->execute(array("%$search2%"));
$people2 = $statement2->fetchAll(PDO::FETCH_OBJ);

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

<form method="post" action="user_check.php" style="float: right;margin-right: 20px">
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
<th class="th"> ID_NUMBER </th> 
<th class="th"> USER NAME </th>
<th class="th"> PASSWORD </th>
<th class="th"> CATEGORY </th>
<th class="th"> ACTION </th>  
</tr>



<?php foreach($people as $person): ?>
          <tr>

            <td><?= $person->id_number; ?></td>
            <td><?= $person->username; ?></td>
            <td><?= $person->password; ?></td>
            <td><?= $person->level; ?></td>
            <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

              <a style="color: #134805; font-size: 25px;" onclick="return confirm('Are you sure you want to Edit this User?')" href="user_edit.php?id_number=<?= $person->id_number ?>" class="btn btn-info">Edit</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp


              <a style="color: #7d0511;font-size: 25px;" onclick="return confirm('Are you sure you want to delete this User?')" href="user_delete.php?id_number=<?= $person->id_number ?>" class='btn btn-danger'>Delete</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp


              <a style="color: #08024f;font-size: 25px;" onclick="return confirm('Are you sure you want to Check this User?')" href="user_check.php?id_number=<?= $person->id_number ?>" class='btn btn-danger'>Check Me</a>

            </td>
          </tr>
        <?php endforeach; ?>



<?php foreach($people1 as $person1): ?>
          <tr>

            <td><?= $person1->id_number; ?></td>
            <td><?= $person1->username; ?></td>
            <td><?= $person1->password; ?></td>
            <td><?= $person1->level; ?></td>
            <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

              <a style="color: #134805; font-size: 25px;" onclick="return confirm('Are you sure you want to Edit this User?')" href="user_edit.php?id_number=<?= $person1->id_number ?>" class="btn btn-info">Edit</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp


              <a style="color: #7d0511;font-size: 25px;" onclick="return confirm('Are you sure you want to delete this User?')" href="user_delete.php?id_number=<?= $person1->id_number ?>" class='btn btn-danger'>Delete</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp


              <a style="color: #08024f;font-size: 25px;" onclick="return confirm('Are you sure you want to Check this User?')" href="user_check.php?id_number=<?= $person1->id_number ?>" class='btn btn-danger'>Check Me</a>

            </td>
          </tr>
        <?php endforeach; ?>




<?php foreach($people2 as $person2): ?>
          <tr>

            <td><?= $person2->id_number; ?></td>
            <td><?= $person2->username; ?></td>
            <td><?= $person2->password; ?></td>
            <td><?= $person2->level; ?></td>
            <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

              <a style="color: #134805; font-size: 25px;" onclick="return confirm('Are you sure you want to Edit this User?')" href="user_edit.php?id_number=<?= $person2->id_number ?>" class="btn btn-info">Edit</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp


              <a style="color: #7d0511;font-size: 25px;" onclick="return confirm('Are you sure you want to delete this User?')" href="user_delete.php?id_number=<?= $person2->id_number ?>" class='btn btn-danger'>Delete</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp


              <a style="color: #08024f;font-size: 25px;" onclick="return confirm('Are you sure you want to Check this User?')" href="user_check.php?id_number=<?= $person2->id_number ?>" class='btn btn-danger'>Check Me</a>

            </td>
          </tr>
        <?php endforeach; ?>






</table>

</body>
</html>

