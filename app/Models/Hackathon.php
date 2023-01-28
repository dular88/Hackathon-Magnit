<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hackathon extends Model
{
    use HasFactory;
    protected $table = 'questions';
    protected $fillable = ['question', 'a', 'b', 'c', 'd', 'e' ];
}
