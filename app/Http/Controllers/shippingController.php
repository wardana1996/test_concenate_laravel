<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\City;
use Illuminate\Http\Request;
use Kavist\RajaOngkir\Facades\RajaOngkir;

class shippingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provinceOrigin = Province::where('province_id',5)->pluck('name', 'province_id');
        $provinceDestination = Province::pluck('name', 'province_id');
        return view('shipping', compact('provinceOrigin','provinceDestination'));
    }
    

    public function getCities($id)
    {
        $city = City::where('province_id', $id)->pluck('name', 'city_id');
        return response()->json($city);
    }

    public function ongkirCheck(Request $request)
    {
        $cost = RajaOngkir::ongkosKirim([
            'origin'        => $request->city_origin, 
            'destination'   => $request->city_destination, 
            'weight'        => $request->weight, 
            'courier'       => $request->courier 
        ])->get();


        return response()->json($cost);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
