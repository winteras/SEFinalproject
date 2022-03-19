<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\City;
class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $hotels = Hotel::select('*')
        ->leftJoin("City", "City.city_id", "=", "Hotel.city_id")
        ->paginate(20);
        return view('hotels.index' , compact('hotels'));
    }

    public function index2()//hoteltest(清單版ok)
    {
        //
        $hotels = Hotel::select('*')
        ->leftJoin("City", "City.city_id", "=", "Hotel.city_id")
        ->get();
        return view('hotel_test' , compact('hotels'));
    }

    public function index3()//hotel-list(圖片版ok)
    {
        //
        $hotels = Hotel::select('*')
        ->leftJoin("City", "City.city_id", "=", "Hotel.city_id")
        ->paginate(9);
        return view('hotelcopy' , compact('hotels'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $hopts = Hotel::all();
        $copts = City::all();
        return view('hotels.create', compact('hopts','copts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Hotel::where('hotel_name',$request->input('_hotelname'))
        ->where('city_id',$request->input('_city_name'))
        ->doesntExist()) {
            Hotel::insert(['hotel_id' => (Hotel::count()+1) ,
                            'hotel_name' => $request->input('_hotelname') ,
                            'hotel_link' => $request->input('_hotel_link') ,
                            'city_id' => $request->input('_city_name') ]);
        }
        else{

            return redirect()->route('hotels.create')->with('error','相同地區已有相同名稱旅館');
        }
        return redirect()->route('hotels.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        return view("hotel");
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
        //
        $hopts = Hotel::all();
        $copts = City::all();
        return view('hotels.edit', compact('hotel','hopts','copts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel)
    {
        Hotel::where('hotel_id',$hotel->hotel_id) -> update(['hotel_name' => $request->input('_hotelname') ,
                                                             'city_id' => $request->input('_city_name') ,     
                                                             'hotel_link' => $request->input('_hotel_link')]);

        // $flight->update();

        return redirect()->route('hotels.index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        //
        Hotel::where('hotel_id',$hotel->hotel_id)-> delete();

        return redirect()->route('hotels.index');
    }
}
