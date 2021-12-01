<?php
   require_once "./sharedData.php";
   require_once "./functions.php";

   redirectToIndex();
    
   $makeName = $_POST['make'];

   echo "<option selected disabled value='none'>Select Model</option>";

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