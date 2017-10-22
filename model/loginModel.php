<?php

  function login($email, $mdp)
  {
      global $bdd;

      $req = $bdd -> prepare("SELECT * FROM user WHERE email = :email AND mdp = :mdp");
      $req->bindValue("email", $email, PDO::PARAM_STR);
      $req->bindValue("mdp", $mdp, PDO::PARAM_STR);
      $req->execute();

      $_SESSION['id'] = $resultat['id_u'];
      $_SESSION['email'] = $resultat['email'];
      $_SESSION['lvl'] = $resultat['lvl'];
<<<<<<< HEAD
      
      $resultat = $req->fetch();
  }
=======

      return $resultat;
>>>>>>> 623f2505ca7d2c1d249d03b64f165e5c79640ed8

?>
