<?php namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductController extends \App\Http\Controllers\Controller{

    public function index(){
        $result = DB::table('products')->paginate(4);
        return view('product.index')->with('data',$result);
    }

    public function  form(){
        return view('product.create');
    }


    public function edit($product_id){
        $row = DB::table('products')->where('product_id',$product_id)->first();
        return view('product.edit')->with('row',$row);
    }

    public function show($product_id)
    {
        $row = DB::table('products')->where('product_id',$product_id)->first();
        return view('product.show')->with('row',$row);
    }

    public function update(Request $request){
        $post = $request->all();
        $valid = \Validator::make($request->all(),
            [
                'product_name'  => 'required',
                'product_price'  => 'required',
                'product_qty'  => 'required',
            ]);
        if($valid->fails()){
            return redirect()->back()->withErrors($valid->errors());
        }
        else{
            $data = array(
                'product_name'  => $post['product_name'],
                'product_price'  =>$post['product_price'],
                'product_qty'  => $post['product_qty'],
            );
            $up = DB::table('products')->where('product_id',$post['product_id'])->update($data);
            if($up > 0){
                \Session::flash('message', 'Record have been updated successfully');
                return redirect('productindex');
            }
        }
    }

    public function del($product_id){
        $row = DB::table('products')->where('product_id',$product_id)->first();
        return view('product.delete')->with('row',$row);
    }

    public function delete(Request $request){
        $post = $request->all();
        $data = array(
            'product_name'  => $post['product_name'],
            'product_price'  =>$post['product_price'],
            'product_qty'  => $post['product_qty'],
        );
        $del = DB::table('products')->where('product_id',$post['product_id'])->delete( );
        if($del > 0){
            \Session::flash('message', 'Record have been deleted successfully');
            return redirect('productindex');
        }
    }


    public function create(Request $request){
        $post = $request->all();
        $valid = \Validator::make($request->all(),
            [
             'product_name'  => 'required',
             'product_price'  => 'required',
             'product_qty'  => 'required',
            ]);
        if($valid->fails()){
            return redirect()->back()->withErrors($valid->errors());
        }
        else{
            $data = array(
                'product_name'  => $post['product_name'],
                'product_price'  =>$post['product_price'],
                'product_qty'  => $post['product_qty'],
            );
            $dataDB = DB::table('products')->insert($data);
            if($dataDB > 0){
                \Session::flash('message', 'Record have been saved successfully');
                return redirect('productindex');
            }
        }
    }
}
