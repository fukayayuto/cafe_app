<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CafeController extends Controller
{
    /**
     * ブログ一覧を表示する
     * 
     * ＠return view
     */
    public function homeShow()
    {
        return view('home');
    }
}
