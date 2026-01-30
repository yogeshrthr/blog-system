<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'index']);

// Route::get('/dashboard', function () {
//     return view('dashboard');

// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('posts',[PostController::class,'index'])->name('posts');

Route::resource('posts',PostController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// routes/web.php में
// Auth routes
Route::get('/login', function() {
    return view('auth.login');
})->name('login');

Route::post('/login', function(\Illuminate\Http\Request $request) {
    $credentials = $request->only('email', 'password');
    
    if (\Illuminate\Support\Facades\Auth::attempt($credentials)) {
        return redirect('/posts');
    }
    
    return back()->withErrors(['email' => 'Invalid credentials']);
});

Route::get('/register', function() {
    return view('auth.register');
});

Route::post('/register', function(\Illuminate\Http\Request $request) {
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6|confirmed'
    ]);
    
    $user = \App\Models\User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password)
    ]);
    
    \Illuminate\Support\Facades\Auth::login($user);
    
    return redirect('/posts');
});

Route::post('/logout', function() {
    \Illuminate\Support\Facades\Auth::logout();
    return redirect('/');
});

require __DIR__.'/auth.php';
