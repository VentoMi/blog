<?php 
	

class Connection
{
	
	public static function make()
	{
		try{
			$bdd = new PDO("mysql:host=hepl01.cblue.be;dbname=articles", "user18", "fK63_WVd");
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
}


?>