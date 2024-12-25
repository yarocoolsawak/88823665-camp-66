<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="text-center">
        <div class="d-flex justify-content-center">
            <div class="d-flex justify-content-center h3 mt-4 p-3 mb-4 bg-primary-subtle text-primary-emphasis rounded-5 w-25">
            ตัวเลข 1-100
        </div>
        </div>
        </div>

        <?php
        echo "<table class='table table-bordered border-dark d-flex justify-content-center'>";
        for ($i = 1; $i <= 50; $i++) {
            echo '<tr>';
            echo '<td>' . (2 * $i - 1) . '  คี่'.'</td>';
            echo '<td>' . (2 * $i) . '  คู่'. '</td>';
            echo '</tr>';
        }
        echo "</table>";
        ?>
    
</body>
</html>