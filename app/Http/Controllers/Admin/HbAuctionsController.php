<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\HbAuction;
class HbAuctionsController extends Controller {


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$auctions = HbAuction::paginate(10);
		return view('admin.auctions.index')->withAuctions($auctions);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.auctions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(HbAuctionRequest $request)
	{
		$hbAcution = new HbAuction();

		$hbAuction->auction_name = $request->input('auction_name');
		$hbAuction->preview_begint_time = date('yyyy-mm-dd HH:ii:ss',$request->input('preview_begin_time'));
		$hbAuution->preview_end_time = $date('yyyy-mm-dd HH:ii:ss',$request->input('preview_end_time'));
		$hbAuction->auction_begint_time = $date('yyyy-mm-dd HH:ii:ss',$request->input('auction_begint_time'));
		$hbAuction->auction_end_time = $date('yyyy-mm-dd HH:ii:ss',$request->input('auction_end_time'));
		$hbAuction->lang = $request->input('lang');

		$hbAuction->save();		

		Flash::success('保存成功');
		return redirect('admin/auction');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$hbAuction = HbAuction::find($id);
		return view('admin.auction.edit')->withNew($hbAuction);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, HbAuctionRequest $request)
	{
		$hbAuction = HbAuction::find($id);

		$hbAuction->auction_name = $request->input('auction_name');
		$hbAuction->preview_begint_time = date('yyyy-mm-dd HH:ii:ss',$request->input('preview_begin_time'));
		$hbAuution->preview_end_time = $date('yyyy-mm-dd HH:ii:ss',$request->input('preview_end_time'));
		$hbAuction->auction_begint_time = $date('yyyy-mm-dd HH:ii:ss',$request->input('auction_begint_time'));
		$hbAuction->auction_end_time = $date('yyyy-mm-dd HH:ii:ss',$request->input('auction_end_time'));
		$hbAuction->lang = $request->input('lang');

		$hbAuction->save();		

		Flash::success('保存成功');
		return redirect('admin/auction');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		HbAuction::destroy($id);
		Flash::success('删除成功');
		return redirect()->back();
	}
}
