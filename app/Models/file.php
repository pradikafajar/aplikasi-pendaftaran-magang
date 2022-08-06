<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class file extends Model
{
    use HasFactory;
    protected $table = 'files';
    protected $guarded = [];
    protected $fillable = [
        'name','path'
    ];
}
