<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    protected $fillable =[
        "title",
        "description",
        "category",
        "tags",
        "status",
        "featured_image"
    ];
    protected $casts = [
        'tags' => 'array'
    ];

    
    
}