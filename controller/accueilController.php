<?php
//========== CONTROLLER ==========
  require "model/accueilModel.php";

//  $req = login();
//  if(isset)
    if(isset($_SESSION['connecte']))
    {
        $id_u = $_SESSION['id'];
        $reponse = getId($id_u);
    }


  require "view/accueilView.php"
?>
