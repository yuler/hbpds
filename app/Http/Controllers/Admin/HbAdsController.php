<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\HbAd;
use App\Http\Requests\HbAdRequest;
use Laracasts\Flash\Flash;
class HbAdsController extends Controller {

	public function index()
	{
		$ads = HbAd::paginate(10);
		return view('admin.ads.index')->withAds($ads);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.ads.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(HbAdRequest $request)
	{
		$ad = new HbAd();

		$ad->name = $request->input('name');
		

		$ad->save();		
		Flash::success('保存成功');
		return redirect('admin/ad');
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
		$ad = HbAd::find($id);
		//dd($hbAuction->asas);
		//$asas = $hbAuction->asas;
		
		return view('admin.ads.edit')->withAd($ad);
	}

	

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, HbAdRequest $request)
	{
		$ad = HbAd::find($id);

		
		$ad->save();		

		Flash::success('保存成功');
		
		return redirect('admin/ad');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		HbAd::destroy($id);
		Flash::success('删除成功');
		return redirect()->back();
	}

}
