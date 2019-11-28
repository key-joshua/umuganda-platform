<?php

try 
{
	$db=new PDO("mysql:host=localhost;dbname=umuganda_project","root","",[]);
	// echo "connection has been established well "."!!"." ";
}
catch (PDOException $e) 
{
//echo "error". $e->getMessage();
}

?>


<!-- <?php

// try 
{
// $db=new PDO(" pgsql:host='localhost' port='5432' dbname='umuganda_project' user='postgres' password='key07202020' ");
// echo "connection has been established well "."!!"." ";
}
// catch (PDOException $e) 
{
	// echo "error". $e->getMessage();
	
}

?> -->