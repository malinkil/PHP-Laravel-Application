@extends('layout.delete')
@section('content')
    <html lang="en">
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
    <form action = "{{action('ProductController@delete')}}" method = "post">
        <input type="hidden" name= "_token" value="<?= csrf_token(); ?>">
        <input type="hidden" name= "product_id" value="<?= $row->product_id ?>">
        Product Name
        <input type="text" name="product_name" value="<?= $row->product_name ?>" class="form-control">
        <p style="color: red">{{$errors->first('product_name')}}</p>
        Price
        <input type="text" name="product_price" value="<?= $row->product_price ?>" class="form-control">
        <p style="color: red">{{$errors->first('product_price')}}</p>
        Quantity
        <input type="text" name="product_qty" value="<?= $row->product_qty ?>" class="form-control">
        <p style="color: red">{{$errors->first('product_qty')}}</p>
        <br/>
        <input type="submit" value="Yes" class="btn btn-primary">
        <a href="<?php echo '/productindex'?>" class="btn btn-primary">No</a>
    </form>
    </body>
    </html>
@stop()