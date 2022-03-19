<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Severity_level extends Model
{
    use HasFactory;
    protected $table = 'severity_level';
    public function get_Severity($serach_name)
    {   
        $getData = $this::where('AreaDesc',$serach_name)->get();
        return $getData;
        
    }
}
