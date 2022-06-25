<div class="footer side-collapse-container">
	<div class="container">

		<div class="logo">
			<img src="<?php echo $url; ?>/assets/images/common/footer_logo.png">
		</div>






		<div class="infomation">
			NEXEN TIRE Corporation 355, Chungnyeol-ro, Yangsan-si, Gyeongsangnam-do, Korea<br />
			<span>Tel: +82 55 370 5114</span>
			<!-- | <span>E-mail: <a href="mailto:nexentire@nexentire.co.kr">nexentire@nexentire.co.kr</a></span> -->
			| <span> <a href="<?php echo $url; ?>/policy/contact_email.php" style="color: #b3b3b3;">Contact us via
					email</a></span>

			<div class="links hidden-xs hidden-sm">
				<a href="<?php echo $url; ?>/policy/service.php">Terms and conditions</a> |
				<a href="<?php echo $url; ?>/policy/privacy.php">Privacy policy</a> |
				<a href="<?php echo $url; ?>/policy/email_reject.php">Rejection to unauthorized email collection</a> |
				<!-- <a href="/international/service/qna/">SUPPORT</a> | -->
				<!-- <a href="#">사이트맵</a> | -->
				<a href="company/directions/index.php">CONTACT US</a>
			</div>

			<div class="copyright">
				Copyright ⓒ 2017 NEXEN TIRE all rights reserved.
			</div>
		</div>

		<div class="link-box">
			<div class="family_site">
				<select id="fam" onchange="global_link( this.value )">
					<option value="">Family Site</option>
					<option value="http://www.nexencorp.co.kr/">NEXEN Corp.</option>
					<!-- <option value="http://www.nexentech.co.kr/">NEXEN TECH Corp.</option> -->
					<option value="http://www.roadstonetyre.com/">ROADSTONE TIRE </option>

					<option value="http://www.facebook.com/nexentire.global">Facebook</option>
					<option value="https://www.youtube.com/channel/UC7bke9V6vRL905dkf0jtbWw">Youtube</option>
				</select>
				<select id="lang" onchange="global_link( this.value )">
					<option value="">Global Site</option>
					<option value="../kr/index.php">Korea</option>
					<option value="index.php">International</option>
					<option value="../br/index.php">Brazil</option>
					<option value="../tr/index.php">Turkey</option>
					<option value="../me/index.php">Middle East</option>
					<option value="../de/index.php">Germany</option>
					<option value="../it/index.php">Italia</option>
					<option value="../fr/index.php">France</option>
					<option value="../es/index.php">Spain</option>
					<option value="../ru/index.php">CIS</option>
					<option value="https://www.nexentireusa.com/">USA</option>
					<option value="../uk/index.php">United kingdom</option>
					<option value="../cz/index.php">Czech</option>
					<option value="../ch/index.php">Switzerland</option>
					<option value="../pl/index.php">Poland</option>
					<option value="https://www.nexentirecanada.com/">Canada</option>
					<option value="../cn/index.php">China</option>
					<option value="../co/index.php">Colombia</option>
					<option value="../au/index.php">Australia</option>
				</select>

				<div class="sns_channel" style="clear:both;">
					<a href="https://www.facebook.com/nexentire.global?ref=ts&amp;fref=ts" target="_blank"><img
							src="<?php echo $url; ?>/assets/images/common/footer_channel_01.gif"></a>
					<a href="https://www.instagram.com/nexentireglobal_official" target="_blank"><img
							src="<?php echo $url; ?>/assets/images/common/footer_channel_insta.gif"></a>
					<a href="https://www.youtube.com/channel/UC7bke9V6vRL905dkf0jtbWw" target="_blank"><img
							src="<?php echo $url; ?>/assets/images/common/footer_channel_03.gif"></a>
				</div>
			</div>
		</div>

	</div>
</div>

</div>


<div class="right-floot-banner-wrap">
	<ul>
		<li><a href="service/find_tire/index.php" class="find-tire">Tire Finder</a></li>
		<!-- <li><a href="/international/service/qna/" class="qna">Q&A</a></li> -->
		<!-- <li><a href="/international/service/find_shop/" class="find-shop">가까운 판매점</a></li> -->
		<!-- <li><a href="/international/information/energy/" class="energy-efficiency">Tire Labelling Regulation</a></li> -->
		<li><a href="service/guarantee/index.php" class="guarantee">Warranty System</a></li>
		<li><a href="#" class="top">TOP</a></li>
	</ul>
</div>



<script type='text/javascript' src="<?php echo $url; ?>/assets/js/bootstrap.min.js"></script>



<div class="global-search ">
	<div class="search-body">
		<div class="close">
			<a onclick="global_search_reset()"><i class="glyphicon glyphicon-refresh"></i> Reload</a>
			<a onclick="global_search_close()"><i class="glyphicon glyphicon-remove"></i> Close
				<!-- <img src="/international/<?php echo $url; ?>/assets/images/common/global_search_close.png"> -->
			</a>
		</div>

		<div class="search-box">

			<div class="input">
				<i class="fa fa-search"></i>
				<label class="placeholder">Please enter your car name or tire size. </label>
				<input type="text" name="">
			</div>
			<div class="desc">
				※ *Please enter in the standard form such as 225 / 50R16 .
			</div>
			<ul class="autocomplete">
				<!-- /utils/global_search_autocomplete.php -->
				<!-- <li>※ 규격입력시 225/50R16 형태로 입력해주세요</li> -->
			</ul>
			<!-- 			<div class="desc">
			※ 규격입력시 225/50R16 형태로 입력해주세요
			</div>
 -->

		</div>
		<div class="result-product result-box">
			<div class="title"><span>Tire Search Results</span></div>
			<div class="summery">
				I found a tire suitable for <span>---</span>.
			</div>
			<div id="resultCar">
				<!-- /utils/global_search_tire_by_car.php -->
			</div>
			<div class="desc">
				<span>※ You can find more detailed tire information by selecting the tire size.</span>
				<a href="service/find_tire/index.php" class="btn btn-ghost white">Search the tire for car</a>
			</div>

		</div>
		<div class="result-size result-box">
			<div class="title"><span>Tire Search Results</span></div>
			<div class="summery">
				We found a tire that matches <span>---</span>.
			</div>
			<div id="resultSize">
				<!-- /utils/global_search_tire_by_car.php -->
			</div>
			<div class="desc">
				<span>※ You can find more detailed tire information by selecting the tire size.</span>
				<a href="service/find_tire/index.php" class="btn btn-ghost white">Search the tire for car</a>
			</div>

		</div>
		<!-- 		<div class="result-shop result-box">
			<div class="title"><span>판매점 검색 결과</span></div>
			<div class="summery">
				<span>---</span> 와 가까운 판매점을 찾았습니다
			</div>

			<div id="resultShop">/utils/global_search_shop.php</div>

			<div class="desc">
				<span>※ 더 자세한 지역별 판매점을 찾으실 수 있습니다.</span>
				<a href="/international/service/find_shop.php" class="btn btn-ghost white" >More Service Network</a>
			</div>
		</div> -->


	</div>

	<div class="shadow"></div>
</div>

<div class="product-compare-wrap">

	<div class="compare-tag-wrap">
		<div class="container">

			<a class="list-btn" href="./"><i class="fa fa-angle-left" aria-hidden="true"></i> &nbsp;Go to List</a>

			<button class="compare-tag" id="compareClose" style="display: block;">
				<span class="txt">Compare</span>
				<span class="ico"><i class="fa fa-angle-down"></i> Close</span>
			</button>

		</div>
	</div>

	<div class="compare-contents-wrap" id="compareContentsWrap" style="display: block;">
		<div class="compare-body-wrap">
			<div class="container">
				<div class="compare-list">

					<!-- <div class="compare-item item-winguard-sport2 " data-id="winguard-sport2">
	<div class="remove-item">
		<button onclick="remove_compare_item( 'winguard-sport2' )"><i class="fa fa-close" aria-hidden="true"></i></button>
	</div>
	<div class="thumb">
		<img src="/international/product/passenger/__icsFiles/afieldfile/2020/12/04/wg_sport2_list_thumb.png">
	</div>
	<div class="logo">
		<div><img src="/international/product/passenger/__icsFiles/afieldfile/2017/11/21/list_logo.png"></div>
	</div>

	<ul class="performance"><li><label>Snow      </label><div class="bar"><div class="fill" style="width:90%;"></div></div><label class="val">4.5/5.0</label></li><li><label>Ice      </label><div class="bar"><div class="fill" style="width:70%;"></div></div><label class="val">3.5/5.0</label></li><li><label>Dry Performance     </label><div class="bar"><div class="fill" style="width:90%;"></div></div><label class="val">4.5/5.0</label></li><li><label>Wet performance     </label><div class="bar"><div class="fill" style="width:90%;"></div></div><label class="val">4.5/5.0</label></li><li><label>Fuel Consumption     </label><div class="bar"><div class="fill" style="width:70%;"></div></div><label class="val">3.5/5.0</label></li><li><label>Comfort / Noise     </label><div class="bar"><div class="fill" style="width:70%;"></div></div><label class="val">3.5/5.0</label></li><li><label>Wear     </label><div class="bar"><div class="fill" style="width:90%;"></div></div><label class="val">4.5/5.0</label></li></ul>
</div> -->
					<div class="compare-item empty"></div>
					<div class="compare-item empty"></div>
					<div class="compare-item empty"></div>
					<div class="compare-item empty"></div>
				</div>
				<div class="btn-box compare">
					<div class="desc"> ＊ Select at least two products that you would like to compare, and click the
						<compare> button. (* Up to 4) </compare>
					</div>
					<a class="btn btn-ghost purple" onclick="show_compare()"><i class="fa fa-bar-chart"></i> Compare
						Selected Products</a>
					<a class="btn btn-fill gray" onclick="clear_compare_item( )">Reset</a>
				</div>
				<div class="btn-box nextlevel">
					<a class="btn btn-fill gray" onclick="clear_compare_item( )">Reset</a>
				</div>
				<div class="btn-box end">
					<a class="btn btn-fill gray" onclick="clear_compare_item( )">Reset</a>
				</div>
			</div>
		</div>

	</div>
</div>

<script type="text/javascript" src="<?php echo $url; ?>/assets/js/slick.min.js"></script>
<script type="text/javascript" src="<?php echo $url; ?>/assets/js/common.js"></script>
<script type="text/javascript" src="<?php echo $url; ?>/assets/js/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo $url; ?>/assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo $url; ?>/assets/js/product.solid_tube.js"></script>
<script type="text/javascript" src="<?php echo $url; ?>/assets/js/product.js"></script>
<script type="text/javascript" src="<?php echo $url; ?>/assets/js/communication.js"></script>
<script type="text/javascript" src="<?php echo $url; ?>/assets/js/company.js"></script>
<script type="text/javascript" src="<?php echo $url; ?>/assets/js/product_view.js"></script>
<script type="text/javascript" src="<?php echo $url; ?>/assets/js/product_compare.js"></script>
<script type="text/javascript" src="<?php echo $url; ?>/assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo $url; ?>/assets/js/jquery.ui.touch-punch.min.js"></script>
<script type="text/javascript" src="<?php echo $url; ?>/assets/js/main.js"></script>
<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpVArVXl60BjD3KnD8bPHCCbiB_otHvdM&amp;callback=initMap"></script> -->
<form id="LinkTarget" target="_blank"></form>
</body>


</html>