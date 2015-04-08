<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\HbAsa;
class HbAsasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$news = HbAsa::paginate(10);
		return view('admin.news.index')->withNews($news);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.news.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(HbAsaRequest $request)
	{
		$hbNew = new HbAsa();

		$hbNew->title = $request->input('title');
		$hbNew->content = $request->input('content');
		$hbNew->lang = $request->input('lang');
		if($request->has('published')){
			$hbNew->published = 1;
			$hbNew->published_at = date('y-m-d H:i:s',time());
		}

		$hbNew->save();		

		Flash::success('新闻保存成功');
		return redirect('admin/new');
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
		$hbNew = HbAsa::find($id);
		return view('admin.news.edit')->withNew($hbNew);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, HbAsaRequest $request)
	{
		$hbNew = HbAsa::find($id);

		$hbNew->title = $request->input('title');
		$hbNew->content = $request->input('content');
		$hbNew->lang = $request->input('lang');
		if($request->has('published')){
			$hbNew->published = 1;
			$hbNew->published_at = date('y-m-d H:i:s',time());
		}

		$hbNew->save();		
		Flash::success('新闻修改成功');
		return redirect('admin/new');
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
