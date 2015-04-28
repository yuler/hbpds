<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class HbArtwork extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'hb_artworks';

	protected $primaryKey = "id";

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id','art_code','art_author','art_name','art_size','art_material','art_age','art_price_hkd','art_price_rmb','author_sumarry','art_inscription','art_tizhi',
	'art_mark','art_seal','art_collection_seal','art_publish','art_annotation','art_signature','art_phase'
	,'art_reference','art_record','art_exhibition','art_source','asa_id','art_lot','begin_price_hkd'
	,'end_price_hkd','begin_price_rmb','end_price_rmb','art_sumarry','art_dynasty','art_description','is_liupai'
	,'lang','created_at','updated_at'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];

	public function atts()
	{		
		return $this->belongsToMany('App\HbAttachment','hb_art_atts','art_id','att_id');
	}

	public function asa()
	{
		return $this->belongsTo('App\HbAsa','asa_id','id');
	}

	public function next()
	{
		$asa_id = $this->asa_id;
		$art_lot = $this->art_lot;
		return $this::where('asa_id', '=', $asa_id)
			->where('art_lot', '>', $art_lot)
			->get();
	}

	public function prev($value='')
	{
		$asa_id = $this->asa_id;
		$art_lot = $this->art_lot;
		return $this::where('asa_id', '=', $asa_id)
			->where('art_lot', '<', $art_lot)
			->get();
	}
}
