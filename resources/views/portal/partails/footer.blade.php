<footer>
	<div class="description">
		<div class="container" style="padding:0;font-size: 0.85em;">
			<p>{{ trans('portal.footer.company') }}</p>
			<ul class="clearfix">
				<li style="padding-right: 2%;">{{ trans('portal.footer.address') }}</li>
				<li style="padding-right: 2%;">{{ trans('portal.footer.tel') }}： +852 2786 3778</li>
				<li style="padding-right: 2%;">{{ trans('portal.footer.fax') }}： +852 2786 3877</li>
				@if(app()->getLocale() == 'en')
					<br>
					<br>
				@endif
				<li style="padding-right: 2%;">{{ trans('portal.footer.mail') }}：<a href="mailto:info@ykauction.com">info@ykauction.com</a></li>
				<li class="last">
					<a href="/map">{{ trans('portal.footer.map') }}</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
					<a href="/privacy">{{ trans('portal.footer.privacy') }}</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
					<div class="wx">
						<img class=""src="/imgs/wx.gif" style="width:50px;">
						<div class="wx-code">
							<img src="/imgs/wx-code.png" alt="">
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="copy">
		<div class="container" style="font-size:12px;padding:0;">
			<span>&copy; 2015 Yokohama International Auction (HK) Co. Ltd. All Rights Reserved</span>
			<img src="/imgs/logo-jp.png" alt="">
		</div>
	</div>

	<div class="goto-top">
		<a href="javascript:void(0);" onclick="$('html,body').animate({scrollTop: '0px'}, 600);return false;" class="default">
			<img src="/imgs/goto_top.png" alt="">
		</a>
		<a href="javascript:void(0);" onclick="$('html,body').animate({scrollTop: '0px'}, 600);return false;" class="hover">
			<img src="/imgs/goto_top_hover.png" alt="">
		</a>
	</div>
</footer>
