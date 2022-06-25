<?php 
include '../../../../common/header.php';  
?>


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
							<strong>About NEXEN TIRE</strong> The business that cares, prepares, and thinks about the value of tomorrow is NEXEN TIRE.
						</div>
						
						<!-- Nav tabs -->
						<table class="table-tab no-arrow">
					<tr>

									<td class="nav_l"><a href="../..//ceo/index.php">CEO Message</a></td>
									<td class="nav_l"><a href="../..//value_system/index.php">Value System</a></td>
									<td class="nav_l"><a href="../..//slogan/index.php">Brand Slogan</a></td>
									<td class="nav_l"><a href="../..//history/history03/index.php">History</a></td>
									<td class="nav_l"><a href="../..//management_policy/index.php">Management Policy</a></td>
									<td class="nav_l"><a href="../..//contribution/index.php">Social Contributions</a></td>
									<td class="nav_l"><a href="../..//award/index.php">Award</a></td>
									<td class="nav_l active"><a href="../..//ethics/ceo_message/index.php">Ethical Management</a></td>
									<td class="nav_l"><a href="../..//local/local/index.php">Business Network</a></td>
                      
                      </tr>
				</table>

						<!-- //Nav tabs -->
						
		
						<div class="company-title">
							<div class="title"><strong>Ethical Management</strong><span>It is NEXEN TIRE, a clean and transparent corporate culture.</span></div>
							<div class="sns-button">
  <a href="#" class="share-fb"><img src="<?php echo $url; ?>/assets/images/common/btn_sns1.gif" alt="페이스북"></a>
  <a href="#" class="share-tw"><img src="<?php echo $url; ?>/assets/images/common/btn_sns2.gif" alt="트위터"></a>
  <a href="#" class="share-gg"><img src="<?php echo $url; ?>/assets/images/common/btn_sns3.gif" alt="구글"></a>
  <a href="#" class="share-print"><img src="<?php echo $url; ?>/assets/images/common/btn_print.gif" alt="인쇄"></a>
</div>
						</div>
						
						<div class="img_company"><img src="<?php echo $url; ?>/assets/images/company/img_company_ethics_introduce1.jpg" alt=""></div>
						
						<div class="content-company-menu ethics">
							<ul>
								
								<li><a href="../..//ethics/ceo_message/index.php">Message from the Global CEO</a></li>
								<li><a href="../..//ethics/introduce/index.php">Ethical Management and Code of Ethics</a></li>
								<li><a href="../..//ethics/report/index.php" class="active">Report Center</a></li>
							</ul>
						</div>
						


						<div class="ethics-report">
							<div class="report-title">Report Center</div>

							<div class="ethics-report-list">
								<div class="title-line">Check the Result</div>
								<div class="txt-1">
									You can check the results of the report. You can check the results of the report only if you select the website when registering the report.
								</div>



								<div class="report-regist-result" id="reportResult">

									<div class="form-horizontal">

										<div class="form-group" >
											<label class="col-sm-2 control-label "><span>*</span>Name</label>
											<div class="col-sm-4">
												<input type="text" name="name" value="" class="form-control inline input-sm"  autocomplete="new-password" />
											</div>
										</div>

										<div class="form-group" >
											<label class="col-sm-2 control-label "><span>*</span>Password</label>
											<div class="col-sm-4">
												<input type="password" name="passwd" value="" class="form-control inline input-sm"  autocomplete="new-password" />
											</div>
										</div>
										<div class="form-group" >
											<div class="col-sm-4 col-sm-offset-2">
												<button type="button" class="btn btn-ghost gray btn-lg " onclick="ethics_report_view( )">Check the Result</button>
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
include '../../../../common/footer.php';  
?>