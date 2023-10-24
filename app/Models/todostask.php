<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todostask extends Model
{
    use HasFactory;
    protected $primaykey = '_id';
    public $table = 'todo';
    protected $fillable = [
        'task',
        'completed',
    ];
}
