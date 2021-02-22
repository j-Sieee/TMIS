<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\ApplyModel;
class ApplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'inputCode' => 'required',
            'inputfname' => 'required',
            'inputmname' => 'required',
            'inputlname' => 'required',
            'inputAddress' => 'required',
            'inputBarangay' => 'required',
            'inputCity' => 'required',


        ]);
        
        //
        $Apply = New ApplyModel;
        $Apply->applicant_code = $request->get('inputCode');
        $Apply->applicant_firstname = $request->get('inputfname');
        $Apply->applicant_middlename = $request->get('inputmname');
        $Apply->applicant_lastname = $request->get('inputlname');
        $Apply->applicant_address = $request->get('inputAddress');
        $Apply->applicant_barangay = $request->get('inputBarangay');
        $Apply->applicant_citytown = $request->get('inputCity');
        
        $Apply->save();


        // DB::insert('INSERT INTO `transformer_applicant`(`applicant_code`, `applicant_firstname`, `applicant_middlename`, `applicant_lastname`, `applicant_address`, `applicant_barangay`, `applicant_citytown`) values(?,?,?,?,?,?,?)',[$inputCode,$inputfname,$inputmname,$inputlname,$inputAddress,$inputBarangay,$inputCity]);
        return redirect('/');
         
    
        
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
