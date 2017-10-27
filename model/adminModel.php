<?php

//liste des Users
    function displayUser()
    {
        global $bdd;

        $req = $bdd->prepare("SELECT * FROM user where lvl < 3");
        $req->execute();

        return $req->fetchAll();
    }
//supprime User
    function deleteUser($id_u)
    {
        global $bdd;

        $req = $bdd->prepare("DELETE FROM user WHERE id_u =".$id_u);
        $req->execute();

        return $req->fetch();
    }

// Bannir user
    function banUser($id)
    {
        global $bdd;

        $req = $bdd->prepare("UPDATE user SET lvl = 0 WHERE id_u = :id");
        $req->bindValue(":id", $id, PDO::PARAM_INT);
        $req->execute();

        return $req->fetch();

    }


// Liste place libre
    function displayFreePlace()
    {
        global $bdd;

        $req = $bdd->query("SELECT MIN(p.id_p) FROM place p WHERE p.id_p NOT IN (SELECT o.id_p FROM occuper o)");

        return $req->fetch();
    }

// voir la liste d'attente des places pour accepter ou refuser les places
    function waitList()
    {
        global $bdd;

        $req = $bdd->query("SELECT u.nom, u.prenom, o.lvl, p.nom_p, p.id_p, o.date_deb FROM occuper o, user u, place p WHERE o.lvl = 0 AND o.id_p = p.id_p AND u.id_u = o.id_u ORDER BY o.timestamp DESC");

        return $req;
    }
// Accepter la place
    function acceptPlace($id_p)
    {
        global $bdd;

        $req = $bdd->prepare("UPDATE occuper SET lvl = 1 WHERE id_p = :id_p");
        $req->bindValue(":id_p", $id_p,  PDO::PARAM_INT);
        $req->execute();

        return $req->fetch();
    }
// Refuser La place
    function denyPlace($id_p)
    {
        global $bdd;

        $req = $bdd->prepare("UPDATE occuper SET lvl = 2 WHERE id_p = :id_p");
        $req->bindValue(":id_p", $id_p, PDO::PARAM_INT);
        $req->execute();

        return $req->fetch();
    }

    function addPlace($nom_p)
    {
        global $bdd;

        $req = $bdd->prepare("INSERT INTO place(nom_p) VALUES (:nom_p)");

        $req->bindValue(":nom_p", $nom_p,PDO::PARAM_STR);
        $req->execute();

        return $req->fetch();
    }















?>
