<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saved_link extends Model
{
    use HasFactory;

    protected $fillable = [
        'real_url'
    ];


}
