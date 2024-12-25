<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body >
    <?php
        $num = 0;
    ?>
    <div class="d-flex justify-content-center">
        <h1 class="d-flex justify-content-center h3 mt-4 p-3 mb-4 bg-success-subtle text-primary-emphasis rounded-5 w-25">
        สูตรคูณแม่ 2
        </h1>
    </div>
    
    <div class=" text-center h2">
        <?php 
        for ($i = 1; $i < 13; $i++){
            $num = $i * 2;
        echo '<div>' . '2 x '. $i . ' = '. $num . '</div>';
        }
        ?>
    </div>
</body>
</html>