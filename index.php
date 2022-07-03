<?php 
include 'common/header.php';  
?>




<div class="main-container">

	<div id="bg_carousel">

		<div class="item-wrap">

			<a class="item" href="#" target="_self">
				<div></div>
				<img src="main_adm/01/__icsFiles/afieldfile/2022/03/10/keyvisual_20220308_045e1f.jpg?v=2">
			</a>
			<a class="item" href="<?php echo $url; ?>/media/news/single-news.php" target="_self">
				<div></div>
				<img src="main_adm/01/__icsFiles/afieldfile/2022/03/10/keyvisual_20220308_055e1f.jpg?v=2">
			</a>
			<a class="item" href="<?php echo $url; ?>/company/infomation/slogan/index.php" target="_self">
				<div></div>
				<img src="main_adm/01/__icsFiles/afieldfile/2022/03/10/keyvisual_20220308_065e1f.jpg?v=2">
			</a>

		</div>


	</div>


	<div class="mobile-search">
		<div class="find-tire"><a href="<?php echo $url; ?>/service/find_tire/index.php">Tire Finder &gt;</a></div>
		<!-- <div class="find-shop"><a href="/international/service/find_shop">Dealer Locator &gt;</a></div> -->
	</div>

	<div class="main-banner-wrap">
		<div class="container">
			<!-- <div class="row"> -->
			<div class="search">
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#findTire" aria-controls="findTire" role="tab"
							data-toggle="tab">Tire Finder</a></li>
					<!--	<li role="presentation"><a href="#findShop" aria-controls="findShop" role="tab" data-toggle="tab">Dealer Locator</a></li> -->
				</ul>
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="findTire">
						<div class="find-tire">
							<div class="form-horizontal">
								<div class="form-group">
									<label>Maker</label>
									<div class="form-item"><select class="form-control" id="carMakerBox"></select></div>
								</div>
								<div class="form-group">
									<label>Model</label>
									<div class="form-item"><select class="form-control" id="carBrandBox"></select></div>
								</div>
								<div class="form-group">
									<label>Product</label>
									<div class="form-item short"><input type="text" id="productName"
											class="form-control " placeholder="Enter the product name">
									</div>
									<a onclick="search_by_car()" class="btn btn-ghost white"><img
											src="<?php echo $url; ?>/assets/images/main/ico_main_search.png"> Search</a>
								</div>
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="findShop">
						<div class="find-shop">
							<div class="form-horizontal">
								<div class="form-group">
									<label>Region</label>
									<div class="form-item"><select class="form-control" id="shopAddr01"></select></div>
								</div>
								<div class="form-group">
									<label>Company</label>
									<div class="form-item short"><input type="text" class="form-control" id="shopName"
											placeholder=""></div>
									<a onclick="goto_find_shop()" class="btn btn-ghost white"><img
											src="<?php echo $url; ?>/assets/images/main/ico_main_search.png"> Search</a>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

			<!-- 개인화베너 -->
			<div class="banner-item"><a href="<?php echo $url; ?>/product/passenger/single.php" target="_self"><img
						src="main_adm/02/__icsFiles/afieldfile/2021/05/07/sup.jpg"></a></div>
			<div class="banner-item"><a href="<?php echo $url; ?>/product/passenger/single.php" target="_self"><img
						src="main_adm/02/__icsFiles/afieldfile/2021/05/07/pri_v.jpg"></a></div>
			<!-- 개인화베너 -->

		</div>
	</div>


	<div class="about-sec main-block">

		<div class="container">
			<div class="col">
				<div class="col-12 col-md-7 col-lg-6">
					<div class="section-title">About Nexen</div>

					<p class="txt">Once rubber sheets are made according to the characteristics of each part of the tire
						through the ‘mixing Process,’ rubber is then created into a certain regular width and thickness
						through the ‘extrusion process.’ Here, the treads (outer surface of the tire) and sidewalls
						(sides of the tire) are created, which is an important process for cozy and comfortable driving.
						Once rubber sheets are made according to the characteristics of each part of the tire through
						the ‘mixing Process,’ rubber is then created into a certain regular width and thickness through
						the ‘extrusion process.’ Here, the treads (outer surface of the tire) and sidewalls (sides of
						the tire) are created, which is an important process for cozy and comfortable driving.
					</p>
				</div>
				<div class="col-12 col-md-5 col-lg-6">
					<img src="assets/images/nex.jpeg" alt="">
				</div>
			</div>
		</div>
	</div>

	<div class="main-block news-section">
		<div class="container">
			<div class="section-title">NEWS &amp; EVENT</div>
			<div class="news-list row">
				<div class="col">
					<div id="newsList">


						<div class="col col-md-3 col-xs-12">
							<a class="news-item" href="<?php echo $url; ?>/media/news/index.php">
								<div class="thumb"><img src="media/news/__icsFiles/thumbnail/2022/05/17/9201.jpg" />
								</div>
								<div class="desc">
									<div class="date">2022.05.16</div>
									<div class="title">NEXEN TIRE announces participation at the Tire Col...
									</div>
								</div>
							</a>
						</div>
						<div class="col col-md-3 col-xs-12">
							<a class="news-item" href="<?php echo $url; ?>/media/news/single-news.php">
								<div class="thumb"><img
										src="<?php echo $url; ?>/media/news/__icsFiles/thumbnail/2022/03/30/800.jpg" />
								</div>
								<div class="desc">
									<div class="date">2022.03.29</div>
									<div class="title">NEXEN TIRE Unveils 80th Anniversary Emblem – Obser...
									</div>
								</div>
							</a>
						</div>
						<div class="col col-md-3 col-xs-12">
							<a class="news-item" href="<?php echo $url; ?>/media/news/single-news.php">
								<div class="thumb"><img
										src="<?php echo $url; ?>/media/news/__icsFiles/thumbnail/2022/03/25/920.jpg" />
								</div>
								<div class="desc">
									<div class="date">2022.03.25</div>
									<div class="title">NEXEN TIRE Wins Two Red Dot Awards</div>
								</div>
							</a>
						</div>


					</div>
				</div>

				<div class="col col-md-3 col-xs-12 news-event">
					<div id="newsEvent">

						<div><a href="<?php echo $url; ?>/media/news/single-news.php"><img
									src="main_adm/04/__icsFiles/afieldfile/2021/05/26/banner_2.png" width="100%"
									target="_self" /></a></div>
						<div><a href="https://www.instagram.com/nexentireglobal_official/"><img
									src="main_adm/04/__icsFiles/afieldfile/2021/02/04/insta_main_banner2_1.jpg"
									width="100%" target="_blank" /></a></div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="main-block whynexen-section">
		<div class="container">
			<div class="section-title">Why NEXEN TIRE</div>
			<div class="whynexen-list row">

				<div class="col col-md-3 col-xs-6">
					<a class="section-item" href="<?php echo $url; ?>/company/infomation/history/history03/index.php"
						target="_self">
						<div class="thumb"><img
								src="<?php echo $url; ?>/main_adm/05/__icsFiles/afieldfile/2022/01/05/nexen_main_80ver_1.png" />
						</div>
						<div class="desc">
							<div class="title">History</div>
						</div>
					</a>
				</div>
				<div class="col col-md-3 col-xs-6">
					<a class="section-item" href="<?php echo $url; ?>/product/technology/rnd/rnd.php" target="_self">
						<div class="thumb"><img
								src="<?php echo $url; ?>/main_adm/05/__icsFiles/afieldfile/2017/03/03/whynexen_02.jpg" />
						</div>
						<div class="desc">
							<div class="title">Technology</div>
						</div>
					</a>
				</div>
				<div class="col col-md-3 col-xs-6">
					<a class="section-item" href="<?php echo $url; ?>/product/technology/plant/plant.php"
						target="_self">
						<div class="thumb"><img src="main_adm/05/__icsFiles/afieldfile/2017/03/03/whynexen_03.jpg" />
						</div>
						<div class="desc">
							<div class="title">High-tech Automated Plant</div>
						</div>
					</a>
				</div>
				<div class="col col-md-3 col-xs-6">
					<a class="section-item" href="<?php echo $url; ?>/product/magazine_test/magazine_test.php"
						target="_self">
						<div class="thumb"><img
								src="<?php echo $url; ?>/main_adm/05/__icsFiles/afieldfile/2017/03/03/whynexen_04.jpg" />
						</div>
						<div class="desc">
							<div class="title">Magazine Test</div>
						</div>
					</a>
				</div>

			</div>
		</div>
	</div>


	<!-- deleted till new update from client -->

	<!-- <div class="main-block moreinfo-section">
		<div class="container">
			<div class="section-title">Sports Marketing</div>
			<div class="moreinfo-list row">

				<div class="col col-md-4">
					<a class="section-item" href="<?php echo $url; ?>/communication/sport_marketing/premierleague/index.php"
						target="_self">
						<div class="thumb"><img
								src="<?php echo $url; ?>/main_adm/10/__icsFiles/afieldfile/2021/08/24/main_thumbnail_mancity_1.png" />
						</div>
						<div class="desc">
							<div class="title">MANCHESTER CITY</div>
						</div>
					</a>
				</div>
				<div class="col col-md-4">
					<a class="section-item" href="<?php echo $url; ?>/communication/sport_marketing/formula/index.php" target="_self">
						<div class="thumb"><img
								src="<?php echo $url; ?>/main_adm/10/__icsFiles/afieldfile/2017/08/11/thumbnail_Formula.jpg" />
						</div>
						<div class="desc">
							<div class="title">US Formula Drift</div>
						</div>
					</a>
				</div>
				<div class="col col-md-4">
					<a class="section-item" href="<?php echo $url; ?>/communication/sport_marketing/racing/index.php" target="_self">
						<div class="thumb"><img
								src="<?php echo $url; ?>/main_adm/10/__icsFiles/afieldfile/2017/08/11/thumbnail_racing_1.jpg" />
						</div>
						<div class="desc">
							<div class="title">NEXEN TIRE Speed Racing</div>
						</div>
					</a>
				</div>

			</div>
		</div>
	</div> -->



	<!-- 
	<div class="main-block moreinfo-section">
		<div class="container">
			<div class="section-title">More Information</div>
			<div class="moreinfo-list row">

				<div class="col col-md-4">
					<a class="section-item" href="<?php echo $url; ?>/information/tire_information/index.php" target="_self">
						<div class="thumb"><img src="<?php echo $url; ?>/main_adm/06/__icsFiles/afieldfile/2017/03/03/moreinfo_03.jpg" />
						</div>
						<div class="desc">
							<div class="title">Tips for Tire Management</div>
						</div>
					</a>
				</div>
				<div class="col col-md-4">
					<a class="section-item" href="<?php echo $url; ?>/media/webzine/index.php" target="_self">
						<div class="thumb"><img src="<?php echo $url; ?>/main_adm/06/__icsFiles/afieldfile/2017/03/03/moreinfo_02.jpg" />
						</div>
						<div class="desc">
							<div class="title">Webzine</div>
						</div>
					</a>
				</div>
				<div class="col col-md-4">
					<a class="section-item" href="<?php echo $url; ?>/service/guarantee/index.php" target="_self">
						<div class="thumb"><img src="<?php echo $url; ?>/main_adm/06/__icsFiles/afieldfile/2017/03/03/moreinfo_01.jpg" />
						</div>
						<div class="desc">
							<div class="title">Warranty</div>
						</div>
					</a>
				</div>

			</div>
		</div>
	</div> -->


	<!-- <div class="main-block video-section">
		<div class="container">
			<div class="video-list row">

				<div class="col col-md-4">
					<div class="section-item">
						<div class="thumb">
							<iframe src="https://www.youtube.com/embed/5ab1twO1RMk?rel=0&amp;showinfo=0"
								frameborder="0"></iframe>
						</div>
						<div class="desc">
							<div class="title">[NEXEN TIRE] Brand Film</div>
						</div>
					</div>
				</div>
				<div class="col col-md-4">
					<div class="section-item">
						<div class="thumb">
							<iframe src="https://www.youtube.com/embed/nazrwrOYfhM?rel=0&amp;showinfo=0"
								frameborder="0"></iframe>
						</div>
						<div class="desc">
							<div class="title">[NEXEN TIRE] Developed for Porsche Panamera</div>
						</div>
					</div>
				</div>
				<div class="col col-md-4">
					<div class="section-item">
						<div class="thumb">
							<iframe src="https://www.youtube.com/embed/E_2Dq18kdEY?rel=0&amp;showinfo=0"
								frameborder="0"></iframe>
						</div>
						<div class="desc">
							<div class="title">[Product] N'FERA Supreme (PC/SUV)</div>
						</div>
					</div>
				</div>
			</div>

			<div class="btn-box">
				<a class="btn btn-ghost white" href="https://www.youtube.com/channel/UC7bke9V6vRL905dkf0jtbWw"
					target="_blank"><img src="<?php echo $url; ?>/assets/images/main/ico-video-btn.png" /><span> Go to YouTube </span></a>
			</div>
		</div>
	</div> -->






	<!-- <div class="main-block sns-section">
		<div class="container">
			<div class="facebook-section">
				<div class="section-title">Facebook</div>


				<div class="facebook-list row" id="facebookContentList">


					<div class="col col-md-3 col-sm-4 col-xs-6" style="display: block;">
						<a class="fb-item " href="https://www.facebook.com/660677800710659/posts/4818050254973372/"
							target="_blank">
							<div class="thumb"><img
									src="nexen-upload.s3.ap-northeast-2.amazonaws.com/SOCIAL_FB_20220523_628b4d14d957a.jpg">
							</div>
						</a>
					</div>
					<div class="col col-md-3 col-sm-4 col-xs-6" style="display: block;">
						<a class="fb-item " href="https://www.facebook.com/660677800710659/posts/4817599448351786/"
							target="_blank">
							<div class="thumb"><img
									src="nexen-upload.s3.ap-northeast-2.amazonaws.com/SOCIAL_FB_20220523_628b4d15c7a51.jpg">
							</div>
						</a>
					</div>
					<div class="col col-md-3 col-sm-4 col-xs-6" style="display: block;">
						<a class="fb-item " href="https://www.facebook.com/660677800710659/posts/4802502303194834/"
							target="_blank">
							<div class="thumb"><img
									src="nexen-upload.s3.ap-northeast-2.amazonaws.com/SOCIAL_FB_20220518_6284b5952267d.jpg">
							</div>
						</a>
					</div>
					<div class="col col-md-3 col-sm-4 col-xs-6" style="display: block;">
						<a class="fb-item " href="https://www.facebook.com/660677800710659/posts/4798904506887947/"
							target="_blank">
							<div class="thumb"><img
									src="nexen-upload.s3.ap-northeast-2.amazonaws.com/SOCIAL_FB_20220517_62836414a9a5e.png">
							</div>
						</a>
					</div>
					<div class="col col-md-3 col-sm-4 col-xs-6" style="display: block;">
						<a class="fb-item " href="https://www.facebook.com/660677800710659/posts/4787941361317595/"
							target="_blank">
							<div class="thumb"><img
									src="nexen-upload.s3.ap-northeast-2.amazonaws.com/SOCIAL_FB_20220513_627e1e14c4bea.jpg">
							</div>
						</a>
					</div>
					<div class="col col-md-3 col-sm-4 col-xs-6" style="display: block;">
						<a class="fb-item " href="https://www.facebook.com/660677800710659/posts/4785221911589540/"
							target="_blank">
							<div class="thumb"><img
									src="nexen-upload.s3.ap-northeast-2.amazonaws.com/SOCIAL_FB_20220512_627ccc955e015.jpg">
							</div>
						</a>
					</div>
					<div class="col col-md-3 col-sm-4 col-xs-6" style="display: block;">
						<a class="fb-item " href="https://www.facebook.com/660677800710659/posts/4785116304933434/"
							target="_blank">
							<div class="thumb"><img
									src="nexen-upload.s3.ap-northeast-2.amazonaws.com/SOCIAL_FB_20220512_627ccc95de8ec.jpg">
							</div>
						</a>
					</div>
					<div class="col col-md-3 col-sm-4 col-xs-6" style="display: block;">
						<a class="fb-item " href="https://www.facebook.com/660677800710659/posts/4727890900655975/"
							target="_blank">
							<div class="thumb"><img
									src="nexen-upload.s3.ap-northeast-2.amazonaws.com/SOCIAL_FB_20220421_6260c8b499255.jpg">
							</div>
						</a>
					</div>
					<div class="col col-md-3 col-sm-4 col-xs-6" style="display: block;">
						<a class="fb-item " href="https://www.facebook.com/660677800710659/posts/4710759552369110/"
							target="_blank">
							<div class="thumb"><img
									src="nexen-upload.s3.ap-northeast-2.amazonaws.com/SOCIAL_FB_20220414_6257e295a566a.jpg">
							</div>
						</a>
					</div>
					<div class="col col-md-3 col-sm-4 col-xs-6" style="display: block;">
						<a class="fb-item " href="https://www.facebook.com/660677800710659/posts/4707933789318353/"
							target="_blank">
							<div class="thumb"><img
									src="nexen-upload.s3.ap-northeast-2.amazonaws.com/SOCIAL_FB_20220413_6256911490b76.jpg">
							</div>
						</a>
					</div>
					<div class="col col-md-3 col-sm-4 col-xs-6" style="display: block;">
						<a class="fb-item " href="https://www.facebook.com/660677800710659/posts/4668580819920317/"
							target="_blank">
							<div class="thumb"><img
									src="nexen-upload.s3.ap-northeast-2.amazonaws.com/SOCIAL_FB_20220329_62427634a2e9a.jpg">
							</div>
						</a>
					</div>
					<div class="col col-md-3 col-sm-4 col-xs-6" style="display: block;">
						<a class="fb-item " href="https://www.facebook.com/660677800710659/posts/4650682255043507/"
							target="_blank">
							<div class="thumb"><img
									src="nexen-upload.s3.ap-northeast-2.amazonaws.com/SOCIAL_FB_20220322_62393bb50d90f.jpg">
							</div>
						</a>
					</div>
					<div class="col col-md-3 col-sm-4 col-xs-6" style="display: block;">
						<a class="fb-item " href="https://www.facebook.com/660677800710659/posts/4632596666852066/"
							target="_blank">
							<div class="thumb"><img
									src="nexen-upload.s3.ap-northeast-2.amazonaws.com/SOCIAL_FB_20220315_623001343c008.jpg">
							</div>
						</a>
					</div>
					<div class="col col-md-3 col-sm-4 col-xs-6" style="display: block;">
						<a class="fb-item " href="https://www.facebook.com/660677800710659/posts/4614103392034727/"
							target="_blank">
							<div class="thumb"><img
									src="nexen-upload.s3.ap-northeast-2.amazonaws.com/SOCIAL_FB_20220308_6226c6b4bfcba.jpg">
							</div>
						</a>
					</div>
					<div class="col col-md-3 col-sm-4 col-xs-6" style="display: block;">
						<a class="fb-item " href="https://www.facebook.com/660677800710659/posts/4595147940596939/"
							target="_blank">
							<div class="thumb"><img
									src="nexen-upload.s3.ap-northeast-2.amazonaws.com/SOCIAL_FB_20220301_621d8c356c7c5.jpg">
							</div>
						</a>
					</div>
					<div class="col col-md-3 col-sm-4 col-xs-6" style="display: block;">
						<a class="fb-item " href="https://www.facebook.com/660677800710659/posts/4575099609268439/"
							target="_blank">
							<div class="thumb"><img
									src="nexen-upload.s3.ap-northeast-2.amazonaws.com/SOCIAL_FB_20220222_621451b4c0a3b.jpg">
							</div>
						</a>
					</div>
					<div class="col col-md-3 col-sm-4 col-xs-6" style="display: block;">
						<a class="fb-item " href="https://www.facebook.com/660677800710659/posts/4556673957777671/"
							target="_blank">
							<div class="thumb"><img
									src="nexen-upload.s3.ap-northeast-2.amazonaws.com/SOCIAL_FB_20220216_620c68b522f49.png">
							</div>
						</a>
					</div>
					<div class="col col-md-3 col-sm-4 col-xs-6" style="display: block;">
						<a class="fb-item " href="https://www.facebook.com/660677800710659/posts/4497475317030869/"
							target="_blank">
							<div class="thumb"><img
									src="nexen-upload.s3.ap-northeast-2.amazonaws.com/SOCIAL_FB_20220128_61f3b094c999e.jpg">
							</div>
						</a>
					</div>
					<div class="col col-md-3 col-sm-4 col-xs-6" style="display: block;">
						<a class="fb-item " href="https://www.facebook.com/660677800710659/posts/4482964578481943/"
							target="_blank">
							<div class="thumb"><img
									src="nexen-upload.s3.ap-northeast-2.amazonaws.com/SOCIAL_FB_20220125_61ef67b539bfc.jpg">
							</div>
						</a>
					</div>
					<div class="col col-md-3 col-sm-4 col-xs-6" style="display: block;">
						<a class="fb-item " href="https://www.facebook.com/660677800710659/posts/4434124556699279/"
							target="_blank">
							<div class="thumb"><img
									src="nexen-upload.s3.ap-northeast-2.amazonaws.com/SOCIAL_FB_20220114_61e0e734ed3f8.jpg">
							</div>
						</a>
					</div>
					<div class="col col-md-3 col-sm-4 col-xs-6" style="display: block;">
						<a class="fb-item " href="https://www.facebook.com/660677800710659/posts/4422122764566125/"
							target="_blank">
							<div class="thumb"><img
									src="nexen-upload.s3.ap-northeast-2.amazonaws.com/SOCIAL_FB_20220112_61de44347d075.jpg">
							</div>
						</a>
					</div>
					<div class="col col-md-3 col-sm-4 col-xs-6" style="display: block;">
						<a class="fb-item " href="https://www.facebook.com/660677800710659/posts/4391774794267589/"
							target="_blank">
							<div class="thumb"><img
									src="nexen-upload.s3.ap-northeast-2.amazonaws.com/SOCIAL_FB_20211231_61ce7234d8eb8.jpg">
							</div>
						</a>
					</div>
					<div class="col col-md-3 col-sm-4 col-xs-6" style="display: block;">
						<a class="fb-item " href="https://www.facebook.com/660677800710659/posts/4386882424756826/"
							target="_blank">
							<div class="thumb"><img
									src="nexen-upload.s3.ap-northeast-2.amazonaws.com/SOCIAL_FB_20211231_61ce1dd440318.png">
							</div>
						</a>
					</div>
					<div class="col col-md-3 col-sm-4 col-xs-6" style="display: block;">
						<a class="fb-item " href="https://www.facebook.com/660677800710659/posts/4385951211516614/"
							target="_blank">
							<div class="thumb"><img
									src="nexen-upload.s3.ap-northeast-2.amazonaws.com/SOCIAL_FB_20211229_61cbcf340dc3d.jpg">
							</div>
						</a>
					</div>

				</div>
			</div>

			<div class="read-more"><a onclick="social_list_more()"><span>READ MORE</span></a></div>

		</div>
	</div> -->




</div>








</div>
</div>
<?php 
		include 'common/footer.php';  
		?>