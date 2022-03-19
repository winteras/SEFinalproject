<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Severity extends Model
{
    use HasFactory;
    public $timestamps = false; // avoid error;
    protected $table = 'severity';
    public $incrementing = false;



    public function get_Severity($res)//call by sick
    {   
        $getData = $this::where('severity_level_id',$res)->get();
        return $getData;
        
    }
    public function get_severity1($res)
    {   
        $getData = $this::where('severity_level_id',$res)->get();
        return $getData;
        
    }
    
}
