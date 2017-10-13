<?php

  function login($email, $mdp, $bdd)
  {
      $req = $bdd -> prepare("SELECT * FROM user WHERE email = :email AND mdp = :mdp");
      $req->bindValue("email", $email, PDO::PARAM_STR);
      $req->bindValue("mdp", $mdp, PDO::PARAM_STR);
      $req->execute();

      $_SESSION['id'] = $resultat['id_u'];
      $_SESSION['email'] = $resultat['email'];
      $_SESSION['lvl'] = $resultat['lvl'];

      $resultat = $req->fetch();
  }
?>
