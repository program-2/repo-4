<?php
namespace App\Repository\User;

use App\Repository\BaseRepository;
use App\User as UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserRepository extends BaseRepository {

public $user;
public $request;

public function __construct(UserModel $user, Request $request) {
  $this->user = $user;
  $this->request = $request;
}

public function createUser($data) {

  ($this->user)->name = $data['name'];
  ($this->user)->email = $data['email'];
  ($this->user)->password =Hash::make($data['password']);
  ($this->user)->token = Str::random(60);
  $status = ($this->user)->save();
  if($status) {return $this->user;}

  }
}
