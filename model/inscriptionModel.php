<?php
  function signIn($nom, $prenom, $email, $mdp, $confirm, $bdd)
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

  }



  
?>
