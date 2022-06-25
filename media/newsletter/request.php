<?php 
include '../../../common/header.php';  
?>


<script type="text/javascript">
	$(function () {
		slion.setListPage("sent_55");
	});
</script>

<!-- container -->
<div class="media-container">

	<div class="keyvisual">
		<div class="title">
			<h1>NEWS</h1>
		</div>
		<div class="visual"><img src="assets/images/media/key_visual1.jpg"></div>
	</div>

	<div class="content-wrap">

		<div class="container">

			<div class="media-cont">

				<div class="media-title">
					<div class="title"><strong>NEXEN TIMES <span>Newsletter</span></strong> <span>Don’t
							delay! Be sure that you are receiving NEXEN TIRE’s latest news!</span></div>
					<div class="sns-button">
						<a href="#" class="share-fb"><img src="assets/images/common/btn_sns1.gif" alt="페이스북"></a>
						<a href="#" class="share-tw"><img src="assets/images/common/btn_sns2.gif" alt="트위터"></a>
						<a href="#" class="share-gg"><img src="assets/images/common/btn_sns3.gif" alt="구글"></a>
						<a href="#" class="share-print"><img src="assets/images/common/btn_print.gif" alt="인쇄"></a>
					</div>
				</div>

				<div class="img_media"><img src="__icsFiles/metafile/2017/03/07/img_media_newsletter1.jpg" alt=""></div>

				<div class="media-ip-box">



					<div class="title-line">
						<a href="index.php" class="btn-back-img"><img src="assets/images/common/form_back.gif"
								alt="Back"></a>
						<h4>Sign up for a subscription</h4> <span>The information you enter is used only for
							newsletter shipment.</span>
					</div>

					<div class="ip-body">



						<form class="request-form form-horizontal" id="requestForm">
							<input type="hidden" name="mode" value="ADD" />

							<div class="form-group">
								<label class="col-sm-2 control-label "><span>*</span>First Name</label>
								<div class="col-sm-10"><input type="text" name="first_name" value=""
										class="form-control i-name input-sm" title="" /></div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label "><span>*</span>Last Name</label>
								<div class="col-sm-10"><input type="text" name="last_name" value=""
										class="form-control i-name input-sm" title="" /></div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label "><span>*</span>E-Mail</label>
								<div class="col-sm-10">
									<input type="text" name="email" value="" class="form-control i-email input-sm"
										title="" size="50" />
								</div>
							</div>

							<div class="form-group">
								<div class="inp-newline">
									<label class="col-sm-2 control-label "><span>*</span>Division</label>
									<div class="col-sm-10">
										<select class="form-control i-name inline" name="category">
											<option value=""> Select </option>
											<option value="Customer">Customer</option>
											<option value="Dealer">Dealer</option>
										</select>
									</div>
								</div>
								<div class="">
									<label class="col-sm-2 control-label "><span> </span>Dealer</label>
									<div class="col-sm-10">
										<input type="text" name="institution" value=""
											class="form-control i-name inline input-sm" title="" /><br />
										<span class="stxt1">* Fill out only in case of selecting a
											store.</span>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label "><span>*</span>Region</label>
								<div class="col-sm-10">
									<select name="region" class="form-control inline input-sm">
										<option value="">SELECT</option>
										<option value="N. America">N. America</option>
										<option value="S. America">S. America</option>
										<option value="Europe">Europe</option>
										<option value="Middle East">Middle East</option>
										<option value="Africa">Africa</option>
										<option value="Asia">Asia</option>
										<option value="Oceania">Oceania</option>
									</select>
									* Select the area nearest to your residence.
								</div>
							</div>


							<div class="form-group">
								<label class="col-sm-2 control-label "><span> </span>Gender</label>
								<div class="col-sm-10">
									<label><input type="radio" name="gender" value="Mr" id="Mr"> Mr.
									</label>&nbsp;&nbsp;&nbsp;
									<label><input type="radio" name="gender" value="Ms" id="Ms"> Ms.
									</label>&nbsp;&nbsp;&nbsp;
									<label><input type="radio" name="gender" value="Mrs" id="Mrs"> Mrs.
									</label>&nbsp;&nbsp;&nbsp;
									<label><input type="radio" name="gender" value="Miss" id="Miss"> Miss
									</label>&nbsp;&nbsp;&nbsp;
								</div>
							</div>



							<div class="btn-center">
								<button type="button" onclick="newsletter_subscribe();"
									class="btn btn-register">Subscription</button>
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
<?php 
		include '../../../common/footer.php';  
		?>