
<?php
    require("model/adminModel.php");
    $titre = "Gestion Admin";
    $r = displayUser();

    if(isset($_GET['id']))
    {
        deleteUser($_GET['id']);
        header("location: index.php?p=adminController");
    }
    require("view/adminView.php");
?>




