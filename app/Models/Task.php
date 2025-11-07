<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $Table = 'tasks';

    
    protected $fillable = [
        'name',
        'date',
        'description',
        'completed',
        'user_id',
    ];
}
