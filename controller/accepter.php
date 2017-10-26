<?php
    require "model/adminModel.php";
    $id_p = $_GET['id_p'];
    $id_u = $_SESSION['id'];

    acceptPlace($id_p);

    header("location:".BASE_URL."/adminController");