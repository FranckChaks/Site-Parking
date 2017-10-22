
<?php
    //Controller
    require("model/adminModel.php");

    if($_SESSION['lvl'] == 3)
    {
        $titre = "Gestion Admin";
        $r = displayUser();

        if(isset($_GET['id']))
        {
            deleteUser($_GET['id']);
            header("location:".BASE_URL."/adminController");
        }
    }
    else
    {
        header("location: index.php");
    }
    if (isset($_GET['id_p']))
    {
        
    }
    require("view/adminView.php");
?>
