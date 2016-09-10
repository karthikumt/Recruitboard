<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('get_admin_id')){
	function get_admin_id(){
		$CI = & get_instance();
		$AdminArray = $CI->session->userdata('admin_login_session');
		if($AdminArray){
			return $AdminArray['AdminID'];
			//return 111;
		}else{
			return false;
		}
	}
}

if ( ! function_exists('get_admin_detail')){
	function get_admin_detail($AdminID){
		$CI = & get_instance();

		$sql = "SELECT * FROM admin WHERE AdminID = '$AdminID'";
        $query = $CI->db->query($sql);
        return $query->row_array();
	}
}

if ( ! function_exists('get_user')){
	function get_user(){
		$CI = & get_instance();
		$UserArray = $CI->session->userdata('MyRecuritID');
		if($UserArray){
			return $UserArray['UserID'];
		}else{
			return false;
		}
	}
}

if ( ! function_exists('get_user_detail')){
	function get_user_detail($UserID){
		$CI = & get_instance();
		$sql = "SELECT * FROM user_register WHERE UserID = '$UserID'";
        $query = $CI->db->query($sql);
        return $query->row_array();
	}
}
if ( ! function_exists('get_profile_detail')){
	function get_profile_detail($UserID){
		$CI = & get_instance();
		$sql = "SELECT UserEmail,Password,FirstName,LastName,UserType,PaymentType FROM user_register WHERE UserID = '$UserID'";        $query = $CI->db->query($sql);
        return $query->row_array();
	}
}
if ( ! function_exists('get_sport_detail')){
	function get_sport_detail($UserID){
		$CI = & get_instance();
		$sql = "SELECT Stu_SportID,Stu_ID,Stu_ClassID,Stu_GenderID FROM student_athlete WHERE UserID = '$UserID'";
        $query = $CI->db->query($sql);
        return $query->row_array();
	}
}
if ( ! function_exists('get_juco_detail')){
	function get_juco_detail($UserID){
		$CI = & get_instance();
		$sql = "SELECT Juco_SportID,Juco_ID,Juco_ClassID,Juco_GenderID FROM juco_transfer WHERE UserID = '$UserID'";
        $query = $CI->db->query($sql);
        return $query->row_array();
	}
}


if ( ! function_exists('get_row_data')){
	function get_row_data($tablename,$column,$id){
		$CI = & get_instance();
		$sql = "SELECT * FROM ".$tablename." WHERE ".$column." = ".$id."";
    $query = $CI->db->query($sql);

    if(!empty($query)) {
    	return $query->row_array();
    }

    return array();
	}
}

if ( ! function_exists('get_all_data')){
	function get_all_data($column,$id,$start,$userid){
		$CI = & get_instance();

		 $CI->db->order_by('AddDate','desc');
		 $CI->db->where($column,$id);
		 $CI->db->where('UserID',$userid);
		 $CI->db->limit(2,$start);
	     $result = $CI->db->get('comment_box')->result_array();
		 if(!empty($result))
		 {
		 return $result;
		 }
	}
}


if ( ! function_exists('get_random_no')){
	function get_random_no($random_no){
		$CI = & get_instance();
		$sql = "SELECT UserID,Status,UserType FROM user_register WHERE RandomNumber = '$random_no'";
        $query = $CI->db->query($sql);
        return $query->row_array();
	}
}

if ( ! function_exists('get_user_data')){

    function get_user_data($tablename,$Column,$id){
	    $CI = & get_instance();
    	$comma_separated = implode(",", $Column);
		$sql="select ".$comma_separated." from ".$tablename." where UserID='".$id."'";
		$query = $CI->db->query($sql)->row_array();
		return $query;

    }
}





if ( ! function_exists('get_table_details')){
	function get_table_details($tablename,$columnm){
		$CI = & get_instance();

        $CI->db->from($tablename);
		$CI->db->order_by($columnm, "asc");
		$query = $CI->db->get();
		return $query->result_array();
	}
}

if ( ! function_exists('get_comm_photo')){
	function get_comm_photo($UserID){
		$CI = & get_instance();
		$sql = "SELECT Comm_Photo FROM comment_box WHERE UserID='".$UserID."' AND Comm_Photo!='' ";
        $query = $CI->db->query($sql);
        return $query->result_array();
	}
}


if ( ! function_exists('get_comm_video')){
	function get_comm_video($UserID){
		$CI = & get_instance();
		$sql = "SELECT Comm_Video FROM comment_box WHERE UserID='".$UserID."' AND Comm_Video!='' ";
        $query = $CI->db->query($sql);
        return $query->result_array();
	}
}

if ( ! function_exists('total_post_ad')){
	function total_post_ad($UserID){
		$CI = & get_instance();
		$sql = "SELECT count(PostID) AS TOTAL FROM  coach_post_ads WHERE UserID='".$UserID."'";
        $query = $CI->db->query($sql);
        return $query->row_array();
	}
}



if ( ! function_exists('get_captcha')){
	function get_captcha(){

		$CI = & get_instance();
		$vals = array(
		'img_path' => './captcha/',
		'img_url' => base_url().'captcha/',
		'font_path' => './captcha/font/captcha4.ttf',
		'img_width' => '150',
		'img_height' => '40',
		'expiration' => 2000
		);
      	$captcha = create_captcha($vals);
		return $captcha;
	}
}

function getyoutubevidoid2($url){
 $text = $url;
	$text = preg_replace('~
		# Match non-linked youtube URL in the wild. (Rev:20130823)
		https?://         # Required scheme. Either http or https.
		(?:[0-9A-Z-]+\.)? # Optional subdomain.
		(?:               # Group host alternatives.
		  youtu\.be/      # Either youtu.be,
		| youtube         # or youtube.com or
		  (?:-nocookie)?  # youtube-nocookie.com
		  \.com           # followed by
		  \S*             # Allow anything up to VIDEO_ID,
		  [^\w\s-]       # but char before ID is non-ID char.
		)                 # End host alternatives.
		([\w-]{11})      # $1: VIDEO_ID is exactly 11 chars.
		(?=[^\w-]|$)     # Assert next char is non-ID or EOS.
		(?!               # Assert URL is not pre-linked.
		  [?=&+%\w.-]*    # Allow URL (query) remainder.
		  (?:             # Group pre-linked alternatives.
			[\'"][^<>]*>  # Either inside a start tag,
		  | </a>          # or inside <a> element text contents.
		  )               # End recognized pre-linked alts.
		)                 # End negative lookahead assertion.
		[?=&+%\w.-]*        # Consume any URL (query) remainder.
		~ix',
		'$1',
		$text);
	return $text;
}

function videoType($url) {
    if (strpos($url, 'youtube') > 0) {
        return 'youtube';
    } elseif (strpos($url, 'vimeo') > 0) {
        return 'vimeo';
    } elseif (strpos($url, 'hudl') > 0){
        return 'hudl';
    }else {

	}return 'unknown';
}

/*
function my_resize($Souce,$Destination,$Width,$Height){
	  $list = getimagesize($Souce);
	  $Prop1 = $list[0]/$Width;
	  $Prop2 = $list[1]/$Height;

	  if($Prop1>=$Prop2){
	   $Sizes = $Prop2;
	  } else {
	   $Sizes = $Prop1;
	  }
	  $MyWidth = $list[0]/$Sizes;
	  $MyHeight = $list[1]/$Sizes;

	  $Imageic = "convert ".$Souce." -resize ".$MyWidth."x".$MyHeight." -gravity center -crop ".$Width."x".$Height."+0+0 +repage ".$Destination;
	  exec($Imageic);

 }
*/
function my_resize($Souce,$Destination,$Width,$Height)
{

	$CI = & get_instance();
	$config['image_library'] = 'gd2';
    $config['source_image'] = $Souce;
	$config['new_image'] = $Destination;
    $config['quality'] = '100%';
	$config['master_dim'] = 'auto';
   	$config['maintain_ratio'] = false;
    $config['width'] = $Width;
    $config['height'] = $Height;

    $CI->image_lib->clear();
    $CI->image_lib->initialize($config);
    $CI->image_lib->resize();
}


?>
