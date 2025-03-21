<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'description'
    ];

    public function tag(){
        return $this->belongsToMany(Tag::class);
    }
}
