<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     *   ログイン画面を表示する
     * 
     * ＠return view
     */
    public function loginFormShow()
    {
        return view('login');
    }

    /**
     *   ログイン
     * 
     * ＠return view
     */
    public function login()
    {
        return view('auth');
    }
}
