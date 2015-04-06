<?php namespace App\Http\Controllers\admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\HbNew;

use App\Http\Requests\HbNewRequest;

class HbNewsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$news = HbNew::paginate(10);
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
	public function store(HbNewRequest $request)
	{
		$hbNew = new HbNew();

		$hbNew->title = $request->input('title');
		$hbNew->content = $request->input('content');
		$hbNew->lang = $request->input('lang');
		if($request->has('published')){
			$hbNew->published = 1;
			$hbNew->published_at = date('y-m-d H:i:s',time());
		}

		$hbNew->save();		

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
		$hbNew = HbNew::find($id);
		return view('admin.news.edit')->withNew($hbNew);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, HbNewRequest $request)
	{
		$hbNew = HbNew::find($id);

		$hbNew->title = $request->input('title');
		$hbNew->content = $request->input('content');
		$hbNew->lang = $request->input('lang');
		if($request->has('published')){
			$hbNew->published = 1;
			$hbNew->published_at = date('y-m-d H:i:s',time());
		}

		$hbNew->save();		

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
		HbNew::destroy($id);
		return redirect()->back();
	}


	public function batchDestroy(HbNewRequest $request){
		$request->input('ids[]');
		dd($request);
		HbNew::destroy($id);
		return redirect()->back();
	}
}
