
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

<?php
require 'connection.php';
$sql = 'SELECT * FROM users';
$statement = $db->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);


?>
  <center>





<div class="reg" style="width: 4%; "> 

  <h2>

  <a onclick="printDiv('printableArea')" href="" style="color: #bf6d6d; font-size: 20px;" >Print </a>

</h2>

  </div>



  <div class="reg" style="width: 5%; "> 


<h2>

  <a onclick="return confirm('Are you sure you want to Turn?')" href="users_details.php" style="color: #bf6d6d; font-size: 20px;" >Back </a>

</h2>



  </div>


  <div class="reg" style="width: 8%; "> 

  <h2>

 <a onclick="return confirm('Are you sure !! You want Move ?')" style="color: #674d0d; font-size: 20px; " href="../index.php" >Home Page </a>


</h2>

  </div>


  </center>

<body style="background: #444444;">
  <div id="report" style="background:#fff;opacity: 0.5;width: 250mm;height: 290mm;border:4px solid black;margin:auto;background: #ffffff;">
    <h1><center>

       User Report 



    </h2></center></h1><hr style="height: 2px;background: #000;"><br>

   <table class="all_mentors" style="width: 80%;" border="2" align="center" > 

<tr class="tr"> 
<th class="th"> ID_NUMBER </th> 
<th class="th"> USER NAME </th>
<th class="th"> PASSWOERD </th>
<th class="th"> CATEGORY </th>
</tr>

<?php foreach($people as $person): ?>
          <tr><td><?= $person->id_number; ?></td>
            <td><?= $person->username; ?></td>
            <td><?= $person->password; ?></td>
            <td><?= $person->level; ?></td>
          </tr>
        <?php endforeach; ?>





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