<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\HbAuction;
use Carbon\Carbon;

class HbAuctionController extends Controller {

	public function getPreview()
	{
		$auctions = HbAuction::whereBetween('preview_begin_time', [Carbon::now()->year, Carbon::now()])->get();
		// dd($auctions[0]->asas());
		return view('portal.auction.preview')->withAuctions($auctions);
	}

	public function previewAsa($id)
	{
		return view('portal.auction.previewAsa');
	}

}
