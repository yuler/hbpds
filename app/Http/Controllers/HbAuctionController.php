<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HbAuctionController extends Controller {

	public function getPreview()
	{
		return view('portal.auction.preview');
	}

	public function previewAsa($id)
	{
		return view('portal.auction.previewAsa');
	}

}
