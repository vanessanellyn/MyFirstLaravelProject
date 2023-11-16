<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function reviews() // name of the relationship
    {
        // defines a one-to-many relationship
        return $this->hasMany(Review::class);
    }
}