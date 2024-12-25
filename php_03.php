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
    <form method="post" action="php_03.php">
        <div class="text-center">
            <div class="row text-center">
                <div class="text-center">
                    สูตรคูณ
                </div>
                <div class="text-center">
                    <input type="number" class="form-control w-25" name="m" placeholder="กรุณากรอกตัวเลข"  >
                </div>
                <div>
                    <button type="submit" name="submit" value="susdvjdsvjds" class="btn btn-primary">คำนวณ</button>
                </div>
            </div>          
        </div>
    </form>

    <?php
        if(isset($_POST["submit"])){
            $num = $_POST["m"];
            $multi = 0;

            for ($i = 1; $i < 13; $i++){
            $multi = $i * $num;
            echo '<div>'.$num .' x '. $i . ' = '. $multi . '</div>';

            }
        }
    ?>
    

</body>

</html>