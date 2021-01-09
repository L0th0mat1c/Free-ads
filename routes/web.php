<?php
/* namespace App\Http\Controllers\Annonce; */
use Illuminate\Support\Facades\Route;
/* use App\Http\Controllers\Auth;


use App\Models\Ad;*/
use App\Models\Ads; 
// use App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

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

/*---------Route vers pages basiques------------*/
Route::get('/', 'App\Http\Controllers\Annonce\MainController@viewhome');

Route::get('/deposer','App\Http\Controllers\DepotController@insert')->middleware('verified');
    // $user = auth()->user();
    // return view('pages/deposer', ['user' => $user]);

Route::get('/fiche/deposer', function(){
    $user = auth()->user();
    return view('pages/deposer', ['user' => $user]);
})->middleware('verified');

Route::post('deposeraction', 'App\Http\Controllers\DepotController@storeAd');

Route::post('compte/{id}', 'App\Http\Controllers\Annonce\MainController@ad_avatar')->name('add_avatar');

Route::get('search_ads', 'App\Http\Controllers\Annonce\MainController@search_ads');

Route::get('compte', function(){
    $user = auth()->user();
    $annonces = Ads::where('user_id', $user->id)->get();
    
            // utilise un template : 'la blade' (qui est vide) 
            // qui utilise une série de donnée qui la complète (depuis la base grâce au model user) 
    return view('pages/compte', ['user' => $user, 'annonces' => $annonces]);
})->middleware('verified');

/*---------Route vers pages annonces------------*/


Route::get('search', 'App\Http\Controllers\Annonce\MainController@search');
Route::get('/fiche/search', 'App\Http\Controllers\Annonce\MainController@search');


Route::get('delete/{id}', 'App\Http\Controllers\Annonce\MainController@delete');

Route::get('/fiche/{id}/{categorie_id}/{locate_id}/{user_id}', 'App\Http\Controllers\Annonce\MainController@fiche')->name('voir_annonce');

Route::get('/categories/{id}', 'App\Http\Controllers\Annonce\MainController@viewByCategory')->name('voir_categories');


/*---------Route vers pages users------------*/
Auth::routes();

Route::get('/email', function () {
    return new VerificatNewUser();
});

Auth::routes(['verify' => true]);


Route::get('/user_settings', function(){
    return view('pages/user_settings');
})->middleware('verified');

Route::get('/apropos', function(){
    return view('pages/apropos');
});


Route::get('/confirme/{id}/{token}', 'App\Http\Controllers\Auth\RegisterController@confirme');

Route::get('/deposeraction','App\Http\Controllers\DepotController@storeAd');

/*---------Route vers reset password------------*/

Route::get('/forgot-password', function () {
    return view('pages/forgot-password');
})->middleware('verified');



Route::post('/forgot-password', function (Request $request) {
    
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware(['guest'])->name('password.email');


