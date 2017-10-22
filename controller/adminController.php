
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
<<<<<<< HEAD
?>
=======
?>




>>>>>>> 623f2505ca7d2c1d249d03b64f165e5c79640ed8
