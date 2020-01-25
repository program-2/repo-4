<?php

namespace App\Http\Controllers;

use App\Repository\User\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\ValidationServices\NewUserValidation;
//use App\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\User as UserResource;


class UserController extends Controller
{

  use NewUserValidation;

    public function store(UserRepository $user, Request $request) {

      $data = $this->ValidateNewUser($request);
      $result = $user->createUser($data);

    }
    public function prepareResponse() {
      return new UserResource(User::find(1));

    }
}
