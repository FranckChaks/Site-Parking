<?php

    function getId($id_u)
    {
        global $bdd;
        
        $req = $bdd->prepare("SELECT id_u FROM user WHERE id_u =".$id_u);
        $req->execute();
        
        return $req->fetch();
    }
