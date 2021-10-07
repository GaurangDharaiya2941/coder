<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/test', function(Request $request) {
    // session()->put('name','test');
    // session()->put('email', 'test@gmail.com');

    // $string = md5(Str::random(5));
    // dd($string);

    // $token_id = \App\Models\User::makeRandomToken();
    // $token_key = \App\Models\User::makeRandomTokenKey();

    // dd($token_id, $token_key);

    // $token = hash('sha256',0);
    // dd($token);
    // return true;
    return view('admin.user.userList');
});

Route::get('/setTest', function(Request $request) {
    $name = session()->pull('name');
    $email = session()->pull('email');

    session()->forget('name');
    session()->forget('email');
    dd($name, $email);
});

Route::get('/', function () {
    return view('welcome');
})->name('mainPage');

// Auth::routes(['verify' => true]);

Route::middleware(['auth', 'superAdmin'])->group(function () {
    Route::name('superadmin.')->prefix('super-admin')->group(function () {
        Route::get('/dashboard', [ \App\Http\Controllers\SuperAdmin\SuperAdminController::class, 'index' ] )->name('dashboard');
        Route::get('/profile', [ \App\Http\Controllers\SuperAdmin\SuperAdminController::class, 'profile' ] )->name('profile');
        Route::post('/update/profile', [ \App\Http\Controllers\SuperAdmin\SuperAdminController::class, 'updateProfile'] )->name('update.profile');
        Route::post('/update/address', [ \App\Http\Controllers\SuperAdmin\SuperAdminController::class, 'updateAddress' ] )->name('update.address');
        Route::post('/update/detail', [ \App\Http\Controllers\SuperAdmin\SuperAdminController::class, 'updateDetail' ] )->name('update.detail');

        Route::get('/user/getList', [ \App\Http\Controllers\SuperAdmin\UserController::class, 'list'])->name('user.list');
        Route::get('/user/edit/{id}', [ \App\Http\Controllers\SuperAdmin\UserController::class, 'index'])->name('user.edit');
        Route::post('/user/edit/{id}', [ \App\Http\Controllers\SuperAdmin\UserController::class, 'index'])->name('user.save');
        Route::post('/user/destroy/{id}', [ \App\Http\Controllers\SuperAdmin\UserController::class, 'index'])->name('user.destroy');
        Route::get('/user/approve', [ \App\Http\Controllers\SuperAdmin\UserController::class, 'index'])->name('user.approve');
        Route::post('/user/approve', [ \App\Http\Controllers\SuperAdmin\UserController::class, 'index'])->name('user.aceept');
        Route::get('/user/create', [ \App\Http\Controllers\SuperAdmin\UserController::class, 'index'])->name('user.add');

        Route::get('/blog/getList', [ \App\Http\Controllers\SuperAdmin\BlogController::class, 'index'])->name('blog.list');
        Route::get('/blog/edit/{id}', [ \App\Http\Controllers\SuperAdmin\BlogController::class, 'index'])->name('blog.edit');
        Route::post('/blog/edit/{id}', [ \App\Http\Controllers\SuperAdmin\BlogController::class, 'index'])->name('blog.save');
        Route::post('/blog/destroy/{id}', [ \App\Http\Controllers\SuperAdmin\BlogController::class, 'index'])->name('blog.destroy');
        Route::get('/blog/approve', [ \App\Http\Controllers\SuperAdmin\BlogController::class, 'index'])->name('blog.approve');
        Route::get('/blog/create', [ \App\Http\Controllers\SuperAdmin\BlogController::class, 'index'])->name('blog.create');

        Route::get('/group/getList', [ \App\Http\Controllers\SuperAdmin\GroupController::class, 'index'])->name('group.list');
        Route::get('/group/edit/{id}', [ \App\Http\Controllers\SuperAdmin\GroupController::class, 'index'])->name('group.edit');
        Route::post('/group/edit/{id}', [ \App\Http\Controllers\SuperAdmin\GroupController::class, 'index'])->name('group.save');
        Route::post('/group/destroy/{id}', [ \App\Http\Controllers\SuperAdmin\GroupController::class, 'index'])->name('group.destroy');
        Route::get('/group/approve', [ \App\Http\Controllers\SuperAdmin\GroupController::class, 'index'])->name('group.approve');
        Route::get('/group/create', [ \App\Http\Controllers\SuperAdmin\GroupController::class, 'index'])->name('group.create');

        Route::get('/post/getList', [ \App\Http\Controllers\SuperAdmin\PostController::class, 'index'])->name('post.list');
        Route::get('/post/edit/{id}', [ \App\Http\Controllers\SuperAdmin\PostController::class, 'index'])->name('post.edit');
        Route::post('/post/edit/{id}', [ \App\Http\Controllers\SuperAdmin\PostController::class, 'index'])->name('post.save');
        Route::post('/post/destroy/{id}', [ \App\Http\Controllers\SuperAdmin\PostController::class, 'index'])->name('post.destroy');
        Route::get('/post/approve', [ \App\Http\Controllers\SuperAdmin\PostController::class, 'index'])->name('post.approve');
        Route::get('/post/create', [ \App\Http\Controllers\SuperAdmin\PostController::class, 'index'])->name('post.create');

        Route::get('/page/getList', [ \App\Http\Controllers\SuperAdmin\PageController::class, 'index'])->name('page.list');
        Route::get('/page/edit/{id}', [ \App\Http\Controllers\SuperAdmin\PageController::class, 'index'])->name('page.edit');
        Route::post('/page/edit/{id}', [ \App\Http\Controllers\SuperAdmin\PageController::class, 'index'])->name('page.save');
        Route::post('/page/destroy/{id}', [ \App\Http\Controllers\SuperAdmin\PageController::class, 'index'])->name('page.destroy');
        Route::get('/page/approve', [ \App\Http\Controllers\SuperAdmin\PageController::class, 'index'])->name('page.approve');
        Route::get('/page/create', [ \App\Http\Controllers\SuperAdmin\PageController::class, 'index'])->name('page.create');
    });
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::name('admin.')->prefix('admin')->group( function() {
        Route::get('/dashboard', [ \App\Http\Controllers\Admin\AdminController::class, 'index' ] )->name('dashboard');
        Route::get('/profile', [ \App\Http\Controllers\Admin\AdminController::class, 'profile' ] )->name('profile');

        Route::get('/user/getList', [ \App\Http\Controllers\Admin\UserController::class, 'index'])->name('user.list');
        Route::get('/user/edit/{id}', [ \App\Http\Controllers\Admin\UserController::class, 'index'])->name('user.edit');
        Route::post('/user/edit/{id}', [ \App\Http\Controllers\Admin\UserController::class, 'index'])->name('user.save');
        Route::post('/user/destroy/{id}', [ \App\Http\Controllers\Admin\UserController::class, 'index'])->name('user.destroy');
        Route::get('/user/approve', [ \App\Http\Controllers\Admin\UserController::class, 'index'])->name('user.approve');
        Route::get('/user/create', [ \App\Http\Controllers\Admin\UserController::class, 'index'])->name('user.add');

        Route::get('/blog/getList', [ \App\Http\Controllers\Admin\BlogController::class, 'index'])->name('blog.list');
        Route::get('/blog/edit/{id}', [ \App\Http\Controllers\Admin\BlogController::class, 'index'])->name('blog.edit');
        Route::post('/blog/edit/{id}', [ \App\Http\Controllers\Admin\BlogController::class, 'index'])->name('blog.save');
        Route::post('/blog/destroy/{id}', [ \App\Http\Controllers\Admin\BlogController::class, 'index'])->name('blog.destroy');
        Route::get('/blog/approve', [ \App\Http\Controllers\Admin\BlogController::class, 'index'])->name('blog.approve');
        Route::get('/blog/create', [ \App\Http\Controllers\Admin\BlogController::class, 'index'])->name('blog.create');

        Route::get('/gruop/getList', [ \App\Http\Controllers\Admin\GroupController::class, 'index'])->name('group.list');
        Route::get('/group/edit/{id}', [ \App\Http\Controllers\Admin\GroupController::class, 'index'])->name('group.edit');
        Route::post('/group/edit/{id}', [ \App\Http\Controllers\Admin\GroupController::class, 'index'])->name('group.save');
        Route::post('/group/destroy/{id}', [ \App\Http\Controllers\Admin\GroupController::class, 'index'])->name('group.destroy');
        Route::get('/group/approve', [ \App\Http\Controllers\Admin\GroupController::class, 'index'])->name('group.approve');
        Route::get('/group/create', [ \App\Http\Controllers\Admin\GroupController::class, 'index'])->name('group.create');

        Route::get('/post/getList', [ \App\Http\Controllers\Admin\PostController::class, 'index'])->name('post.list');
        Route::get('/post/edit/{id}', [ \App\Http\Controllers\Admin\PostController::class, 'index'])->name('post.edit');
        Route::post('/post/edit/{id}', [ \App\Http\Controllers\Admin\PostController::class, 'index'])->name('post.save');
        Route::post('/post/destroy/{id}', [ \App\Http\Controllers\Admin\PostController::class, 'index'])->name('post.destroy');
        Route::get('/post/approve', [ \App\Http\Controllers\Admin\PostController::class, 'index'])->name('post.approve');
        Route::get('/post/create', [ \App\Http\Controllers\Admin\PostController::class, 'index'])->name('post.create');

        Route::get('/page/getList', [ \App\Http\Controllers\Admin\PageController::class, 'index'])->name('page.list');
        Route::get('/page/edit/{id}', [ \App\Http\Controllers\Admin\PageController::class, 'index'])->name('page.edit');
        Route::post('/page/edit/{id}', [ \App\Http\Controllers\Admin\PageController::class, 'index'])->name('page.save');
        Route::post('/page/destroy/{id}', [ \App\Http\Controllers\Admin\PageController::class, 'index'])->name('page.destroy');
        Route::get('/page/approve', [ \App\Http\Controllers\Admin\PageController::class, 'index'])->name('page.approve');
        Route::get('/page/create', [ \App\Http\Controllers\Admin\PageController::class, 'index'])->name('page.create');
    });
});

Route::middleware('auth')->group(function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('/changePassword', [ App\Http\Controllers\HomeController::class, 'changePassword' ])->name('change.password');
    Route::name('user.')->prefix('user')->group( function() {
        Route::get('/work-space', [ \App\Http\Controllers\User\UserController::class, 'index' ] )->name('panel');
        Route::get('/blog/list', [ \App\Http\Controllers\User\BlogController::class, 'index' ] )->name('blog.list');
    });
});

Route::get('/about-us', function() {
    return view('about-us');
})->name('about');

Route::get('/contact-us', function() {
    return view('contact-us');
})->name('contact');

Route::get('/terms-and-conditions', function() {
    return view('terms-and-conditions');
})->name('terms.condition');

Route::get('/declaimer', function() {
    return view('declaimer');
})->name('declaimer');

Route::get('/privacy-policy', function() {
    return view('privacy-policy');
})->name('privacy.policy');

Route::get('/terms-of-use', function() {
    return view('terms-of-use');
})->name('terms.use');

Route::get('/help', function() {
    return view('help');
})->name('help');
