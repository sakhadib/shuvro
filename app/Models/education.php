<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class education extends Model
{
    use HasFactory;

    protected $table = 'education';
    protected $fillable = ['school', 'degree', 'field', 'start', 'end', 'status', 'result'];

    
}
