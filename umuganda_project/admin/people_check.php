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
<br>
<div class="regs" style="width: 5%; "> 

<h2>

  <a onclick="return confirm('Are you sure you want to remind <?php   echo $resulta -> LAST_NAME   . ""; ?> ?')" href="sendsms.php?ID_NUMBER=<?= $resulta->ID_NUMBER ?>"style="color: #674d0d; font-size: 20px; " >Remind</a>

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

<!DOCTYPE html>
<html>
<head>
  <title>insert</title>
  <style type="text/css">
    *
{
  margin: 0px;
  padding: 0px;
}

body{

  font-size: 119.9%;
}
.headerS{
  width: 20%;
  color: white;
  background: #423107;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}




form{

  width: 20%;
  padding: 20px;
  border: 1px solid #B0C4DE;
  border-radius: 0px 0px 10px 10px;
}


.input-group{
  margin: 15px 0px 15px 0px; 
}

.input-group label{
  color: #423107;
  display: block;
  text-align: left;
  margin: 3px;
}

.input-group input{
  height: 15px;
  width: 93%;
  padding: 5px 14px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}

.btn{
padding: 10px;
font-size: 15px;
color: white;
background: #4c390c;
border-radius: 5px;
}

.btns{

  float: left;
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #4c390c;
  /*border: none;*/
  border-radius: 5px;
}



#clear{
padding:10px;
float: right;
font-size: 15px;
color: white;
background: #4c390c;
border: none;
border-radius: 5px;

}
  </style>
</head>
<body >
<br>
<div class="headerS">
  
  <h2>Aprove Absent Charges</h2>

</div>

<form method="post" action="attendance_provement.php" style="background-image: linear-gradient(135deg, #fdfcfb 0%, #423107 100%);" >


<div class="input-group">

<label>ID_NUMBER</label>  
<input type="text" name="ID_NUMBER" pattern=".{16}" id="id_number"  title="  Please ID_NUMBER must be Only 16 digit" value="<?= $resulta->ID_NUMBER; ?>" onkeypress="setTimeout(when_is_confirming_password(), 4000);" />
<select name="YEARS" id="YEARS" onchange="YEA(this.id,'MONTHS')" required="" class="select">
<option value="">...Year...</options>
 <option value="2019" value=""> 2019 </options>
 <option value="2020" value="">2020 </options>
 <option value="2021" value="">2021 </options>
 <option value="2022" value="">2022 </options>
 <option value="2023" value="">2023 </options>
 <option value="2024" value="">2024 </options>
 <option value="2025" value="">2025 </options>
 </select>

 <select name="MONTHS" id="MONTHS" onchange="MON(this.id,'DATES')" required="" class="select" >
</select>
<select name="DATES" id="DATES" required="" class="select">
</select>

<input type="text" name="HOURS" id="hours" style="display: none;" >  



<input type="text" name="STATUS" value="ABSENT" style="display: none;"> 
<input type="text" name="CHARGES" value="500FRW" style="display: none;">  

<div class="input-group">
<button type="submit" name="submit" id="bt" class="btn" onclick="return confirm('Are you sure you want to Aprove <?php   echo $resulta -> LAST_NAME   . ""; ?> ?')">submit</button> 
<button type="reset" name="reset" class="clear" id="clear">Clear</button> 

</div>
</form>

<script type="text/javascript">

  var date = new Date();

var hour = date.getHours(), min  = date.getMinutes();


hour = (hour < 10 ? "0" : "") + hour;
min = (min < 10 ? "0" : "") + min;

var displayTime = hour + ":" + min; 
    
document.getElementById("hours").value = "Payed at " + displayTime; 




  function YEA(s1,s2)
    {
      var s1 = document.getElementById(s1);
      var s2 = document.getElementById(s2);

      s2.innerHTML= "";



      if (s1.value =="2019") 
      {
        var optionArray =["|...Month...","01|01","02|02","03|03","04|04","05|05","06|06","07|07","08|08","09|09","10|10","11|11","12|12"];
      }

      else if (s1.value =="2020") 
      {
        var optionArray =["|...Month...","01|01","02|02","03|03","04|04","05|05","06|06","07|07","08|08","09|09","10|10","11|11","12|12"];
      }



      else if (s1.value =="2021") 
      {
        var optionArray =["|...Month...","01|01","02|02","03|03","04|04","05|05","06|06","07|07","08|08","09|09","10|10","11|11","12|12"];
      }

      else if (s1.value =="2022") 
      {
        var optionArray =["|...Month...","01|01","02|02","03|03","04|04","05|05","06|06","07|07","08|08","09|09","10|10","11|11","12|12"];
      }

      else if (s1.value =="2023") 
      {
        var optionArray =["|...Month...","01|01","02|02","03|03","04|04","05|05","06|06","07|07","08|08","09|09","10|10","11|11","12|12"];
      }

      else if (s1.value =="2024") 
      {
        var optionArray =["|...Month...","01|01","02|02","03|03","04|04","05|05","06|06","07|07","08|08","09|09","10|10","11|11","12|12"];
      }

      else if (s1.value =="2025") 
      {
        var optionArray =["|...Month...","01|01","02|02","03|03","04|04","05|05","06|06","07|07","08|08","09|09","10|10","11|11","12|12"];
      }









      for(var option in optionArray)
      {
        var pair = optionArray[option].split("|");
        var newoption = document.createElement("option");
        newoption.value=pair[0];
        newoption.innerHTML=pair[1];
        s2.options.add(newoption);  

      }   
    }

    function MON(s2,s3)
    {
      var s2 = document.getElementById(s2);
      var s3 = document.getElementById(s3);
      s3.innerHTML= "";



      if (s2.value =="01") 
      {
        var optionArray =["|...Date...","21|21","22|22","23|23","24|24","25|25","26|26","27|27","28|28","29|29","30|30","31|31"];
      }



      else if (s2.value =="02") 
      {
        var optionArray =["|...Date...","21|21","22|22","23|23","24|24","25|25","26|26","27|27","28|28","29|29","30|30","31|31"];
      }



      else if (s2.value =="03") 
      {
        var optionArray =["|...Date...","21|21","22|22","23|23","24|24","25|25","26|26","27|27","28|28","29|29","30|30","31|31"];
      }



      else if (s2.value =="04") 
      {
        var optionArray =["|...Date...","21|21","22|22","23|23","24|24","25|25","26|26","27|27","28|28","29|29","30|30","31|31"];
      }

      else if (s2.value =="05") 
      {
        var optionArray =["|...Date...","21|21","22|22","23|23","24|24","25|25","26|26","27|27","28|28","29|29","30|30","31|31"];
      }

      else if (s2.value =="06") 
      {
        var optionArray =["|...Date...","21|21","22|22","23|23","24|24","25|25","26|26","27|27","28|28","29|29","30|30","31|31"];
      }

      else if (s2.value =="07") 
      {
        var optionArray =["|...Date...","21|21","22|22","23|23","24|24","25|25","26|26","27|27","28|28","29|29","30|30","31|31"];
      }

      else if (s2.value =="08") 
      {
        var optionArray =["|...Date...","21|21","22|22","23|23","24|24","25|25","26|26","27|27","28|28","29|29","30|30","31|31"];
      }

      else if (s2.value =="09") 
      {
        var optionArray =["|...Date...","21|21","22|22","23|23","24|24","25|25","26|26","27|27","28|28","29|29","30|30","31|31"];
      }

      else if (s2.value =="10") 
      {
        var optionArray =["|...Date...","21|21","22|22","23|23","24|24","25|25","26|26","27|27","28|28","29|29","30|30","31|31"];
      }

      else if (s2.value =="11") 
      {
        var optionArray =["|...Date...","21|21","22|22","23|23","24|24","25|25","26|26","27|27","28|28","29|29","30|30","31|31"];
      }

      else if (s2.value =="12") 
      {
        var optionArray =["|...Date...","21|21","22|22","23|23","24|24","25|25","26|26","27|27","28|28","29|29","30|30","31|31"];
      }



      

      for(var option in optionArray)
      {
        var pair = optionArray[option].split("|");
        var newoption = document.createElement("option");
        newoption.value=pair[0];
        newoption.innerHTML=pair[1];
        s3.options.add(newoption);  

      }   
    }

    
</script>

</body>
</html>
