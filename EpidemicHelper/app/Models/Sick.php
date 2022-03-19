<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sick extends Model
{
    use HasFactory;
    public $timestamps = false; // avoid error;
    public $id = false; // avoid error;
    protected $table = 'sick';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'severity_level_id';
    

    public function get_sick($country)
    {   //call by airport

        //$date =timestamp('year_id','month_id','day_id');
      
        $getData = $this::where('country_id',$country)->leftJoin("Severity", "Severity.severity_level_id", "=", "Sick.severity_level_id")->get()
        ->sortBy('year_id');
        //->where('db欄位',view欄位name)


        return $getData;//傳回發布日期
        
    }
    public function get_sick1($res)
    {   
        $getData = $this::where('country_id',$res)->value('severity_level_id');
        $severity=new Severity();

        return $severity->get_severity1($getData);
        
    }

}
