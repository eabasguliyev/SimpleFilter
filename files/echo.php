<?php
    require_once "./functions.php";

    redirectToIndex();

    $makeName = $_POST['make'];
    $modelName = $_POST['model'];


    echo "$makeName - $modelName";
?>