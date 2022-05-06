<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\brands;
use App\Models\products;
class CategoriesController extends Controller
{
  
    public function new_categorie($id){
        if(!session()->has('admin')){
            return view('empty');
        }
        $brands= brands::all();
        return view('categorieForm', ['brands'=>$brands,'idBrand'=>$id]);
    }
    public function create(Request $request){
        $this->validate($request,[
            'categorie_name'=> 'required',
            'brand'=> 'required',
        ]);
        $categorie= new categories;
        $categorie->categorie_name= $request-> input('categorie_name');
        $categorie->id_brand= $request-> input('brand');
        $brand= $request-> input('brand');
        $categorie-> save();
        return redirect('categories/admin/'.$brand);
    }

    public function categories($id){
        $categories= categories::where('id_brand',$id)->get();
        $products= products::all();
        return view('categoriesView', ['categories'=>$categories,'products'=>$products]);
    }

    public function edit($id)
    {
        if(!session()->has('admin')){
            return view('vacio');
        }
        $categories = categories::where('id_categorie',$id)->get();
        return view('editCategorie',['categories'=>$categories]);
    }

    public function update($id,Request $request)
    {
        $this->validate($request,[
            'categorie_name'=> 'required',
            'id_brand'=> 'required',
        ]);
            $data=array(
                'categorie_name'=>$request->categorie_name,
            );
            $brand= $request->id_brand;
        categories::where('id_categorie',$id)->update($data);
        return redirect('categories/admin/'.$brand);
    }
    
    public function destroy($id)
    {
        if(!session()->has('admin')){
            return view('vacio');
        }
        $cat =  categories::where('id_categorie',$id)->get();
        foreach ($cat as $categorie) {
            $brand= $categorie->id_brand;
        }
        products::where('id_categorie',$id)->delete();
        categories::where('id_categorie',$id)->delete();
        return redirect('categories/admin/'.$brand);
    }
}
