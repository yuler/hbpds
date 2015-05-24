<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\HbAttachment;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class HbAttachmentsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return '123';
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$file = $request->file('upload');
		if($file->getSize() > 5*1024*1024){
			return response()->json(['success'=>'true','msg'=>'上傳文件不能大於 5M']);
		}

		$serverName = Str::random() . '.' . $file->getClientOriginalExtension();
		$serverPath = env('UPLOAD_PATH') .'/'. date('Y',time()) . '/'
			. date('m',time()) . '/' . date('d',time());
		$file->move( public_path() . $serverPath . '/', $serverName);

		$attachment = new HbAttachment();
		$attachment->att_name = $file->getClientOriginalName();
		if($request->has('att_type'))
			$attachment->att_type = $request->input('att_type');
		$attachment->att_path = $serverPath . '/' . $serverName;
		


		$attachment->save();


        return response()->json(['success'=>'true','msg'=>'上传失败','file_path' => $attachment->att_path,'file_name'=>$attachment->att_name,'att_id'=>$attachment->id ]);
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
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
