<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insert extends Model
{
    use HasFactory;
    protected $table = 'insert';
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
