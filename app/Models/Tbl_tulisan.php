<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbl_tulisan extends Model
{
    use HasFactory;
    protected $table = 'tbl_tulisan';
    protected $guarded = [
        'id'
    ];
}
