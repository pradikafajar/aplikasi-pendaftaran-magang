<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class status_pengajuan extends Model
{
    use HasFactory;
    protected $table = 'status_pengajuans';
    protected $guarded = [];
}
