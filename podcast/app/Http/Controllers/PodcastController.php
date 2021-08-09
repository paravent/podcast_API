<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Controllers\Controller;
use App\Models\Podcasts;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    
    public function show(){

        $id = DB::select('SELECT * FROM podcasts');
        return view('pages.all', ['id'=>$id]);
    }

    public function index(){

        return response(['created'=>true],201); 
    }

    public function destroy(Request $request){   

        $deleteFactor = $request['episode_number']; 

        DB::delete('delete from podcasts where episode_number = ?', [$deleteFactor]);

        $exist = DB::select('SELECT * FROM podcasts where episode_number = ?', [$deleteFactor]); 
    }
    
    public function update(Request $request){

        $metaData = $request;
        $description =  $metaData['description'];
        $id =  $metaData[$id];
        
        $updateQuery = DB::update('UPDATE podcasts SET description = $description WHERE ID = $id'); 
    }
}