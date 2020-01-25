<?php

namespace App\ValidationServices;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

trait NewUserValidation {

  public function ValidateNewUser($request){
    return $request->validate([
      'name' => 'string',
      'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
      'password' => ['required', 'string', 'min:8', 'confirmed'],
       Rule::unique('users'),
    ]);

  }


}
