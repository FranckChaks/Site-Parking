<?php
    //Controller
    require("model/adminModel.php");
    $titre = "Gestion Admin";
    $r = displayUser();

    if(isset($_GET['id']))
    {
        deleteUser($_GET['id']);
        header("location: index.php?p=adminController");
    }
    if (isset($_GET['id_p']))
    {
        
    }
    require("view/adminView.php");
?>