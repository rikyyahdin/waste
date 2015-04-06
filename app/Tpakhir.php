<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Tpakhir extends Eloquent {
	
	public $timestamps = false;
	
	/**
	 * Fillable fields for a Tpakhir.
	 * 
	 * @var array
	 */
	protected $fillable = [
		'name', 'location'
	];
}
