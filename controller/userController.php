<!-------------- PAGE "Mon compte" DE L'UTILISATEUR ------------------------>

<?php

    require "model/userModel.php";
if(isset($_SESSION['connecte']))
{
    

    $id_u = $_SESSION['id'];

    $reponse = displayReservedPlace($id_u);
    $info = displayInfo($id_u);



    if(isset($_POST['submit']))
    {
        
        $deb = $_POST['deb'];
        $fin = $_POST['fin'];
        
        reservePlace($id_u, $deb, $fin);
        
        var_dump($_POST);
        
        header("location:".BASE_URL."/userController");
    }
}
else
{
    header("location:index.php");
}
    require "view/userView.php";

?>