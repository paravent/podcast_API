<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Podcasts extends Model
{
    use HasFactory;
    public $incrementing = true; 
    protected $connection = 'sqlite';
    protected $table = 'podcasts';
    protected $fillable = [
        'url',
        'title',
        'description',
        'episode_number',
        'episode_name',
        'date_created'
    ];

}

