<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile($id, $name)
    {
        return view('user.index')->with('id', $id)->with('name', $name);
    }
}
