<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

/**
 * @group User
 * Managing User
 */

class UserController extends Controller
{
  public function store(Request $request)
  {




    //validate user
    try {
      $validateUser = Validator::make(
        $request->all(),
        [
          'name' => 'required',
          'email' => 'required|email|unique:users,email',
          'password' => 'required'
        ]
      );

      if ($validateUser->fails()) {
        return response()->json([
          'status' => false,
          'message' => 'validation error',
          'errors' => $validateUser->errors()
        ], 401);
      }





      $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password)


      ]);

      return response()->json([

        'status'  => true,
        'message' => 'user Created Sucessfully',
        'token' => $user->createToken("API-TOKEN")->plainTextToken
      ], 200);
    } catch (\Throwable $th) {

      return response()->json([
        'status' => false,
        'message' => 'validation error',
        'password' => $validateUser->errors()
      ], 500);
    }
  }


  public function loginUser(Request $request)
  {

    $validateUser = Validator::make(
      $request->all(),
      [
        'email' => 'required',
        'password' => 'required'
      ]
    );

    if ($validateUser->fails()) {
      return response()->json([
        'status' => false,
        'message' => 'validation error',
        'errors' => $validateUser->errors()
      ], 401);
    } 
    
 
   
    if (!Auth::attempt($request->only(['email', 'password']))) {

      return response()->json([
        'status' => false,
        'message' => 'E-mail and password does not match with our record',
         ]);
    }    
    
    $user = User::where('email', $request->email)->first();

    return response()->json([
      'status' => true,
      'message' => 'User Logged In Successfully',
    ]);


  }
}
