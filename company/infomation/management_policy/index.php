<?php 
include '../../../common/header.php';  
?>




<style type="text/css">
								.content-company-menu ul {
									width: 100%;
									padding-right: 0;
								}

								.content-company-menu ul li {
									width: 49.5%;
									max-width: 100%;
								}

								.content-company-menu ul li a {
									border-bottom: 3px solid #ccc;
									padding-bottom: 5px;
								}

								.content-company-menu ul li a.active {
									border-bottom: 3px solid #801494;
								}


								.management-policy .management-pbox .title {
									font-size: 18px;
									text-align: center;
									font-weight: 600;
									background-color: #801494;
									color: #FFF;
									display: inline-block;
									padding: 5px 20px;
								}

								.management-policy .management-pbox .subtitle-block {
									display: inline-block;
									color: rgb(128, 20, 148);
									border-radius: 10px;
									font-size: 36px;
									font-family: nexen_r;
									font-weight: bold;
									line-height: 1;
									text-align: center;
									background-color: #e5e5e5;
									border-radius: 15px;
									text-align: center;
									padding: 15px 40px 10px;
									margin: 20px auto;
									font-style: italic;
								}

								.management-policy .management-pbox .mp-top {
									text-align: center;
									padding-bottom: 100px;
									position: relative;
								}

								.management-policy .management-pbox .mp-top .txt {
									font-size: 20px;
									font-weight: 400;
								}

								.management-policy .management-pbox .mp-top:after {
									content: "";
									border-left: 1px dashed #801494;
									position: absolute;
									left: 50%;
									bottom: 0;
									display: block;
									height: 50px;
								}


								.management-policy .management-pbox .mp-bottom .txt-box {
									position: relative;
									width: 48%;
								}

								.management-policy .management-pbox .mp-bottom .txt-box .title-sub {
									font-size: 20px;
									color: #414042;
									position: relative;
									text-align: center;
									font-weight: 500;
								}

								.management-policy .management-pbox .mp-bottom .txt-box .title-sub:before {
									content: "";
									height: 35px;
									border: 2px solid #801494;
									border-right: none;
									width: 10px;
									display: block;
									border-top-left-radius: 10px;
									border-bottom-left-radius: 10px;
									position: absolute;
									top: 50%;
									transform: translateY(-50%);
									left: 0px;
								}

								.management-policy .management-pbox .mp-bottom .txt-box .title-sub:after {
									content: "";
									height: 35px;
									border: 2px solid #801494;
									border-left: none;
									width: 10px;
									display: block;
									border-top-right-radius: 10px;
									border-bottom-right-radius: 10px;
									position: absolute;
									top: 50%;
									transform: translateY(-50%);
									right: 0px;
								}

								.management-policy .management-pbox .mp-bottom .txt-box .txt {
									font-size: 17px;
									color: #801494;
									text-align: center;
									position: relative;
									padding: 0;
								}

								.management-policy .management-pbox .mp-bottom .txt-box .txt:before {
									content: "";
									width: 200px;
									border-top: 1px solid #801494;
									display: block;
									margin: 20px auto 20px;
								}

								.management-policy .management-pbox .mp-bottom .txt-box:first-child {
									margin-right: 2%;
								}

								.management-policy .management-pbox .mp-bottom .txt-box:last-child {
									margin-left: 2%;
								}

								@media (max-width: 992px) {
									.management-policy .management-pbox .subtitle-block {
										line-height: 1.3;
									}

									.management-policy .management-pbox .mp-top .txt {
										line-height: 1.7;
									}

									.management-policy .management-pbox .mp-top {
										margin-bottom: 30px;
									}

									.management-policy .management-pbox .mp-bottom {
										margin: 0;
										padding: 0;
									}

									.management-policy .management-pbox .mp-bottom .txt-box {
										width: 100%;
										margin: 40px 0;
									}

									.management-policy .management-pbox .mp-bottom .txt-box:first-child {
										margin: 40px 0;
									}

									.management-policy .management-pbox .mp-bottom .txt-box:last-child {
										margin: 40px 0;
									}

									.management-policy .management-pbox .mp-bottom .txt-box .title-sub {
										padding: 0 15px;
									}

									.management-policy .management-pbox .mp-bottom .txt-box .title-sub:before {
										height: 100%;
									}

									.management-policy .management-pbox .mp-bottom .txt-box .title-sub:after {
										height: 100%;
									}

								}
							</style>




			<!-- container -->
			<div class="company-container">

				<div class="keyvisual">
					<div class="title">
						<h1>NEXEN TIRE</h1>
					</div>
					<div class="visual"><img src="<?php echo $url; ?>/assets/images/company/key_visual1.jpg"></div>
				</div>

				<div class="content-wrap">

					<div class="container">

						<div class="company-cont">

							<div class="sub-title">
								<strong>About NEXEN TIRE</strong> The business that cares, prepares, and thinks about
								the value of tomorrow is NEXEN TIRE.
							</div>

							<!-- Nav tabs -->
							<table class="table-tab no-arrow">
								<tr>

									<td class="nav_l"><a href="../ceo/index-2.php">CEO Message</a></td>
									<td class="nav_l"><a href="../value_system/index.php">Value System</a></td>
									<td class="nav_l"><a href="../slogan/index.php">Brand Slogan</a></td>
									<td class="nav_l"><a href="../history/history03/index.php">History</a></td>
									<td class="nav_l active"><a href="index.php">Management Policy</a></td>
									<td class="nav_l"><a href="../contribution/index.php">Social Contributions</a></td>
									<td class="nav_l"><a href="../award/index.php">Award</a></td>
									<td class="nav_l"><a href="../ethics/ceo_message/index.php">Ethical Management</a>
									</td>
									<td class="nav_l"><a href="../local/local/index.php">Business Network</a></td>

								</tr>
							</table>

							<!-- //Nav tabs -->


							<div class="company-title">
								<div class="title"><strong>Management Policy</strong><span>NEXEN TIRE creates the value
										of tomorrow.</span></div>
								<div class="sns-button">
									<a href="#" class="share-fb"><img src="<?php echo $url; ?>/assets/images/common/btn_sns1.gif"
											alt="페이스북"></a>
									<a href="#" class="share-tw"><img src="<?php echo $url; ?>/assets/images/common/btn_sns2.gif"
											alt="트위터"></a>
									<a href="#" class="share-gg"><img src="<?php echo $url; ?>/assets/images/common/btn_sns3.gif"
											alt="구글"></a>
									<a href="#" class="share-print"><img src="<?php echo $url; ?>/assets/images/common/btn_print.gif"
											alt="인쇄"></a>
								</div>
							</div>

							<div class="img_company"><img src="<?php echo $url; ?>/assets/images/company/img_company_management1.jpg"
									alt=""></div>





							<div class="content-company-menu">
								<ul>

									<li><a href="index.php" class="active">Management Policy</a></li>
									<li><a href="quality.php">Quality, Environment, Import and Export Policy</a></li>
								</ul>
							</div>







							<div class="management-policy">
								<div class="management-pbox">
									<div class="mp-top">
										<div class="title">2022 Management policy</div><br />
										<div class="subtitle-block">
											Aim High! Be Creative! Be Fearless!
										</div>
										<div class="txt">
											Urging to meet “challenging goals” with “new & creative solutions” and “bold
											actions”
										</div>
									</div>
									<!-- <hr > -->

									<div class="mp-bottom" style="border:none;">

										<div class="w-box">
											<div class="txt-box">
												<div class="title-sub">Boldly Implement innovative strategies &
													Establish <br />a strong foundation for mid- to long-term growth
												</div>
												<div class="txt">
													혁신 전략의 과감한 실행 및 중장기 성장 기반 구축

												</div>
											</div>
											<div class="txt-box">
												<div class="title-sub">Reinforce core R&D capabilities<br />to meet
													customer needs</div>
												<div class="txt">
													고객 Needs 충족 위한 R&D 핵심 역량 강화
												</div>
											</div>
										</div>
									</div>

									<div class="mp-bottom" style="border:none;">

										<div class="w-box">
											<div class="txt-box">
												<div class="title-sub">Secure global top tier manufacturing &<br />
													quality competitiveness </div>
												<div class="txt">
													다공장 생산 및 품질의 시장 경쟁력 확보
												</div>
											</div>
											<div class="txt-box">
												<div class="title-sub">Build an organizational culture <br />of
													challenge, change, and unity </div>
												<div class="txt">
													도전, 변화, 화합의 조직 문화 형성
												</div>
											</div>
										</div>
									</div>





								</div>

							</div>





						</div>
					</div>

				</div>
			</div>
		</div>
		<?php 
		include '../../../common/footer.php';  
		?>
		