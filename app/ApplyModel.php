<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApplyModel extends Model
{
    //


    protected $table = 'transformer_applicant';

	/**
	 * The attributes that are mass assignable.
	 *
	 *
	 */
	protected $fillable = [
		'applicant_id' ,'applicant_code	', 'applicant_firstname','applicant_middlename', 'applicant_lastname', 'applicant_address', 'applicant_barangay', 'applicant_citytown',
    ];
    
}


