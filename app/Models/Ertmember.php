<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ertmember extends Model
{
    use HasFactory;

    protected $table = 'specialization';
    protected $fillable = [
        'zonename','name','specification','phoneno','department',
    ];
    
}
