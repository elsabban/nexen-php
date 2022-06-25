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
								<div class="title-line">Report</div>
								<div class="txt-1">
									You can report any irregularities or irrationalities of our executives and employees. However, matters related to slander and personal privacy that are not based on facts are not treated as complaints. In addition, for inquiries or complaints about quality and other services, please use the Customer Satisfaction Center (1577-2781) or the customer service section of the website.
								</div>

								<div class="report-regist">
									<form action="/international/utils/company_ethics_report_proc.php" class="form-horizontal" id="registerForm" enctype="multipart/form-data" method="post" onsubmit="return ethics_report_regist(this);"  >
										<input type="hidden" name="mode" value="register">



										<h4>1. Informant information</h4>
										<div class="request-form">

											<div class="form-group" >
												<label class="col-sm-2 control-label "><span>*</span>Name</label>
												<div class="col-sm-10">
													<input type="text" name="name" value="" class="form-control inline input-xs"  title="" />
												</div>
											</div>
											<div class="form-group" >
												<label class="col-sm-2 control-label "><span>*</span>Email</label>
												<div class="col-sm-10">
													<input type="text" name="email" value="" class="form-control inline input-xs" size="60" title="" />
												</div>
											</div>
											<div class="form-group" >
												<label class="col-sm-2 control-label "><span>*</span>Mobile Phone</label>
												<div class="col-sm-10">
													<input type="text" name="hp1" value="" size="3" class="form-control inline input-xs" title="" maxlength="3" /><span class="split">-</span>
													<input type="text" name="hp2" value="" size="4" class="form-control inline input-xs" title="" maxlength="4" /><span class="split">-</span>
													<input type="text" name="hp3" value="" size="4" class="form-control inline input-xs" title="" maxlength="4" />
												</div>
											</div>
											<div class="form-group" >
												<label class="col-sm-2 control-label "><span></span>Phone</label>
												<div class="col-sm-10">
													<input type="text" name="tel1" value="" size="4" class="form-control inline input-xs" title="" maxlength="3" /><span class="split">-</span>
													<input type="text" name="tel2" value="" size="4" class="form-control inline input-xs" title="" maxlength="4" /><span class="split">-</span>
													<input type="text" name="tel3" value="" size="4" class="form-control inline input-xs" title="" maxlength="4" />
												</div>
											</div>
											<div class="form-group" >
												<label class="col-sm-2 control-label "><span>*</span>Password</label>
												<div class="col-sm-10">
													<input type="password" name="passwd" value="" class="form-control inline input-xs"  title="" />
												</div>
											</div>
											<div class="form-group" >
												<label class="col-sm-2 control-label "><span>*</span>Password Confirm</label>
												<div class="col-sm-10">
													<input type="password" name="passwd_chk" value="" class="form-control inline input-xs"  title="" />
												</div>
											</div>

										</div>



										<h4>3. Details of the report</h4>
										<div class="request-form">

											<div class="form-group" >
												<label class="col-sm-2 control-label "><span>*</span>Title</label>
												<div class="col-sm-10">
													<input type="text" name="title" value="" class="form-control input-xs"  title="" />
												</div>
											</div>
											<div class="form-group" >
												<label class="col-sm-2 control-label "><span>*</span>Detail</label>
												<div class="col-sm-10">
													<textarea name="content" class="form-control"  title="" rows="8" ></textarea>
												</div>
											</div>
											<div class="form-group" >
												<label class="col-sm-2 control-label "><span>*</span>How to check <br/>the result</label>
												<div class="col-sm-10">

													<div class="radio">
														<label><input type="radio" id="web" name="ans_verify" value="WEB"> Website</label>
														<label><input type="radio" id="tel" name="ans_verify" value="TEL"> Phone</label>
														<label><input type="radio" id="email" name="ans_verify" value="EMAIL"> Email</label>
														<label><input type="radio" id="no" name="ans_verify" value="NONE"> No need to reply</label>
													</div>

												</div>
											</div>
											<div class="form-group" >
												<label class="col-sm-2 control-label "><span></span>Attachment</label>
												<div class="col-sm-10">
													<div class="inp-newline"><input type="file" name="file_1" value="" class="form-control inline"  title="" /></div>
													<div class="inp-newline"><input type="file" name="file_2" value="" class="form-control inline"  title="" /></div>
													<div class=""><input type="file" name="file_3" value="" class="form-control inline"  title="" /></div>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-2 control-label "><span>*</span>Security text</label>
												<div class="col-md-10">

													<span id="captcha_img"></span>
													<script type="text/javascript"> document.getElementById('captcha_img').innerHTML = '<img src="'+ _base_uri +'/utils/captcha.php?_RENDER&t='+new Date().getTime()+'" />' ;</script>

													<br/>
													<input type="text" name="captcha" class="form-control input-sm inline res-input " style="width: 160px;" placeholder="" />
													<br/>
													※ Please enter the image above as you can see.

												</div>
											</div>

											
											
										</div>
										<h4>3. Consent to collection and use of personal information [Required]</h4>
										<div class="request-form">

											<table class="agreement_table">
												<thead>
													<tr>
														<th width="33%" >The purpose of collection</th>
														<th width="33%" >The items of collection</th>
														<th width="33%" >The period of possession</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="text-center">
															Receive and deal with the reports
														</td>
														<td class="text-left">
															Required: Name, Email, Mobile phone number, and Password<br/>
															Optional: Phone number
														</td>
														<td class="text-center">
															6 months after dealing with the reports
														</td>
													</tr>
												</tbody>
											</table>

											※ As it is the minimum collection of personal information for reporting, you have the right to disagree and if you refuse to consent, you cannot use the reporting service.

											<div class="ch-box text-right">
												<label><input type="radio" value="Y" name="agree" title=""> Consent</label>
												<label><input type="radio" value="N" name="agree" title=""> Not Consent</label>
											</div>
										</div>


										<div class="btn-center">
											<button type="submit" class="btn btn-register">Register</button>
										</div>

									</form>
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