<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</head>

{{-- <h1><?php echo $myvalue; ?></h1>
<h1>{{ $myvalue;}} </h1> --}}

<body>
    <form method="post" action="{{ url('/mycontroller') }}">
        @csrf
        <div class="">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <h1
                        class="text-center col p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end 
                            shadow-lg p-3 mb-2 bg-body-tertiary rounded text-primary-emphasis">
                        สูตรคูณแม่จุดจุดจุด</h1>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-4 text-center">
                    <input class="form-control text-center" type="number" name="myinput" placeholder="กรุณากรอกตัวเลข">
                    <div>
                        <button class="btn btn-info mt-2 mb-3" type="submit"> Submit </button>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="d-flex justify-content-center">
                    <h1>สูตรคูณแม่ : {{ $myinput }}</h1>
                </div>
            </div> --}}
        </div>

        <div>
            <?php
            if (isset($_POST['myinput'])) {
                if (!empty($_POST['myinput'])) {
                    $num = $_POST['myinput'];
                    $multi = 0;
                    echo "<div class='text-center mt-3 mb-3 text-primary-emphasis h3'> สูตรคูณแม่ :  $myinput </div> ";
                    echo "<div class='d-flex justify-content-center'>";
                    echo "<table class='table table-Info table-striped w-100'>";
            
                    for ($i = 1; $i < 13; $i++) {
                        $multi = $i * $num;
                        echo '<tr>';
                        echo "<td class='col-4 text-center h5'> $num  x  $i  =  $multi </td>";
                        echo '</tr>';
                    }
            
                    echo '</table>';
                    echo '</div>';
                } else {
                    echo "<div class=' d-flex justify-content-center h3 mt-2 p-2 '>  โปรดใส่ตัวเลข</div> ";
                }
            }
            ?>
        </div>

    </form>
</body>
