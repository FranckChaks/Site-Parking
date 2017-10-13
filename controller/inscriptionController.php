<?php 
    require "model/inscriptionModel.php";
    

     
    	if(isset($_POST['submit']))
	{
			$i = 0;
			$nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
			$email = $_POST['email'];
			$mdp = $_POST['mdp'];
			$confirm = $_POST['confirm'];
            $message = "";
        
			if(empty($nom))
			{
				$i++;
				$message .= "Le champ <b>nom</b> est vide <br/>";
			}
            if(empty($prenom))
			{
				$i++;
				$message .= "Le champ <b>prenom</b> est vide <br/>";
			}
			if(empty($email))
			{
				$i++;
				$message .= "Le champ <b>email</b> est vide <br/>";
			}
			if (empty($mdp))
			{
				$i++;
				$message .="Le champ <b>mdp</b> est vide <br/>";
			}
			if (empty($confirm))
			{
				$i++;
				$message .="Le champ de <b>confirmation de mot de passe</b> est vide <br/>";
			}
			
			if($mdp != $confirm)
			{
				$i++;
				$message .="Vos mots de passe ne correspondent pas <br/>";
			}
			
			else{
             $rep = signIn($nom, $prenom, $email, $mdp, $confirm);
        
             $_SESSION['connecte'] = true;
             $_SESSION['id'] = $bdd->lastInsertId();
             $_SESSION['nom'] = $nom;
             $_SESSION['prenom'] = $prenom;
             $_SESSION['email'] = $email;
             $_SESSION['lvl'] = 1;
            }
             
            
	}

          require "view/inscriptionView.php";?>