<?php 
include '../../../common/header.php';  
?>







<!-- container -->
<div class="information-container">

	<div class="keyvisual">
		<div class="title">
			<h1>INFORMATION</h1>
		</div>
		<div class="visual"><img src="<?php echo $url; ?>/assets/images/information/key_visual1.jpg"></div>
	</div>

	<div class="content-wrap">

		<div class="container">
			<div class="information-cont">

				<div class="sub-title">
					<strong>Tire Guide</strong> Drive efficiently by having common knowledge about tires!
				</div>

				<!-- Nav tabs -->

				<ul class="nav nav-tabs">
					<li role="presentation"><a href="orthography.php">Tire Size Markings</a><span
							class="icon_arr"></span></li>
					<li role="presentation"><a href="compatible.php">Cross-Reference Guide for Car
							Tires</a><span class="icon_arr"></span></li>
					<li role="presentation" class="active"><a href="quotient.php">Load Index and Velocity
							Index</a><span class="icon_arr"></span></li>
				</ul>
				<!-- //Nav tabs -->

				<!-- Tab panes -->
				<div class="tab-content">

					<div class="information-title">
						<div class="title"><strong>Load Index and Velocity Index</strong> <span>The load
								index is indicated by coding the maximum load that can be driven by a single
								tire. For example, a tire with a load index of 100 has a maximum load of
								800kg.</span></div>
						<div class="sns-button">
							<a href="#" class="share-fb"><img src="<?php echo $url; ?>/assets/images/common/btn_sns1.gif" alt="페이스북"></a>
							<a href="#" class="share-tw"><img src="<?php echo $url; ?>/assets/images/common/btn_sns2.gif" alt="트위터"></a>
							<a href="#" class="share-gg"><img src="<?php echo $url; ?>/assets/images/common/btn_sns3.gif" alt="구글"></a>
							<a href="#" class="share-print"><img src="<?php echo $url; ?>/assets/images/common/btn_print.gif"
									alt="인쇄"></a>
						</div>
					</div>

					<div class="img_b_sense1"><img src="__icsFiles/afieldfile/2017/02/28/img_guide3.jpg" alt=""></div>

					<div class="content-box">

						<div class="ip-index">
							<div class="ip-txt1">What is the tire load index?</div>
							<div class="ip-txt2">Input your tire load index and press enter!</div>
							<div class="ip-txt3"><span>Load Index value (can enter from L0 to L279.)</span>
								<div class="ip-box"><input title="" id="loadIndex" type="text" maxlength="4" value="">
									<span>=</span> <input title="" id="quotient" type="text" maxlength="4" value="">
									<strong>Kg</strong></div>
							</div>
						</div>
						<div class="step-box">
							<div class="title">Load index</div>
							<div class="txt">Load Index is the numeric indication that shows the maximum
								load to be carried by a tire under a certain speed indicated in Speed
								Index.<br>The ideal condition of a tire use recommended by the tire
								manufacturers is as follows. </div>
							<table class="data-table">
								<colgroup>
									<col width="">
									<col width="11.5%">
									<col width="8.5%">
									<col width="11.5%">
								</colgroup>
								<colgroup>
									<col width="8.5%">
									<col width="11.5%">
									<col width="8.5%">
									<col width="11.5%">
									<col width="8.5%">
									<col width="11.5%">
								</colgroup>
								<thead>
									<tr>
										<th>Load Index </th>
										<th>Tire Load<br>Index (Kg)</th>
										<th>Load Index </th>
										<th>Tire Load<br>Index (Kg)</th>
										<th>Load Index </th>
										<th>Tire Load<br>Index (Kg)</th>
										<th>Load Index </th>
										<th>Tire Load<br>Index (Kg)</th>
										<th>Load Index </th>
										<th>Tire Load<br>Index (Kg)</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th>50</th>
										<td><span>190</span></td>
										<th>76</th>
										<td><span>400</span></td>
										<th>102</th>
										<td><span>850</span></td>
										<th>128</th>
										<td><span>1800</span></td>
										<th>154</th>
										<td><span>3750</span></td>
									</tr>
									<tr>
										<th>51</th>
										<td><span>195</span></td>
										<th>77</th>
										<td><span>412</span></td>
										<th>103</th>
										<td><span>875</span></td>
										<th>129</th>
										<td><span>1850</span></td>
										<th>155</th>
										<td><span>3875</span></td>
									</tr>
									<tr>
										<th>52</th>
										<td><span>200</span></td>
										<th>78</th>
										<td><span>425</span></td>
										<th>104</th>
										<td><span>900</span></td>
										<th>130</th>
										<td><span>1900</span></td>
										<th>156</th>
										<td><span>4000</span></td>
									</tr>
									<tr>
										<th>53</th>
										<td><span>206</span></td>
										<th>79</th>
										<td><span>437</span></td>
										<th>105</th>
										<td><span>925</span></td>
										<th>131</th>
										<td><span>1950</span></td>
										<th>157</th>
										<td><span>4125</span></td>
									</tr>
									<tr>
										<th>54</th>
										<td><span>212</span></td>
										<th>80</th>
										<td><span>450</span></td>
										<th>106</th>
										<td><span>950</span></td>
										<th>132</th>
										<td><span>2000</span></td>
										<th>158</th>
										<td><span>4250</span></td>
									</tr>
									<tr>
										<th>55</th>
										<td><span>218</span></td>
										<th>81</th>
										<td><span>462</span></td>
										<th>107</th>
										<td><span>975</span></td>
										<th>133</th>
										<td><span>2060</span></td>
										<th>159</th>
										<td><span>4375</span></td>
									</tr>
									<tr>
										<th>56</th>
										<td><span>224</span></td>
										<th>82</th>
										<td><span>475</span></td>
										<th>108</th>
										<td><span>1000</span></td>
										<th>134</th>
										<td><span>2120</span></td>
										<th>160</th>
										<td><span>4500</span></td>
									</tr>
									<tr>
										<th>57</th>
										<td><span>230</span></td>
										<th>83</th>
										<td><span>487</span></td>
										<th>109</th>
										<td><span>1030</span></td>
										<th>135</th>
										<td><span>2180</span></td>
										<th>161</th>
										<td><span>4625</span></td>
									</tr>
									<tr>
										<th>58</th>
										<td><span>236</span></td>
										<th>84</th>
										<td><span>500</span></td>
										<th>110</th>
										<td><span>1060</span></td>
										<th>136</th>
										<td><span>2240</span></td>
										<th>162</th>
										<td><span>4750</span></td>
									</tr>
									<tr>
										<th>59</th>
										<td><span>243</span></td>
										<th>85</th>
										<td><span>515</span></td>
										<th>111</th>
										<td><span>1090</span></td>
										<th>137</th>
										<td><span>2300</span></td>
										<th>163</th>
										<td><span>4875</span></td>
									</tr>
									<tr>
										<th>60</th>
										<td><span>250</span></td>
										<th>86</th>
										<td><span>530</span></td>
										<th>112</th>
										<td><span>1120</span></td>
										<th>138</th>
										<td><span>2360</span></td>
										<th>164</th>
										<td><span>5000</span></td>
									</tr>
									<tr>
										<th>61</th>
										<td><span>257</span></td>
										<th>87</th>
										<td><span>545</span></td>
										<th>113</th>
										<td><span>1150</span></td>
										<th>139</th>
										<td><span>2430</span></td>
										<th>165</th>
										<td><span>5150</span></td>
									</tr>
									<tr>
										<th>62</th>
										<td><span>265</span></td>
										<th>88</th>
										<td><span>560</span></td>
										<th>114</th>
										<td><span>1180</span></td>
										<th>140</th>
										<td><span>2500</span></td>
										<th>166</th>
										<td><span>5300</span></td>
									</tr>
									<tr>
										<th>63</th>
										<td><span>272</span></td>
										<th>89</th>
										<td><span>580</span></td>
										<th>115</th>
										<td><span>1215</span></td>
										<th>141</th>
										<td><span>2575</span></td>
										<th>167</th>
										<td><span>5450</span></td>
									</tr>
									<tr>
										<th>64</th>
										<td><span>280</span></td>
										<th>90</th>
										<td><span>600</span></td>
										<th>116</th>
										<td><span>1250</span></td>
										<th>142</th>
										<td><span>2650</span></td>
										<th>168</th>
										<td><span>5600</span></td>
									</tr>
									<tr>
										<th>65</th>
										<td><span>290</span></td>
										<th>91</th>
										<td><span>615</span></td>
										<th>117</th>
										<td><span>1285</span></td>
										<th>143</th>
										<td><span>2725</span></td>
										<th>169</th>
										<td><span>5800</span></td>
									</tr>
									<tr>
										<th>66</th>
										<td><span>300</span></td>
										<th>92</th>
										<td><span>630</span></td>
										<th>118</th>
										<td><span>1320</span></td>
										<th>144</th>
										<td><span>2800</span></td>
										<th>170</th>
										<td><span>6000</span></td>
									</tr>
									<tr>
										<th>67</th>
										<td><span>307</span></td>
										<th>93</th>
										<td><span>650</span></td>
										<th>119</th>
										<td><span>1360</span></td>
										<th>145</th>
										<td><span>2900</span></td>
										<th>171</th>
										<td><span>6150</span></td>
									</tr>
									<tr>
										<th>68</th>
										<td><span>315</span></td>
										<th>94</th>
										<td><span>670</span></td>
										<th>120</th>
										<td><span>1400</span></td>
										<th>146</th>
										<td><span>3000</span></td>
										<th>172</th>
										<td><span>6300</span></td>
									</tr>
									<tr>
										<th>69</th>
										<td><span>325</span></td>
										<th>95</th>
										<td><span>690</span></td>
										<th>121</th>
										<td><span>1450</span></td>
										<th>147</th>
										<td><span>3075</span></td>
										<th>173</th>
										<td><span>6500</span></td>
									</tr>
									<tr>
										<th>70</th>
										<td><span>335</span></td>
										<th>96</th>
										<td><span>710</span></td>
										<th>122</th>
										<td><span>1500</span></td>
										<th>148</th>
										<td><span>3150</span></td>
										<th>174</th>
										<td><span>6700</span></td>
									</tr>
									<tr>
										<th>71</th>
										<td><span>345</span></td>
										<th>97</th>
										<td><span>730</span></td>
										<th>123</th>
										<td><span>1550</span></td>
										<th>149</th>
										<td><span>3250</span></td>
										<th>175</th>
										<td><span>6900</span></td>
									</tr>
									<tr>
										<th>72</th>
										<td><span>355</span></td>
										<th>98</th>
										<td><span>750</span></td>
										<th>124</th>
										<td><span>1600</span></td>
										<th>150</th>
										<td><span>3350</span></td>
										<th>176</th>
										<td><span>7100</span></td>
									</tr>
									<tr>
										<th>73</th>
										<td><span>365</span></td>
										<th>99</th>
										<td><span>775</span></td>
										<th>125</th>
										<td><span>1650</span></td>
										<th>151</th>
										<td><span>3450</span></td>
										<th>177</th>
										<td><span>7300</span></td>
									</tr>
									<tr>
										<th>74</th>
										<td><span>375</span></td>
										<th>100</th>
										<td><span>800</span></td>
										<th>126</th>
										<td><span>1700</span></td>
										<th>152</th>
										<td><span>3550</span></td>
										<th>178</th>
										<td><span>7500</span></td>
									</tr>
									<tr>
										<th>75</th>
										<td><span>387</span></td>
										<th>101</th>
										<td><span>825</span></td>
										<th>127</th>
										<td><span>1750</span></td>
										<th>153</th>
										<td><span>3650</span></td>
										<th>179</th>
										<td><span>7750</span></td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="step-box">
							<div class="title">Speed index</div>
							<div class="txt">Speed Index indicates the speed of a tire when carrying a
								certain load related to Load Index.<br> The ideal condition of a tire use
								recommended by
								the tire manufacturers is as follows.</div>
							<table class="data-table">
								<colgroup>
									<col width="">
									<col width="11.5%">
									<col width="8.5%">
									<col width="11.5%">
									<col width="8.5%">
									<col width="11.5%">
									<col width="8.5%">
									<col width="11.5%">
									<col width="8.5%">
									<col width="11.5%">
								</colgroup>
								<thead>
									<tr>
										<th>Speed Index</th>
										<th>Speed (Km/H)</th>
										<th>Speed Index</th>
										<th>Speed (Km/H)</th>
										<th>Speed Index</th>
										<th>Speed (Km/H)</th>
										<th>Speed Index</th>
										<th>Speed (Km/H)</th>
										<th>Speed Index</th>
										<th>Speed (Km/H)</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th>B</th>
										<td><span>50</span></td>
										<th>C</th>
										<td><span>60</span></td>
										<th>D</th>
										<td><span>65</span></td>
										<th>E</th>
										<td><span>70</span></td>
										<th>F</th>
										<td><span>80</span></td>
									</tr>
									<tr>
										<th>G</th>
										<td><span>90</span></td>
										<th>J</th>
										<td><span>100</span></td>
										<th>K</th>
										<td><span>110</span></td>
										<th>L</th>
										<td><span>120</span></td>
										<th>M</th>
										<td><span>130</span></td>
									</tr>
									<tr>
										<th>N</th>
										<td><span>140</span></td>
										<th>P</th>
										<td><span>150</span></td>
										<th>Q</th>
										<td><span>160</span></td>
										<th>R</th>
										<td><span>170</span></td>
										<th>S</th>
										<td><span>180</span></td>
									</tr>
									<tr>
										<th>T</th>
										<td><span>190</span></td>
										<th>U</th>
										<td><span>200</span></td>
										<th>H</th>
										<td><span>210</span></td>
										<th>V</th>
										<td><span>240</span></td>
										<th>W(ZR)</th>
										<td><span>270</span></td>
									</tr>
									<tr>
										<th>Y &darr;</th>
										<td><span>300</span></td>
										<th>&darr;</th>
										<td><span>Adove<br> 300</span></td>
										<th></th>
										<td><span></span></td>
										<th></th>
										<td><span></span></td>
										<th></th>
										<td><span></span></td>
									</tr>
								</tbody>
							</table>
						</div>
						<script type="text/javascript">

							var quotient = {
								'50': 190, '51': 195, '52': 200, '53': 206, '54': 212, '55': 218, '56': 224, '57': 230, '58': 236,
								'59': 243, '60': 250, '61': 257, '62': 265, '63': 272, '64': 280, '65': 290, '66': 300, '67': 307,
								'68': 315, '69': 325, '70': 335, '71': 345, '72': 355, '73': 365, '74': 375, '75': 387, '76': 400,
								'77': 412, '78': 425, '79': 437, '80': 450, '81': 462, '82': 475, '83': 487, '84': 500, '85': 515,
								'86': 530, '87': 545, '88': 560, '89': 580, '90': 600, '91': 615, '92': 630, '93': 650, '94': 670,
								'95': 690, '96': 710, '97': 730, '98': 750, '99': 775, '100': 800, '101': 825, '102': 850,
								'103': 875, '104': 900, '105': 925, '106': 950, '107': 975, '108': 1000, '109': 1030,
								'110': 1060, '111': 1090, '112': 1120, '113': 1150, '114': 1180, '115': 1215, '116': 1250,
								'117': 1285, '118': 1320, '119': 1360, '120': 1400, '121': 1450, '122': 1500, '123': 1550,
								'124': 1600, '125': 1650, '126': 1700, '127': 1750, '128': 1800, '129': 1850, '130': 1900,
								'131': 1950, '132': 2000, '133': 2060, '134': 2120, '135': 2180, '136': 2240, '137': 2300,
								'138': 2360, '139': 2430, '140': 2500, '141': 2575, '142': 2650, '143': 2725, '144': 2800,
								'145': 2900, '146': 3000, '147': 3075, '148': 3150, '149': 3250, '150': 3350, '151': 3450,
								'152': 3550, '153': 3650, '154': 3750, '155': 3875, '156': 4000, '157': 4125, '158': 4250,
								'159': 4375, '160': 4500, '161': 4625, '162': 4750, '163': 4875, '164': 5000, '165': 5150,
								'166': 5300, '167': 5450, '168': 5600, '169': 5800, '170': 6000, '171': 6150, '172': 6300,
								'173': 6500, '174': 6700, '175': 6900, '176': 7100, '177': 7300, '178': 7500, '179': 7750
							};



							$("#loadIndex").on('keydown', function (ev) {
								if (ev.keyCode == 13) {

									var li = $("#loadIndex").val();

									if (!is_numeric(li)) {
										alert("Only numbers can be entered");
										$("#loadIndex").val('').focus();
										return;
									}

									var loadi = parseInt(li);

									if (50 > loadi) {
										alert("Load Index value should be between 50 ~ 179");
										$("#loadIndex").val('').focus();
										return;
									}

									if (179 < loadi) {
										alert("Load Index value should be between 50 ~ 179");
										$("#loadIndex").val('').focus();
										return;
									}


									$("#quotient").val(number_format(quotient[li]));

								}
							});




						</script>

						<!-- Related Contents -->

						<div class="related-contents">
							<div class="title">Related Contents</div>

							<div class="related-list">
								<div class="row">

									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-6">
										<div class="related-item">
											<a href="../../contents/index.php">
												<div class="thumb"><img
														src="../../related_contents/__icsFiles/afieldfile/2017/03/10/img_related_c8.jpg"
														alt=""></div>
												<strong>Social Contents Room</strong>
												<a href="../../contents/index.php" class="btn_view">view
													&gt;</a>
											</a>
										</div>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-6">
										<div class="related-item">
											<a href="../../energy/index.php">
												<div class="thumb"><img
														src="../../related_contents/__icsFiles/afieldfile/2017/03/10/img_related_c7.jpg"
														alt=""></div>
												<strong>Tire Labelling Regulation</strong>
												<a href="../../energy/index.php" class="btn_view">view &gt;</a>
											</a>
										</div>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-6">
										<div class="related-item">
											<a href="../tip/replacement.php">
												<div class="thumb"><img
														src="../../related_contents/__icsFiles/afieldfile/2017/03/10/img_related_c6.jpg"
														alt=""></div>
												<strong>How to replace a tire</strong>
												<a href="../tip/replacement.php" class="btn_view">view
													&gt;</a>
											</a>
										</div>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-6">
										<div class="related-item">
											<a href="../tip/check.php">
												<div class="thumb"><img
														src="../../related_contents/__icsFiles/afieldfile/2017/03/10/img_related_c5.jpg"
														alt=""></div>
												<strong>Tire Test Checklist</strong>
												<a href="../tip/check.php" class="btn_view">view &gt;</a>
											</a>
										</div>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-6">
										<div class="related-item">
											<a href="../tip/caution.php">
												<div class="thumb"><img
														src="../../related_contents/__icsFiles/afieldfile/2017/03/10/img_related_c4.jpg"
														alt=""></div>
												<strong>Caution in Using Tires</strong>
												<a href="../tip/caution.php" class="btn_view">view &gt;</a>
											</a>
										</div>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-6">
										<div class="related-item">
											<a href="compatible.php">
												<div class="thumb"><img
														src="../../related_contents/__icsFiles/afieldfile/2017/03/10/img_related_c2_1.jpg"
														alt=""></div>
												<strong>Cross-Reference Guide for Car Tires</strong>
												<a href="compatible.php" class="btn_view">view &gt;</a>
											</a>
										</div>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-6">
										<div class="related-item">
											<a href="orthography.php">
												<div class="thumb"><img
														src="../../related_contents/__icsFiles/afieldfile/2017/03/10/img_related_c1.jpg"
														alt=""></div>
												<strong>Tire Size Markings</strong>
												<a href="orthography.php" class="btn_view">view &gt;</a>
											</a>
										</div>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-6">
										<div class="related-item">
											<a href="../basic_sense/role.php">
												<div class="thumb"><img
														src="../../related_contents/__icsFiles/afieldfile/2017/03/10/img_info1_3.jpg"
														alt=""></div>
												<strong>Functions of Tire</strong>
												<a href="../basic_sense/role.php" class="btn_view">view
													&gt;</a>
											</a>
										</div>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-6">
										<div class="related-item">
											<a href="../basic_sense/designation.php">
												<div class="thumb"><img
														src="../../related_contents/__icsFiles/afieldfile/2017/03/10/img_info1_2.jpg"
														alt=""></div>
												<strong>Tire Structure</strong>
												<a href="../basic_sense/designation.php" class="btn_view">view &gt;</a>
											</a>
										</div>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-6">
										<div class="related-item">
											<a href="../basic_sense/process.php">
												<div class="thumb"><img
														src="../../related_contents/__icsFiles/afieldfile/2017/03/10/img_info1_1.jpg"
														alt=""></div>
												<strong>Manufacturing Process</strong>
												<a href="../basic_sense/process.php" class="btn_view">view
													&gt;</a>
											</a>
										</div>
									</div>

								</div>
							</div>
						</div>

						<!-- //Related Contents -->

					</div>

				</div>
				<!-- //Tab panes -->

			</div>
		</div>

	</div>

</div>
</div>
</div>
<?php 
		include '../../../common/footer.php';  
		?>s