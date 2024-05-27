<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use View;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }
}
