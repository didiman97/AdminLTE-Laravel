<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tabel_device extends Model
{
    protected $table ="tabel_device";
    protected $primaryKey ="id";
    protected $fillable =[
        'id','code','nama','status'
    ];
}
