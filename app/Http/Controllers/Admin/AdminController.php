<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware(['auth','isAdmin']);
        // $this->var = $var;
    }
    public function index(Request $request)
    {
        return view('sub_admin.dashboard');
    }

    public function profile(Request $request)
    {
        return view('sub_admin.profile');
    }
}
