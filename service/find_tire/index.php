<?php 
include '../../common/header.php';  
?>





<!-- container -->
<div class="service-container">

	<div class="keyvisual">
		<div class="title">
			<h1>SERVICE</h1>
		</div>
		<div class="visual"><img src="<?php echo $url; ?>/assets/images/service/key_visual1.jpg"></div>
	</div>

	<div class="content-wrap">

		<div class="container">

			<div class="service-cont">

				<div class="service-title">
					<div class="title"><strong>Tire Finder</strong>
						<span>Search for a product of NEXEN TIRE depending on your car model</span>
					</div>
					<div class="sns-button">
						<a href="#" class="share-fb"><img src="<?php echo $url; ?>/assets/images/common/btn_sns1.gif"
								alt="페이스북"></a>
						<a href="#" class="share-tw"><img src="<?php echo $url; ?>/assets/images/common/btn_sns2.gif"
								alt="트위터"></a>
						<a href="#" class="share-gg"><img src="<?php echo $url; ?>/assets/images/common/btn_sns3.gif"
								alt="구글"></a>
						<a href="#" class="share-print"><img
								src="<?php echo $url; ?>/assets/images/common/btn_print.gif" alt="인쇄"></a>
					</div>
				</div>

				<div class="img_s_sense1"><img src="<?php echo $url; ?>/assets/images/service/find_tire/top.jpg" alt="">
				</div>

				<div class="tire-find">
					<div class="title-line">Search by Vehicle</div>
					<div class="step step1">
						<p class="tit">Step 1. Select Make</p>
						<div class="selectBox">
							<ul class="list-group" id="carMakerBox">
								<!-- <a href="#" class="list-group-item active">현대자동차 </a> -->
							</ul>
						</div>
					</div>

					<div class="step step2">
						<p class="tit">Step 2. Select Model</p>
						<div class="selectBox">
							<ul class="list-group" id="carBrandBox">
								<li class="list-group-item">Select Make</li>
								<!-- <a href="#" class="list-group-item">쏘렌토 </a> -->
							</ul>
						</div>
						<div class="btn-search"><a href="javascript:;" onclick="search_by_car();">Search</a>
						</div>
					</div>

					<input type="hidden" name="maker_id">
					<input type="hidden" name="brand_id">

				</div>
				<div class="tire-find">
					<div class="step3">
						<div class="step">
							<div class="title-line">Search by size</div>
							<p class="tit">Select the tire size for your vehicle</p>
							<div class="selectBox">
								<div class="sel">
									<label>Section Width</label>
									<select title="" id="specWidth">
										<option value="">Select</option>
										<option value="145">145</option>
										<option value="155">155</option>
										<option value="165">165</option>
										<option value="175">175</option>
										<option value="185">185</option>
										<option value="195">195</option>
										<option value="205">205</option>
										<option value="215">215</option>
										<option value="225">225</option>
										<option value="235">235</option>
										<option value="245">245</option>
										<option value="255">255</option>
										<option value="265">265</option>
										<option value="275">275</option>
										<option value="285">285</option>
										<option value="295">295</option>
										<option value="30">30</option>
										<option value="305">305</option>
										<option value="31">31</option>
										<option value="315">315</option>
										<option value="33">33</option>
										<option value="35">35</option>
										<option value="37">37</option>
									</select>
								</div>
								<div class="sel">
									<label>Aspect Ratio</label>
									<select title="" id="specFlat">
										<option value="">Select</option>
										<option value="10.5">10.5</option>
										<option value="12.5">12.5</option>
										<option value="13.5">13.5</option>
										<option value="30">30</option>
										<option value="35">35</option>
										<option value="40">40</option>
										<option value="45">45</option>
										<option value="50">50</option>
										<option value="55">55</option>
										<option value="60">60</option>
										<option value="65">65</option>
										<option value="70">70</option>
										<option value="75">75</option>
										<option value="80">80</option>
										<option value="82">82</option>
										<option value="85">85</option>
										<option value="9.5">9.5</option>
									</select>
								</div>
								<div class="sel">
									<label>Rim Diameter</label>
									<select title="" id="specWheel">
										<option value="">Select</option>
										<option value="12">12</option>
										<option value="13">13</option>
										<option value="14">14</option>
										<option value="15">15</option>
										<option value="16">16</option>
										<option value="17">17</option>
										<option value="18">18</option>
										<option value="19">19</option>
										<option value="20">20</option>
										<option value="22">22</option>
									</select>
								</div>
							</div>
							<div class="btn-search"><a onclick="search_by_specification()">Search</a></div>
						</div>
					</div>

				</div>

				<div class="name-find">
					<div class="title-line">Search by Product Name</div>
					<ul>
						<li>Please enter the tire product name (ex. N'FERA AU5, N'priz AH8 etc.) </li>
						<li>Actual tire size may vary depending on vehicle options, tuning, etc.</li>
					</ul>
					<div class="search-box">
						<input type="text" name="product_name" value="" placeholder="Enter tire product name"
							title="" />
						<div class="btn-search"><a onclick="search_by_name();">Search</a></div>
					</div>
				</div>


				<a name="result"></a>
				<div class="find-result">
					<div class="title"><strong>Search Result</strong></div>
					<div class="txt">＊ Click the button for detailed comparision of performance indexes, to
						compare the tire in the search results.</div>

					<div class="result-list" id="searchResult">
						<!-- /utils/tire_search_by_car.php -->
					</div>

				</div>

			</div>

		</div>

	</div>

</div>


<script type="text/javascript">

	var __maker_id = '';
	var __brand_id = '';

	var __keyword = '';

</script>

</div>
</div>
<?php 
		include '../../common/footer.php';  
		?>