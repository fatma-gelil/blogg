<?php
namespace App\Http\Controllers;
class ProductsController extends Controller{
    public function index(){
        $data=['product1'=>'iphone','product2'=>'samsung'];
        //Using with method
        //return view('products.index')->with('data',$data);
        //Directly in the view
        return view('products.index',['data'=>$data]);
    }
// public function show($id)
//    {
//       return $id ;
//    }
   public function show($name){
        $data=['iphone'=>'iphone x','samsung'=>'samsung10'];
        return view('products.index',['products'=>$data[$name]?? 'product '.$name.' does not exist']);
   }
}
