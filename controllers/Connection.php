<?php 
	

class Connection
{
	
	public static function make()
	{
		try{
			$bdd = new PDO("mysql:host=localhost;dbname=user18", "user18", "fK63_WVd");
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
}


?>