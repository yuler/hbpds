<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\HbMaterial;
use App\Http\Requests\HbMaterialRequest;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class HbMaterialController extends Controller {


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$material = HbMaterial::paginate(10);
		return view('admin.materials.index')->withMaterials($material);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.materials.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(HbMaterialRequest $request)
	{
		$material = new HbMaterial();

		$material->title = $request->input('title');
		$material->content = $request->input('content');
		$material->lang = $request->input('lang');
		if($request->has('published')){
			$material->published = 1;
			$material->published_at = date('y-m-d H:i:s',time());
		}

		$material->save();		

		Flash::success('保存成功');
		return redirect('admin/material');
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
		$material = HbMaterial::find($id);
		return view('admin.materials.edit')->withMaterial($material);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, HbMaterialRequest $request)
	{
		$material = HbMaterial::find($id);

		$material->title = $request->input('title');
		$material->content = $request->input('content');
		$material->lang = $request->input('lang');
		if($request->has('published')){
			$material->published = 1;
			$material->published_at = date('y-m-d H:i:s',time());
		}

		$material->save();		
		Flash::success('新闻修改成功');
		return redirect('admin/material');
	}


}
