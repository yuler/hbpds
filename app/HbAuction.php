<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class HbAuction extends Model {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'hb_auctions';

	protected $primaryKey = "id";

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id','auction_name','privew_begin_time','preview_end_time','auction_begin_time','auction_end_time','lang','created_at','updated_at'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];
	//

}
