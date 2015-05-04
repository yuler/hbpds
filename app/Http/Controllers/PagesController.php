<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\HbAsa;
use App\HbArtwork;
use App\HbBanner;
use App\HbAd;

class PagesController extends Controller {

	public function getIndex()
	{
		$banners = HbBanner::where('enable','=','1')
							->orderBy('order')
							->get();

		$ads = HbAd::where('enable','=','1')
							->orderBy('order')
							->get();
		return view('portal.index')->withSubnav('home')->withBanners($banners)->withAds($ads);
	}

	public function getIntroduction(){
		return view('portal.about.introduction')->withSubnav('about');
	}

	public function getContact(){
		return view('portal.about.contact')->withSubnav('about');
	}

	public function getAuctionGuide()
	{
		return view('portal.auctionNotice.auctionGuide')->withSubnav('auctionNotice');
	}

	public function getTransactionRead()
	{
		return view('portal.auctionNotice.transactionRead')->withSubnav('auctionNotice');
	}

	public function getAuctionReference()
	{
		$locale = \App::getLocale();
		$lang = 0;
		if($locale == 'zh-TW'){
			$lang = 0;
		}else {
			$lang = 1;
		}
		$materials = \App\HbMaterial::where('published','=','1')->where('lang', '=', $lang)->paginate(5);
		foreach ($materials as $key => $material) {
			$conent = $material->content;
			$material->article = strip_tags($conent);
			preg_match_all('/<img\s.*?>/', $conent, $imgList);
			$imgList = array_slice($imgList[0], 0, 4);
			$material->imgList = $imgList;
		}
		return view('portal.auctionNotice.auctionReference')->withMaterials($materials)->withSubnav('auctionNotice');
	}

	public function getAuctionBook()
	{
		return view('portal.auctionNotice.auctionBook')->withSubnav('auctionNotice');
	}
	

	public function getOnline()
	{
		$asas = HbAsa::where('asa_only_online','=','1')->paginate(5);
		return view('portal.online.index')->withAsas($asas)->withSubnav('online');
	}

	public function getSearch(Request $request)
	{
		$locale = \App::getLocale();
		$lang = 0;
		if($locale == 'zh-TW'){
			$lang = 0;
		}else {
			$lang = 1;
		}
		$kw = $request->input('kw');
		$word = strtolower($kw);
		$word = str_replace(' ','',$word);
		$word = str_replace('lot','',$word);
		$artworks = HbArtwork::where('art_lot', 'like', '%' . $word . '%')
				->where('lang', '=', $lang)
				->orWhere('art_name', 'like', '%' . $kw . '%')
				->paginate(8);
		return view('portal.search.result')->withKw($kw)->withArtworks($artworks);
	}
}
