<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class test extends Model
{

    protected $fillable = [
        'id', 
        'url',
        'title',
        'description',
        'episode_number',
        'date_created'
    ]; 

    use HasFactory;
}
