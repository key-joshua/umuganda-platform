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