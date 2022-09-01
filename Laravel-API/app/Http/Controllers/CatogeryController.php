<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Resources\CatogeryResource;
use Illuminate\Http\Request;
use App\Models\Catogery;



class CatogeryController extends Controller


{
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
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(StoreCategoryRequest $request)
   {
      $catogery = Catogery::create($request->all());
      return new CatogeryResource($catogery);
   }
}
