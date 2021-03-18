<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Operator;

class operatorController extends Controller
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
        $operators = Operator::latest()->get();
        return view('admin.operator.operator-list', ['operators'=>$operators]);
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
        
        $request->validate([
            'fullname'=> 'required',
            'email'=> 'required|email',
            'address'=> 'required',
            'photo' => 'required|image|mimes:jpeg,jpg,png,gif|max:2048',

        ]);
        if ($request->hasFile('photo')) {
            $filename = $request->file('photo');
            $photo =  rand().'.'.$filename->getClientOriginalExtension();
            Image::make($filename)->save(public_path('uploads/'.$photo));
           
        }

        $insert = new Operator;

        $insert->operator_name = $request->input('fullname');
        $insert->operator_email = $request->input('email');
        $insert->operator_address = $request->input('address');
        $insert->operator_logo = $photo;

        $insert->save();
        return redirect()->back()->with('info','New Operator Added!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
        $user = Operator::findOrFail($id);

        $request->validate([
            'fullname'=> 'required',
            'email'=> 'required|email',
            'address'=> 'required',
        ]);

        $user->operator_name = $request->input('fullname');
        $user->operator_email = $request->input('email');
        $user->operator_address = $request->input('address');

        $user->save();
        return redirect()->back()->with('info', 'Operator Updated');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Operator::findOrFail($id);
        $delete->delete();
        return redirect()->back()->with('danger','Operator deleted successfully');
    }
}
