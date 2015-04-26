<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\HbNew;
use App\HbAuction;
use App\HbArtAtt;
use App\HbAsa;

use App\HbAttachment;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\DB;

use App\HbBanner;
use App\HbAd;

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

	public function deleteAuctions(Request $request)
	{
		if($request->has('ids')){
			HbAuction::destroy($request->input('ids'));
			Flash::success('删除成功');
			return redirect()->back();
		}
		Flash::error('至少选中一条');
		return redirect()->back();
	}

	public function deleteAsas(Request $request)
	{
		if($request->has('ids')){
			HbAsa::destroy($request->input('ids'));
			Flash::success('删除成功');
			return redirect()->back();
		}
		Flash::error('至少选中一条');
		return redirect()->back();
	}
	public function deleteBanners(Request $request)
	{
		if($request->has('ids')){
			HbBanner::destroy($request->input('ids'));
			Flash::success('删除成功');
			return redirect()->back();
		}
		Flash::error('至少选中一条');
		return redirect()->back();
	}

	public function deleteAttachments(Request $request)
	{

		if($request->has('ids')){
DB::beginTransaction();
			
			HbAttachment::destroy($request->input('ids'));
			if($request->input('deleteType')=='artwork'){
				HbArtAtt::where('att_id','=',$request->input('ids'))->delete();
			}

DB::commit();
			return response()->json(['success'=>'true']);
		}else{
			return response()->json(['success'=>'false','msg'=>'未输入删除附件ID']);
		}
	}

		public function deleteAds(Request $request)
	{
		if($request->has('ids')){
			HbAd::destroy($request->input('ids'));
			Flash::success('删除成功');
			return redirect()->back();
		}
		Flash::error('至少选中一条');
		return redirect()->back();
	}
}
