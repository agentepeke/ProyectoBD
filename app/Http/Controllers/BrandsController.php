<?php

namespace App\Http\Controllers;

use App\Models\brands;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
class BrandsController extends Controller
{
    public function index()
    {
        $brands = brands::all();
        return view('brands', ['brands'=>$brands]);
    }

    public function create(Request $request)
    {
        $this->validate($request,[
            'brand_name'=> 'required',
            'brand_description'=> 'required',
            'brand_image'=> 'required',
        ]);
        $file=$request-> file('brand_image');
        $route=$file->getClientOriginalName();
        $file->move(public_path().'/storage/brands/',$route);
        $brand= new brands;
        $brand->brand_name= $request-> input('brand_name');
        $brand->brand_description= $request-> input('brand_description');
        $brand->brand_route= $route;
        $brand-> save();
        return redirect('/admin');
    }


    public function edit($id)
    {
        if(!session()->has('admin')){
            return view('vacio');
        }
        $brands = brands::where('id_brand',$id)->get();
        return view('editBrand',['brands'=>$brands]);
    }


    public function update($id,Request $request)
    {
        $this->validate($request,[
            'brand_name'=> 'required',
            'brand_description'=> 'required',
        ]);
        if($request->file('brand_image')){
            
            $brands= brands::where('id_brand',$id)->get();
            $brandnew="";
            foreach ($brands as $brand) {
                $brandnew=$brand->brand_route;
            }
            $image_path = public_path().'/storage/brands/'.$brandnew;
            unlink($image_path);
            /* Storage::delete(public_path().'/storage/brands/'.$brandnew); */
            $file=$request-> file('brand_image');
            $route=$file->getClientOriginalName();
            $file->move(public_path().'/storage/brands/',$route);
            $data=array(
                'brand_name'=>$request->brand_name,
                'brand_description'=>$request->brand_description,  
                'brand_route'=>$route,
            );    
        }else{
            $data=array(
                'brand_name'=>$request->brand_name,
                'brand_description'=>$request->brand_description,  
            );
        }
        brands::where('id_brand',$id)->update($data);
        return redirect('/admin');
    }

    public function destroy($id)
    {
        if(!session()->has('admin')){
            return view('vacio');
        }
        brands::where('id_brand',$id)->delete();
        return redirect('/admin');
    }
}
