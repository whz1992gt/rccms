<?php
 /*
 * 兆和人才网 ajax返回
 * ============================================================================
 * 版权所有: 兆和网络，并保留所有权利。
 * 网站地址: http://www.mandnt.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
*/
define('IN_QISHI', true);
require_once(dirname(dirname(__FILE__)).'/include/plus.common.inc.php');
$act = !empty($_REQUEST['act']) ? trim($_REQUEST['act']) : '';
if($act =='do_login')
{
	$username=isset($_POST['username'])?trim($_POST['username']):"";
	$password=isset($_POST['password'])?trim($_POST['password']):"";
	$expire=isset($_POST['expire'])?intval($_POST['expire']):"";
	$account_type=1;
	if (preg_match("/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/",$username))
	{
	$account_type=2;
	}
	elseif (preg_match("/^(13|15|18)\d{9}$/",$username))
	{
	$account_type=3;
	}
	$url=isset($_POST['url'])?$_POST['url']:"";
	if (strcasecmp(QISHI_DBCHARSET,"utf8")!=0)
	{
	$username=iconv("utf-8",QISHI_DBCHARSET,$username);
	$password=iconv("utf-8",QISHI_DBCHARSET,$password);
	}
	$captcha=get_cache('captcha');
	if ($captcha['verify_userlogin']=="1")
	{
		$postcaptcha=$_POST['postcaptcha'];
		if ($captcha['captcha_lang']=="cn" && strcasecmp(QISHI_DBCHARSET,"utf8")!=0)
		{
		$postcaptcha=iconv("utf-8",QISHI_DBCHARSET,$postcaptcha);
		}
		if (empty($postcaptcha) || empty($_SESSION['imageCaptcha_content']) || strcasecmp($_SESSION['imageCaptcha_content'],$postcaptcha)!=0)
		{
		unset($_SESSION['imageCaptcha_content']);
		exit("errcaptcha");
		}
	}
	require_once(QISHI_ROOT_PATH.'include/fun_user.php');
	if ($username && $password)
	{
		$login=user_login($username,$password,$account_type,true,$expire);
		$url=$url?$url:$login['qs_login'];
		if ($login['qs_login'])
		{
		exit($login['uc_login']."<script language=\"javascript\" type=\"text/javascript\">window.location.href=\"".$url."\";</script>");
		}
		else
		{
		exit("err");
		}
	}
	exit("err");
}
elseif ($act=='do_reg')
{
	$captcha=get_cache('captcha');
	if ($captcha['verify_userreg']=="1")
	{
		$postcaptcha=$_POST['postcaptcha'];
		if ($captcha['captcha_lang']=="cn" && strcasecmp(QISHI_DBCHARSET,"utf8")!=0)
		{
		$postcaptcha=iconv("utf-8",QISHI_DBCHARSET,$postcaptcha);
		}
		if (empty($postcaptcha) || empty($_SESSION['imageCaptcha_content']) || strcasecmp($_SESSION['imageCaptcha_content'],$postcaptcha)!=0)
		{
		exit("err");
		}
	}
	require_once(QISHI_ROOT_PATH.'include/fun_user.php');
	$username = isset($_POST['username'])?trim($_POST['username']):exit("err");
	$password = isset($_POST['password'])?trim($_POST['password']):exit("err");
	$member_type = isset($_POST['member_type'])?intval($_POST['member_type']):exit("err");
	$email = isset($_POST['email'])?trim($_POST['email']):exit("err");
	if (strcasecmp(QISHI_DBCHARSET,"utf8")!=0)
	{
	$username=iconv("utf-8",QISHI_DBCHARSET,$username);
	$password=iconv("utf-8",QISHI_DBCHARSET,$password);
	}
	$register=user_register($username,$password,$member_type,$email);
	if ($register>0)
	{	
		$login_js=user_login($username,$password);
		$mailconfig=get_cache('mailconfig');
		if ($mailconfig['set_reg']=="1")
		{
		dfopen($_CFG['site_domain'].$_CFG['site_dir']."plus/asyn_mail.php?uid=".$_SESSION['uid']."&key=".asyn_userkey($_SESSION['uid'])."&sendemail=".$email."&sendusername=".$username."&sendpassword=".$password."&act=reg");
		}
		$ucjs=$login_js['uc_login'];
		$qsurl=$login_js['qs_login'];
		$qsjs="<script language=\"javascript\" type=\"text/javascript\">window.location.href=\"".$qsurl."\";</script>";
		 if ($ucjs || $qsurl)
			{
			exit($ucjs.$qsjs);
			}
			else
			{
			exit("err");
			}
	}
	else
	{
	exit("err");
	}
}
elseif($act =='check_usname')
{
	require_once(QISHI_ROOT_PATH.'include/fun_user.php');
	$usname=trim($_POST['usname']);
	if (strcasecmp(QISHI_DBCHARSET,"utf8")!=0)
	{
	$usname=iconv("utf-8",QISHI_DBCHARSET,$usname);
	}
	$user=get_user_inusername($usname);
	empty($user)?exit("true"):exit("false");
}
elseif($act == 'check_email')
{
	require_once(QISHI_ROOT_PATH.'include/fun_user.php');
	$email=trim($_POST['email']);
	if (strcasecmp(QISHI_DBCHARSET,"utf8")!=0)
	{
	$email=iconv("utf-8",QISHI_DBCHARSET,$email);
	}
	$user=get_user_inemail($email);
	empty($user)?exit("true"):exit("false");
}
elseif ($act=="top_loginform")
{
	$contents='';
	if ($_COOKIE['QS']['username'] && $_COOKIE['QS']['password'])
	{
		$tpl='../templates/'.$_CFG['template_dir']."plus/top_login_success.ini";
	}
	else
	{	
		$tpl='../templates/'.$_CFG['template_dir']."plus/top_login_form.ini";
	}
		$contents=file_get_contents($tpl);
		$contents=str_replace('{#$activate_username#}',$_SESSION['activate_username'],$contents);
		$contents=str_replace('{#$site_name#}',$_CFG['site_name'],$contents);
		$contents=str_replace('{#$username#}',$_COOKIE['QS']['username'],$contents);
		$contents=str_replace('{#$pmscount#}',$_COOKIE['QS']['pmscount'],$contents);
		$contents=str_replace('{#$site_template#}',$_CFG['site_template'],$contents);
		if ($_COOKIE['QS']['utype']=='1')
		{
		$user_url=$_CFG['site_dir']."user/company/company_index.php";
			if($_COOKIE['QS']['pmscount']>0)
			 {
			 $pmscount_a='<a href="'.$_CFG['site_dir'].'user/company/company_user.php?act=pm&new=1" style="padding:1px 4px; background-color:#FF6600; color:#FFFFFF;text-decoration:none" title="短消息">消息 '.$_COOKIE['QS']['pmscount'].'</a>';
			 }
		}
		if ($_COOKIE['QS']['utype']=='2')
		{
			$user_url=$_CFG['site_dir']."user/personal/personal_index.php";
			if($_COOKIE['QS']['pmscount']>0)
			 {
			 $pmscount_a='<a href="'.$_CFG['site_dir'].'user/personal/personal_user.php?act=pm&new=1" style="padding:1px 4px; background-color:#FF6600; color:#FFFFFF;text-decoration:none" title="短消息">消息 '.$_COOKIE['QS']['pmscount'].'</a>';
			 }
		}
		$contents=str_replace('{#$pmscount_a#}',$pmscount_a,$contents);
		$contents=str_replace('{#$user_url#}',$user_url,$contents);
		$contents=str_replace('{#$login_url#}',url_rewrite('QS_login'),$contents);
		$contents=str_replace('{#$logout_url#}',url_rewrite('QS_login')."?act=logout",$contents);
		$contents=str_replace('{#$reg_url#}',$_CFG['site_dir']."user/user_reg.php",$contents);
		$contents=str_replace('{#$activate_url#}',$_CFG['site_dir']."user/user_reg.php?act=activate",$contents);
		exit($contents);
}
elseif ($act=="loginform")
{
	$contents='';
	$uid=intval($_SESSION['uid']);
	if ($_COOKIE['QS']['username'] && $_COOKIE['QS']['password'])
	{
	    if ($_COOKIE['QS']['utype']=='1'){
		 $tpl='../templates/'.$_CFG['template_dir']."plus/login_success1.ini";
		}
		 if ($_COOKIE['QS']['utype']=='2'){
		 $tpl='../templates/'.$_CFG['template_dir']."plus/login_success2.ini";
		}
	}
	else
	{
		$tpl='../templates/'.$_CFG['template_dir']."plus/login_form.ini";
	}
		$contents=file_get_contents($tpl);
		$contents=str_replace('{#$activate_username#}',$_SESSION['activate_username'],$contents);
		$contents=str_replace('{#$site_name#}',$_CFG['site_name'],$contents);
		$contents=str_replace('{#$username#}',$_COOKIE['QS']['username'],$contents);
		$contents=str_replace('{#$pmscount#}',$_COOKIE['QS']['pmscount'],$contents);
		$contents=str_replace('{#$site_template#}',$_CFG['site_template'],$contents);
		if ($_COOKIE['QS']['utype']=='1')
		{    
		     require_once(dirname(dirname(__FILE__)).'/include/fun_company.php');
			$user_url=$_CFG['site_dir']."user/company/company_index.php";
			 if($_COOKIE['QS']['pmscount']>0)
			 {
			 $pmscount_a='<a href="'.$_CFG['site_dir'].'user/company/company_user.php?act=pm&new=1" style="padding:1px 4px; background-color:#FF6600; color:#FFFFFF;text-decoration:none" title="短消息">消息 '.$_COOKIE['QS']['pmscount'].'</a>';
			 }
			 
			  $msg_total1=$db->get_total("SELECT COUNT(*) AS num FROM ".table('pms')." WHERE (msgfromuid='{$uid}' OR msgtouid='{$uid}') AND `new`='1' AND `replyuid`<>'{$uid}' AND msgtype=1");
		    if($msg_total1>0){
		     $msg_total1='<a href="'.$_CFG['site_dir'].'user/company/company_user.php?act=pm&msgtype=1" style="color:#FF0000">('.$msg_total1.')</a>';
		      }else{
		       $msg_total1='<a href="'.$_CFG['site_dir'].'user/company/company_user.php?act=pm&msgtype=1" style="color:#666666">(0)</a>';
		      }
		
		    $msg_total2=$db->get_total("SELECT COUNT(*) AS num FROM ".table('pms')." WHERE (msgfromuid='{$uid}' OR msgtouid='{$uid}') AND `new`='1' AND `replyuid`<>'{$uid}' AND msgtype=2");
		if($msg_total2>0){
		   $msg_total1='<a href="'.$_CFG['site_dir'].'user/company/company_user.php?act=pm&msgtype=2" style="color:#FF0000">('.$msg_total2.')</a>';
		    }else{
		   $msg_total2='<a href="'.$_CFG['site_dir'].'user/company/company_user.php?act=pm&msgtype=2" style="color:#666666">(0)</a>';
		    }
			 
			 $points=get_user_points($uid);
			 $setmealarr=get_user_setmeal($uid);
			 $setmeal=$setmealarr[setmeal_name];
			 $userarr=get_user_info($uid);
		     $lasttime=date('Y-m-d H:i:s',"$userarr[last_login_time]");
			 $contents=str_replace('{#$points#}',$points,$contents);
			 $contents=str_replace('{#$setmeal#}',$setmeal,$contents);
		}
		
		if ($_COOKIE['QS']['utype']=='2')
		{   require_once(dirname(dirname(__FILE__)).'/include/fun_personal.php');
			$user_url=$_CFG['site_dir']."user/personal/personal_index.php";
			 if($_COOKIE['QS']['pmscount']>0)
			 {
			 $pmscount_a='<a href="'.$_CFG['site_dir'].'user/personal/personal_user.php?act=pm&new=1" style="padding:1px 4px; background-color:#FF6600; color:#FFFFFF;text-decoration:none" title="短消息">消息 '.$_COOKIE['QS']['pmscount'].'</a>';
			 }
			$count_apply=count_personal_jobs_apply($uid);
		    $count_interview=count_interview($uid);
			
		   $userarr=get_user_info($uid);
		   $lasttime=date('Y-m-d H:i:s',"$userarr[last_login_time]");
		   
		    $msg_total1=$db->get_total("SELECT COUNT(*) AS num FROM ".table('pms')." WHERE (msgfromuid='{$uid}' OR msgtouid='{$uid}') AND `new`='1' AND `replyuid`<>'{$uid}' AND msgtype=1");
		    if($msg_total1>0){
		     $msg_total1='<a href="'.$_CFG['site_dir'].'user/personal/personal_user.php?act=pm&msgtype=1" style="color:#FF0000">('.$msg_total1.')</a>';
		      }else{
		       $msg_total1='<a href="'.$_CFG['site_dir'].'user/personal/personal_user.php?act=pm&msgtype=1" style="color:#666666">(0)</a>';
		      }
		
		    $msg_total2=$db->get_total("SELECT COUNT(*) AS num FROM ".table('pms')." WHERE (msgfromuid='{$uid}' OR msgtouid='{$uid}') AND `new`='1' AND `replyuid`<>'{$uid}' AND msgtype=2");
		if($msg_total2>0){
		   $msg_total1='<a href="'.$_CFG['site_dir'].'user/personal/personal_user.php?act=pm&msgtype=2" style="color:#FF0000">('.$msg_total2.')</a>';
		    }else{
		   $msg_total2='<a href="'.$_CFG['site_dir'].'user/personal/personal_user.php?act=pm&msgtype=2" style="color:#666666">(0)</a>';
		    }
		 
		      $contents=str_replace('{#$count_apply#}',$count_apply,$contents);
		      $contents=str_replace('{#$count_interview#}',$count_interview,$contents);
			  
   
	     }
		  
	    $contents=str_replace('{#$msg_total1#}',$msg_total1,$contents);
		$contents=str_replace('{#$msg_total2#}',$msg_total2,$contents);
		$contents=str_replace('{#$lasttime#}',$lasttime,$contents);
		$contents=str_replace('{#$pmscount_a#}',$pmscount_a,$contents);
		$contents=str_replace('{#$user_url#}',$user_url,$contents);
		$contents=str_replace('{#$login_url#}',url_rewrite('QS_login'),$contents);
		$contents=str_replace('{#$logout_url#}',url_rewrite('QS_login')."?act=logout",$contents);
		$contents=str_replace('{#$reg_url#}',$_CFG['site_dir']."user/user_reg.php",$contents);
		$contents=str_replace('{#$activate_url#}',$_CFG['site_dir']."user/user_reg.php?act=activate",$contents);
		exit($contents);
}


?>