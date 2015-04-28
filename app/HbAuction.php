<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\HbAsa;
use Illuminate\Support\Facades\DB;

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
	protected $fillable = ['id','auction_name','preview_begin_time ','preview_end_time','auction_begin_time','auction_end_time','lang','created_at','updated_at'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];
	//

	/*public function asas()
	{
		//return $this->hasMany('App\HbAsa', 'auction_id', 'id');
		return HbAsa::where('auction_id', '=', $this->id)
					->where('asa_group', '=', $this->asa_group)
					->orderBy('begin_time')
					->get();
	}*/

	public function auctionGroup()
	{
		return HbAsa::where('auction_id','=',$this->id)
					->select('asa_group', DB::raw('count(*) as total'), DB::raw('min(preview_begin_time) as beginDate'), DB::raw('max(preview_end_time) as endDate'))
					->groupBy('asa_group')
					->orderBy('preview_begin_time')
					->get();
	}

	/*public function dateRange($asa_group)
	{
		return HbAsa::where('auction_id','=',$this->id)
					->where('asa_group','=',$asa_group)
					->orderBy('preview_begin_time')
					->get();
	}*/

	public function asasByGroup($asa_group)
	{
		return HbAsa::where('auction_id','=',$this->id)
					->where('asa_group','=',$asa_group)
					->orderBy('preview_begin_time')
					->get();
	}


	public function artworks()
	{
		return HbAsa::where('auction_id','=',$this->id)
				->orderBy('','desc')
				->groupBy(function($date) {
	        		return Carbon::parse($date->created_at)->format('Y'); // grouping by years
	    		});
	}
}
