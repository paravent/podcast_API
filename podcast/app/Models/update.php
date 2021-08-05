<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class update extends Model
{

    protected $fillable = [
        'url',
        'title',
        'description',
        'episode_number',
        'created_date'
    ];
    use HasFactory;
}
