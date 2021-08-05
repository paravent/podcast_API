<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Testing\DatabaseMigrations;
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

Route::get('testing', function (){
    return ['message' => 'hello']; 

}); 


Route::get('/podcast/{updates}', [PodcastController::class, 'show']);


Route::get('/podcast123', [PodcastController::class, 'takeJSON']);

Route::get('/podcast', function () {
    // Read File

    $jsonString = file_get_contents(base_path('input.json'));

    $data = json_decode($jsonString, true);
    
    return $data; 
});

Route::get('create', function (Request $request) {
    
    $input = $request->all(); 

    /*
    if($request->has(['url', 'title', 'description', 'episode_number', 'created_date'])){
        $answer = "welcome";
        return  $answer; 
    }
    return false; 
    
    */

    if($request->has(['url'])){
        
        return  $request->url; 
    }
    return false;

    $jsonString = file_get_contents(base_path('input.json'));


    foreach(json_decode($jsonString, true) as $new_podcast){

        $updates =  update::create([
            'url' => $new_podcast['url'],
            'title' => $new_podcast['title'],
            'description' => $new_podcast['description'],
            'episode_number' => $new_podcast['episode_number'],
            'created_date' => $new_podcast['created_date']
         ]);
    }
 });


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

