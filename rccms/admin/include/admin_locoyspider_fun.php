<?php
 /*
 * 兆和人才网 管理中心 
 * ============================================================================
 * 版权所有: 兆和网络，并保留所有权利。
 * 网站地址: http://www.mandnt.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
*/
 if(!defined('IN_QISHI'))
 {
die('Access Denied!');
 }
//检测文章标题是否重复
function ck_article_title($val)
{
	global $db;
	$sql = "select * from ".table('article')." where title='{$val}' LIMIT 1";
	$alist=$db->getone($sql);
	return $alist;
}
///--------------------------------
//获取公司信息
function get_companyinfo($val)
{
	global $db;
	$sql = "select * from ".table('company_profile')." where companyname='{$val}' AND  robot=1 LIMIT 1";
	return $db->getone($sql);
}
//检测职位名称是否有重复
function ck_jobs_name($val,$uid)
{
	global $db;
	$uid=intval($uid);
	$sql = "select id from ".table('jobs')." where jobs_name='{$val}' AND uid='{$uid}' LIMIT 1";
	$alist=$db->getone($sql);
	return $alist;
}
//匹配企业性质
function locoyspider_company_nature($str=NULL)
{
	global $db,$locoyspider;
	$sql = "select c_id,c_name from ".table('category')." where c_alias='QS_company_type' AND  c_id=".intval($locoyspider['company_nature'])." LIMIT 1";
	$nature=$db->getone($sql);
	$default=array("id"=>$nature['c_id'],"cn"=>$nature['c_name']);
	if (empty($str))
	{
		return $default;
	}
	else
	{
		$sql = "select c_id,c_name from ".table('category')." where c_alias='QS_company_type'";
		$nature=$db->getall($sql);
		$return=locoyspider_search_str($nature,$str,"c_name");
		if ($return)
		{
		return array("id"=>$return['c_id'],"cn"=>$return['c_name']);
		}
		else
		{
		return $default;
		}
	}
}
//匹配企业行业
function locoyspider_company_trade($str=NULL)
{	
	global $db,$locoyspider;
	$sql = "select c_id,c_name from ".table('category')." where  c_alias='QS_trade' AND  c_id=".intval($locoyspider['company_trade'])." LIMIT 1";
	$info=$db->getone($sql);
	$default=array("id"=>$info['c_id'],"cn"=>$info['c_name']);
	if (empty($str))
	{
		return $default;
	}
	else
	{
		$sql = "select c_id,c_name from ".table('category')." where  c_alias='QS_trade'";
		$info=$db->getall($sql);
		$return=locoyspider_search_str($info,$str,"c_name");
		if ($return)
		{
		return array("id"=>$return['c_id'],"cn"=>$return['c_name']);
		}
		else
		{
		return $default;
		}
	}
}
//匹配职位分类
function locoyspider_jobs_category($str=NULL)
{
	global $db,$locoyspider;
	$sql = "select id,parentid,categoryname from ".table('category_jobs')." where id=".intval($locoyspider['jobs_subclass'])." LIMIT 1";
	$info=$db->getone($sql);
	$default=array("category"=>$info['parentid'],"subclass"=>$info['id'],"category_cn"=>$info['categoryname']);
	if (empty($str))
	{
		return $default;
	}
	else
	{
		$sql = "select id,parentid,categoryname from ".table('category_jobs')." WHERE parentid<>0";
		$info=$db->getall($sql);
		$return=locoyspider_search_str($info,$str,"categoryname");
		if ($return)
		{
		return array("category"=>$return['parentid'],"subclass"=>$return['id'],"category_cn"=>$return['categoryname']);		
		}
		else
		{
		return $default;
		}
	}
}
//匹配企业地区
function locoyspider_company_district($str=NULL)
{
	global $db,$locoyspider;
	$sql = "select id,parentid,categoryname from ".table('category_district')." where id=".intval($locoyspider['company_district'])." LIMIT 1";
	$info=$db->getone($sql);
	$default=array("district"=>$info['parentid'],"sdistrict"=>$info['id'],"district_cn"=>$info['categoryname']);
	if (empty($str))
	{
		return $default;
	}
	else
	{
		$sql = "select id,parentid,categoryname from ".table('category_district')." ";
		$info=$db->getall($sql);
		$return=locoyspider_search_str($info,$str,"categoryname");
		if ($return)
		{
		return array("district"=>$return['parentid'],"sdistrict"=>$return['id'],"district_cn"=>$return['categoryname']);		
		}
		else
		{
		return $default;
		}
	}
}
//匹配工作地区
function locoyspider_jobs_district($str=NULL)
{
	global $db,$locoyspider;
	$sql = "select id,parentid,categoryname from ".table('category_district')." where id=".intval($locoyspider['jobs_district'])." LIMIT 1";
	$info=$db->getone($sql);
	$default=array("district"=>$info['parentid'],"sdistrict"=>$info['id'],"district_cn"=>$info['categoryname']);
	if (empty($str))
	{
		return $default;
	}
	else
	{
		$sql = "select id,parentid,categoryname from ".table('category_district')." ";
		$info=$db->getall($sql);
		$return=locoyspider_search_str($info,$str,"categoryname");
		if ($return)
		{
		return array("district"=>$return['parentid'],"sdistrict"=>$return['id'],"district_cn"=>$return['categoryname']);
		}
		else
		{
		return $default;
		}
	}
}
//匹配企业规模
function locoyspider_company_scale($str=NULL)
{
	global $db,$locoyspider;
	$sql = "select c_id,c_name from ".table('category')." where  c_alias='QS_scale' and c_id=".intval($locoyspider['company_scale'])." LIMIT 1";
	$info=$db->getone($sql);
	$default=array("id"=>$info['c_id'],"cn"=>$info['c_name']);
	if (empty($str))
	{
		return $default;
	}
	else
	{
		$sql = "select c_id,c_name from ".table('category')."  where  c_alias='QS_scale' ";
		$info=$db->getall($sql);
		$return=locoyspider_search_str($info,$str,"c_name");
		if ($return)
		{
		return array("id"=>$return['c_id'],"cn"=>$return['c_name']);
		}
		else
		{
		return $default;
		}
	}
}
//匹配企业注册资金
function locoyspider_company_registered($str=NULL)
{
	global $locoyspider;
	if (empty($str))
	{
		return array("registered"=>$locoyspider['company_registered'],"currency"=>$locoyspider['company_currency']);
	}
	else
	{
		return array("registered"=>$str,"currency"=>"");
	}
}
//匹配职位性质
function locoyspider_jobs_nature($str=NULL)
{
	global $db,$locoyspider;
	
	$sql = "select c_id,c_name from ".table('category')." where  c_alias='QS_jobs_nature' AND c_id=".intval($locoyspider['jobs_nature'])." LIMIT 1";
	$info=$db->getone($sql);
	$default=array("id"=>$info['c_id'],"cn"=>$info['c_name']);
	if (empty($str))
	{
		return $default;
	}
	else
	{
		$sql = "select c_id,c_name from ".table('category')." where  c_alias='QS_jobs_nature' ";
		$info=$db->getall($sql);
		$return=locoyspider_search_str($info,$str,"c_name");
		if ($return)
		{
		return array("id"=>$return['c_id'],"cn"=>$return['c_name']);
		}
		else
		{
		return $default;
		}
	}
}

//匹配简历婚姻状况
function locoyspider_resumes_marriage($str=NULL)
{	
	return get_locoyspider_resumes_marriage($str);
}
function get_locoyspider_resumes_marriage($marriage_cn=NULL,$marriage=NULL)
{
		if ($marriage_cn=="未婚" || $marriage=="1")
		{
		return array("id"=>1,"cn"=>"未婚");
		}
		elseif ($marriage_cn=="已婚" ||  $marriage=="2")
		{
		return array("id"=>2,"cn"=>"未婚");
		}
		elseif ($marriage_cn=="保密"  ||  $marriage=="3")
		{
		return array("id"=>3,"cn"=>"保密");
		}
		else
		{
			return get_locoyspider_resumes_marriage("",3);//匹配不到的情况下防护保密状态
		}
}
//匹配职位 性别
function locoyspider_jobs_sex($str=NULL)
{	
	return get_locoyspider_jobs_sex($str);
}
function get_locoyspider_jobs_sex($sex_cn=NULL,$sex=NULL)
{
		global $locoyspider;
		if ($sex_cn=="男" || $sex=="1")
		{
		return array("id"=>1,"cn"=>"男");
		}
		elseif ($sex_cn=="女" ||  $sex=="2")
		{
		return array("id"=>2,"cn"=>"女");
		}
		elseif ($sex_cn=="不限"  ||  $sex=="3")
		{
		return array("id"=>3,"cn"=>"不限");
		}
		else
		{
			if ($locoyspider['jobs_sex']=="0")
			{
			return get_locoyspider_jobs_sex("",mt_rand(1,3));
			}
			else
			{
			return get_locoyspider_jobs_sex("",intval($locoyspider['jobs_sex']));
			}
		}
}
//匹配职位 招聘人数
function locoyspider_jobs_amount($str=NULL)
{
	global $locoyspider;
	$str=intval($str);
	if ($str>0)
	{
		return $str;
	}
	else
	{
		return mt_rand(intval($locoyspider['jobs_amount_min']),intval($locoyspider['jobs_amount_max']));
	}
}
//匹配要求学历
function locoyspider_jobs_education($str=NULL)
{
	global $db,$locoyspider;
	$sql = "select c_id,c_name from ".table('category')." where c_alias='QS_education'  and c_id=".intval($locoyspider['jobs_education'])." LIMIT 1";
	$info=$db->getone($sql);
	$default=array("id"=>$info['c_id'],"cn"=>$info['c_name']);
	if (empty($str))
	{
		return $default;
	}
	else
	{
		$sql = "select c_id,c_name from ".table('category')."  where c_alias='QS_education'";
		$info=$db->getall($sql);
		$return=locoyspider_search_str($info,$str,"c_name");
		if ($return)
		{
		return array("id"=>$return['c_id'],"cn"=>$return['c_name']);
		}
		else
		{
		return $default;
		}
	}
}
//匹配要求工作经验
function locoyspider_jobs_experience($str=NULL)
{
	global $db,$locoyspider;
	$sql = "select c_id,c_name from ".table('category')." where  c_alias='QS_experience' AND c_id=".intval($locoyspider['jobs_experience'])." LIMIT 1";
	$info=$db->getone($sql);
	$default=array("id"=>$info['c_id'],"cn"=>$info['c_name']);
	if (empty($str))
	{
		return $default;
	}
	else
	{
		$sql = "select c_id,c_name from ".table('category')." where  c_alias='QS_experience'";
		$info=$db->getall($sql);
		$return=locoyspider_search_str($info,$str,"c_name");
		if ($return)
		{
		return array("id"=>$return['c_id'],"cn"=>$return['c_name']);
		}
		else
		{
		return $default;
		}
	}
}
//匹配薪资待遇
function locoyspider_jobs_wage($str=NULL)
{
	global $db,$locoyspider;
	$sql = "select  c_id,c_name from ".table('category')." where  c_alias='QS_wage' and c_id=".intval($locoyspider['jobs_wage'])." LIMIT 1";
	$info=$db->getone($sql);
	$default=array("id"=>$info['c_id'],"cn"=>$info['c_name']);
	if (empty($str))
	{
		return $default;
	}
	else
	{
		$sql = "select c_id,c_name from ".table('category')." where  c_alias='QS_wage'";
		$info=$db->getall($sql);
		$return=locoyspider_search_str($info,$str,"c_name");
		if ($return)
		{
		return array("id"=>$return['c_id'],"cn"=>$return['c_name']);
		}
		else
		{
		return $default;
		}
	}
}
//获取到期时间
function locoyspider_jobs_deadline()
{
	global $locoyspider;
	$jobs_days_min=intval($locoyspider['jobs_days_min']);
	$jobs_days_max=intval($locoyspider['jobs_days_max']);
	if ($jobs_days_min==0 && $jobs_days_max==0)
	{
	return strtotime("30 day");
	}
	else
	{
	return strtotime("".mt_rand($jobs_days_min,$jobs_days_max)." day");
	}
}
//采集注册会员
function locoyspider_user_register($email=NULL,$utype=1)
{
	global $db,$locoyspider;
	$setsqlarr['username']=$_POST['username'];
	$setsqlarr['pwd_hash']=res_randstr();
		//reg_password
		if ($locoyspider['reg_password_tpye']=="1")
		{
		$pwd=$setsqlarr['username'];
		}
		elseif ($locoyspider['reg_password_tpye']=="3")
		{
		$pwd=$locoyspider['reg_password'];
		}
		else
		{
		$pwd=res_randstr(7);
		}
		//email
		if (empty($email) || !preg_match("/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/",$email))
		{
		$email=time().uniqid().$locoyspider['reg_email'];
		}
		else
		{
		$email=$email;
		}
	$setsqlarr['password']=md5(md5($pwd).$setsqlarr['pwd_hash']);
	$setsqlarr['email']=$email;
	$setsqlarr['utype']=$utype;
	$setsqlarr['reg_time']=time();
	$setsqlarr['robot']=1;
	$reg_id=inserttable(table('members'),$setsqlarr,true);
	if (!$reg_id) return false;
	if(!$db->query("INSERT INTO ".table('members_points')." (uid) VALUES ('{$reg_id}')"))  return false;
	if(!$db->query("INSERT INTO ".table('members_setmeal')." (uid) VALUES ('{$reg_id}')"))  return false;
	return $reg_id;
}
//添加test
function locoyspider_addtest()
{
//substr($_POST['photosrc'],strpos($_POST['photosrc'],"tx")+3);
$imgurllength=strpos($_POST['photosrc'],"style")-strpos($_POST['photosrc'],"thumb")-9;
$imgurl=substr($_POST['photosrc'],strpos($_POST['photosrc'],"thumb")+6,$imgurllength);
exit($imgurl."test".print_r($match));

require_once(QISHI_ROOT_PATH.'include/upload.php');
$photo_dir=substr($_CFG['resume_photo_dir'],strlen($_CFG['site_dir']));
$photo_dir="../../".$photo_dir.date("Y/m/d/");
echo("test".$photo_dir);
make_dir($photo_dir);
$setsqlarr['photo_img']=_asUpFiles($photo_dir, "photo",$_CFG['resume_photo_max'],'gif/jpg/bmp/png',true);
$setsqlarr['photo_img']=date("Y/m/d/").$setsqlarr['photo_img'];
}
//添加简历
function locoyspider_addresumes()
{
	global $locoyspider;
	//添加会员 个人会员类型
		$setsqlarr['uid']=locoyspider_user_register(trim($_POST['email']),2);
		if ($setsqlarr['uid']=="") exit("添加会员出错");
	$uid=$setsqlarr['uid'];//用户id
	//step1添加简历基本信息
	$setsqlarr['title']=trim($_POST['title'])?trim($_POST['title']):exit('请填写简历名称！');
	$setsqlarr['fullname']=trim($_POST['fullname'])?trim($_POST['fullname']):exit('请填写姓名！');
	//匹配简历 性别
		$sex=locoyspider_jobs_sex(trim($_POST['sex_cn']));
	$setsqlarr['sex']=$sex['id'];
	$setsqlarr['sex_cn']=$sex['cn'];
	
	$birthage=intval($_POST['birthdate']);
	if($birthage<100){
	$setsqlarr['birthdate']=intval(2012-$birthage);
	}else{
	$setsqlarr['birthdate']=intval($_POST['birthdate'])>1945?intval($_POST['birthdate']):exit('请正确填写出生年份');
	}
	$setsqlarr['height']=intval($_POST['height']);
	
	//匹配婚姻状况
		$marriage=locoyspider_resumes_marriage($_POST['marriage_cn']);
	$setsqlarr['marriage']=$marriage['id'];//婚姻状况 1 未婚 2 已婚 3 保密
	$setsqlarr['marriage_cn']=$marriage['cn'];
	
	//匹配要求工作经验
		$experience=locoyspider_jobs_experience(trim($_POST['experience_cn']));
	$setsqlarr['experience']=$experience['id'];	
	$setsqlarr['experience_cn']=$experience['cn'];

	//户口所在地
	$setsqlarr['householdaddress']=trim($_POST['householdaddress'])?trim($_POST['householdaddress']):exit('请填写户口所在地！');	
	
	//匹配要求学历
		$education=locoyspider_jobs_education(trim($_POST['education_cn']));
	$setsqlarr['education']=$education['id'];
	$setsqlarr['education_cn']=$education['cn'];
	
	$setsqlarr['tag']='';
	$setsqlarr['telephone']=trim($_POST['telephone']);
	$setsqlarr['email']=trim($_POST['email']);
	$setsqlarr['email_notify']=0;
	$setsqlarr['address']=trim($_POST['address']);
	$setsqlarr['website']=trim($_POST['website']);
	$setsqlarr['qq']=trim($_POST['qq']);
	$setsqlarr['addtime']=$timestamp;
	$setsqlarr['refreshtime']=$timestamp;
	$setsqlarr['subsite_id']=0;
	//图片路径问题
	if(!empty($_POST['photosrc'])){
	$imgurllength=strpos($_POST['photosrc'],"style")-strpos($_POST['photosrc'],"thumb")-9;
	$imgurl=substr($_POST['photosrc'],strpos($_POST['photosrc'],"thumb")+6,$imgurllength);

	$setsqlarr['photo_img']=trim($_POST['photosrc'])==''?'':$imgurl;
	}
	$setsqlarr['photo_img']=trim($_POST['photosrc']);
	$setsqlarr['display_name']=(trim($setsqlarr['fullname'])=="某某"?"2":"1");//姓名显示方式 1 真实姓名 2 编号 3 姓**	
	if(trim($setsqlarr['fullname'])=="某某"){
		$setsqlarr['fullname']=trim($setsqlarr['fullname']).res_randstr(4);
	}
	$setsqlarr['audit']=1;//审核状态1 通过 2未通过 3 删除
	$pid=inserttable(table('resume'),$setsqlarr,1);//简历id
	if (empty($pid)) exit("简历保存失败！");
	unset($setsqlarr);
	//step2
	//更新详细信息
	$resumearr['recentjobs']=trim($_POST['recentjobs']);//最近工作过的职位
	//期望岗位性质
		$nature=locoyspider_jobs_nature(trim($_POST['nature_cn']));
	$resumearr['nature']=$nature['id'];
	$resumearr['nature_cn']=$nature['cn'];
	//期望工作地区
		$district=locoyspider_jobs_district(trim($_POST['district_cn']));
	$resumearr['district']=$district['district'];
	$resumearr['sdistrict']=$district['sdistrict'];
	$resumearr['district_cn']=$district['district_cn'];
	//期望月薪
		$wage=locoyspider_jobs_wage(trim($_POST['wage_cn']));
	$resumearr['wage']=$wage['id'];
	$resumearr['wage_cn']=$wage['cn'];
	//期望从事行业
		$trade=locoyspider_company_trade(trim($_POST['trade_cn']));
	$resumearr['trade']=$trade['id'];
	$resumearr['trade_cn']=$trade['cn'];
	$resumearr['audit']=1;
	
	//匹配职位  一个职位
	require_once(QISHI_ROOT_PATH.'include/fun_personal.php');
		$category=locoyspider_jobs_category(trim($_POST['intention_jobs']));//$_POST['jobs_category']
	$resumearr['intention_jobs']=trim($category['category_cn']);
	add_resume_jobs($pid,$uid,$category['category'].$category['subclass'])?"":exit('求职意向更新失败');
	//更新一个求职意向
	updatetable(table('resume'),$resumearr," id='{$pid}'  AND   uid='{$uid}'");
	updatetable(table('resume_tmp'),$resumearr," id='{$pid}'  AND   uid='{$uid}'");
	unset($resumearr);
	//step3
	//技能特长
	$setsqlarrspecialty['specialty']=!empty($_POST['specialty'])?$_POST['specialty']:'未填写求职意向！';
	$setsqlarrspecialty['audit']=1;
	updatetable(table('resume'),$setsqlarrspecialty," id='".intval($pid)."' AND uid='".intval($uid)."'");
	updatetable(table('resume_tmp'),$setsqlarrspecialty," id='".intval($pid)."' AND uid='".intval($uid)."'");
	unset($setsqlarrspecialty);
	//step4
	//教育经历
	$seteducationarr['uid']=$uid;
	$seteducationarr['pid']=$pid;
	$seteducationarr['start']=trim($_POST['educationstart']);
	$seteducationarr['endtime']=trim(!empty($_POST['educationendtime'])?$_POST['educationendtime']:'未添加教育经历');
	$seteducationarr['school']=trim($_POST['educationschool']);
	$seteducationarr['speciality']=trim($_POST['educationspeciality']);
	$educationstep4=locoyspider_jobs_education(trim($_POST['educationstep4']));
	$seteducationarr['education']=$educationstep4['id'];
	$seteducationarr['education_cn']=$educationstep4['cn'];
	if (!inserttable(table('resume_education'),$seteducationarr)){
		exit("保存学历失败！");
	}
	unset($seteducationarr);
	//step5
	//工作经验
	$setworkarr['uid']=$uid;
	$setworkarr['pid']=$pid;
	$setworkarr['start']=trim($_POST['workstart']);
	$setworkarr['endtime']=trim($_POST['workendtime']);
	$setworkarr['companyname']=trim(!empty($_POST['workcompanyname'])?$_POST['workcompanyname']:'未添加工作经验');
	$setworkarr['jobs']=trim($_POST['workjobs']);
	$setworkarr['companyprofile']=trim($_POST['workcompanyprofile']);
	$setworkarr['achievements']=trim($_POST['workachievements']);
	if (!inserttable(table('resume_work'),$setworkarr))
		{
			exit("保存工作经历失败");
		}
		unset($setworkarr);
	//step6
	//培训经历
	$settrainingarr['uid']=$uid;
	$settrainingarr['pid']=$pid;
	$settrainingarr['start']=trim($_POST['trainingstart']);
	$settrainingarr['endtime']=trim($_POST['trainingendtime']);
	$settrainingarr['agency']=trim(!empty($_POST['trainingagency'])?$_POST['trainingagency']:'未添加培训经历');
	$settrainingarr['course']=trim($_POST['trainingcourse']);
	$settrainingarr['description']=trim($_POST['trainingdescription']);
	if (!inserttable(table('resume_training'),$settrainingarr))
	{
	exit("保存培训经历失败！");
	}
	unset($settrainingarr);
	//step7
	//头像照片
	require_once(QISHI_ROOT_PATH.'include/upload.php');
	
	global $db;
	$j=$db->getone("select * from ".table('resume')." where id='{$pid}' AND uid='{$uid}' LIMIT 1");
	$searchtab['id']=$j['id'];
	$searchtab['uid']=$j['uid'];
	$searchtab['subsite_id']=$j['subsite_id'];
	$searchtab['sex']=$j['sex'];
	$searchtab['nature']=$j['nature'];
	$searchtab['marriage']=$j['marriage'];
	$searchtab['experience']=$j['experience'];
	$searchtab['district']=$j['district'];
	$searchtab['sdistrict']=$j['sdistrict'];
	$searchtab['wage']=$j['wage'];
	$searchtab['education']=$j['education'];
	$searchtab['photo']=$j['photo'];
	$searchtab['refreshtime']=$j['refreshtime'];
	$searchtab['talent']=$j['talent'];
	if(!inserttable(table('resume_search_rtime'),$searchtab)){
	exit("resume_search_rtime 失败");
	}
	$searchtab['key']=$j['key'];
	if(!inserttable(table('resume_search_key'),$searchtab)){
	exit("resume_search_key 失败");
	}
	unset($searchtab);
	$tag=explode('|',$j['tag']);
	$tagindex=1;
	$tagsql['tag1']=$tagsql['tag2']=$tagsql['tag3']=$tagsql['tag4']=$tagsql['tag5']=0;
	if (!empty($tag) && is_array($tag))
	{
		foreach($tag as $v)
		{
		$vid=explode(',',$v);
		$tagsql['tag'.$tagindex]=intval($vid[0]);
		$tagindex++;
		}
	}
	$tagsql['id']=$j['id'];
	$tagsql['uid']=$j['uid'];
	$tagsql['subsite_id']=$j['subsite_id'];
	$tagsql['experience']=$j['experience'];
	$tagsql['district']=$j['district'];
	$tagsql['sdistrict']=$j['sdistrict'];
	$tagsql['education']=$j['education'];
	if(!inserttable(table('resume_search_tag'),$tagsql)){
	exit("resume_search_tag 失败");
	}
	//更新完成度
	check_resume($uid,$pid);
	exit("简历保存成功！");
}

//添加职位
function locoyspider_addjobs($companyinfo)
{
		global $locoyspider;
		//添加企业信息
		$jobssetsqlarr['uid']=$companyinfo['uid'];		
		$jobssetsqlarr['companyname']=$companyinfo['companyname'];
		$jobssetsqlarr['company_id']=$companyinfo['id'];		
		$jobssetsqlarr['company_addtime']=$companyinfo['addtime'];
		
		$jobssetsqlarr['jobs_name']=trim($_POST['jobs_name']);
		if (empty($jobssetsqlarr['jobs_name']))  exit("职位名称丢失");
		if (ck_jobs_name($jobssetsqlarr['jobs_name'],$jobssetsqlarr['uid'])) exit("职位名称有重复");
		
		$jobssetsqlarr['contents']=$_POST['jobs_contents'];
			//匹配职位性质
			$nature=locoyspider_jobs_nature(trim($_POST['jobs_nature']));
		$jobssetsqlarr['nature']=$nature['id'];
		$jobssetsqlarr['nature_cn']=$nature['cn'];
			//匹配职位 性别
			$sex=locoyspider_jobs_sex(trim($_POST['sex']));
		$jobssetsqlarr['sex']=$sex['id'];
		$jobssetsqlarr['sex_cn']=$sex['cn'];
			//匹配职位 招聘人数
		$jobssetsqlarr['amount']=locoyspider_jobs_amount(trim($_POST['jobs_amount']));
			//匹配职位分类
		$jobs_category=trim($_POST['jobs_category'])?trim($_POST['jobs_category']):$jobssetsqlarr['jobs_name'];
			$category=locoyspider_jobs_category($jobs_category);//$_POST['jobs_category']
		$jobssetsqlarr['category']=$category['category'];
		$jobssetsqlarr['subclass']=$category['subclass'];
		$jobssetsqlarr['category_cn']=$category['category_cn'];
		
		$jobssetsqlarr['trade']=$companyinfo['trade'];
		$jobssetsqlarr['trade_cn']=$companyinfo['trade_cn'];
		$jobssetsqlarr['scale']=$companyinfo['scale'];
		$jobssetsqlarr['scale_cn']=$companyinfo['scale_cn'];
			//匹配工作地区
			$district=locoyspider_jobs_district(trim($_POST['jobs_district']));
		$jobssetsqlarr['district']=$district['district'];
		$jobssetsqlarr['sdistrict']=$district['sdistrict'];
		$jobssetsqlarr['district_cn']=$district['district_cn'];
			//匹配要求学历
			$education=locoyspider_jobs_education(trim($_POST['jobs_education']));
		$jobssetsqlarr['education']=$education['id'];
		$jobssetsqlarr['education_cn']=$education['cn'];
			//匹配要求工作经验
			$experience=locoyspider_jobs_experience(trim($_POST['jobs_experience']));
		$jobssetsqlarr['experience']=$experience['id'];	
		$jobssetsqlarr['experience_cn']=$experience['cn'];
			//匹配薪资待遇
			$wage=locoyspider_jobs_wage(trim($_POST['jobs_wage']));
		$jobssetsqlarr['wage']=$wage['id'];
		$jobssetsqlarr['wage_cn']=$wage['cn'];
		
		$jobssetsqlarr['addtime']=time();
		$jobssetsqlarr['deadline']=locoyspider_jobs_deadline();
		$jobssetsqlarr['refreshtime']=time();
		$jobssetsqlarr['key']=$jobssetsqlarr['jobs_name'].$companyinfo['companyname'].$jobssetsqlarr['category_cn'].$jobssetsqlarr['district_cn'].$jobssetsqlarr['contents'];
		require_once(QISHI_ROOT_PATH.'include/splitword.class.php');
		$sp = new SPWord();
		$jobssetsqlarr['key']="{$jobssetsqlarr['jobs_name']} {$companyinfo['companyname']} ".$sp->extracttag($jobssetsqlarr['key']);
		$jobssetsqlarr['key']=$sp->pad($jobssetsqlarr['key']);
		$jobssetsqlarr['audit']=$locoyspider['jobs_audit'];
		$jobssetsqlarr['display']=$locoyspider['jobs_display'];
		$jobssetsqlarr['robot']=1;
		$pid=inserttable(table('jobs'),$jobssetsqlarr,true);
		if (!$pid) exit("添加招聘信息失败");
		//职位联系方式
		$setsqlarr_contact['contact']=trim($_POST['contact']);
		$setsqlarr_contact['qq']=trim($_POST['qq']);
		$setsqlarr_contact['telephone']=trim($_POST['telephone']);
		$setsqlarr_contact['address']=trim($_POST['address']);
		$setsqlarr_contact['email']=trim($_POST['email']);
		$setsqlarr_contact['notify']=$locoyspider['jobs_notify'];
		$setsqlarr_contact['pid']=$pid;
		if (!inserttable(table('jobs_contact'),$setsqlarr_contact)) exit("添加招聘联系方式失败");
		//------
		$searchtab['id']=$pid;
		$searchtab['uid']=$jobssetsqlarr['uid'];
		$searchtab['recommend']=$jobssetsqlarr['recommend'];
		$searchtab['emergency']=$jobssetsqlarr['emergency'];
		$searchtab['nature']=$jobssetsqlarr['nature'];
		$searchtab['sex']=$jobssetsqlarr['sex'];
		$searchtab['category']=$jobssetsqlarr['category'];
		$searchtab['subclass']=$jobssetsqlarr['subclass'];
		$searchtab['trade']=$jobssetsqlarr['trade'];
		$searchtab['district']=$jobssetsqlarr['district'];
		$searchtab['sdistrict']=$jobssetsqlarr['sdistrict'];	
		$searchtab['street']=$companyinfo['street'];
		$searchtab['officebuilding']=$companyinfo['officebuilding'];	
		$searchtab['education']=$jobssetsqlarr['education'];
		$searchtab['experience']=$jobssetsqlarr['experience'];
		$searchtab['wage']=$jobssetsqlarr['wage'];
		$searchtab['refreshtime']=$jobssetsqlarr['refreshtime'];
		$searchtab['scale']=$jobssetsqlarr['scale'];	
		//
		inserttable(table('jobs_search_wage'),$searchtab);
		inserttable(table('jobs_search_scale'),$searchtab);
		inserttable(table('jobs_search_rtime'),$searchtab);
		//
		$searchtab['stick']=$jobssetsqlarr['stick'];
		inserttable(table('jobs_search_stickrtime'),$searchtab);
		unset($searchtab['stick']);
		//
		$searchtab['click']=$jobssetsqlarr['click'];
		inserttable(table('jobs_search_hot'),$searchtab);
		unset($searchtab['click']);
		//
		$searchtab['key']=$jobssetsqlarr['key'];
		inserttable(table('jobs_search_key'),$searchtab);
		$tagsql['tag1']=$tagsql['tag2']=$tagsql['tag3']=$tagsql['tag4']=$tagsql['tag5']=0;
		$tagsql['id']=$pid;
		$tagsql['uid']=$jobssetsqlarr['uid'];
		$tagsql['category']=$jobssetsqlarr['category'];
		$tagsql['subclass']=$jobssetsqlarr['subclass'];
		$tagsql['district']=$jobssetsqlarr['district'];
		$tagsql['sdistrict']=$jobssetsqlarr['sdistrict'];	
		inserttable(table('jobs_search_tag'),$tagsql);
		require_once(ADMIN_ROOT_PATH.'include/admin_company_fun.php');
		distribution_jobs($pid);
		exit("添加成功");
		
		
}
//添加企业
function locoyspider_addcompany($companyname)
{
	global $locoyspider;
		$setsqlarr['uid']=locoyspider_user_register(trim($_POST['email']));
		if ($setsqlarr['uid']=="") exit("添加会员出错");
		$setsqlarr['companyname']=$companyname;
			//匹配企业性质
			$nature=locoyspider_company_nature(trim($_POST['nature']));
		$setsqlarr['nature']=$nature['id'];
		$setsqlarr['nature_cn']=$nature['cn'];
			//匹配企业行业
			$trade=locoyspider_company_trade(trim($_POST['trade']));
		$setsqlarr['trade']=$trade['id'];
		$setsqlarr['trade_cn']=$trade['cn'];
			//匹配企业地区
			$district=locoyspider_company_district(trim($_POST['district']));
		$setsqlarr['district']=$district['district'];
		$setsqlarr['sdistrict']=$district['sdistrict'];
		$setsqlarr['district_cn']=$district['district_cn'];
			//匹配企业规模
			$scale=locoyspider_company_scale(trim($_POST['scale']));
		$setsqlarr['scale']=$scale['id'];
		$setsqlarr['scale_cn']=$scale['cn'];
			//匹配企业注册资金
	 		$registered=locoyspider_company_registered(trim($_POST['registered']));
		$setsqlarr['registered']=$registered['registered'];
		$setsqlarr['currency']=$registered['currency'];
			
		$setsqlarr['address']=trim($_POST['address']);
		$setsqlarr['contact']=trim($_POST['contact']);
		$setsqlarr['telephone']=trim($_POST['telephone']);
		$setsqlarr['email']=trim($_POST['email']);
		$setsqlarr['website']=trim($_POST['website']);
		$setsqlarr['contents']=$_POST['contents'];
		
		$setsqlarr['audit']=intval($locoyspider['company_audit']);
		$setsqlarr['addtime']=time();
		$setsqlarr['refreshtime']=time();
		$setsqlarr['robot']=1;
		if (!inserttable(table('company_profile'),$setsqlarr)) exit("添加企业出错");
		return true;
}
//获取随机字符串
function res_randstr($length=6)
{
	$hash='';
	$chars= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz@#!~?:-=';   
	$max=strlen($chars)-1;   
	mt_srand((double)microtime()*1000000);   
	for($i=0;$i<$length;$i++)   {   
	$hash.=$chars[mt_rand(0,$max)];   
	}   
	return $hash;   
}
//模糊搜索
function locoyspider_search_str($arr,$str,$arrinname)
{
		global $locoyspider;
 
		foreach ($arr as $key =>$list)
		{
			similar_text($list[$arrinname],$str,$percent);
			$od[$percent]=$key;
		}
			krsort($od);
			foreach ($od as $key =>$li)
			{
				if ($key>=$locoyspider['search_threshold'])
				{
				return $arr[$li];
				}
				else
				{
				return false;
				}
			}	
} 
?>