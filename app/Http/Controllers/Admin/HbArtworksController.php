<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\HbArtwork;
use App\HbArtAtt;
use App\Http\Requests\HbArtworkRequest;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\DB;


class HbArtworksController extends Controller {

	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$news = HbArtwork::paginate(10);
		return view('admin.artworks.index')->withNews($news);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.artworks.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(HbArtworkRequest $request)
	{


		DB::beginTransaction();

			$artwork = new HbArtwork();
			
			$asa_id = $request->input('asa_id');
			$artwork->asa_id = $asa_id;

			$artwork->art_name = $request->input('art_name');
			$artwork->art_code = $request->input('art_code');
			$artwork->art_author = $request->input('art_author');
			$artwork->art_size = $request->input('art_size');
			$artwork->art_material = $request->input('art_material');
			$artwork->art_age = $request->input('art_age');
			$artwork->art_price_hkd = $request->input('art_price_hkd');
			$artwork->art_price_rmb = $request->input('art_price_rmb');
			$artwork->author_sumarry = $request->input('author_sumarry');
			$artwork->art_inscription = $request->input('art_inscription');
			$artwork->art_tizhi = $request->input('art_tizhi');
			$artwork->art_mark = $request->input('art_mark');
			$artwork->art_seal = $request->input('art_seal');
			$artwork->art_collection_seal = $request->input('art_collection_seal');
			$artwork->art_publish = $request->input('art_publish');
			$artwork->art_annotation = $request->input('art_annotation');
			$artwork->art_signature = $request->input('art_signature');
			$artwork->art_phase = $request->input('art_phase');
			$artwork->art_reference = $request->input('art_reference');
			$artwork->art_record = $request->input('art_record');
			$artwork->art_exhibition = $request->input('art_exhibition');
			$artwork->art_source = $request->input('art_source');
			$artwork->art_lot = $request->input('art_lot');
			$artwork->begin_price_hkd = $request->input('begin_price_hkd');
			$artwork->end_price_hkd = $request->input('end_price_hkd');
			$artwork->begin_price_rmb = $request->input('begin_price_rmb');
			$artwork->end_price_rmb = $request->input('end_price_rmb');
			$artwork->art_sumarry = $request->input('art_sumarry');
			$artwork->art_dynasty = $request->input('art_dynasty');
			$artwork->save();

			//图片上传
			if($request->has('att_ids')){
				foreach ($request->input('att_ids') as $att_id) {
					$hbArtatt = new HbArtAtt();
					$hbArtatt->att_id = $att_id;
					$hbArtatt->art_id = $artwork->id;
					$hbArtatt->save();
				}
			}

		DB::commit();

			if($asa_id!=null||$asa_id!=""){
				Flash::success('创建成功');
				return redirect('admin/asa/'.$asa_id.'/edit?page=1');
			}
			Flash::success('保存成功');
			return  redirect('admin/artwork');
		
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
		$artwork = HbArtwork::find($id);
		$atts = $artwork->atts;
		
		return view('admin.artworks.edit')->withArtwork($artwork)->withAttachements($atts);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, HbArtworkRequest $request)
	{

		DB::beginTransaction();

			$artwork = HbArtwork::find($id);
			
			$asa_id = $request->input('asa_id');
			$artwork->asa_id = $asa_id;

			$artwork->art_name = $request->input('art_name');
			$artwork->art_code = $request->input('art_code');
			$artwork->art_author = $request->input('art_author');
			$artwork->art_size = $request->input('art_size');
			$artwork->art_material = $request->input('art_material');
			$artwork->art_age = $request->input('art_age');
			$artwork->art_price_hkd = $request->input('art_price_hkd');
			$artwork->art_price_rmb = $request->input('art_price_rmb');
			$artwork->author_sumarry = $request->input('author_sumarry');
			$artwork->art_inscription = $request->input('art_inscription');
			$artwork->art_tizhi = $request->input('art_tizhi');
			$artwork->art_mark = $request->input('art_mark');
			$artwork->art_seal = $request->input('art_seal');
			$artwork->art_collection_seal = $request->input('art_collection_seal');
			$artwork->art_publish = $request->input('art_publish');
			$artwork->art_annotation = $request->input('art_annotation');
			$artwork->art_signature = $request->input('art_signature');
			$artwork->art_phase = $request->input('art_phase');
			$artwork->art_reference = $request->input('art_reference');
			$artwork->art_record = $request->input('art_record');
			$artwork->art_exhibition = $request->input('art_exhibition');
			$artwork->art_source = $request->input('art_source');
			$artwork->art_lot = $request->input('art_lot');
			$artwork->begin_price_hkd = $request->input('begin_price_hkd');
			$artwork->end_price_hkd = $request->input('end_price_hkd');
			$artwork->begin_price_rmb = $request->input('begin_price_rmb');
			$artwork->end_price_rmb = $request->input('end_price_rmb');
			$artwork->art_sumarry = $request->input('art_sumarry');
			$artwork->art_dynasty = $request->input('art_dynasty');
			$artwork->save();

			//图片上传
			if($request->has('att_ids')){
				foreach ($request->input('att_ids') as $att_id) {
					$artAtts = HbArtAtt::whereRaw('art_id = ? and att_id = ?', array($id,$att_id))->get();
					if(sizeof($artAtts)<1){
						$hbArtatt = new HbArtAtt();
						$hbArtatt->att_id = $att_id;
						$hbArtatt->art_id = $artwork->id;
						$hbArtatt->save();
					}
				}	
			}

		DB::commit();

			if($asa_id!=null||$asa_id!=""){
				Flash::success('创建成功');
				return redirect('admin/asa/'.$asa_id.'/edit?page=1');
			}
			Flash::success('保存成功');
			return  redirect('admin/artwork');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		HbArtwork::destroy($id);
		Flash::success('新闻删除成功');
		return redirect()->back();
	}

}
