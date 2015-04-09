<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class LanguageController extends Controller {

	public function setLanguage($lang)
	{
		session()->put('locale',$lang);
		return redirect()->back();
	}

}
