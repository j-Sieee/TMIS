<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransApplyModel extends Model
{
    //

    protected $table = 'transformer_application';

	/**
	 * The attributes that are mass assignable.
	 *
	 *
	 */
	protected $fillable = [
		'application_record ', 'application_date','application_type_id ',
    ];
}
