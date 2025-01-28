@extends('layouts.default')

<title>@yield('title')</title>

<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai+Looped:wght@100;200;300;400;500;600;700;800;900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
        rel="stylesheet">

    <style>
        .four-oh-four {
            font-family: 'Montserrat', sans-serif;
            font-weight: 100;
        }

        .aa {
            font-family: "Noto Sans Thai Looped", serif;
            font-weight: 200;
            font-style: normal;
        }
    </style>
</head>

<div style="display: none;">@yield('message')</div>

@section('content')
    <table class="d-flex justify-content-center mt-4">
        <tr >
            <td class="headline h2 col-1 text-end text-middle {{ $__env->yieldContent('code') === '404' ? 'text-warning' : 'text-danger' }}"
                style="font-size: 90px;" rowspan="4">
                <div class="four-oh-four">
                    @yield('code')&nbsp;
                </div>
            </td>
        </tr>
        @if ($__env->yieldContent('code') === '404')
            <tr>
                <td class="h2 col-2 text-muted ">
                    <h3 class="aa " style="font-size: 25px" ><i class="bi bi-exclamation-triangle-fill text-warning"></i></i> &nbsp;Oops! Page not found.</h3>
                </td>
            </tr>
        @else
            <tr>
                <td class="h2 col-2 text-muted ">
                    <h3 class="aa" style="font-size: 25px"><i class="bi bi-exclamation-triangle-fill text-danger"></i></i> &nbsp;Oops! Something went wrong.
                    </h3>
                </td>
            </tr>
        @endif

        @if ($__env->yieldContent('code') === '404')
            <tr>
                <td class="col-2" style="width: 550px">
                    We could not find the page you were looking for.
                    Meanwhile, you may <a href="{{ url('/') }}">return to dashboard</a> or try using the search
                    form.
                </td>
            </tr>
        @else
            <tr>
                <td class="col-2" style="width: 550px">
                    We will work on fixing that right away. Meanwhile, you may <a href="{{ url('/') }}"> return to
                        dashboard</a> or try using the search form.
                </td>
            </tr>
        @endif

        <tr>
            <td>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                    <button class="btn {{ $__env->yieldContent('code') === '404' ? 'btn-warning' : 'btn-danger' }}"
                        type="button">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </td>
        </tr>
    </table>
@endsection
