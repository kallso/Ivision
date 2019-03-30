<?php	
	define('SERVEUR','mysql:host=localhost;dbname=ivision;charset=utf8');
	define('BASE','ivision');
	define('USER','root');
	define('MDP','');

	function connect()
	{
		try{
			$bdd = new PDO(SERVEUR, USER, MDP);
		}

		catch(Exception $e)
		{
			die('Erreur : ' . $e->getMessage().'<br/>');
		}
		
		return $bdd;
	}
	
	function deconnect ($bdd)
	{
		$bdd=null;
	}
?>