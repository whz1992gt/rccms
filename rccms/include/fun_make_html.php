<?php

 /*

 * �׺��˲��� ����HTML

 * ============================================================================

 * ��Ȩ����: �׺����磬����������Ȩ����

 * ��վ��ַ: http://www.mandnt.com��

 * ----------------------------------------------------------------------------

 * �ⲻ��һ�������������ֻ���ڲ�������ҵĿ�ĵ�ǰ���¶Գ����������޸ĺ�

 * ʹ�ã�������Գ���������κ���ʽ�κ�Ŀ�ĵ��ٷ�����

 * ============================================================================

*/

 if(!defined('IN_QISHI'))

 {

 	die('Access Denied!');

 }

//������ҵ����Ƹ����ҵ����

function make_html_company($uid)

{

		make_html_company_show($uid);

		make_html_company_jobs($uid);

}

 //��ҵ����HTML

function make_html_company_show($uid)

{

	global $db,$_PAGE;

	if ($_PAGE['QS_companyshow']['url']=="2")

	{

	$sql = "select id,addtime from ".table('company_profile')." where uid=".intval($uid)." LIMIT 1";

	$val=$db->getone($sql);

	html_output('QS_companyshow',array('id0'=>$val['id'],'addtime'=>$val['addtime']));

	}

}

 //ְλHTML

function make_html_company_jobs($uid)

{

	global $db,$_PAGE;

	if ($_PAGE['QS_jobsshow']['url']=="2")

	{

		$sql = "select id,addtime from ".table('jobs')." WHERE uid=".intval($uid)."";

		$val=$db->getall($sql);

			foreach($val as $job)

			{

			html_output("QS_jobsshow",array('id0'=>$job['id'],'addtime'=>$job['addtime']));

			}

	}

}

//����HTM

function make_html_resume_show($id)

{

	global $db,$_PAGE;

		if ($_PAGE['QS_resumeshow']['url']=="2")

		{

		$sql = "select id,addtime from ".table('resume')." where id=".intval($id)." LIMIT 1";

		$val=$db->getone($sql);

		html_output('QS_resumeshow',array('id0'=>$val['id'],'addtime'=>$val['addtime']));

		}

}

//����HTML

function html_output($alias=NULL,$getarr=NULL)

{

	global $db,$smarty,$_CFG,$_PAGE;

	if (is_array($getarr)) extract($getarr);

	$mypage=$_PAGE[$alias];

	if ($mypage['url']=='2')

	{

	$page_select=$mypage['tag'];

	$id0?$_GET['id']=$id0:'';

	$page?$_GET['page']=$page:'';

	$smarty -> assign('page_select',$page_select);

	$id=intval($_GET['id']);

	if ($mypage['alias']=="QS_companyshow")

	{		

		$content=$smarty->fetch(get_tpl("company_profile",$id));

	}

	elseif ($mypage['alias']=="QS_jobsshow")

	{

	$content=$smarty->fetch(get_tpl("jobs",$id));

	}

	elseif ($mypage['alias']=="QS_resumeshow")

	{

	$content=$smarty->fetch(get_tpl("resume",$id));

	}

	else

	{

	$content=$smarty->fetch($mypage['tpl']);

	}

	$htmlfile_name=url_rewrite($alias,$getarr);

	strrchr($htmlfile_name,'/')=='/'?$htmlfile_name=$htmlfile_name."index.html":'';

	$dir=substr(QISHI_ROOT_PATH,0,"-".strlen($_CFG['site_dir'])).$htmlfile_name;

	return make_html($dir,$content);

	}

	else

	{

	return false;

	}

}

//�����ļ�

function make_html($file_name,$content) 

     {

	 $dir=dirname($file_name);

         if (!file_exists($dir))

		 {

  		 make_dir($dir);

         }

          if(!$fp = fopen($file_name,"w")) return false;

          if(!fwrite($fp,$content))

		  { 

          return false;

          } 

         fclose($fp);

         chmod($file_name,0777);

		 return $file_name;

      }

?>