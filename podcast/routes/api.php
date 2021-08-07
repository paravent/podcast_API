<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Http\Controllers\PodcastController;

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


// Route::get('/podcasts', [PodcastController::class, 'show']);
// Route::get('/culltime', [PodcastController::class, 'cull{9}']); 

// Route::post('/delete'/$request['episode_to_delete'], [PodcastController::class, 'cull']);


Route::post('/create/single', function (Request $request) {
    
    $updates =  update::create([
        'url' => $request['url'],
        'title' => $request['title'],
        'description' => $request['description'],
        'episode_number' => $request['episode_number'],
        'episode_name' => $request['episode_name'],
        'created_date' => $request['created_date']
     ]);
     return $updates;  
    
 });
 
 Route::post('/create/bulk', function (Request $request) {
    $input = $request->all();

    foreach($input as $value){
        
        $updates =  update::create([
            'url' => $value['url'],
            'title' => $value['title'],
            'description' => $value['description'],
            'episode_number' => $value['episode_number'],
            'episode_name' => $value['episode_name'],
            'created_date' => $value['created_date']
        ]);
         
    }
    return $updates;
    
 });


 
 Route::post('/create/something',  function (Request $request) {

    /*
    $updates =  update::delete([
        'episode_number' => $request['episode_to_delete']]);
        
    return $updates; 
        */
        /*

    $toCull = $request['episode_number']; 
    echo $toCull; 
    
    return App::call('App\Http\Controllers\PodcastController@cull', $request['episode_number']); 
        */


 }); 



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
