<?php 
include 'header.php';  
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
		<div class="find-tire"><a href="<?php echo $url; ?>/service/find_tire/index.php">بحث &gt;</a></div>
		<!-- <div class="find-shop"><a href="/international/service/find_shop">Dealer Locator &gt;</a></div> -->
	</div>

	<div class="main-banner-wrap">
		<div class="container">
			<!-- <div class="row"> -->
			<div class="search">
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#findTire" aria-controls="findTire" role="tab"
							data-toggle="tab">بحث</a></li>
					<!--	<li role="presentation"><a href="#findShop" aria-controls="findShop" role="tab" data-toggle="tab">Dealer Locator</a></li> -->
				</ul>
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="findTire">
						<div class="find-tire">
							<div class="form-horizontal">
								<div class="form-group">
									<label>مصنع</label>
									<div class="form-item"><select class="form-control" id="carMakerBox"></select></div>
								</div>
								<div class="form-group">
									<label>موديل</label>
									<div class="form-item"><select class="form-control" id="carBrandBox"></select></div>
								</div>
								<div class="form-group">
									<label>منتج</label>
									<div class="form-item short"><input type="text" id="productName"
											class="form-control " placeholder="Enter the product name">
									</div>
									<a onclick="search_by_car()" class="btn btn-ghost white"><img
											src="<?php echo $url; ?>/assets/images/main/ico_main_search.png"> بحث</a>
								</div>
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="findShop">
						<div class="find-shop">
							<div class="form-horizontal">
								<div class="form-group">
									<label>منطقه</label>
									<div class="form-item"><select class="form-control" id="shopAddr01"></select></div>
								</div>
								<div class="form-group">
									<label>شركه</label>
									<div class="form-item short"><input type="text" class="form-control" id="shopName"
											placeholder=""></div>
									<a onclick="goto_find_shop()" class="btn btn-ghost white"><img
											src="<?php echo $url; ?>/assets/images/main/ico_main_search.png"> بحث</a>
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
					<div class="section-title">إطارات نيكسن</div>

					<p class="txt">لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات . ديواسأيكسسيبتيور ساينت أوككايكات كيوبايداتات نون بروايدينت ,سيونت ان كيولبا
كيو أوفيسيا ديسيريونتموليت انيم أيدي ايست لابوريوم.
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
			<div class="section-title">اخر الاخبار</div>
			<div class="news-list row">
				<div class="col">
					<div id="newsList">


						<div class="col col-md-3 col-xs-12">
							<a class="news-item" href="<?php echo $url; ?>/media/news/index.php">
								<div class="thumb"><img src="media/news/__icsFiles/thumbnail/2022/05/17/9201.jpg" />
								</div>
								<div class="desc">
									<div class="date">2022.05.16</div>
									<div class="title">وعند ملاحظات او الانتقادات للتصميم الاساسي....
									</div>
								</div>
							</a>
						</div>
						<div class="col col-md-3 col-xs-12">
							<a class="news-item" href="<?php echo $url; ?>/media/news/single-news.php">
								<div class="thumb"><img src="<?php echo $url; ?>/media/news/__icsFiles/thumbnail/2022/03/30/800.jpg" />
								</div>
								<div class="desc">
									<div class="date">2022.03.29</div>
									<div class="title">وعند ملاحظات او الانتقادات للتصميم الاساسي....
									</div>
								</div>
							</a>
						</div>
						<div class="col col-md-3 col-xs-12">
							<a class="news-item" href="<?php echo $url; ?>/media/news/single-news.php">
								<div class="thumb"><img src="<?php echo $url; ?>/media/news/__icsFiles/thumbnail/2022/03/25/920.jpg" />
								</div>
								<div class="desc">
									<div class="date">2022.03.25</div>
									<div class="title">وعند ملاحظات او الانتقادات للتصميم الاساسي....</div>
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
			<div class="section-title">لماذا اطارات نيكسن</div>
			<div class="whynexen-list row">

				<div class="col col-md-3 col-xs-6">
					<a class="section-item" href="<?php echo $url; ?>/company/infomation/history/history03/index.php" target="_self">
						<div class="thumb"><img
								src="<?php echo $url; ?>/main_adm/05/__icsFiles/afieldfile/2022/01/05/nexen_main_80ver_1.png" />
						</div>
						<div class="desc">
							<div class="title">سابقة</div>
						</div>
					</a>
				</div>
				<div class="col col-md-3 col-xs-6">
					<a class="section-item" href="<?php echo $url; ?>/product/technology/rnd/rnd.php" target="_self">
						<div class="thumb"><img src="<?php echo $url; ?>/main_adm/05/__icsFiles/afieldfile/2017/03/03/whynexen_02.jpg" />
						</div>
						<div class="desc">
							<div class="title">تقنيات</div>
						</div>
					</a>
				</div>
				<div class="col col-md-3 col-xs-6">
					<a class="section-item" href="<?php echo $url; ?>/product/technology/plant/plant.php" target="_self">
						<div class="thumb"><img src="main_adm/05/__icsFiles/afieldfile/2017/03/03/whynexen_03.jpg" />
						</div>
						<div class="desc">
							<div class="title">لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا </div>
						</div>
					</a>
				</div>
				<div class="col col-md-3 col-xs-6">
					<a class="section-item" href="<?php echo $url; ?>/product/magazine_test/magazine_test.php" target="_self">
						<div class="thumb"><img src="<?php echo $url; ?>/main_adm/05/__icsFiles/afieldfile/2017/03/03/whynexen_04.jpg" />
						</div>
						<div class="desc">
							<div class="title">مجلة الاختبار</div>
						</div>
					</a>
				</div>

			</div>
		</div>
	</div>









</div>








</div>
</div>
<?php 
		include 'footer.php';  
		?>