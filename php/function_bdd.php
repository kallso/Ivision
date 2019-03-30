<?php

require "php/connect.php";

?>

<?php
	
	#Ajoute une propriété message
	function ajoutpropmessage($bdd, $propriete)
	{
		try{
			$reponse = $bdd ->query('INSERT INTO `proprietemessage`(`Statut`,`idmessage`) VALUES ("'.$propriete.'",0)');
		}
		catch(Exception $e)
		{
			die('Erreur : ' . $e->getMessage().'<br/>');
		}
	}
	
	
	#Supprime une propriété message
	function deletepropmessage($bdd, $selection)
	{
		try{
			$reponse = $bdd ->query('DELETE FROM `proprietemessage` WHERE `Statut` = "'.$selection.'"');
		}
		catch(Exception $e)
		{
			die('Erreur : ' . $e->getMessage().'<br/>');
		}
	}
	

	#Met à jour une propriété message
	function Majpropmessage($bdd, $statut, $proprietemessage)
	{
		try{	
			$reponse = $bdd ->query('UPDATE `proprietemessage` SET `Statut`="'.$proprietemessage.'" WHERE `Statut`= "'.$statut.'"');
		}
		catch(Exception $e)
		{
			die('Erreur : ' . $e->getMessage().'<br/>');
		}
	}
	
	
	#Affiche les produits
	function afficherProduits($bdd)
	{
		try {
			$reponse = $bdd->prepare('SELECT * FROM produits');
			$reponse->execute();
			return $reponse->fetchAll(PDO::FETCH_ASSOC);
		} catch(Exception $e){
			mail("mastergoupil@gmail.com", "Erreur site", $e->getMessage());
			return [];
		}	
	}
	
	
	#Stock un message dans la BDD
	function ajouterMessage($bdd, $nom, $email, $telephone, $Sujet, $message)
	{
		try{
			$reponse = $bdd ->prepare('INSERT INTO `messages`( `nom`, `email`, `telephone`, `sujet`, `message`) 
									  VALUES (?,?,?,?,?)');
			$reponse->bindParam(1,$nom, PDO::PARAM_STR,20);
			$reponse->bindParam(2,$email, PDO::PARAM_STR,40);
			$reponse->bindParam(3,$telephone, PDO::PARAM_STR,20);
			$reponse->bindParam(4,$Sujet, PDO::PARAM_STR,40);
			$reponse->bindParam(5,$message, PDO::PARAM_STR,579);
			$reponse->execute();
			
			echo '<script> document.getElementById("validate").style.display = "block" </script>';
			echo '<script> document.getElementById("transform").innerHTML = "<strong>Merci !</strong>"</script>';
			echo '<script> document.getElementById("delete").innerHTML = ""</script>';
		}
		catch(Exception $e)
		{
			die('Erreur : ' . $e->getMessage().'<br/>');
		}	
	}

	
	#Affiche les propriété message
	function propMessage ($bdd)
	{
		try
		{ 
			$reponse = $bdd ->query('SELECT Statut FROM proprietemessage');
			while ($donnees = $reponse ->fetch()) 
			{
				echo '<OPTION>'.$donnees ['Statut'];
			}    
		}
		catch(Exception $e)
		{
			die('Erreur : ' . $e->getMessage().'<br/>');
		}
	}
	
	#Affiche les propriété message sous forme de liste déroulante	
	function propMessagelist ($bdd)
	{
		try
		{ 
			$reponse = $bdd ->query('SELECT Statut FROM proprietemessage');
			echo '<form><SELECT name="statut" size="1">';
				while ($donnees = $reponse ->fetch()) 
				{
					echo '<OPTION>'.$donnees ['Statut'];
				}
			echo '</form>';
		}
		catch(Exception $e)
		{
			die('Erreur : ' . $e->getMessage().'<br/>');
		}
	}

?>