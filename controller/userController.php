<!-------------- PAGE "Mon compte" DE L'UTILISATEUR ------------------------>

<?php

    require "model/userModel.php";

    $id_u = $_SESSION['id'];

    $reponse = displayReservedPlace($id_u);
    $info = displayInfo($id_u);



    if(isset($_POST['submit']))
    {
        $deb = $_POST['deb'];
        $fin = $_POST['fin'];
        
        reservePlace($id_u, $deb, $fin);
        
        var_dump($_POST);
        
        header("location:index.php?p=userController&id=".$id_u);
    }

    require "view/userView.php";

?>