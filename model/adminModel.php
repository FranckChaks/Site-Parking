<?php

    

    function displayUser()
    {
        global $bdd;

        $req = $bdd->prepare("SELECT * FROM user where lvl < 3");
        $req->execute();
        
        return $req->fetchAll();
    }

    function deleteUser($id_u)
    {
        global $bdd;
        
        $req = $bdd->prepare("DELETE FROM user WHERE id_u =".$id_u);
        $req->execute();
        
        return $req->fetch();
    }

    function displayPlace($id_p, $id_u)
    {
        global $bdd;
        
        $req = $bdd->prepare("SELECT p.nom_p FROM place p, user u, occuper o WHERE o.id_p = p.id_p AND o.id_u = u.id_u AND u.id_u=".$id_u);
        $req->execute();
        
        return $req;
    }


?>