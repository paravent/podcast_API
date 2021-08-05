<?php

namespace Tests\Feature;


use DB; 
use Illuminate\Http\Request;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    
    public function test_single_json_request()
    { 
        
        
        $response = $this->postJson('/api/create/single', ['url' => 'iamhere.com', 
                                                    'title' => 'iainsucks',
                                                    'description' => 'nice',
                                                    'episode_number' => '9',
                                                    'created_date' => '2021-08-05 14:12:32']);
        
        $response
            ->assertStatus(201);
            /*
            ->assertJson([
                'created' => true
            ]);
            */
    }
        
    public function test_json_from_file_request (){

        $jsonString = file_get_contents(base_path('input.json'));
        $data = json_decode($jsonString, TRUE);

        $response = $this->postJson('/api/create/bulk', $data); 

        $response
            ->assertStatus(201);
            /*
            ->assertJson([
                'created' => true
            ]);
            */
    }
    

    //How to input json file into api?
}
