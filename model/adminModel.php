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

    function freePlace()
    {
        global $bdd;
        
        $req = $bdd->query("SELECT MIN(p.id_p) FROM place p WHERE p.id_p NOT IN (SELECT o.id_p FROM occuper o)");
        
        return $req->fetch();
    }

    function setPlace($id)
    {
        global $bdd;
        
        $res = freePlace();
        
        $req = $bdd->prepare("INSERT INTO occuper(id_u, id_p, date_deb, date_fin) VALUES (:id, :id_p, :date_deb, :date_fin)");
        $req->bindValue(":id", $id, PDO::PARAM_INT);
    }

?>