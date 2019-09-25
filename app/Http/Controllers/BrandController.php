<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\brand as Brand;

class BrandController extends Controller
{
   
    public function index()
    {
        $showBrandList = Brand::get();
        // return $showBrandList;
        return view ('Brand.index' , compact('showBrandList'));
    }

    
    public function create()
    {
        return view('Brand.createBrand');
    }

    
    public function store(Request $request)
    {
        $brand_name     = $request->brand_name;
        $savebrand      = Brand::create(['brand_name' => trim(ucwords(strtolower($brand_name)))]);
        return redirect('create/brand')->with('succses_message','New Brand has been added successfully.');
    }  
   
   
    public function edit($id)
    {
        $editBrand = Brand::findorFail($id);
        return view('Brand.editBrand',compact('editBrand'));
    }

   
    public function update(Request $request, $id)
    {
        $brand_name         =   $request->brand_name;           
        $find_catagory      =   Brand::findOrFail($id);

        $update_brand_name  =   $find_catagory->update([
            'brand_name'    =>  trim(ucwords(strtolower($brand_name)))
            ]);

        return redirect('brand')->with('succses_message_for_Update','Item has been updated successfully.');
    }

  
    public function destroy($id)
    {
        $deletebrand_name = Brand::findorFail($id);
        $deletebrand_name -> Delete();
        return redirect('brand')->with('Delete_message_for_delete','SuccessFully Deleted');
    }
}
