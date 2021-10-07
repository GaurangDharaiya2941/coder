<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repository\SuperAdmin\UserRepository;
use App\Http\Requests\SuperAdmin\UserProfileRequest;
use Illuminate\Support\Facades\Auth;

class SuperAdminController extends Controller
{
    private $profile;

    public function __construct(UserRepository $profile) {
        $this->middleware(['auth','superAdmin']);
        $this->profile = $profile;
    }

    public function index()
    {
        return view('admin.dashboard');
    }

    public function profile()
    {
        return view('admin.profile',[
            'detail' => \App\Models\UserDetail::find(auth()->user()->id)->toArray(),
            'profile' => \App\Models\UserProfile::find(auth()->user()->id)->toArray()
        ]);
    }

    public function updateProfile(UserProfileRequest $request)
    {
        $this->profile->updateProfile($request->validated());
    }

    public function updateAddress()
    {

    }
}
