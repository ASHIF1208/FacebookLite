<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class connection extends Model
{
    use HasFactory;
    protected $table = 'connections';
    protected $fillable = ['title','content','image'];
}
