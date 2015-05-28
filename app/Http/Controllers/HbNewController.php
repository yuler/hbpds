<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\HbNew;

class HbNewController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		/*$locale = \App::getLocale();
		$lang = 0;
		if($locale == 'zh-TW'){
			$lang = 0;
		}else {
			$lang = 1;
		}*/
		$news = HbNew::where('published','=','1')->orderBy('created_at','desc')->paginate(5);
		foreach ($news as $key => $new) {
			$conent = $new->content;
			$new->article = strip_tags($conent);
			preg_match_all('/<img\s.*?>/', $conent, $imgList);
			$imgList = array_slice($imgList[0], 0, 4);
			$new->imgList = $imgList;
		}
		return view('portal.about.new.index')->withNews($news)->withSubnav('about');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$new = HbNew::find($id);
		return view('portal.about.new.show')->withNew($new)->withSubnav('about');
	}


}
