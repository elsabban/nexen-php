<?php 
include '../../common/header.php';  
?>
<script src="<?php echo $url; ?>/assets/js/slion.js"></script>
<script src="<?php echo $url; ?>/assets/js/jsList.js"></script>
<script src="data.js"></script>
<script>
	var artId = "1235212";
	var catId = "sent_51";
	var tplId = "1422";
	list = new jsList();
	list.init(catId, artId, tplId, new data());
</script>
<!-- container -->
<div class="media-container">

	<div class="keyvisual">
		<div class="title">
			<h1>NEWS</h1>
		</div>
		<div class="visual"><img src="<?php echo $url; ?>/assets/images/media/key_visual1.jpg"></div>
	</div>

	<div class="content-wrap">

		<div class="container">

			<div class="media-cont">

				<div class="media-title">
					<div class="title"><strong>NEXEN TIRE News</strong> <span>Dynamic news of NEXEN TIRE is
							introduced.</span></div>
					<div class="sns-button">
						<a href="#" class="share-fb"><img src="<?php echo $url; ?>/assets/images/common/btn_sns1.gif" alt="페이스북"></a>
						<a href="#" class="share-tw"><img src="<?php echo $url; ?>/assets/images/common/btn_sns2.gif" alt="트위터"></a>
						<a href="#" class="share-gg"><img src="<?php echo $url; ?>/assets/images/common/btn_sns3.gif" alt="구글"></a>
						<a href="#" class="share-print"><img src="<?php echo $url; ?>/assets/images/common/btn_print.gif" alt="인쇄"></a>
					</div>
				</div>

				<div class="img_media"><img src="<?php echo $url; ?>/assets/images/media/img_media_news1.jpg" alt=""></div>

				<div class="media-board-list">
					<table class="table-view">
						<colgroup>
							<col width="">
							<col width="150px">
						</colgroup>
						<thead>
							<tr>
								<th><span>Title</span> NEXEN TIRE develops tire performance prediction
									system using AI technology</th>
								<td><span>Date</span>2022-02-15</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td colspan="2">
									<p>
									<p><span style="font-weight: bold;">- Through the virtual design system,
											NEXEN TIRE&rsquo;s cutting-edge technology ensures the capacity
											to develop tires with the optimum performance</span></p>
									<p><span style="font-weight: bold;">- Conducted joint industry-academic
											research with famous Korea University and Hanyang
											University</span></p>
									<p><br></p>
									<p style="text-align: center;"><img
											src="__icsFiles/artimage/2022/02/15/cent_51/image1.png" title="" alt=""
											style="vertical-align: baseline;"></p>
									<p><br></p>
									<p>NEXEN TIRE stated that it has developed an Artificial Intelligence
										(AI)-based tire performance prediction system.</p>
									<p>By establishing a tire performance prediction system using AI
										technology, the Company explained that it will use a machine
										learning technology in the concept design stage to precisely and
										rapidly anticipate the primary performance indicators such as fuel
										efficiency, noise, handling process, etc. that are considered during
										the tire development process.</p>
									<p>Since securing high-quality data in big volumes is critical for
										machine learning, NEXEN TIRE has created a data pre-processing
										technology that can detect and replace irregularities in the
										protected data. By securing a substantial amount of learning data
										utilizing data augmentation techniques, the Company was able to
										secure a forecasting model with good predictive performance for
										insufficient data.</p>
									<p>The ability to forecast tire performance early in the tire
										development process has a significant impact on the quantity of
										prototypes produced and the development time. Primarily, Finite
										Element Analysis (FEA) is used to forecast the performance of
										generic tires. With FEA, the shape and material properties of a tire
										can be modeled as a virtual three-dimensional tire on a computer,
										and the mechanical properties of a product can be confirmed through
										numerical calculation. The advantage of FEA is that it can evaluate
										high precision performance estimates, but it takes a long time to
										calculate the figures, therefore developers quickly analyze
										performance at the concept design stage, which is inefficient.</p>
									<p>NEXEN TIRE has been consistently working on establishing a Virtual
										Product Development System. With the newly developed tire
										performance prediction system using AI technology, this will allow
										faster and more accurate tire design and performance improvement
										during the pre-production process, in addition to the existing
										FEA-based performance prediction technique and Genetic Algorithm
										that suggest optimal design plans.</p>
									<p><br></p>
									<p style="text-align: center;"><img
											src="__icsFiles/artimage/2022/02/15/cent_51/image2.jpg" title="" alt=""
											style="vertical-align: baseline;"></p>
									<p><br></p>
									<p>"We aim to finalize the development of the "Virtual Brain Loop
										System," a tire development system based on our own virtual design
										technology, and apply it to OE and RE goods," said Seong Rae Kim
										Researcher of THE NEXEN univerCITY, NEXEN TIRE&rsquo;s central
										R&amp;D Institute. &ldquo;Through combined industry-academic
										research, we intend to increase talent training and R&amp;D skills."
									</p>
									<p>Professor Seoung Bum Kim of Korea University and Professor Ki Chun
										Lee of Hanyang University collaborated on the newly created tire
										performance prediction system using AI technology.</p>
									<p><br></p>
									</p><br />

									<div style="text-align:center;"><img
											src="__icsFiles/afieldfile/2022/02/15/blank.gif"
											alt="NEXEN TIRE develops tire performance prediction system using AI technology">
									</div>


								</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="prev-next">
					<div class="pn-link"><span>Prev</span>
						<script>list.getNext();</script>
					</div>
					<div class="pn-link"><span>Next</span>
						<script>list.getPrev();</script>
					</div>
					<a href="javascript:slion.getListPage('sent_51', 'index.php');" class="btn-list">Go to
						List</a>
				</div>

			</div>

		</div>

	</div>

</div>
</div>
</div>
<?php 
		include '../../common/footer.php';  
		?>