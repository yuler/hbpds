<footer>
	<div class="description">
		<div class="container">
			<p>{{ trans('portal.footer.company') }}</p>
			<ul class="clearfix">
				<li>{{ trans('portal.footer.address') }}</li>
				<li>{{ trans('portal.footer.mail') }}：<a href="mailto:info@ykauction.com">info@ykauction.com</a></li>
				<li class="last">
					<a href="/contact">{{ trans('portal.footer.map') }}</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
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
		<div class="container" style="font-size:12px;">
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
