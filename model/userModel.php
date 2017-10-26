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

    function displayReservedPlace($id_u)
    {
        global $bdd;

        $req = $bdd->prepare("SELECT p.nom_p, o.lvl, o.date_deb FROM place p, user u, occuper o WHERE o.id_p = p.id_p AND o.id_u = u.id_u AND u.id_u=".$id_u);
        $req->execute();

        return $req->fetch();
    }

    function displayInfo($id_u)
    {
        global $bdd;

        $req = $bdd->prepare("SELECT * FROM user WHERE id_u =".$id_u);
        $req->execute();

        return $req->fetch();
    }

//Liste des places
    function displayPlaceAttente($id_u)
    {
        global $bdd;

        $req = $bdd->prepare("SELECT p.nom_p, o.date_deb FROM place p, user u, occuper o WHERE o.id_p = p.id_p AND o.id_u = u.id_u AND u.id_u = :id_u AND o.lvl = 0");
        $req->bindValue("id_u", $id_u, PDO::PARAM_INT);
        $req->execute();

        return $req;
    }

    function displayPlaceValide($id_u)
    {
        global $bdd;

        $req = $bdd->prepare("SELECT p.nom_p, o.date_deb FROM place p, user u, occuper o WHERE o.id_p = p.id_p AND o.id_u = u.id_u AND u.id_u = :id_u AND o.lvl = 1");
        $req->bindValue("id_u", $id_u, PDO::PARAM_INT);
        $req->execute();

        return $req;
    }

    function displayPlaceDeny($id_u)
    {
        global $bdd;

        $req = $bdd->prepare("SELECT p.nom_p, o.date_deb FROM place p, user u, occuper o WHERE o.id_p = p.id_p AND o.id_u = u.id_u AND u.id_u = :id_u AND o.lvl = 2");
        $req->bindValue("id_u", $id_u, PDO::PARAM_INT);
        $req->execute();

        return $req;
    }

?>
