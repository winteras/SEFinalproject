<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    public $timestamps = false; // avoid error;
    protected $table = 'flight';
    // protected $fillable = ['airplane_id', 'airport_id', 'year_id', 'month_id', 'day_id', 'time_id'];
    public $incrementing = false;
    protected $keyType = 'string';

    
    protected $primaryKey = 'airplane_id';
    // protected $primaryKey = ['airplane_id', 'airport_id', 'year_id', 'month_id', 'day_id', 'time_id'];

    public function get_flight($airport,$year,$month,$day)
    {   


        $getData = $this::where('airport_id',$airport)->where('year_id',$year)->where('month_id',$month)->where('day_id',$day)
        ->leftJoin("Airplane", "Flight.airplane_id", "=", "Airplane.airplane_id")
        ->leftJoin("Company", "Airplane.company_id", "=", "Company.company_id")
        ->get()
        ->sortBy('time_id');
        //->where('time',$time)
        
  
            return $getData;
        
    }
 
   
}
