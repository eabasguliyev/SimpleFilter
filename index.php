<?php
    require_once "./pages/sharedData.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="./css/style.css">
    <title>Car Filters</title>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <select id="makes" class="form-select" aria-label="Default select example" aria-placeholder="Select">
            <option selected disabled>Select Make</option>
                <?php foreach ($filters as $make => $modelCats): ?>
                    <option value="<?php echo $make;?>"><?php echo $make;?></option>
                <?php endforeach; ?>
        </select>
        <select id="models" class="form-select" aria-label="Default select example" aria-placeholder="Select" disabled>
            <option selected disabled>Select Model</option>
        </select>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        const makes = document.getElementById('makes');
        const models = document.getElementById('models');

        makes.addEventListener('change', (e) =>{
            models.disabled = false;
            $(models).load("./pages/loadModels.php",{
                make: e.target.value,
            });
        })
    </script>
</body>
</html>
