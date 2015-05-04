@extends('portal.app')

@section('content')
	<div id="newIndex">
		<div class="sub-nav">
			<div class="container">
				<ol class="breadcrumb">
				  <li><a href="#">首頁</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i></li>
				  <li><a href="#">拍賣須知</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i></li>
				  <li class="active">拍賣指南</li>
				</ol>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<ul class="left-menu">
						<li class="active"><a href="/auction-guide">拍賣規則</a></li>
						<li><a href="/transaction-read">成交必讀</a></li>
						<li><a href="/auction-reference">參考資料</a></li>
						<li><a href="/auction-book">拍卖委托书</a></li>
					</ul>
				</div>
				<div class="col-md-10 content">
					<h1>拍賣規則</h1>
					<p>本規則的制定依據是相關法律法規同時參照了國際通行慣例按照以下規章執行</p>

					<p>第一條     總則</p>
					<div style='padding-left:50px;'>
					<p>（一）     橫濱國際拍賣（香港）（以下稱：本會）是由橫濱國際拍賣（香港）有限公司主辦的拍賣活動，本會有權根據實際情況隨時對本規則進行修改。</p>
					<p>（二）     本規則適用於日本國的法律，凡參加本會的委託人，競買人，買受人和其他相關各方均應按照本規則執行，並對自己參加本會拍賣活動的行為負責，如因未仔細</p>閱讀本規則而引發的任何損失或責任均由行為人自行承擔。本規則的解釋權屬於橫濱國際拍賣（香港）有限公司。
					<p>（三）     本會特別聲名不能保證拍賣品的真贋及品質，對拍賣品的瑕疵不承擔擔保責任。競買人應親自審看拍賣品實物，並對自己競買拍賣品的行為承擔法律責任。</p>
					<p>（四）     本規則有英文和中文版本，原則上以中文版為準。</p>
					</div>
						<p>第二條     拍賣圖錄</p>
						<div style='padding-left:50px;'>
						<p>（一）     本會為便於競買人參加本會拍賣活動，制作了拍賣圖錄。此圖錄只是對拍賣品的作者，年代，尺寸，素材，保存狀態及估計售價等提供意見性說明的文字及圖片</p>資料，僅供競買人參考。出現的誤差及因印刷或攝影導致圖錄作品的色調，形狀等与實物有差別時，均以實物為準，本會對此類誤差不承擔任何責任。
						<p>（二）     拍賣圖錄可能出現未經事前通告而在拍賣會場以書面或口頭形式進行變更的情況。如出現上述情況，拍賣以變更後的內容為準。</p>
					</div>
					<p>第三條     登記</p>
					<div style='padding-left:50px;'>
						<p>（一）     競買人必須事前向本會出示有效的身份證明（護照，身份證，駕照等），填寫登記文件，領取競投號牌。否則不視為正式競買人。</p>
						<p>（二）     競買人參加本會拍賣時，應在領取競投號牌前交納保證金（10萬港幣現金）。拍賣結束，返還競投號牌時，如競買人未能購得競買品則全額無息退還競買人。若競</p>買人購得拍賣品則可抵作購買價款的一部分。若有余款，則於競買人領取拍賣品時一併返還。
						<p>（三）     本會有權拒絕任何人參加本會舉行的拍賣活動或進入拍賣會現場。以及拒絕在拍賣現場進行拍照，錄音，攝像等行為。</p>
						<p>（四）     當拍賣會現場出現異常情況影響拍賣活動正常進行時，本會有權根據實際情況做出相應處理，直至暫停拍賣活動。如拍賣現場出現任何爭議，本會有權於以協調解決。</p>
					</div>
					<p>第四條     拍賣</p>
					<div style='padding-left:50px;'>
						<p>（一）現場競投</p>
						<div style='padding-left:50px;'>
							<p>a. 本會只認可本會頒發的競投號牌。競買人通過此競投號牌來參加拍賣。拍賣結束後必須歸還競投號牌。
							本會鄭重提示，競買人應妥善保管競投號牌，不得借與他人使用。一旦丟失，應立即以本會認可的書面方式辦理掛失手續。
							無論是否接受競買人的委託，凡持競投號牌者在拍賣會活動中進行的一切競買行為均視為競投號牌登記人本人所為，競買人應當對其行為承擔法律責任。（競投號牌登記人本人以本會認可的書面方式在本會辦理了該競投號牌的掛失手續，並由拍賣師現場宣布該競投號牌作廢除外。）</p>
							<p>b.     拍賣由本會全權委託的拍賣師執行。以估計的價格為參考，通過競投方式決定落槌價格。拍賣師有權代表本會酌情提高或降低競價階梯，拒絕拍賣師認定的不正常競投，決定最終競買人，執行競買手續。參加拍賣的競買人必須無條件接受拍賣師的裁定。</p>
							<p>c. 最高競價經拍賣師落槌確認時，該競買人競投成功，即表明該競買人與本會為代理人之間達成了關於該拍品的買賣合同。</p>
							<p>d.      競買人競投成功後，即成為該拍賣品的買受人。買受人需支付其提出的競投價即落槌價之外，還必須支付給本會手續費（落槌價的15%）。</p>
							<p>e. 本會有權在買賣合同成立之後酌情解除買賣合同。買受人除本會特別規定之外，不得以任何理由解除合同。</p>
						</div>
						<p>（二）書面委託競投／電話委託競投</p>
						<div style='padding-left:50px;'>
							<p>a. 競買人原則上需親自出席拍賣會。如不能出席，可採用書面形式委託本會代為競投。本會有權決定是否接受上述委託。</p>
							<p>b.      採取書面委託競投的競買人填寫書面競投委託書（本圖錄附有此委託書）。委託書必須在規定日之前交付本會，可通過郵寄或傳真到本會指定地址。並按本規章交付保證金（10萬港幣）。保證金必須在規定日之前交付本會。可以通過匯款形式交付。如果在截止日期之內未能確認保證金或委託書，參加申請將視為無效。</p>
							<p>c.      拍賣會當日不能親自到場的競買人可以通過電話方式參加當日的拍賣。但必須在規定日之前交付保證金（10萬港幣）並填寫登記表，登記手續可以通過電話進行。保證金交付確認後，由本會告知競買人競投號牌和會場的競投電話號碼。</p>
						</div>
					</div>
					<p>第五條付款及所有權轉移</p>
					<div style='padding-left:50px;'>
						<p>（一）     拍賣成交後拍賣當天以現金（只限港幣）或信用卡，銀聯卡結算為原則。如當天不能結算，可在10天內通過銀行匯款方式結算。在指定的期限內如買受人仍未能足額支付購買價款，本會有權就落槌價</p>格按其日息0.1％收取利息直至買受人金額支付為止。
						<p>（二）     拍賣成交後買受人無權撤銷交易。如出現買受人未能如期支付相應價款等糾紛時，本會有權徵收撤銷交易手續費。撤銷交易手續費為落槌價格的30％。無法解決，協商的情況下，依據日本法律進行</p>裁決。買受當事人應承擔一切訴訟費，並且本會有權禁止其參加以後的拍賣活動。
						<p>（三）與出品委託人的結算結束後，本會不接受任何索賠。</p>

						第六條領取拍賣品
						<p>（一）     若買受人未能在規定時期內領取拍賣品，逾期後對該拍賣品的相關保管，搬運，保險等費用均由買受人承擔，且買受人應對其所拍得作品承擔全部責任。</p>
						<p>（二）     本會應買受人要求代為包裝及郵送拍賣品時產生的費用均由買受人自行承擔。此外，對於本會向買受人推薦的包裝公司及搬運公司所造成的一切錯誤，遺漏，損失等，本會亦不承擔責任。</p>
						<p>（三）     因本會原因造成買受人錯誤領取買賣品的情況，本會負責退還。買受人應盡快將誤領拍賣品返還給本會。</p>

						<p>（四）     特別提示：根據日本國及其他相關法律，法規規定，限制出口的拍賣品請買受人慎重處理，如若產生法律糾紛，買受人將承擔一切責任；允許出口的拍賣品，買受人應根據日本國有關規定</p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection