<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\PostController::class, 'index'])->name('home');
Route::get('/blog', [App\Http\Controllers\PostController::class, 'blog'])->name('blog');
Route::get('/faq', [App\Http\Controllers\PostController::class, 'faq'])->name('faq');
Route::get('/cv', [App\Http\Controllers\PostController::class, 'cv'])->name('cv');

//http://127.0.0.1:8000/password/reset   forgot password

//BLOG
Route::get('posts/create', [App\Http\Controllers\PostController::class, 'create'])->middleware(['auth','throttle:60,1','verified']);
Route::post('post', [App\Http\Controllers\PostController::class, 'store'])->middleware('throttle:60,1');
Route::get('posts/{post}/edit', [App\Http\Controllers\PostController::class, 'edit'])->middleware(['auth','throttle:60,1','verified']);
Route::put('posts/{post}', [App\Http\Controllers\PostController::class, 'update'])->middleware(['auth','throttle:60,1']);
Route::delete('posts/{post}', [App\Http\Controllers\PostController::class, 'destroy'])->middleware(['auth','throttle:60,1','verified']);

//USED FOR THE CONTACT FORM  Syntax middleware('throttle:5,3') = User can make 5 requests in 30 minutes(default is throttle:60,1)
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contact'])->name('contact')->middleware('throttle:60,1');
Route::post('/send-message',[App\Http\Controllers\ContactController::class,'sendEmail'])->name('contact.send')->middleware('throttle:60,1');

//EMAIL VERIFICATION ROUTES
Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware(['auth','throttle:60,1'])->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/home');
})->middleware(['auth', 'signed','throttle:60,1'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:60,1'])->name('verification.send');
//END OF EMAIL VERIFICATION ROUTES

Route::get('/logout', [App\Http\Controllers\LogoutController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function() {
    /* Logout Route */
    //Route::get('/logout', [App\Http\Controllers\LogoutController::class, 'logout'])->name('logout');
 });
