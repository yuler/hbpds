<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class HbBanner extends Model {

	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'hb_banners';

	protected $primaryKey = "id";

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id','name','image_url','target_url','order','enable','created_at','updated_at'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];
	//
}
