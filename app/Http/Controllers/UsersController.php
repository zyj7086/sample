<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function create()
    {
        return view('users.create');
    }
}
