<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <form method="post" action="php_03.php">
        <div class="text-center">
            <div class="row d-flex justify-content-center">
                <div class="d-flex justify-content-center h3 mt-4 p-3 mb-4 bg-danger-subtle text-primary-emphasis rounded-5 w-25">
                    สูตรคูณตามประสงค์
                </div>
                <div class="d-flex justify-content-center mb-2 mt-2">
                    <i class="fa-regular fa-heart"></i>
                    <input type="number" class="form-control w-25 text-center border border-secondary" name="m" placeholder="กรุณากรอกตัวเลข">
                    <i class="fa-regular fa-heart"></i>
                </div>
                <div class="mt-4 mb-4">
                    <button type="submit" name="submit" value="susdvjdsvjds" class="btn btn-outline-primary">คำนวณ</button>
                </div>
            </div>
        </div>
    </form>

    <div>
        <?php
        if (isset($_POST["submit"])) {
            
            if (!empty($_POST["m"])) {
                $num = $_POST["m"];
                $multi = 0;
                echo "<div class='d-flex justify-content-center'>";
                echo "<table class='table table-striped table-hover text-center w-25'>";

                for ($i = 1; $i < 13; $i++) {
                    $multi = $i * $num;
                    echo "<tr>";
                    echo "<td class='col-4'> $num  x  $i  =  $multi </td>";
                    echo "</tr>";
                }
                    
                echo "</table>";
                echo "</div>";
            } else {
                echo "<div class=' d-flex justify-content-center h3 mt-4 p-3 '>  โปรดใส่ตัวเลข Start และ End </div> ";
                echo "<div class=' d-flex justify-content-center' >  <div class=' d-flex justify-content-center w-25 h-25 '> <img src='Pin Image.jpeg' class='img-fluid ' alt='...' > </div>  </div> ";
            }
            
        }
        ?>
    </div>



</body>

</html>