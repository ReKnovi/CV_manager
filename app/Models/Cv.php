<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use HasFactory;

// app/Models/Cv.php

protected $fillable = ['name', 'email', 'phone', 'technology', 'level', 'salary_expectations', 'experience', 'interview_status'];
 
}


