<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $roleId = Auth::user()->role_id;

        if ($roleId == 1) {
            return redirect()->route('user.index');
        } elseif ($roleId == 2) {
            return redirect()->route('post.index');
        } else {
            return redirect()->route('beranda');
        }
    }
}
