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
    <table>
        <form method="post" action="php_04.php">
        <div class="text-center">
            <div class="row text-center">
                <div class="d-flex justify-content-center h3 mt-4 p-3 mb-4 bg-primary-subtle text-primary-emphasis">
                    -- เลข ไหน คู่ เลข ไหน คี่ --
                </div>
                <div class="d-flex justify-content-center mb-2 mt-2">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <input type="number" class="form-control w-25 text-center btn btn-outline-info" name="n1" placeholder="Start"  >
                        <input type="number" class="form-control w-25 text-center btn btn-outline-info" name="n2" placeholder="End"  >
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        
                </div>
                <div class="text-center  p-0 mb-2">
                    <button type="submit" name="submit" value="susdvjdsvjds" class="btn btn-outline-info">คำนวณ</button>
                </div>
            </div>     
        </div>
    </form>
    </table>
    

    <?php
if (isset($_POST["submit"])) {

    if (!empty($_POST["n1"]) && !empty($_POST["n2"])){
    $num1 = $_POST["n1"];
    $num2 = $_POST["n2"];
    
    echo "<table class='table table-info table-striped-columns text-center'>";
    
    $count = 0;
    for ($i = $num1; $i <= $num2; $i++) {
        if ($count % 2 == 0) { 
            echo "<tr>";
        }
        
        if ($i % 2 == 0) {
            echo "<td class='col-6'>$i = คู่</td>";
        } else {
            echo "<td class='col-6'>$i = คี่</td>";
        }
        
        $count++;
        if ($count % 2 == 0) {
            echo "</tr>";
        }
    }
    
    if ($count % 2 != 0) {
        echo "<td ></td></tr>";
    }
    
    echo "</table>";
}else{
    echo "<div class=' d-flex justify-content-center h3 mt-4 p-3 '>  โปรดใส่ตัวเลข Start และ End </div> ";
    echo "<div class=' d-flex justify-content-center' >  <div class=' d-flex justify-content-center w-25 h-25 '> <img src='Pin Image.jpeg' class='img-fluid ' alt='...' > </div>  </div> " ;
}
}
?>


</body>
</html>