@extends('layout.show')
@section('content')
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Product</title>
    </head>
    <body>
    <form  action = "{{action('ProductController@index')}}" method = "get">
        <input type="hidden" name= "_token" value="<?= csrf_token(); ?>">
        <input type="hidden" name= "product_id" value="<?= $row->product_id ?>">
        Product Name
        <input type="text" name="product_name" value="<?= $row->product_name ?>" class="form-control">
        Price
        <input type="text" name="product_price" value="<?= $row->product_price ?>" class="form-control">
        Quantity
        <input type="text" name="product_qty" value="<?= $row->product_qty ?>" class="form-control">
        <br/>
        <input type="submit" value="Home" class="btn btn-primary">
    </form>
    </body>
    </html>
@stop()