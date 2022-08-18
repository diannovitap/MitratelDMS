<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pst extends Model
{
    use HasFactory;
    protected $fillable = ['pst'];
    public $timestamps = true;
}
