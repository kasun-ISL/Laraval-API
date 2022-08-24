<?php

namespace App\Http\Controllers;

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


   public function show(Catogery $catogeryx)
   {

      return new CatogeryResource(($catogeryx));
   }
}
