<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ViewApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $applicant_info = DB::select("select `applicant_id`, `applicant_code`, CONCAT(`applicant_firstname`, ' ', ' ', `applicant_middlename`, ' ', `applicant_lastname`) AS NAME, CONCAT(`applicant_address`, ', ', `applicant_barangay`, ', ', `applicant_citytown`) AS ADDRESS FROM `transformer_applicant`");
        return view('view_application',['users'=>$applicant_info]);
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
    //     console.log("aasd");
    //     //
    //     ApplyModel::find($id)->delete();
    //     // DB::table('transformer_applicant')->where('applicant_id', $id)->delete();
        
        
    //     return response()->json([
    //         'success' => 'Record has been deleted successfully!'
    //     ]);

        // echo "asdasdasdas";

            
     
        
        // ApplyModel::find($id)->delete();
        // DB::delete('delete from transformer_applicant where applicant_id = ?',[$id]);
        
        // return back()->with("status", "Your message has been received, We'll get back to you shortly.");
        ApplyModel::find($id)->delete();
        
        return json_encode(array('statusCode'=>200));

    }

    function delete_Student($id){


        // echo "asdadads";
        //  ApplyModel::find($id)->delete();
        DB::delete('delete `transformer_application`, `transformer_applicant`  FROM `transformer_application` INNER JOIN`transformer_applicant` WHERE  `transformer_application`.`applicant_id` = `transformer_applicant`.`applicant_id`  AND `transformer_applicant`.`applicant_id` = ?',[$id]);
      

        return json_encode(array('statusCode'=>200));

        
    }

    public function get_applicant_data($id){

        $applicant_data = DB::select("select * FROM `transformer_applicant` where applicant_id = ?", [$id]);

        return json_encode(array('applicant'=>$applicant_data));

    }
  
}
