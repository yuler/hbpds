<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\HbAsa;
use App\Http\Requests\HbAsaRequest;
use Laracasts\Flash\Flash;
class HbAsasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$asas = HbAsa::paginate(10);
		//dd($asas);
		return view('admin.asas.index')->withAsas($asas);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.asas.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(HbAsaRequest $request)
	{
		$hbAsa = new HbAsa();

		$hbAsa->asa_name = $request->input('asa_name');
		$hbAsa->asa_addr = $request->input('asa_addr');
		$hbAsa->asa_image = $request->input('asa_image');
		$hbAsa->asa_only_online = $request->input('asa_only_online');
		$hbAsa->asa_online_url = $request->input('asa_online_url');
		$hbAsa->asa_online_logo = $request->input('asa_online_logo');
		$hbAsa->auction_id = $request->input('auction_id');
		$hbAsa->lang = $request->input('lang');
		$hbAsa->preview_begin_time = date('yy-mm-dd HH:ii:ss',$request->input('preview_begin_time'));
		$hbAsa->preview_end_time = date('yyyy-mm-dd HH:ii:ss',$request->preview_end_time);
		$hbAsa->begin_time = date('yyyy-mm-dd HH:ii:ss',$request->begin_time);
		$hbAsa->end_time = date('yyyy-mm-dd HH:ii:ss',$request->end_time);

		$hbAsa->save();		

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
		$hbAsa = HbAsa::find($id);
		return view('admin.news.edit')->withAsa($hbAsa);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, HbAsaRequest $request)
	{



		$hbAsa = HbAsa::find($id);
		$hbAsa->asa_name = $request->input('asa_name');
		$hbAsa->asa_addr = $request->input('asa_addr');
		$hbAsa->asa_image = $request->input('asa_image');
		$hbAsa->asa_only_online = $request->input('asa_only_online');
		$hbAsa->asa_online_url = $request->input('asa_online_url');
		$hbAsa->asa_online_logo = $request->input('asa_online_logo');
		$hbAsa->auction_id = $request->input('auction_id');
		$hbAsa->lang = $request->input('lang');
		$hbAsa->preview_begin_time = date('yy-mm-dd HH:ii:ss',$request->input('preview_begin_time'));
		$hbAsa->preview_end_time = date('yyyy-mm-dd HH:ii:ss',$request->preview_end_time);
		$hbAsa->begin_time = date('yyyy-mm-dd HH:ii:ss',$request->begin_time);
		$hbAsa->end_time = date('yyyy-mm-dd HH:ii:ss',$request->end_time);

		$hbAsa->save();		

		Flash::success('保存成功');
		return redirect('admin/asa');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		HbAsa::destroy($id);
		Flash::success('新闻删除成功');
		return redirect()->back();
	}


}
