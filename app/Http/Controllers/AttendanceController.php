<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Register;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $registers = Register::all();

        return view('lists')->with('registers',  $registers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('attendance');        
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
        $request->validate([
            'name' => 'required',
            'place' => 'required',
            'purpose' => 'required|max:200',
            'datein' => 'required',
            'timein' => 'required'
        ]);

        // Save data
        $register = new Register;

        $register->name =  $request->input('name');
        $register->place =  $request->input('place');
        $register->phone =  $request->input('phone');
        $register->purpose =  $request->input('purpose');
        
        $date =  $request->input('datein');
        $time =  $request->input('timein');
        $register->datetime_in = date('Y-m-d H:i:s', strtotime("$date $time"));

        $register->created_at  =  date("Y-m-d H:i:s");
        $register->status =  1;

        $register->save();

        return redirect('/attendances')->with('success', 'Attendance Registered Successfully !');
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
