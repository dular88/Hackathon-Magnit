<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HappinessSurvey extends Model
{
    use HasFactory;
    protected $table = 'happiness_servey';
    protected $fillable = ['empno', 'email', 'total_marks', 'happiness_marks'];
}

