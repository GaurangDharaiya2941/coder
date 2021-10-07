<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware(['auth','superAdmin']);
    }

    public function list(Request $request) {
        return view('admin.dashboard');
    }
}
