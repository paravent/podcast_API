<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Http\Controllers\PodcastController;

use App\Models\Post; 
use App\Models\update; 
use App\Models\Podcasts; 

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


Route::post('/create/single', function (Request $request) {
    $updates =  Podcasts::create([
        'url' => $request['url'],
        'title' => $request['title'],
        'description' => $request['description'],
        'episode_number' => $request['episode_number'],
        'episode_name' => $request['episode_name'],
        'date_created' => $request['date_created'] 
    ]);
     return $updates;  
    
 });
 
 Route::post('/create/bulk', function (Request $request) {
    $input = $request->all();
    foreach($input as $value){
        
        $updates =  Podcasts::create([
            'url' => $value['url'],
            'title' => $value['title'],
            'description' => $value['description'],
            'episode_number' => $value['episode_number'],
            'episode_name' => $value['episode_name'],
            'date_created' => $value['date_created']
        ]);
         
    }
    return $updates;
    
 });

 Route::post('/delete/something', function (Request $request){

    $input = $request->all(); 

    return App::call('App\Http\Controllers\PodcastController@destroy', $input); 

 });

 Route::post('/update/something', function (Request $request){

    $input = $request->all(); 
    
    return App::call('App\Http\Controllers\PodcastController@update', $input); 

 });
 

Route::middleware('auth:api')->get('/user', function (Request $request) {

    return $request->user();

});
