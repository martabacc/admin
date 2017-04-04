<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user()
    {
        $data['data'] = User::paginate(20);
        return view('pages.user.index', $data);
    }
}
