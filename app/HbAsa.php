<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\HbArtwork;

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

	public function artworks()
	{
		return HbArtwork::where('asa_id','=',$this->id)
						->orderBy('art_lot')
						->paginate(24);
	}


	public function artworksCount()
	{
		return HbArtwork::where('asa_id','=',$this->id)
						->count();
	}

	public function auction()
	{
		return $this->hasOne('App\HbAuction', 'id', 'auction_id');
	}
}
