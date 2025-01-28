@extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found'))



{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    
    <title>Document</title>
</head>

<body>
    <div class="error-page">
        <div class="error-content">
            <table class="d-flex justify-content-center ">
                <tr>
                    <td class="headline text-warning h1 col-1 text-center text-middle" style="font-size: 80px;"
                        rowspan="4">
                        404
                    </td>
                </tr>
                <tr>
                    <td class="h2 col-2 text-muted">
                        <h3><i class="bi bi-exclamation-triangle-fill text-warning"></i></i>Oops! Page not found.</h3>
                    </td>
                </tr>
                <tr>
                    <td class="col-2">
                        We could not find the page you were looking for.
                        Meanwhile, you may <a href="../../index.html">return to dashboard</a> or try using the search
                        form.
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                            <button class="btn btn-warning" type="button">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            </table>
            {{-- <form class="search-form">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Search">

                    <div class="input-group-append">
                        <button type="submit" name="submit" class="btn btn-warning"><i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
                <!-- /.input-group -->
            </form> --}}
        {{-- </div> --}}
        <!-- /.error-content -->
    {{-- </div>
</body>

</html> --}} 
