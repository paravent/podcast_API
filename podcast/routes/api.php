<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Testing\DatabaseMigrations;


use App\Models\Post; 
use App\Models\update; 
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

Route::get('testing', function (){
    return ['message' => 'hello']; 

}); 
/*
Route::get('/posts', function (){
   $post =  Post::create([
       'id' => '1', 
       'url' => 'anne.jpg',
       'title' => 'walkingwithugly',
       'description' => 'aPodcast',
       'episode_number' => '1',
       'date_created' => '21072001'
    ]);
    return $post; 
});
*/
Route::get('updates', function (){
    $updates =  update::create([
        
        'url' => 'annee.jpg'
     ]);
     return $updates; 
 });

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
