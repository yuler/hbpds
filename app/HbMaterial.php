<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class HbMaterial extends Model {

	//

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'hb_materials';

	protected $primaryKey = "id";

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id','title','content','lang','published_at','published','created_at','updated_at'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];


}
