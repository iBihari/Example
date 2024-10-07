<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    // use HasFactory;
    // Định nghĩa các thuộc tính có thể điền
    protected $fillable = ['BookID','title', 'author', 'description', 'published_year'];

}
