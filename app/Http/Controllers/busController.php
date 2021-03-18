<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Operator;
use App\Bus;

class busController extends Controller
{
    public function __Construct(){

        return $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operators = Operator::all();
        $buses = Bus::all();
        return view('admin.bus.bus-list', ['buses'=>$buses, 'operators'=>$operators]);
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
       $this->validate($request,[

        'bus_name' => 'required',
        'bus_code' => 'required',
        'operator' => 'required',
        'seat' => 'required',

       ]);
       $insert = new Bus;
       $insert->bus_name = $request->input('bus_name');
       $insert->bus_code = $request->input('bus_code');
       $insert->operator_id = $request->input('operator');
       $insert->total_seats = $request->input('seat');

       $insert->save();
       return view('admin.bus.bus-list')->with('info', 'New Bus Vehicle Added');
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
        $this->validate($request,[

        'bus_name' => 'required',
        'bus_code' => 'required',
        'operator' => 'required',
        'seat' => 'required',

       ]);

       $insert = Bus::findorFail($id);
       $insert->bus_name = $request->input('bus_name');
       $insert->bus_code = $request->input('bus_code');
       $insert->operator_id = $request->input('operator');
       $insert->total_seats = $request->input('seat');

       $insert->save();
       return redirect()->back()->with('info', 'Bus details Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = findorFail($id);
        $delete->delete();
        return redirect()->back()->with('danger', 'Bus Removed from list');
    }
}
