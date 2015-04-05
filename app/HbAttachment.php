<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class HbAttachment extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'hb_attachments';

	protected $primaryKey = "id";

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id','att_name','att_path','att_type','created_at','updated_at'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];
}
