<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\HbAsa;

class PagesController extends Controller {

	public function getIndex()
	{
		return view('portal.index')->withSubnav('home');
	}

	public function getIntroduction(){
		return view('portal.about.introduction')->withSubnav('about');
	}

	public function getContact(){
		return view('portal.about.contact')->withSubnav('about');
	}

	public function getBuyService()
	{	
		session('subNav','auctionNotice');
		return view('portal.auctionNotice.buyService')->withSubnav('auctionNotice');
	}

	public function getAuctionGuide()
	{
		session('subNav','auctionNotice');
		return view('portal.auctionNotice.auctionGuide')->withSubnav('auctionNotice');
	}

	public function getTransactionRead()
	{
		return view('portal.auctionNotice.transactionRead')->withSubnav('auctionNotice');
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
}
