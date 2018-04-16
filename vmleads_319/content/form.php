<?php
	$site_id = (!empty($vmleads_option_319) && !empty($vmleads_option_319['site_id'])) ? $vmleads_option_319['site_id']:'';
	$default_source = (!empty($vmleads_option_319) && !empty($vmleads_option_319['source'])) ? $vmleads_option_319['source']:'';
	$form_title = (!empty($vmleads_option_319) && !empty($vmleads_option_319['form_title'])) ? $vmleads_option_319['form_title']:'';
	$form_submit = (!empty($vmleads_option_319) && !empty($vmleads_option_319['form_submit'])) ? $vmleads_option_319['form_submit']:'Submit';
	$form_loading = (!empty($vmleads_option_319) && !empty($vmleads_option_319['form_loading'])) ? $vmleads_option_319['form_loading']:'Loading, Please wait...';
	$source = isset($_GET['source'])?$_GET['source']:$default_source;
?>
<link rel="stylesheet" href="<?php echo VMLEADS_URL_319.'content/form.css' ?>">
<link rel="stylesheet" href="../../assets/css/styles.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css">    



<script src="<?php echo VMLEADS_URL_319.'content/tooltip.js' ?>"></script>
<div class="vmform-wrapper col-md-5 col-sm-12 submitform">
<p class="hideloading"><img alt="loading" src="<?php echo VMLEADS_URL_319.'content/loading.gif' ?>"><br><?php echo $form_loading; ?></p>
<a name="vmform-319"></a>

<h2>Start Your <span class="wordwrap"><span class="form-header-span">FREE Quote</span> Below</span></h2>


<?php if (!empty($status['status'])){ ?>
	<div class="info-box <?php echo $status['status'] ?>">
		<h4><?php echo ucfirst($status['status']) ?></h4>
		<?php echo !empty($status['message'])?$status['message']:'Please fix the errors!';?>
	</div>
<?php } ?>

<form action="#vmform-319" method="POST" class="vmform" id="generate-319">

<?php if (!$is_post && empty($values['joint_application'])) $values['joint_application'] = 'Just me'; ?>		<div id="field_joint_application"  class="form-item">
			<label class="field_name" for="joint_application">Who is the cover for?<em class="requiredmark">*</em></label>
			<label class="radio_label"  for="joint_application1">
			<input type="radio" <?php if(isset($values['joint_application']) && 'Just me' == $values['joint_application']) echo 'checked=checked';?> id="joint_application1" name="joint_application" value="Just me"> 
			Just me</label>
			<label class="radio_label"  for="joint_application2">
			<input type="radio" <?php if(isset($values['joint_application']) && 'Me and my partner' == $values['joint_application']) echo 'checked=checked';?> id="joint_application2" name="joint_application" value="Me and my partner"> 
			Me and my partner</label>
			<div class="vmclear"></div>
			<?php if(isset($field_errors['joint_application'])){ echo '<small class="error">'.$field_errors['joint_application'].'</small>'; } ?>
		</div>
<?php if(!$is_post && empty($values['insurance_type'])) $values['insurance_type'] = '(Select)'; ?>		<div class="form-row">
			<div id="field_insurance_type" class="form-item">
			<label class="field_name" for="insurance_type">Type of insurance<em class="requiredmark">*</em><em class="tooltipmark icon-tooltip"></em></label>
			<select <?php echo isset($field_errors['insurance_type'])?'class="error"':''; ?> name="insurance_type">
			<option value="">(Select)</option>
			<option <?php if(isset($values['insurance_type']) && 'Life Insurance only' == $values['insurance_type']) echo 'selected=selected';?> value="Life Insurance only">Life Insurance only</option>
			<option <?php if(isset($values['insurance_type']) && 'Life Insurance with Critical Illness' == $values['insurance_type']) echo 'selected=selected';?> value="Life Insurance with Critical Illness">Life Insurance with Critical Illness</option>
			<option <?php if(isset($values['insurance_type']) && 'Mortgage Life Insurance' == $values['insurance_type']) echo 'selected=selected';?> value="Mortgage Life Insurance">Mortgage Life Insurance</option>
			<option <?php if(isset($values['insurance_type']) && 'Whole of Life' == $values['insurance_type']) echo 'selected=selected';?> value="Whole of Life">Whole of Life</option>
			</select>
			<?php if(isset($field_errors['insurance_type'])){ echo '<small class="error">'.$field_errors['insurance_type'].'</small>'; } ?>
		</div>
<?php if(!$is_post && empty($values['cover_amount'])) $values['cover_amount'] = '(Select)'; ?>		<div id="field_cover_amount" class="form-item">
			<label class="field_name" for="cover_amount">Amount of cover<em class="requiredmark">*</em><em class="tooltipmark icon-tooltip"></em></label>
			<select <?php echo isset($field_errors['cover_amount'])?'class="error"':''; ?> name="cover_amount">
			<option value="">(Select)</option>
			<option <?php if(isset($values['cover_amount']) && '10000' == $values['cover_amount']) echo 'selected=selected';?> value="10000">£10,000</option>
			<option <?php if(isset($values['cover_amount']) && '15000' == $values['cover_amount']) echo 'selected=selected';?> value="15000">£15,000</option>
			<option <?php if(isset($values['cover_amount']) && '20000' == $values['cover_amount']) echo 'selected=selected';?> value="20000">£20,000</option>
			<option <?php if(isset($values['cover_amount']) && '25000' == $values['cover_amount']) echo 'selected=selected';?> value="25000">£25,000</option>
			<option <?php if(isset($values['cover_amount']) && '30000' == $values['cover_amount']) echo 'selected=selected';?> value="30000">£30,000</option>
			<option <?php if(isset($values['cover_amount']) && '35000' == $values['cover_amount']) echo 'selected=selected';?> value="35000">£35,000</option>
			<option <?php if(isset($values['cover_amount']) && '40000' == $values['cover_amount']) echo 'selected=selected';?> value="40000">£40,000</option>
			<option <?php if(isset($values['cover_amount']) && '45000' == $values['cover_amount']) echo 'selected=selected';?> value="45000">£45,000</option>
			<option <?php if(isset($values['cover_amount']) && '50000' == $values['cover_amount']) echo 'selected=selected';?> value="50000">£50,000</option>
			<option <?php if(isset($values['cover_amount']) && '55000' == $values['cover_amount']) echo 'selected=selected';?> value="55000">£55,000</option>
			<option <?php if(isset($values['cover_amount']) && '60000' == $values['cover_amount']) echo 'selected=selected';?> value="60000">£60,000</option>
			<option <?php if(isset($values['cover_amount']) && '65000' == $values['cover_amount']) echo 'selected=selected';?> value="65000">£65,000</option>
			<option <?php if(isset($values['cover_amount']) && '70000' == $values['cover_amount']) echo 'selected=selected';?> value="70000">£70,000</option>
			<option <?php if(isset($values['cover_amount']) && '75000' == $values['cover_amount']) echo 'selected=selected';?> value="75000">£75,000</option>
			<option <?php if(isset($values['cover_amount']) && '80000' == $values['cover_amount']) echo 'selected=selected';?> value="80000">£80,000</option>
			<option <?php if(isset($values['cover_amount']) && '85000' == $values['cover_amount']) echo 'selected=selected';?> value="85000">£85,000</option>
			<option <?php if(isset($values['cover_amount']) && '90000' == $values['cover_amount']) echo 'selected=selected';?> value="90000">£90,000</option>
			<option <?php if(isset($values['cover_amount']) && '95000' == $values['cover_amount']) echo 'selected=selected';?> value="95000">£95,000</option>
			<option <?php if(isset($values['cover_amount']) && '100000' == $values['cover_amount']) echo 'selected=selected';?> value="100000">£100,000</option>
			<option <?php if(isset($values['cover_amount']) && '105000' == $values['cover_amount']) echo 'selected=selected';?> value="105000">£105,000</option>
			<option <?php if(isset($values['cover_amount']) && '110000' == $values['cover_amount']) echo 'selected=selected';?> value="110000">£110,000</option>
			<option <?php if(isset($values['cover_amount']) && '115000' == $values['cover_amount']) echo 'selected=selected';?> value="115000">£115,000</option>
			<option <?php if(isset($values['cover_amount']) && '120000' == $values['cover_amount']) echo 'selected=selected';?> value="120000">£120,000</option>
			<option <?php if(isset($values['cover_amount']) && '125000' == $values['cover_amount']) echo 'selected=selected';?> value="125000">£125,000</option>
			<option <?php if(isset($values['cover_amount']) && '130000' == $values['cover_amount']) echo 'selected=selected';?> value="130000">£130,000</option>
			<option <?php if(isset($values['cover_amount']) && '135000' == $values['cover_amount']) echo 'selected=selected';?> value="135000">£135,000</option>
			<option <?php if(isset($values['cover_amount']) && '140000' == $values['cover_amount']) echo 'selected=selected';?> value="140000">£140,000</option>
			<option <?php if(isset($values['cover_amount']) && '145000' == $values['cover_amount']) echo 'selected=selected';?> value="145000">£145,000</option>
			<option <?php if(isset($values['cover_amount']) && '150000' == $values['cover_amount']) echo 'selected=selected';?> value="150000">£150,000</option>
			<option <?php if(isset($values['cover_amount']) && '155000' == $values['cover_amount']) echo 'selected=selected';?> value="155000">£155,000</option>
			<option <?php if(isset($values['cover_amount']) && '160000' == $values['cover_amount']) echo 'selected=selected';?> value="160000">£160,000</option>
			<option <?php if(isset($values['cover_amount']) && '165000' == $values['cover_amount']) echo 'selected=selected';?> value="165000">£165,000</option>
			<option <?php if(isset($values['cover_amount']) && '170000' == $values['cover_amount']) echo 'selected=selected';?> value="170000">£170,000</option>
			<option <?php if(isset($values['cover_amount']) && '175000' == $values['cover_amount']) echo 'selected=selected';?> value="175000">£175,000</option>
			<option <?php if(isset($values['cover_amount']) && '180000' == $values['cover_amount']) echo 'selected=selected';?> value="180000">£180,000</option>
			<option <?php if(isset($values['cover_amount']) && '185000' == $values['cover_amount']) echo 'selected=selected';?> value="185000">£185,000</option>
			<option <?php if(isset($values['cover_amount']) && '190000' == $values['cover_amount']) echo 'selected=selected';?> value="190000">£190,000</option>
			<option <?php if(isset($values['cover_amount']) && '195000' == $values['cover_amount']) echo 'selected=selected';?> value="195000">£195,000</option>
			<option <?php if(isset($values['cover_amount']) && '200000' == $values['cover_amount']) echo 'selected=selected';?> value="200000">£200,000</option>
			<option <?php if(isset($values['cover_amount']) && '210000' == $values['cover_amount']) echo 'selected=selected';?> value="210000">£210,000</option>
			<option <?php if(isset($values['cover_amount']) && '220000' == $values['cover_amount']) echo 'selected=selected';?> value="220000">£220,000</option>
			<option <?php if(isset($values['cover_amount']) && '230000' == $values['cover_amount']) echo 'selected=selected';?> value="230000">£230,000</option>
			<option <?php if(isset($values['cover_amount']) && '240000' == $values['cover_amount']) echo 'selected=selected';?> value="240000">£240,000</option>
			<option <?php if(isset($values['cover_amount']) && '250000' == $values['cover_amount']) echo 'selected=selected';?> value="250000">£250,000</option>
			<option <?php if(isset($values['cover_amount']) && '260000' == $values['cover_amount']) echo 'selected=selected';?> value="260000">£260,000</option>
			<option <?php if(isset($values['cover_amount']) && '270000' == $values['cover_amount']) echo 'selected=selected';?> value="270000">£270,000</option>
			<option <?php if(isset($values['cover_amount']) && '280000' == $values['cover_amount']) echo 'selected=selected';?> value="280000">£280,000</option>
			<option <?php if(isset($values['cover_amount']) && '290000' == $values['cover_amount']) echo 'selected=selected';?> value="290000">£290,000</option>
			<option <?php if(isset($values['cover_amount']) && '300000' == $values['cover_amount']) echo 'selected=selected';?> value="300000">£300,000</option>
			<option <?php if(isset($values['cover_amount']) && '325000' == $values['cover_amount']) echo 'selected=selected';?> value="325000">£325,000</option>
			<option <?php if(isset($values['cover_amount']) && '350000' == $values['cover_amount']) echo 'selected=selected';?> value="350000">£350,000</option>
			<option <?php if(isset($values['cover_amount']) && '375000' == $values['cover_amount']) echo 'selected=selected';?> value="375000">£375,000</option>
			<option <?php if(isset($values['cover_amount']) && '400000' == $values['cover_amount']) echo 'selected=selected';?> value="400000">£400,000</option>
			<option <?php if(isset($values['cover_amount']) && '425000' == $values['cover_amount']) echo 'selected=selected';?> value="425000">£425,000</option>
			<option <?php if(isset($values['cover_amount']) && '450000' == $values['cover_amount']) echo 'selected=selected';?> value="450000">£450,000</option>
			<option <?php if(isset($values['cover_amount']) && '475000' == $values['cover_amount']) echo 'selected=selected';?> value="475000">£475,000</option>
			<option <?php if(isset($values['cover_amount']) && '500000' == $values['cover_amount']) echo 'selected=selected';?> value="500000">£500,000</option>
			<option <?php if(isset($values['cover_amount']) && '525000' == $values['cover_amount']) echo 'selected=selected';?> value="525000">£525,000</option>
			<option <?php if(isset($values['cover_amount']) && '550000' == $values['cover_amount']) echo 'selected=selected';?> value="550000">£550,000</option>
			<option <?php if(isset($values['cover_amount']) && '575000' == $values['cover_amount']) echo 'selected=selected';?> value="575000">£575,000</option>
			<option <?php if(isset($values['cover_amount']) && '600000' == $values['cover_amount']) echo 'selected=selected';?> value="600000">£600,000</option>
			<option <?php if(isset($values['cover_amount']) && '650000' == $values['cover_amount']) echo 'selected=selected';?> value="650000">£650,000</option>
			<option <?php if(isset($values['cover_amount']) && '700000' == $values['cover_amount']) echo 'selected=selected';?> value="700000">£700,000</option>
			<option <?php if(isset($values['cover_amount']) && '750000' == $values['cover_amount']) echo 'selected=selected';?> value="750000">£750,000</option>
			<option <?php if(isset($values['cover_amount']) && '800000' == $values['cover_amount']) echo 'selected=selected';?> value="800000">£800,000</option>
			<option <?php if(isset($values['cover_amount']) && '850000' == $values['cover_amount']) echo 'selected=selected';?> value="850000">£850,000</option>
			<option <?php if(isset($values['cover_amount']) && '900000' == $values['cover_amount']) echo 'selected=selected';?> value="900000">£900,000</option>
			<option <?php if(isset($values['cover_amount']) && '950000' == $values['cover_amount']) echo 'selected=selected';?> value="950000">£950,000</option>
			<option <?php if(isset($values['cover_amount']) && '1000000' == $values['cover_amount']) echo 'selected=selected';?> value="1000000">£1,000,000</option>
			<option <?php if(isset($values['cover_amount']) && '1100000' == $values['cover_amount']) echo 'selected=selected';?> value="1100000">£1,100,000</option>
			<option <?php if(isset($values['cover_amount']) && '1200000' == $values['cover_amount']) echo 'selected=selected';?> value="1200000">£1,200,000</option>
			<option <?php if(isset($values['cover_amount']) && '1300000' == $values['cover_amount']) echo 'selected=selected';?> value="1300000">£1,300,000</option>
			<option <?php if(isset($values['cover_amount']) && '1400000' == $values['cover_amount']) echo 'selected=selected';?> value="1400000">£1,400,000</option>
			<option <?php if(isset($values['cover_amount']) && '1500000' == $values['cover_amount']) echo 'selected=selected';?> value="1500000">£1,500,000</option>
			</select>
			<?php if(isset($field_errors['cover_amount'])){ echo '<small class="error">'.$field_errors['cover_amount'].'</small>'; } ?>
		</div>
		</div>
<?php if(!$is_post && empty($values['cover_length'])) $values['cover_length'] = '(Select)'; ?>		<div class="form-row">
			<div id="field_cover_length" class="form-item">
			<label class="field_name" for="cover_length">Length of cover<em class="requiredmark">*</em><em class="tooltipmark icon-tooltip"></em></label>
			<select <?php echo isset($field_errors['cover_length'])?'class="error"':''; ?> name="cover_length">
			<option value="">(Select)</option>
			<option <?php if(isset($values['cover_length']) && '1' == $values['cover_length']) echo 'selected=selected';?> value="1">1 year</option>
			<option <?php if(isset($values['cover_length']) && '2' == $values['cover_length']) echo 'selected=selected';?> value="2">2 years</option>
			<option <?php if(isset($values['cover_length']) && '3' == $values['cover_length']) echo 'selected=selected';?> value="3">3 years</option>
			<option <?php if(isset($values['cover_length']) && '4' == $values['cover_length']) echo 'selected=selected';?> value="4">4 years</option>
			<option <?php if(isset($values['cover_length']) && '5' == $values['cover_length']) echo 'selected=selected';?> value="5">5 years</option>
			<option <?php if(isset($values['cover_length']) && '6' == $values['cover_length']) echo 'selected=selected';?> value="6">6 years</option>
			<option <?php if(isset($values['cover_length']) && '7' == $values['cover_length']) echo 'selected=selected';?> value="7">7 years</option>
			<option <?php if(isset($values['cover_length']) && '8' == $values['cover_length']) echo 'selected=selected';?> value="8">8 years</option>
			<option <?php if(isset($values['cover_length']) && '9' == $values['cover_length']) echo 'selected=selected';?> value="9">9 years</option>
			<option <?php if(isset($values['cover_length']) && '10' == $values['cover_length']) echo 'selected=selected';?> value="10">10 years</option>
			<option <?php if(isset($values['cover_length']) && '11' == $values['cover_length']) echo 'selected=selected';?> value="11">11 years</option>
			<option <?php if(isset($values['cover_length']) && '12' == $values['cover_length']) echo 'selected=selected';?> value="12">12 years</option>
			<option <?php if(isset($values['cover_length']) && '13' == $values['cover_length']) echo 'selected=selected';?> value="13">13 years</option>
			<option <?php if(isset($values['cover_length']) && '14' == $values['cover_length']) echo 'selected=selected';?> value="14">14 years</option>
			<option <?php if(isset($values['cover_length']) && '15' == $values['cover_length']) echo 'selected=selected';?> value="15">15 years</option>
			<option <?php if(isset($values['cover_length']) && '16' == $values['cover_length']) echo 'selected=selected';?> value="16">16 years</option>
			<option <?php if(isset($values['cover_length']) && '17' == $values['cover_length']) echo 'selected=selected';?> value="17">17 years</option>
			<option <?php if(isset($values['cover_length']) && '18' == $values['cover_length']) echo 'selected=selected';?> value="18">18 years</option>
			<option <?php if(isset($values['cover_length']) && '19' == $values['cover_length']) echo 'selected=selected';?> value="19">19 years</option>
			<option <?php if(isset($values['cover_length']) && '20' == $values['cover_length']) echo 'selected=selected';?> value="20">20 years</option>
			<option <?php if(isset($values['cover_length']) && '21' == $values['cover_length']) echo 'selected=selected';?> value="21">21 years</option>
			<option <?php if(isset($values['cover_length']) && '22' == $values['cover_length']) echo 'selected=selected';?> value="22">22 years</option>
			<option <?php if(isset($values['cover_length']) && '23' == $values['cover_length']) echo 'selected=selected';?> value="23">23 years</option>
			<option <?php if(isset($values['cover_length']) && '24' == $values['cover_length']) echo 'selected=selected';?> value="24">24 years</option>
			<option <?php if(isset($values['cover_length']) && '25' == $values['cover_length']) echo 'selected=selected';?> value="25">25 years</option>
			<option <?php if(isset($values['cover_length']) && '26' == $values['cover_length']) echo 'selected=selected';?> value="26">26 years</option>
			<option <?php if(isset($values['cover_length']) && '27' == $values['cover_length']) echo 'selected=selected';?> value="27">27 years</option>
			<option <?php if(isset($values['cover_length']) && '28' == $values['cover_length']) echo 'selected=selected';?> value="28">28 years</option>
			<option <?php if(isset($values['cover_length']) && '29' == $values['cover_length']) echo 'selected=selected';?> value="29">29 years</option>
			<option <?php if(isset($values['cover_length']) && '30' == $values['cover_length']) echo 'selected=selected';?> value="30">30 years</option>
			<option <?php if(isset($values['cover_length']) && '31' == $values['cover_length']) echo 'selected=selected';?> value="31">31 years</option>
			<option <?php if(isset($values['cover_length']) && '32' == $values['cover_length']) echo 'selected=selected';?> value="32">32 years</option>
			<option <?php if(isset($values['cover_length']) && '33' == $values['cover_length']) echo 'selected=selected';?> value="33">33 years</option>
			<option <?php if(isset($values['cover_length']) && '34' == $values['cover_length']) echo 'selected=selected';?> value="34">34 years</option>
			<option <?php if(isset($values['cover_length']) && '35' == $values['cover_length']) echo 'selected=selected';?> value="35">35 years</option>
			<option <?php if(isset($values['cover_length']) && '36' == $values['cover_length']) echo 'selected=selected';?> value="36">36 years</option>
			<option <?php if(isset($values['cover_length']) && '37' == $values['cover_length']) echo 'selected=selected';?> value="37">37 years</option>
			<option <?php if(isset($values['cover_length']) && '38' == $values['cover_length']) echo 'selected=selected';?> value="38">38 years</option>
			<option <?php if(isset($values['cover_length']) && '39' == $values['cover_length']) echo 'selected=selected';?> value="39">39 years</option>
			<option <?php if(isset($values['cover_length']) && '40' == $values['cover_length']) echo 'selected=selected';?> value="40">40 years</option>
			<option <?php if(isset($values['cover_length']) && '41' == $values['cover_length']) echo 'selected=selected';?> value="41">41 years</option>
			<option <?php if(isset($values['cover_length']) && '42' == $values['cover_length']) echo 'selected=selected';?> value="42">42 years</option>
			<option <?php if(isset($values['cover_length']) && '43' == $values['cover_length']) echo 'selected=selected';?> value="43">43 years</option>
			<option <?php if(isset($values['cover_length']) && '44' == $values['cover_length']) echo 'selected=selected';?> value="44">44 years</option>
			<option <?php if(isset($values['cover_length']) && '45' == $values['cover_length']) echo 'selected=selected';?> value="45">45 years</option>
			<option <?php if(isset($values['cover_length']) && '46' == $values['cover_length']) echo 'selected=selected';?> value="46">46 years</option>
			<option <?php if(isset($values['cover_length']) && '47' == $values['cover_length']) echo 'selected=selected';?> value="47">47 years</option>
			<option <?php if(isset($values['cover_length']) && '48' == $values['cover_length']) echo 'selected=selected';?> value="48">48 years</option>
			<option <?php if(isset($values['cover_length']) && '49' == $values['cover_length']) echo 'selected=selected';?> value="49">49 years</option>
			<option <?php if(isset($values['cover_length']) && '50' == $values['cover_length']) echo 'selected=selected';?> value="50">50 years</option>
			</select>
			<?php if(isset($field_errors['cover_length'])){ echo '<small class="error">'.$field_errors['cover_length'].'</small>'; } ?>
		</div>
		<?php 
					if(empty($values['dob-date-3-d'])){
						$values['dob-date-3-d'] = 'Day';
					}
					if(empty($values['dob-date-3-m'])){
						$values['dob-date-3-m'] = 'Month';
					}
					if(empty($values['dob-date-3-y'])){
						$values['dob-date-3-y'] = 'Year';
					}
					?><?php if(empty($values['dob'])) $values['dob'] = '01-01-1970'; ?>		<div id="field_dob" class="date-3 form-item">
			<label class="field_name" for="dob">Date of birth<em class="requiredmark">*</em><em class="tooltipmark icon-tooltip"></em></label>
			<div class="date-3-box">
			<?php
			$value_y = !empty($values['dob-date-3-y']) ? $values['dob-date-3-y'] : '';
			$value_m = !empty($values['dob-date-3-m']) ? $values['dob-date-3-m'] : '';
			$value_d = !empty($values['dob-date-3-d']) ? $values['dob-date-3-d'] : '';
			?>
			<select <?php echo isset($field_errors['dob'])?'class="error"':''; ?> name="dob-date-3-d">
				<option value="">Day</option>
				<option <?php if('1' == $value_d) echo 'selected=selected';?> value="01">1</option>
				<option <?php if('2' == $value_d) echo 'selected=selected';?> value="02">2</option>
				<option <?php if('3' == $value_d) echo 'selected=selected';?> value="03">3</option>
				<option <?php if('4' == $value_d) echo 'selected=selected';?> value="04">4</option>
				<option <?php if('5' == $value_d) echo 'selected=selected';?> value="05">5</option>
				<option <?php if('6' == $value_d) echo 'selected=selected';?> value="06">6</option>
				<option <?php if('7' == $value_d) echo 'selected=selected';?> value="07">7</option>
				<option <?php if('8' == $value_d) echo 'selected=selected';?> value="08">8</option>
				<option <?php if('9' == $value_d) echo 'selected=selected';?> value="09">9</option>
				<option <?php if('10' == $value_d) echo 'selected=selected';?> value="10">10</option>
				<option <?php if('11' == $value_d) echo 'selected=selected';?> value="11">11</option>
				<option <?php if('12' == $value_d) echo 'selected=selected';?> value="12">12</option>
				<option <?php if('13' == $value_d) echo 'selected=selected';?> value="13">13</option>
				<option <?php if('14' == $value_d) echo 'selected=selected';?> value="14">14</option>
				<option <?php if('15' == $value_d) echo 'selected=selected';?> value="15">15</option>
				<option <?php if('16' == $value_d) echo 'selected=selected';?> value="16">16</option>
				<option <?php if('17' == $value_d) echo 'selected=selected';?> value="17">17</option>
				<option <?php if('18' == $value_d) echo 'selected=selected';?> value="18">18</option>
				<option <?php if('19' == $value_d) echo 'selected=selected';?> value="19">19</option>
				<option <?php if('20' == $value_d) echo 'selected=selected';?> value="20">20</option>
				<option <?php if('21' == $value_d) echo 'selected=selected';?> value="21">21</option>
				<option <?php if('22' == $value_d) echo 'selected=selected';?> value="22">22</option>
				<option <?php if('23' == $value_d) echo 'selected=selected';?> value="23">23</option>
				<option <?php if('24' == $value_d) echo 'selected=selected';?> value="24">24</option>
				<option <?php if('25' == $value_d) echo 'selected=selected';?> value="25">25</option>
				<option <?php if('26' == $value_d) echo 'selected=selected';?> value="26">26</option>
				<option <?php if('27' == $value_d) echo 'selected=selected';?> value="27">27</option>
				<option <?php if('28' == $value_d) echo 'selected=selected';?> value="28">28</option>
				<option <?php if('29' == $value_d) echo 'selected=selected';?> value="29">29</option>
				<option <?php if('30' == $value_d) echo 'selected=selected';?> value="30">30</option>
				<option <?php if('31' == $value_d) echo 'selected=selected';?> value="31">31</option>
			</select>
			<select <?php echo isset($field_errors['dob'])?'class="error"':''; ?> name="dob-date-3-m">
				<option value="">Month</option>
				<option <?php if('1' == $value_m) echo 'selected=selected';?> value="01">January</option>
				<option <?php if('2' == $value_m) echo 'selected=selected';?> value="02">February</option>
				<option <?php if('3' == $value_m) echo 'selected=selected';?> value="03">March</option>
				<option <?php if('4' == $value_m) echo 'selected=selected';?> value="04">April</option>
				<option <?php if('5' == $value_m) echo 'selected=selected';?> value="05">May</option>
				<option <?php if('6' == $value_m) echo 'selected=selected';?> value="06">June</option>
				<option <?php if('7' == $value_m) echo 'selected=selected';?> value="07">July</option>
				<option <?php if('8' == $value_m) echo 'selected=selected';?> value="08">August</option>
				<option <?php if('9' == $value_m) echo 'selected=selected';?> value="09">September</option>
				<option <?php if('10' == $value_m) echo 'selected=selected';?> value="10">October</option>
				<option <?php if('11' == $value_m) echo 'selected=selected';?> value="11">November</option>
				<option <?php if('12' == $value_m) echo 'selected=selected';?> value="12">December</option>
			</select>
			<select <?php echo isset($field_errors['dob'])?'class="error"':''; ?> name="dob-date-3-y">
				<option value="">Year</option>
				<option <?php if('1998' == $value_y) echo 'selected=selected';?> value="1998">1998</option>
				<option <?php if('1997' == $value_y) echo 'selected=selected';?> value="1997">1997</option>
				<option <?php if('1996' == $value_y) echo 'selected=selected';?> value="1996">1996</option>
				<option <?php if('1995' == $value_y) echo 'selected=selected';?> value="1995">1995</option>
				<option <?php if('1994' == $value_y) echo 'selected=selected';?> value="1994">1994</option>
				<option <?php if('1993' == $value_y) echo 'selected=selected';?> value="1993">1993</option>
				<option <?php if('1992' == $value_y) echo 'selected=selected';?> value="1992">1992</option>
				<option <?php if('1991' == $value_y) echo 'selected=selected';?> value="1991">1991</option>
				<option <?php if('1990' == $value_y) echo 'selected=selected';?> value="1990">1990</option>
				<option <?php if('1989' == $value_y) echo 'selected=selected';?> value="1989">1989</option>
				<option <?php if('1988' == $value_y) echo 'selected=selected';?> value="1988">1988</option>
				<option <?php if('1987' == $value_y) echo 'selected=selected';?> value="1987">1987</option>
				<option <?php if('1986' == $value_y) echo 'selected=selected';?> value="1986">1986</option>
				<option <?php if('1985' == $value_y) echo 'selected=selected';?> value="1985">1985</option>
				<option <?php if('1984' == $value_y) echo 'selected=selected';?> value="1984">1984</option>
				<option <?php if('1983' == $value_y) echo 'selected=selected';?> value="1983">1983</option>
				<option <?php if('1982' == $value_y) echo 'selected=selected';?> value="1982">1982</option>
				<option <?php if('1981' == $value_y) echo 'selected=selected';?> value="1981">1981</option>
				<option <?php if('1980' == $value_y) echo 'selected=selected';?> value="1980">1980</option>
				<option <?php if('1979' == $value_y) echo 'selected=selected';?> value="1979">1979</option>
				<option <?php if('1978' == $value_y) echo 'selected=selected';?> value="1978">1978</option>
				<option <?php if('1977' == $value_y) echo 'selected=selected';?> value="1977">1977</option>
				<option <?php if('1976' == $value_y) echo 'selected=selected';?> value="1976">1976</option>
				<option <?php if('1975' == $value_y) echo 'selected=selected';?> value="1975">1975</option>
				<option <?php if('1974' == $value_y) echo 'selected=selected';?> value="1974">1974</option>
				<option <?php if('1973' == $value_y) echo 'selected=selected';?> value="1973">1973</option>
				<option <?php if('1972' == $value_y) echo 'selected=selected';?> value="1972">1972</option>
				<option <?php if('1971' == $value_y) echo 'selected=selected';?> value="1971">1971</option>
				<option <?php if('1970' == $value_y) echo 'selected=selected';?> value="1970">1970</option>
				<option <?php if('1969' == $value_y) echo 'selected=selected';?> value="1969">1969</option>
				<option <?php if('1968' == $value_y) echo 'selected=selected';?> value="1968">1968</option>
				<option <?php if('1967' == $value_y) echo 'selected=selected';?> value="1967">1967</option>
				<option <?php if('1966' == $value_y) echo 'selected=selected';?> value="1966">1966</option>
				<option <?php if('1965' == $value_y) echo 'selected=selected';?> value="1965">1965</option>
				<option <?php if('1964' == $value_y) echo 'selected=selected';?> value="1964">1964</option>
				<option <?php if('1963' == $value_y) echo 'selected=selected';?> value="1963">1963</option>
				<option <?php if('1962' == $value_y) echo 'selected=selected';?> value="1962">1962</option>
				<option <?php if('1961' == $value_y) echo 'selected=selected';?> value="1961">1961</option>
				<option <?php if('1960' == $value_y) echo 'selected=selected';?> value="1960">1960</option>
				<option <?php if('1959' == $value_y) echo 'selected=selected';?> value="1959">1959</option>
				<option <?php if('1958' == $value_y) echo 'selected=selected';?> value="1958">1958</option>
				<option <?php if('1957' == $value_y) echo 'selected=selected';?> value="1957">1957</option>
				<option <?php if('1956' == $value_y) echo 'selected=selected';?> value="1956">1956</option>
				<option <?php if('1955' == $value_y) echo 'selected=selected';?> value="1955">1955</option>
				<option <?php if('1954' == $value_y) echo 'selected=selected';?> value="1954">1954</option>
				<option <?php if('1953' == $value_y) echo 'selected=selected';?> value="1953">1953</option>
				<option <?php if('1952' == $value_y) echo 'selected=selected';?> value="1952">1952</option>
				<option <?php if('1951' == $value_y) echo 'selected=selected';?> value="1951">1951</option>
				<option <?php if('1950' == $value_y) echo 'selected=selected';?> value="1950">1950</option>
				<option <?php if('1949' == $value_y) echo 'selected=selected';?> value="1949">1949</option>
				<option <?php if('1948' == $value_y) echo 'selected=selected';?> value="1948">1948</option>
				<option <?php if('1947' == $value_y) echo 'selected=selected';?> value="1947">1947</option>
				<option <?php if('1946' == $value_y) echo 'selected=selected';?> value="1946">1946</option>
				<option <?php if('1945' == $value_y) echo 'selected=selected';?> value="1945">1945</option>
				<option <?php if('1944' == $value_y) echo 'selected=selected';?> value="1944">1944</option>
				<option <?php if('1943' == $value_y) echo 'selected=selected';?> value="1943">1943</option>
				<option <?php if('1942' == $value_y) echo 'selected=selected';?> value="1942">1942</option>
				<option <?php if('1941' == $value_y) echo 'selected=selected';?> value="1941">1941</option>
				<option <?php if('1940' == $value_y) echo 'selected=selected';?> value="1940">1940</option>
				<option <?php if('1939' == $value_y) echo 'selected=selected';?> value="1939">1939</option>
				<option <?php if('1938' == $value_y) echo 'selected=selected';?> value="1938">1938</option>
				<option <?php if('1937' == $value_y) echo 'selected=selected';?> value="1937">1937</option>
				<option <?php if('1936' == $value_y) echo 'selected=selected';?> value="1936">1936</option>
			</select>
			</div>
<?php if(isset($field_errors['dob'])){ echo '<small class="error">'.$field_errors['dob'].'</small>'; } ?>
		</div>
		</div>
		<?php if(!$is_post && empty($values['smoker'])) $values['smoker'] = 'No'; ?>		<div id="field_smoker"  class="form-item">
			<label class="field_name" for="smoker">Have you smoked in the last 12 months?<em class="requiredmark">*</em><em class="tooltipmark icon-tooltip"></em></label>
			<label class="radio_label"  for="smoker1">
			<input type="radio" <?php if(isset($values['smoker']) && 'No' == $values['smoker']) echo 'checked=checked';?> id="smoker1" name="smoker" value="No"> 
			No</label>
			<label class="radio_label"  for="smoker2">
			<input type="radio" <?php if(isset($values['smoker']) && 'Yes' == $values['smoker']) echo 'checked=checked';?> id="smoker2" name="smoker" value="Yes"> 
			Yes</label>
			<div class="vmclear"></div>
			<?php if(isset($field_errors['smoker'])){ echo '<small class="error">'.$field_errors['smoker'].'</small>'; } ?>
		</div>
		<div class="form-row">
		<div class="form-item">
			<label class="field_name" for="first_name">First name<em class="requiredmark">*</em></label>
			<input <?php echo isset($field_errors['first_name'])?'class="error"':''; ?> type="text" name="first_name" value="<?php echo isset($values['first_name'])?$values['first_name']:'' ?>"  maxlength="30" >
			<?php if(isset($field_errors['first_name'])){ echo '<small class="error">'.$field_errors['first_name'].'</small>'; } ?>
		</div>
		<div class="form-item">
			<label class="field_name" for="last_name">Last name<em class="requiredmark">*</em></label>
			<input <?php echo isset($field_errors['last_name'])?'class="error"':''; ?> type="text" name="last_name" value="<?php echo isset($values['last_name'])?$values['last_name']:'' ?>"  maxlength="30" >
			<?php if(isset($field_errors['last_name'])){ echo '<small class="error">'.$field_errors['last_name'].'</small>'; } ?>
		</div>
		</div>
		<div class="form-row">
		<div class="form-item">
			<label class="field_name" for="address_line_1">Address line 1<em class="requiredmark">*</em></label>
			<input <?php echo isset($field_errors['address_line_1'])?'class="error"':''; ?> type="text" name="address_line_1" value="<?php echo isset($values['address_line_1'])?$values['address_line_1']:'' ?>"  maxlength="80" >
			<?php if(isset($field_errors['address_line_1'])){ echo '<small class="error">'.$field_errors['address_line_1'].'</small>'; } ?>
		</div>
		<div class="form-item">
			<label class="field_name" for="postcode">Postcode<em class="requiredmark">*</em></label>
			<input <?php echo isset($field_errors['postcode'])?'class="error"':''; ?> type="text" name="postcode" value="<?php echo isset($values['postcode'])?$values['postcode']:'' ?>"  maxlength="8" >
			<?php if(isset($field_errors['postcode'])){ echo '<small class="error">'.$field_errors['postcode'].'</small>'; } ?>
		</div>
		</div>			

		<div class="form-row">
		<div class="form-item">
			<label class="field_name" for="telephone">Phone number<em class="requiredmark">*</em></label>
			<input <?php echo isset($field_errors['telephone'])?'class="error"':''; ?> type="text" name="telephone" value="<?php echo isset($values['telephone'])?$values['telephone']:'' ?>" >
			<?php if(isset($field_errors['telephone'])){ echo '<small class="error">'.$field_errors['telephone'].'</small>'; } ?>
		</div>
		
		<div class="form-item">
			<label class="field_name" for="email">Email<em class="requiredmark">*</em></label>
			<input <?php echo isset($field_errors['email'])?'class="error"':''; ?> type="text" name="email" value="<?php echo isset($values['email'])?$values['email']:'' ?>" >
			<?php if(isset($field_errors['email'])){ echo '<small class="error">'.$field_errors['email'].'</small>'; } ?>
		</div>
		</div>
	<input <?php echo isset($field_errors['affiliate_campaign_id'])?'class="error"':''; ?> type="hidden" name="affiliate_campaign_id" value="319">
	<div class="vmclear"></div>
	<div class="form-actions">
		<input type="hidden" name="vmform_wptag" value="319" />
		<input type="hidden" name="vmform_hash" value="20879" />
		<input type="hidden" name="vmform_ip" value="<?php echo vmleads_get_ip_319() ?>" />
<?php if(!empty($site_id)){ ?>
<input type="hidden" name="vmform_siteid" value="<?php echo $site_id ?>" />
<?php } ?>
<?php if(!empty($source)){ ?>
<input type="hidden" name="vmform_source" value="<?php echo $source ?>" />
<?php } ?>
</div>
<div class="below-form" >	
		
		 <input type="submit" value="<?php echo htmlspecialchars($form_submit) ?>" class="btn btn-warning CTA" id="submit-button" />
		 <p id="disclaimer">By clicking "COMPARE NOW" you agree to be contacted by telephone or email by an FCA authorised insurance firm and confirm that you have read and agreed to our Privacy Policy and our Terms &amp; Conditions </p>
	</div>
</form>
</div>
<script type='text/javascript' src="<?php echo VMLEADS_URL_319.'content/form.js' ?>"></script>

