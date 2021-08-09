<?php

namespace Tests\Feature;


use DB; 
use Illuminate\Http\Request;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;

class ExampleTest extends TestCase
{


    
    /**
     * A basic test example.
     *
     * @return void
     */
    
    public function test_single_json_request(){ 
        
        $this->withoutExceptionHandling();

        $response = $this->postJson('/api/create/single', ['url' => 'iamhere.com', 
                                                    'title' => 'iainsucks',
                                                    'description' => 'nice',
                                                    'episode_number' => '9',
                                                    "episode_name"=>"exampleepisodename",
                                                   'date_created' => '2021-08-05 14:12:32']);
        
        $response
            ->assertStatus(201);
    }
        
    public function test_json_from_file_request (){

        $this->withoutExceptionHandling();

        $jsonString = file_get_contents(base_path('input.json'));
        $data = json_decode($jsonString, TRUE);

        $response = $this->postJson('/api/create/bulk', $data); 

        $response
            ->assertStatus(201);
    }
    
    public function test_delete_episode_request (){

        $data = '12'; 
        $this->withoutExceptionHandling();
        
        $response = $this->post('/api/delete/something', ['episode_number' => $data]); 

        $response
        ->assertStatus(200);    
            
    }

    /*
    public function test_update_record (){

        $this->withoutExceptionHandling();
        $id = '3'; 
        $description = 'test Worked!'

        $response = $this->post('/api/update/something', ['id' => $id, 
                                                         'description' => $description] );

        $response
            ->assertStatus(200);
    }
    */
    
}
