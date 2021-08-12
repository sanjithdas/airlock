<?php

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
/**

 */
Route::post('/login',function(Request $request){
    $data = $request->validate([
        'email'    => 'required',
        'password' => 'required'
    ]);
    // $user = User::whereEmail($request->email)->first();
    // //dd($user);
    // if (!$user || !Hash::check($request->password, $user->password)){
    //       return response([
    //         'email' => ['The credentials invalid'],],404);
    // }
    // $token = $user->createToken('my-token');
    // return $token->plainTextToken;
    auth()->attempt($request->only('email','password'));
    return auth()->user();
});