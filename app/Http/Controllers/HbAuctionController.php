<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\HbAuction;
use App\HbAsa;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class HbAuctionController extends Controller {

	public function getPreview()
	{
		$auctions = HbAuction::whereBetween('preview_begin_time', [Carbon::now()->year, Carbon::now()])->orderBy('preview_begin_time')->get();
		$asas = HbAsa::whereBetween('preview_begin_time', [Carbon::now()->year, Carbon::now()])->orderBy('preview_begin_time')->paginate(5);
		return view('portal.auction.preview')->withAuctions($auctions)->withAsas($asas)->withSubnav('auction');
	}

	public function previewAsa($id)
	{
		$auctions = HbAuction::whereBetween('preview_begin_time', [Carbon::now()->year, Carbon::now()])->orderBy('preview_begin_time')->get();
		$asas = HbAsa::whereBetween('preview_begin_time', [Carbon::now()->year, Carbon::now()])->orderBy('preview_begin_time')->get();
		$previewAsa = HbAsa::find($id);
		return view('portal.auction.previewAsa')->withAuctions($auctions)->withAsas($asas)->withSubnav('auction')->withPreviewAsa($previewAsa);
	}

	public function getHistory()
	{	
		$historyAuction = HbAuction::where('preview_begin_time','<',Carbon::now()->format('Y'))
								->select('preview_begin_time', DB::raw('YEAR(preview_begin_time) year'))
								->orderBy('preview_begin_time','desc')
								->groupBy('year')
					    		->get();
		//$auctions = HbAuction::whereBetween('preview_begin_time', [Carbon::now()->year, Carbon::now()])->orderBy('preview_begin_time')->get();
		$asas = HbAsa::where('preview_begin_time', '>', [Carbon::now()->year])->orderBy('preview_begin_time','desc')->paginate(5);
		return view('portal.auction.history')->withHistoryAuction($historyAuction)->withAsas($asas)->withSubnav('auction');
	}

}
