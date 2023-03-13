<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function index_view ()
    {
        return view('pages.user.user-data', [
            'user' => User::class
        ]);
    }
}