<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Controllers\Controller;
use App\Models\update;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show()
    {

        $id = DB::select('SELECT * FROM updates');

        return view('pages.all', ['id'=>$id]);
        
    }

    public function index(){
        return response(['created'=>true],201); 
    }


    
}