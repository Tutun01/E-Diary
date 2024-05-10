<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grades extends Model
{
    protected $table= "grades";

    protected $fillable = [
      "subject", "grades", "teacher", "user_id"
    ];
}
