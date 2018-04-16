<?php
/*
Plugin Name: VMLeads 319
Plugin URI: http://www.vmleads.co.uk/
Description: This plugin is developed for VMLeads to show campaign form on Wordpress, usage: [vmleads_319]
Author: Visionary Markets
Version: 1.0
Author URI: http://www.vmleads.co.uk/
*/

define( 'VMLEADS_PATH_319', './vmleads_319/' );
define( 'VMLEADS_URL_319', './vmleads_319/' );
$vmleads_rest_319 = 'http://vmleads.co.uk/integrations/rest';
$vmleads_data_319 = array();
$vmleads_option_319 = array(
		'site_id' => 0000,
		'is_test' => false,
		'form_title' => 'Start Your FREE Quote Below',
		'form_submit' => 'COMPARE NOW',
		);

if(!empty($vmleads_option_319) && !empty($vmleads_option_319['is_test'])){
	$vmleads_rest_319 = $vmleads_rest_319.'?is_test=1';
}

function vmleads_post_319(){
	global $vmleads_rest_319,$vmleads_data_319;
	if(!empty($_POST['affiliate_campaign_id']) && !empty($_POST['vmform_wptag']) && $_POST['vmform_wptag'] == '319'){
		$real_post = array();
		foreach($_POST as $key => $value){
			$real_post[$key] = $value;
		}
		//$real_post = array_map('stripslashes_deep', $real_post);
		$return = vmleads_curl_319($vmleads_rest_319, $_POST);
		if(empty($return['error']) && substr($return['code'],0,1) == 2){
			$status= json_decode($return['body'],true);

			if(!empty($status['redirect'])){
				header('location:'.$status['redirect']);
				exit;
			}

			$vmleads_data_319['status'] = $status;
			$vmleads_data_319['field_errors'] = !empty($status['field_errors'])?$status['field_errors']:array();
			$vmleads_data_319['values'] = $real_post;
			$vmleads_data_319['is_post'] = true;
		}else{
			$vmleads_data_319['status'] = array('status'=>'error', 'message' => 'Technical Error!');
			$vmleads_data_319['field_errors'] = array();
			$vmleads_data_319['values'] = array();
			$vmleads_data_319['is_post'] = true;
		}

	}else{
		$vmleads_data_319['status'] = array('status'=>'');
		$vmleads_data_319['field_errors'] = array();
		$vmleads_data_319['values'] = array();
		$vmleads_data_319['is_post'] = false;
	}
}


//[vmleads_319]
vmleads_post_319();
foreach($vmleads_data_319 as $key => $vmleads_data_319_value){
	$$key = $vmleads_data_319_value;
}
/*[vmleads_319]
function vmleads_form_319( $atts ){
	global $vmleads_data_319, $vmleads_option_319;

	foreach($vmleads_data_319 as $key => $vmleads_data_319_value){
		$$key = $vmleads_data_319_value;
	}

	ob_start();
	include(VMLEADS_PATH_319.'content/form.php');
	$vmleads_output = ob_get_contents();
	ob_end_clean();

	return preg_replace('/[\r\n]+/', '', $vmleads_output);
}
*/

function vmleads_curl_319($url,$data){
	$current_url = (((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
	$ch = curl_init();
	$timeout = 10;
	$referer = $current_url;
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	curl_setopt($ch, CURLOPT_REFERER, $referer);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	//curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_POSTFIELDS, array('vm_is_json' => true, 'data' => json_encode($data)));
	$result = array();
	$result['body'] = trim(curl_exec($ch));
	$result['errno'] = curl_errno($ch);
	$result['error'] = curl_error($ch);
	$result['code'] = curl_getinfo($ch,CURLINFO_HTTP_CODE);
	curl_close($ch);
	return  $result;
}

function vmleads_get_ip_319() {
	$ip = $_SERVER['REMOTE_ADDR'];
	if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	}elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	return $ip;
}

/*include(VMLEADS_PATH_319.'settings.php');
*/