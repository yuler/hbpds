<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\HbNew;
use Laracasts\Flash\Flash;

class HbBatchDestroyController extends Controller {

	// destroy news

	public function deleteNews(Request $request)
	{
		if($request->has('ids')){
			HbNew::destroy($request->input('ids'));
			Flash::success('新闻删除成功');
			return redirect()->back();
		}
		Flash::error('至少选中一条新闻');
		return redirect()->back();
	}

}
