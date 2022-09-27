<?php

namespace App\Http\Controllers;

use App\Http\Resources\CatogeryResource;
use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductResource;
use App\Models\Catogery;
use Illuminate\Http\Request;
use App\Models\Product;

/**
 * @group Products
 * Managing Products
 */

class ProductController extends Controller
{
 
    public function index()
    {


        $products = Product::with('category')->paginate(9);
        return   ProductResource::collection($products);
   

    }
 
    public function create()
    {
    
    }

    
    public function store(Request $request)
    {
        $catogery = Catogery::create($request->all());
        return new CatogeryResource($catogery);
    }

     
    public function show($id)
    {
         
    }

     
    public function edit($id)
    {
    
    }

    
    public function update(Request $request, $id)
    {
        
    }

    
    public function destroy($id)
    {
      
    }
}
