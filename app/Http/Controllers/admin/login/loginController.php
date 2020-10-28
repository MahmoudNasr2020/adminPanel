<?php

namespace App\Http\Controllers\admin\login;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\login\loginRequest;
use App\models\admin\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    public function index()
    {

        return view('admin.login.login');
    }

    public function login(loginRequest $request)
    {
        $remmber_me = $request->has('remember_me') ? true : false;

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $remmber_me)) {

            return redirect()->route('admin.home');
        }

        return redirect()->back()->with(['error' => 'هناك خطأ في البيانات']);
    }
}
