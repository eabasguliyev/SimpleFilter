<?php
   require_once "./sharedData.php";

   if($_SERVER['REQUEST_METHOD'] === "GET")
    {
        header('Location: ../index.php');
        exit;   
    }
    $makeName = $_POST['make'];

   echo "<option selected disabled>Select Model</option>";

   $models = $filters[$makeName];

   foreach($models as $modelCat => $model){
       if(is_array($model)){
        echo "<optgroup label='$modelCat'>";
        foreach($model as $m){
            echo "<option>$m</option>";
        }
        echo "</optgroup>";
       }else{
            echo "<option>$model</option>";
       }
   }
?>