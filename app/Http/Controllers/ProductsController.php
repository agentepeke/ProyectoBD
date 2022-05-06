<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\categories;
use Illuminate\Support\Facades\Storage;
class ProductsController extends Controller
{
   
    public function new_product($id){
        if(!session()->has('admin')){
            return view('empty');
        }
        $categories = categories::where('id_categorie',$id)->get();
        return view('productsForm', ['categories'=>$categories]);
    }
    public function create(Request $request)
    {
        $this->validate($request,[
            'product_name'=> 'required',
            'description'=> 'required',
            'price'=> 'required',
            'existencia'=> 'required',
            'categorie'=> 'required',
            'product_image'=> 'required',
            'id_brand'=>'required',
        ]);
        $file=$request-> file('product_image');
        $route=$file->getClientOriginalName();
        $file->move(public_path().'/storage/products/',$route);
        $product= new products;
        $product->product_name= $request-> input('product_name');
        $product->description= $request-> input('description');
        $product->price= $request-> input('price');
        $product->existencia= $request-> input('existencia');
        $product->id_categorie= $request-> input('categorie');
        $product->route= $route;
        $product->id_user= 1;
        $product-> save();
        $brand=  $request->id_brand;
        return redirect('categories/admin/'.$brand);
    }

    public function edit($id)
    {
        if(!session()->has('admin')){
            return view('vacio');
        }
        $products = products::where('id_product',$id)->get();
        foreach ($products as $product) {
            $categorie= $product->id_categorie;
        }
        $categories= categories::where('id_categorie', $categorie)->get();
        return view('editProduct',['products'=>$products, 'categories'=>$categories]);
    }

    public function update($id,Request $request)
    {
        $this->validate($request,[
            'product_name'=> 'required',
            'description'=> 'required',
            'price'=> 'required',
            'existencia'=> 'required',
            'id_brand'=>'required',
        ]);
        if($request->file('product_image')){
            
            $products= products::where('id_product',$id)->get();
            $productnew="";
            foreach ($products as $product) {
                $productnew=$product->route;
            }
            $image_path = public_path().'/storage/products/'.$productnew;
            unlink($image_path);
            /* Storage::delete(public_path().'/storage/products/'.$productnew); */
            $file=$request-> file('product_image');
            $route=$file->getClientOriginalName();
            $file->move(public_path().'/storage/products/',$route);
            $data=array(
                'product_name'=>$request->product_name,
                'description'=>$request->description,
                'price'=>$request->price,
                'existencia'=>$request->existencia,
                'route'=>$route,
            );    
        }else{
            $data=array(
                'product_name'=>$request->product_name,
                'description'=>$request->description,
                'price'=>$request->price,
                'existencia'=>$request->existencia,
            );
        }
        $brand = $request->id_brand;
        products::where('id_product',$id)->update($data);
        return redirect('categories/admin/'.$brand);
    }

    public function destroy($id)
    {
        if(!session()->has('admin')){
            return view('vacio');
        }
        $products =  products::where('id_product',$id)->get();
        foreach ($products as $product) {
            $id_categorie= $product->id_categorie;
        }
        $categories= categories::where('id_categorie',$id_categorie)->get();
        foreach ($categories as $categorie) {
            $brand= $categorie->id_brand;
        }
        products::where('id_product',$id)->delete();
        return redirect('categories/admin/'.$brand);
    }
}
