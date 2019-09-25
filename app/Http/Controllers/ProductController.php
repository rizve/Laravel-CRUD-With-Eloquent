<?php

namespace App\Http\Controllers;

use App\ product;
use App\brand as Brand;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index()
    {
        $showProduct = product::with(['brand'])->get();
        return view ('Product.index' , compact('showProduct'));
    }

    public function create()
    {
        $allBrand = Brand::get();
        return view('Product.createProduct',compact('allBrand'));
    }

    public function store(Request $request)
    {
        $brand_id           = $request->brand_id;
        $product_name       = $request->product_name;
        $saveBrand          = product::create([

            'brand_id'      => $brand_id,
            'product_name'  => trim(ucwords(strtolower($product_name)))            
            ]);

        return redirect('create/product')->with('succses_message','New Product has been added successfully.');   }

   
    public function edit($id)
    {
        $editAllBradn   = Brand::get();
        $editProduct      = product::with(['brand'])->findorFail($id);

        return view('Product.editProduct',compact('editProduct','editAllBradn'));
    }

    public function update(Request $request, $id)
    {
        $brand_id             =   $request->brand_id;            
        $product_name         =   $request->product_name;            
                
        $find_Product         =   product::findOrFail($id);

        $update_Product       =   $find_Product->update([
            'brand_id'        =>  $brand_id,
            'product_name'    =>  trim(ucwords(strtolower($product_name)))            
            ]);

            return redirect('product')->with('succses_message_for_Update','Product has been updated successfully.');
    }
 
    public function destroy($id)
    {
        $deleteProduct = product::findorFail($id);
        $deleteProduct -> Delete();
        return redirect('product')->with('Delete_message_for_delete','SuccessFully Deleted');
    }
}
