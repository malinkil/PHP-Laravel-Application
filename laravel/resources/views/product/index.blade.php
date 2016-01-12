@extends('layout.mainTemp')
@section('content')
<p style="color: red"><?php echo Session::get('message'); ?></p>
<a href="<?php echo 'productform' ?>" class="btn btn-primary">Add Product</a></br>
</br><table class = "table table-bordered table-hover">
    {{--<input type ="text" class="form-control">--}}
    <thead>
    <th><b>Product ID</b></th>
    <th><b></b>Product Name</th>
    <th><b>Price</b></th>
    <th><b>Quantity</b></th>
    <th><b>Date</b></th>
    <th><b>Action</b></th>
    </thead>
    <tbody>
    <?php
       foreach($data as $row){

       ?>
       <tr>
           <td><?php echo $row->product_id ?></td>
           <td><?php echo $row->product_name ?></td>
           <td><?php echo $row->product_price ?></td>
           <td><?php echo $row->product_qty ?></td>
           <td><?php echo $row->created_at ?></td>
           <td>

               <a href = "<?php echo 'ShowProduct/'.$row->product_id ?>" class="btn btn-primary">Show</a> |
               <a href = "<?php echo 'EditProduct/'.$row->product_id ?>" class="btn btn-primary">Edit</a> &nbsp|&nbsp
               <a href = "<?php echo 'DeleteProduct/'.$row->product_id ?>" class="btn btn-primary">Delete</a>


           </td>
       </tr>
    <?php } ?>
    </tbody>
</table>
<?php echo $data->render(); ?>
@stop()