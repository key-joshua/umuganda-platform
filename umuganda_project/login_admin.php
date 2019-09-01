<?php 
class Admin
{
	private $db;
	public function __construct()
	{
		try 
		{
			$conn = new PDO('mysql:host=localhost;dbname=umuganda_project', 'root', '');
			$this->db = $conn;
		}
		catch(PDOException $e)
		{
			print $e->getMessage();
			die();
		}
	}
	function verifyPass($input,$pass) {
		/*
		 Takes -> 2 Password strings
		 Returns -> true if matches false if doesn't
		*/
		  return crypt($input,$pass) == $pass? true : false ;
		}
	public function login($user, $pass, $level)
	{
		$q = $this->db->prepare("SELECT * FROM users WHERE username = :user AND level = :level ");
		$q->bindParam(':user', $user);
		$q->bindParam(':level', $level);
		try
		{
			$q->execute();
			if($q->rowCount() > 0)
			{
				$row = $q->fetch(PDO::FETCH_ASSOC);

				 
				if(crypt($pass,$row['password']) )
				{
					return true;
				}
				else
				{
					return false;
				}
			}
			else
			{
				return false;
			}
		}
		catch(PDOException $e)
		{
			print $e->getMessage();
			die();
		}
	}
	public function cekSession()
	{
			if(isset($_SESSION['id_number']) && $_SESSION['level'] == 1 )
			{
				
		        print '<div style="style="width: 7%;">
				<a style="color: #674d0d; font-size: 20px; margin-right: 10px;float: right;background-color: #9d9c9c;text-align: center;border-bottom: none;border-radius: 20px 20px 20px 20px;" href="index.php?logout">Logout</a></div>';
				include "home_reporter.php";

				return true;
			} 
			else if(isset($_SESSION['id_number']) && $_SESSION['level'] == 2 )
			{
				print '<div style="style="width: 7%;">
				<a style="color: #674d0d; font-size: 20px; margin-right: 10px;float: right;background-color: #9d9c9c;text-align: center;border-bottom: none;border-radius: 20px 20px 20px 20px;" href="index.php?logout">Logout</a></div>';
				include "home_agents.php";

				return true;
			} 


			else if(isset($_SESSION['id_number']) && $_SESSION['level'] == 3 )
			{
				print '<div style="style="width: 7%;">
				<a style="color: #674d0d; font-size: 20px; margin-right: 10px;float: right;background-color: #9d9c9c;text-align: center;border-bottom: none;border-radius: 20px 20px 20px 20px;" href="index.php?logout">Logout</a></div>';
				include "home_administration_office.php";
				return true;
			} 

			else if(isset($_SESSION['id_number']) && $_SESSION['level'] == 4 )
			{
				
				print '<div style="style="width: 7%;">
				<a style="color: #674d0d; font-size: 20px; margin-right: 10px;float: right;background-color: #9d9c9c;text-align: center;border-bottom: none;border-radius: 20px 20px 20px 20px;" href="index.php?logout">Logout</a></div>';
				include "home_admin.php";

				return true;
			} 
			else
			{
				return false;
			}
	}
}


?>
