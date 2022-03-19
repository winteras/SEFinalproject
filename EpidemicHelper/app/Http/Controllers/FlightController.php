<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFlightRequest;
use App\Http\Requests\UpdateFlightRequest;
use Illuminate\Http\Request;
use App\Models\Flight;
use App\Models\Airport;
use App\Models\Country;
use App\Models\Sick;
use App\Models\Severity;
use App\Models\airplane;
use App\Models\Year;
use App\Models\Month;
use App\Models\Day;
use App\Models\Time;


use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        //
        // $flights = Flight::all();
        $flights = Flight::select('*')
        
        ->leftJoin("Airport", "Airport.airport_id", "=", "Flight.airport_id")
        ->leftJoin("Airplane", "Airplane.airplane_id", "=", "Flight.airplane_id")
        ->leftJoin("Company", "Company.company_id", "=", "Airplane.company_id")
        ->leftJoin("Country", "Country.country_id", "=", "Airport.country_id")
        //->limit (10) -> offset(0)
        ->orderBy('year_id','desc')
        //->sortBy('day_id')
        ->paginate(20);
        //;
        return view('flights.index' , compact('flights'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fopts = Airplane::all();
        $opts = Airport::all();
        $yopts = Year::all();
        $mopts = Month::all();
        $dopts = Day::all();
        $topts = Time::all();
        return view('flights.create' ,compact('opts','yopts','mopts','dopts','topts' ,'fopts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (Flight::where('airplane_id',$request->input('_flight'))
        ->where('airport_id',$request->input('_airport'))
        ->where('year_id',$request->input('_year'))
        ->where('month_id',$request->input('_month'))
        ->where('day_id',$request->input('_day'))
        ->where('time_id',$request->input('airplane_time'))
        ->doesntExist()) {
            Flight::insert(['airplane_id' => $request->input('_flight') ,
                            'status' => $request->input('airplane_status') ,
                            'year_id' => $request->input('_year') ,
                            'month_id' => $request->input('_month') ,
                            'day_id' => $request->input('_day') ,
                            'time_id' => $request->input('airplane_time') ,
                            'airport_id' => $request->input('_airport')]);
        }
        else{

            return redirect()->route('flights.create')->with('error','重複新增');
        }
        return redirect()->route('flights.index');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show(Request $request)
    {
        $flight = new Flight();
     
        $airport = Airport::all();
        $airports =new Airport();
        
        return view('flight_test', ['airport' => $airport ,




        //return view('Flight_test',['airports' => $airport->get_airport() , 

        'flights' => $flight->get_flight($request->input('airport'),$request->input('year'),$request->input('month'),$request->input('day')),
        'sicks'=> $airports->get_severityInfo1($request->input('airport')),
        'severitys' => $airports->get_severityInfo($request->input('airport'))//goto Airport.php

    
    
    ]);
}
        





    public function edit(Flight $flight)
    {
        // //
        $opts = Airport::all();
        $yopts = Year::all();
        $mopts = Month::all();
        $dopts = Day::all();
        $topts = Time::all();
        // $flight = Flight::where('airplane_id',$flightdata->airplane_id)->leftJoin("Airport", "Airport.airport_id", "=", "Flight.airport_id")->get();
        return view('flights.edit', compact('opts','yopts','mopts','dopts','topts','flight'));//compact將變數傳出，套用相同變數名稱
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flight $flight)
    {
        Flight::where('airplane_id',$flight->airplane_id)
        ->where('airport_id',$flight->airport_id)
        ->where('year_id',$flight->year_id)
        ->where('month_id',$flight->month_id)
        ->where('day_id',$flight->day_id)
        ->where('time_id',$flight->time_id) -> update(['status' => $request->input('airplane_status') ,
                                                        'year_id' => $request->input('_year') ,
                                                        'month_id' => $request->input('_month') ,
                                                        'day_id' => $request->input('_day') ,
                                                        'time_id' => $request->input('airplane_time') ,
                                                        'airport_id' => $request->input('_airport')]);
        
        // $flight->update();

        return redirect()->route('flights.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flight $flight)
    {
        //
        // // Flight::where('airplane_id',$flight->airplane_id )->delete();
        // $flight->delete();
        Flight::where('airplane_id',$flight->airplane_id)
        ->where('airport_id',$flight->airport_id)
        ->where('year_id',$flight->year_id)
        ->where('month_id',$flight->month_id)
        ->where('day_id',$flight->day_id)
        ->where('time_id',$flight->time_id) -> delete();

        return redirect()->route('flights.index');
    }
}
