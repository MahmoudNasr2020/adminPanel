<?php

namespace App\Http\Controllers\admin\login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index()
    {

        return view('admin.login.login');
    }

    public function login()
    {
        $admin = new App\models\admin\Admin();

        $admin->email = 'mmm@gmail.com';

        $admin->password = Hash::make('123456789');
    }
}
