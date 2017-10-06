<?php
  function signIn($nom, $prenom $email, $mdp, $confirm, $bdd)
  {
    if(empty($nom) OR empty($prenom) OR empty($email) OR empty($mdp) OR empty($confirm))
    {
      $error = "Veuillez remplir tous les champs du formulaire";
      return $error;
    }
    else
    {
      if($mdp != $confirm)
      {
        $error = "Les mots de passe ne correspondent pas";
        return $error;
      }
      else
      {
        $req = $bdd->prepare("SELECT * FROM user WHERE login = :login");
        $req->bindValue('login', $login, PDO::PARAM_STR);
        $req->execute();
        $rep = $req->fetch();

        if($rep)
        {
          $error = "Ce login est déja utilisé";
          return $error;
        }
        else
        {
          $crypt = sha1($mdp);

          $req = $bdd->prepare("INSERT INTO user (id_u, nom, prenom, email, mdp, lvl) VALUES (NULL, :nom, :prenom, :email, :mdp, 1)");
          $req->bindValue('nom', $nom, PDO::PARAM_STR);
          $req->bindValue('prenom', $prenom, PDO::PARAM_STR);
          $req->bindValue('email', $email, PDO::PARAM_STR);
          $req->bindValue('mdp', $mdp, PDO::PARAM_STR);
          $req->execute();

          $rep = $req->fetch();

          $_SESSION['id'] = $bdd->lastInsertId();
          $_SESSION['nom'] = $rep['nom'];
          $_SESSION['prenom'] = $rep['prenom'];
          $_SESSION['email'] = $rep['email'];
          $_SESSION['lvl'] = $rep['lvl'];

          header("Location:index.php");
        }
      }
    }
  }


  function login($email, $mdp, $bdd)
  {
    if(empty($email) OR empty($mdp))
    {
      $error = "<div class =' alert alert-warning error col-lg-3'>Veuillez remplir tous les champs du formulaire.</div>";
      return $error;
    }
    else
    {
      $req = $bdd -> prepare("SELECT * FROM user WHERE email = :email AND mdp = :mdp");
      $req->execute(array(
        'email'=>$email,
        'mdp'=>sha1($mdp)
      ));
        
      $resultat = $req->fetch();

      if (!$resultat)
      {
        $error = "<div class =' alert alert-warning error col-lg-3'>Mauvais identifiant ou mot de passe !</div>";
        return $error;
      }
      else
      {
        $_SESSION['id'] = $resultat['id_u'];
        $_SESSION['email'] = $resultat['email'];
        $_SESSION['lvl'] = $resultat['lvl'];

        header("Location:index.php");
      }
    }
  }
?>