<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    use HasFactory;
    public $timestamps = false; // avoid error;
    public $id = false; // avoid error;
    protected $table = 'year';
}
