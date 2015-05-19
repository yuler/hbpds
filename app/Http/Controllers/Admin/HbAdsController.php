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
//		$asas = \App\HbAsa::all()->lists('asa_name', 'id');
		return view('admin.ads.create');//->withAsas($asas);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(HbAdRequest $request)
	{
		$ad = new HbAd();
		$order=$request->input('order');
		if($request->has('order')){
			$ad->order=$order;
		}else {
		$maxOrder = HbAd::max('order');
			if($maxOrder==null){
				$maxOrder=0;
			}else {
				$maxOrder++;
			}
			$ad->order=$maxOrder;
		}
		
		$ad->image_url = $request->input('image_url');
		$ad->name = $request->input('name');
		$ad->target_url=$request->input('target_url');
		$ad->asa_id=$request->input('asa_id');
		$ad->enable=$request->input('enable');
		

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
//$asas = \App\HbAsa::all()->lists('asa_name', 'id');
		$ad = HbAd::find($id);
		//dd($hbAuction->asas);
		//$asas = $hbAuction->asas;
		
		return view('admin.ads.edit')->withAd($ad);//->withAsas($asas);
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

		$ad->order=$request->input('order');
		$ad->name = $request->input('name');
		$ad->image_url=$request->input('image_url');
		$ad->target_url=$request->input('target_url');
		$ad->asa_id=$request->input('asa_id');
		$ad->enable=$request->input('enable');
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
