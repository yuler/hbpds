<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function getIndex()
	{
		return view('portal.index');
	}

	public function getIntroduction(){
		return view('portal.about.introduction');
	}

	public function getContact(){
		return view('portal.about.contact');
	}

	public function getBuyService()
	{
		return view('portal.auctionNotice.buyService');
	}

	public function getAuctionGuide()
	{
		return view('portal.auctionNotice.auctionGuide');
	}

	public function getTransactionRead()
	{
		return view('portal.auctionNotice.transactionRead');
	}

	public function getOnline()
	{
		return view('portal.online.index');
	}
}
