<?php
    require "model/adminModel.php";
    $id_p = $_GET['id'];

    deleteUsedPlace($id_p);

    header("location:".BASE_URL."/adminController");