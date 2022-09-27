<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Resources\CatogeryResource;
use Illuminate\Http\Request;
use App\Models\Catogery;
/**
 * @group Catogeries
 * Managing Catogeries
 */


class CatogeryController extends Controller


{


   /**
    * Get Catogeries 
    *
    *List all Catogeries
    *
    *@queryParam page which page to show. Example:12 
   */
   public function index()
   {


      $catogeries = Catogery::all();

      return  CatogeryResource::collection($catogeries);
   }


   public function show(Catogery $catogery)
   {

      return new CatogeryResource($catogery);
   }
 /**
    * Post Catogeries 
    *
    * Create New Catoger
      
    * @bodyparam  nme string required Name of the catogery. Example :"clothing"
   */
 
   public function store(StoreCategoryRequest $request)
   {
      $catogery = Catogery::create($request->all());
      return new CatogeryResource($catogery);
   }

    
   public function update(Catogery $category, StoreCategoryRequest $request)
   {
      $category->update($request->all());

      return new CatogeryResource($category);
   }

   public function destroy(Catogery $category, StoreCategoryRequest $request)
   {
      $category->delete($request->all());

      return new CatogeryResource($category);
   }
}
