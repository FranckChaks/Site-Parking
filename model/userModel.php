<?php
    // Reserve de place lvl 0 pour en attente 1 pour accepté et 2 refusé
// Jonathan
    function reservePlace($id_u, $deb, $fin)
    {
        global $bdd;
        
        $req = $bdd->prepare("INSERT INTO occuper(id_u, id_p, date_deb, date_fin, lvl) VALUES (:id_u, (SELECT MIN(id_p) FROM place WHERE id_p NOT IN (SELECT id_p FROM occuper)), :deb, :fin, 0)");
        
        $req->bindValue(":id_u", $id_u, PDO::PARAM_INT);
        $req->bindValue(":deb", $deb, PDO::PARAM_STR);
        $req->bindValue(":fin", $fin, PDO::PARAM_STR);
        $req->execute();
        
        return $req->fetch();
    }

?>