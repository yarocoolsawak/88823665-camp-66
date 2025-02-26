@extends('layouts.menu')

@section('content')
    <form action="{{url('/product')}}" method="post">
        @csrf
        <div class="row mt-3">
            <div>
                <label for="">Category Name</label>
                <input type="text" class="form-control" name="category_name" id="">
            </div>
        </div>
        <button class="btn btn-primary my-2" type="button" id="btn-add-product-list"> + เพิ่ม Product</button>
        <div class="row mt-3" id="product-list">
            <div class="col-6">
                <label for="">Product Name <button class="btn btn-danger ml-3 my-2 btn-del-product-list"
                        type="button">ลบ</button></label>
                <input name="product_name[]" type="text" class="form-control">
            </div>
        </div>
        <button type="submit" class="btn btn-success my-3">บันทึก</button>
    </form>
    <table class="table table-bordered">
        <thead>
            <tr>
                <td>
                    #
                </td>
                <td>
                    Category Name
                </td>
                <td>
                    ProductList Name
                </td>
                <td>
                    User Name
                </td>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorys as $i)
            <tr>
                <td>
                    {{$loop->index + 1}}
                </td>
                <td>
                    {{$i->name}}
                </td>
                    <td>
                        @foreach ($i->product as $pro)
                        <ul>
                            <li>
                                {{$pro->name}}
                            </li>
                        </ul>
                        @endforeach
                    </td>
                <td>
                    {{$i->product->first()->user->name}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#btn-add-product-list').on('click', function() {
                $('#product-list').append(
                    `<div class="col-6">
                <label for="">Product Name <button class="btn btn-danger ml-3 my-2 btn-del-product-list"
                        type="button">ลบ</button></label>
                <input name="product_name[]" type="text" class="form-control">
            </div>
                    `
                )
            })

            $(document).on('click', '.btn-del-product-list', function() {
                //console.log('click delete')
                $(this).parent().parent().remove();
            })
        });
    </script>
    @endsection
