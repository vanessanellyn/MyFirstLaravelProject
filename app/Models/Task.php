<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'long_description'];
    // $fillabe - where u put all the column names that you want Laravel to auto mass assignment
    // protected $guarded = ['secret']; // opposite of fillable; fillable is more secure
}