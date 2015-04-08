<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class HbAsa extends Model {
/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'hb_asas';

	protected $primaryKey = "id";

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id','asa_name','auction_id','preview_begin_time','preview_end_time','begin_time','end_time','asa_addr','asa_image','asa_only_online','asa_online_url','asa_online_logo','lang','created_at','updated_at'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];


}
