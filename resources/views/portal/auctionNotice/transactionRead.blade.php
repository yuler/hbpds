@extends('portal.app')

@section('content')
	<div id="newIndex">
		<div class="sub-nav">
			<div class="container">
				<ol class="breadcrumb">
				  <li><a href="#">{{ trans('portal.header.home') }}</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i></li>
				  <li><a href="#">{{ trans('portal.header.auction-notice') }}</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i></li>
				  <li class="active">{{ trans('portal.header.transaction-read') }}</li>
				</ol>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<ul class="left-menu">
						<li><a href="/auction-guide">{{ trans('portal.header.auction-guide') }}</a></li>
						<li class="active"><a href="/transaction-read">{{ trans('portal.header.transaction-read') }}</a></li>
						<li><a href="/auction-reference">{{ trans('portal.header.auction-reference') }}</a></li>
						<li><a href="/auction-book">{{ trans('portal.header.auction-book') }}</a></li>
					</ul>
				</div>
				<div class="col-md-10 content">
					<h1>成交必讀</h1>

					<p>横濱國際拍賣(香港)須知</p>
					<p>競買者請在競投前認真閱讀横浜国際拍賣（香港）規章</p>
					<p>在充分理解各項條款前提下參與競投</p>
					
					<h2>拍賣流程</h2>
					<p>［登記］     競買人必須事前向本會出示有效的身份證明（護照，身分證，駕照等），填寫登記文件，交納保證金（10萬港幣現金）後,領取競投號牌，否則不視為正式競買人。</p>
					 
					<p>［預展］     拍賣會將舉行預展。在預展時將展出拍賣品，請在競投前仔細查看拍賣品原物。對實物進行充分的確認。一旦做出競投決定即表明本人接受拍品之一切現狀，在拍賣成交後不得解約，事後關於成交品的投訴也不予受理。</p>
					 
					<p>［拍賣］</p>
					<div style="padding-left:50px;">
						<p>１     現場競投</p>
						<p>競買人用申領到的本會頒發的競投號牌來參與拍賣，拍賣原則上按圖錄順序進行，拍賣師以港幣金額進行拍賣。希望購入作品的時候，請高舉自己的號牌，保證拍賣師注意到您。在無意購買的情況下請放下號牌。最高競價經拍賣師落槌確認時，即決定該拍品的成交及落槌價。如果您的競投號牌被拍賣師確認為落槌號牌時，即表示該拍品為您競投有效，請在競買成交確認書上簽名，簽名後即表示合同成立。</p>
					 
					    <p>２     書面委託競投</p>
					    <p>競買人如不能出席拍賣會現場時，可採用書面形式委託競投。需填寫書面競投委託書（本圖錄附有此委託書）。委託書必須在拍賣會舉行日期十日前交付本會，並通過郵寄或傳真到本會指定地址，再按本會規章交付保證金（10萬港幣）。保證金必須在拍賣會舉行日期十日之前交付本會。可以通過匯款形式支付，如果截止日期之內未能確認保證金或委託書，參加申請將視為無效。</p>
					 
					    <p>３  電話委託競投</p>
					    <p>拍賣會當天不能親自到場的競買人可以通過電話方式參加當日的拍賣。但必須在拍賣會舉行日期十日之前交付保證金（10萬港幣）並填寫登記文件，登記手續可以通過電話進行。保證金交付確認後，告知競投號牌和會場的競投電話號碼。</p>
					 </div>
					<p>［付款］     競買人競投成功後需支付其提出的競投價即落槌價之外，還須支付給本會手續費。</p>
					<div style="padding-left:50px;">
					    <p>1     手續費</p>
					 	<p>落槌價的15％。</p>
					 
					 	<p>（例）落槌價10萬港幣</p>
					 	<p>落槌價      100，000港幣</p>
					 	<p>落槌價格手續費（15％）      15，000港幣</p>
					 	<p>支付金額      115，000 港幣</p>
					 
						<p>2     支付方式</p>
						<p>現金支付：     只限港幣</p>
						<p>信用卡支付：     VISA</p>
						<p>銀聯卡支付：     無需額外交付手續費</p>
						<p>延期支付：     如當日不能支付，可在10日內通過銀行匯款方式支付。所產生的一切費用由          買受人承擔。</p>
					</div>
					<p>［領取拍賣品］     在支付全部價款之後即可領取拍賣作品。不能當日結算的情況下，在本會確認收到貨款之後，即可領取發送拍賣作品。如要求代為包裝及郵送購買的拍賣作品時，郵送發生的費用由買受人支付。郵送過程中發生的任何問題，本會不承擔一切責任。</p>
					 
					<p>［匯款方式］     開戶銀行：HSBC Hong Kong</p>
					<div style="padding-left:50px;">
						<p>支店：Hong Kong Office</p>
						<p>SWIFT CODE：HSBCHKHHHKH</p>
						<p>銀行賬戶： 165-756875-838</p>
						<p>開戶名稱： YOKOHAMA INTERNATIONAL AUCTION (HONG KONG) CO., LIMITED</p>
						<p>銀行地址： 1 Queen's Road Central,Central,Hong Kong</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<style type="text/css">
		p {
	  		line-height: 2em;
	  	}
	</style>
@endsection