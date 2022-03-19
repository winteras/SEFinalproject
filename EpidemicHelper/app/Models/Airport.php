<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Severity;

class Airport extends Model
{
    use HasFactory;
    public $timestamps = false; // avoid error;
    public $id = false; // avoid error;
    protected $table = 'airport';



    public function get_severityInfo($res)//call by controller
    {   
        $getData = $this::where('airport_id',$res)->value('country_id');
        $sick = new Sick();
        return $sick->get_sick($getData);//goto sick.php
        
    }

    public function get_severityInfo1($res)//call by controller
    {   
        $getData = $this::where('airport_id',$res)->value('country_id');
        $sick = new Sick();
        return $sick->get_sick1($getData);//goto sick.php
        
    }


}
