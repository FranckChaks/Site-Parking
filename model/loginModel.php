<?php

  function login($email, $mdp)
  {
      global $bdd;
      
      $req = $bdd -> prepare("SELECT * FROM user WHERE email = :email AND mdp = :mdp");
      $req->execute(array(
        'email'=>$email,
        'mdp'=>sha1($mdp)
      ));
        
      $_SESSION['id'] = $resultat['id_u'];
      $_SESSION['email'] = $resultat['email'];
      $_SESSION['lvl'] = $resultat['lvl'];
      
      $resultat = $req->fetch();

      return $resultat;

  }

?>