<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\HbBanner;
use App\Http\Requests\HbBannerRequest;
use Laracasts\Flash\Flash;
class HbBannersController extends Controller {
/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$banners = HbBanner::orderBy('order','desc')->paginate(10);
		return view('admin.banners.index')->withBanners($banners);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.banners.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(HbBannerRequest $request)
	{
		$maxOrder = HbBanner::max('order');
		if($maxOrder==null){
			$maxOrder=0;
		}else {
			$maxOrder++;
		}
		$banner = new HbBanner();
		$banner->name = $request->input('name');
		$banner->target_url=$request->input('target_url');
		$banner->image_url=$request->input('image_url');
		$banner->enable=$request->input('enable');
		$banner->order=$maxOrder;
		$banner->save();		
		Flash::success('保存成功');
		return redirect('admin/banner');
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
		$banner = HbBanner::find($id);
		//dd($hbAuction->asas);
		//$asas = $hbAuction->asas;


		return view('admin.banners.edit')->withBanner($banner);
	}

	

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, HbBannerRequest $request)
	{
		$banner = HbBanner::find($id);

		$banner->name = $request->input('name');
		$banner->target_url=$request->input('target_url');
		$banner->image_url=$request->input('image_url');
		$banner->enable=$request->input('enable');
		$banner->save();		

		Flash::success('保存成功');
		
		return redirect('admin/banner');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		HbBanner::destroy($id);
		Flash::success('删除成功');
		return redirect()->back();
	}

}
