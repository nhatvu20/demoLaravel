<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Todos extends Model
{
    use HasFactory;
    protected $table = 'todos';
    protected $fillable = ['task', 'completed'];
}
