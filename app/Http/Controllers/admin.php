<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\brands;
use App\Models\categories;
use App\Models\products;
class admin extends Controller
{
    public function index(){
        if(!session()->has('admin')){
            return view('empty');
        }
        $brands = brands::all();
        return view('admin',['brands'=>$brands]);
    }

    public function categories($id){
        if(!session()->has('admin')){
            return view('empty');
        }
        $categories= categories::where('id_brand',$id)->get();
        $products= products::all();
        return view('categoriesViewAdmin', ['categories'=>$categories,'products'=>$products,'brand'=>$id]);
    }
}
