<?php
 /*
 * �׺��˲��� ajax ��������
 * ============================================================================
 * ��Ȩ����: �׺����磬����������Ȩ����
 * ��վ��ַ: http://www.mandnt.com��
 * ----------------------------------------------------------------------------
 * �ⲻ��һ�������������ֻ���ڲ�������ҵĿ�ĵ�ǰ���¶Գ����������޸ĺ�
 * ʹ�ã�������Գ���������κ���ʽ�κ�Ŀ�ĵ��ٷ�����
 * ============================================================================
*/
define('IN_QISHI', true);
require_once(dirname(dirname(__FILE__)).'/include/plus.common.inc.php');
if ($_CFG['open_comment']=='0')
{
exit();
}
$act = !empty($_POST['act']) ? trim($_POST['act']) :trim($_GET['act']);
if ($act=='')
{
$id=intval($_GET['id']);
$jobs=$db->getone("select * from ".table('jobs')." where id='{$id}' LIMIT 1");
$captcha=get_cache('captcha');
$html="";
$html.="<div class=\"commentbox\">";
$html.="<div class=\"commenttopbox\">";
if ($_SESSION['uid']=='' || $_SESSION['username']=='' || intval($_SESSION['uid'])===0)
{
$html.="<div class=\"loginbox link_lan\">";
$html.="����û�е�¼���� <a href=\"".url_rewrite('QS_login')."\">��¼</a> �� <a href=\"".$_CFG['site_dir']."user/user_reg.php\">ע��</a>";
$html.="</div>";
}
$html.="<div class=\"titbox\">";
$html.="<div class=\"tleft\">�������ۣ�</div><div class=\"tright link_bk\"><a  href=\"".url_rewrite('QS_companycommentshow',array('id'=>$id))."\" target=\"_blank\">��<span id=\"countcomment\">{$jobs['comment']}</span>������</a></div><div class=\"clear\"></div>";
$html.="</div>";
$html.="<div class=\"textareabox\">";
$html.="<textarea name=\"\" cols=\"\" rows=\"\" id=\"content\" >�������������Է���</textarea>";
$html.="</div>";
$html.="<div class=\"buttonbox\">";
$html.="<div class=\"bleft\">";
if ($captcha['verify_comment']=='1')
{
$html.="<script type=\"text/javascript\">";
$html.="$(document).ready(function()";
$html.="{";
$html.="function imgcaptcha(inputID,imgdiv)";
$html.="{";
$html.="$(inputID).focus(function(){";
$html.="if ($(inputID).val()==\"�����ȡ��֤��\")";
$html.="{";
$html.="$(inputID).val(\"\");";
$html.="$(inputID).css(\"color\",\"#333333\");";
$html.="}";
$html.="$(inputID).parent(\"div\").css(\"position\",\"relative\");";
$html.="$(imgdiv).css({ position: \"absolute\", left:  $(inputID).width(), \"bottom\": \"0px\" , \"z-index\": \"10\", \"background-color\": \"#FFFFFF\", \"border\": \"1px #A3C8DC solid\",\"display\": \"none\",\"margin-left\": \"15px\"});";
$html.="$(imgdiv).show();";
$html.="if ($(imgdiv).html()=='')";
$html.="{";
$html.="var tsTimeStamp= new Date().getTime();";
$html.="$(imgdiv).append(\"<img src='{$_CFG['site_dir']}include/imagecaptcha.php?t='\"+tsTimeStamp+\" id='getcode' align='absmiddle'  style='cursor:pointer; margin:3px;' title='��������֤�룿�������һ��' border='0'/>\");";
$html.="}";
$html.="$(imgdiv+\" img\").click(function()";
$html.="{";
$html.="$(imgdiv+\" img\").attr(\"src\",$(imgdiv+\" img\").attr(\"src\")+\"1\");";
$html.="});";
$html.="$(document).unbind().click(function(event)";
$html.="{";
$html.="var clickid=$(event.target).attr(\"id\");";
$html.="if (clickid!=\"getcode\" &&  clickid!=\"postcaptcha\")";
$html.="{";
$html.="$(imgdiv).hide();";
$html.="$(inputID).parent(\"div\").css(\"position\",\"\");";
$html.="$(document).unbind();";
$html.="}";		
$html.="});";
$html.="});";
$html.="}";
$html.="imgcaptcha(\"#postcaptcha\",\"#imgdiv\");";
$html.="});";
$html.="</script>";
$html.="<div><div id=\"imgdiv\"></div>";
$html.="<input type=\"text\" name=\"postcaptcha\" id=\"postcaptcha\" value=\"�����ȡ��֤��\"/>";
$html.="</div>";
}
$html.="</div>";
$html.="<div class=\"bcenter\" id=\"posterr\"></div>";
$html.="<div class=\"bright\"><input name=\"\" type=\"submit\" class=\"button\" value=\"����\" id=\"submitcomment\" />";
$html.="</div>";
$html.="<div class=\"clear\"></div>";
$html.="</div>";
$html.="</div>";
$html.="<div id=\"comment_list_box\">";
$commentarray=$db->getall("select  c.*,m.avatars,m.username from ".table('comment')." as c LEFT JOIN  ".table('members')." AS m ON c.uid=m.uid where jobs_id = '{$id}' ORDER BY c.id DESC LIMIT 5");
if (!empty($commentarray))
{
	foreach($commentarray as $li)
	{
		$html.="<div class=\"listbox\" id=\"li-0\"><div class=\"leftimgbox\">";
			if ($li['avatars'])
			{
			$html.="<img src=\"{$_CFG['site_dir']}data/avatar/48/{$li['avatars']}\" border=\"0\" width=\"48\" height=\"48\"/>";
			}
			else
			{
			$html.="<img src=\"{$_CFG['site_dir']}data/avatar/_no_photo.gif\" border=\"0\" width=\"48\" height=\"48\"/>";
			}
		$html.="</div><div class=\"txtbox\"><strong>{$li['username']}</strong><span>".date('Y-m-d H:i',$li['addtime'])."</span><br />{$li['content']}</div><div class=\"clear\"></div></div>";
}
$html.="</div>";
$html.="<div class=\"comment_more\" ><span>���ظ���...</span></div>";
}
else
{
$html.="</div>";
$html.="<div class=\"noinfo\">Ŀǰ��û���˷������ۣ�</div>";
$html.="<div class=\"comment_more\" style=\"display:none\"><span>���ظ���...</span></div>";
}
$html.="</div>";
$html.="<script type=\"text/javascript\">";
$html.="$(document).ready(function()";
$html.="{";
$html.="$(\"#content\").focus(function(){";
$html.="if ($(\"#content\").val()==\"�������������Է���\")";
$html.="{";
$html.="$(\"#content\").val('');";
$html.="} "; 
$html.="});";
$html.="$(\"#submitcomment\").click(function(){";
$html.="$(\"#posterr\").html('');";
$html.="var content=$(\"#content\").val();";
$html.="var postcaptcha=$(\"#postcaptcha\").val();";
$html.="if (content=='' || content=='�������������Է���')";
$html.="{";
$html.="$(\"#posterr\").html('����д����');";
$html.="}";
$html.="else if (content.length<5 || content.length>300)";
$html.="{";
$html.="$(\"#posterr\").html('���ݳ���Ϊ����Ϊ5-300���ַ���');";
$html.="}";
if ($captcha['verify_comment']=='1')
{
$html.="else if (postcaptcha=='' || postcaptcha=='�����ȡ��֤��')";
$html.="{";
$html.="$(\"#posterr\").html('����д��֤��');";
$html.="}";
}
$html.="else";
$html.="{";
$html.="$(\"#submitcomment\").val('�ύ��').attr(\"disabled\",\"disabled\");";
$html.="$.post(\"{$_CFG['site_dir']}plus/ajax_comment.php\", {\"content\": $(\"#content\").val(),\"postcaptcha\": $(\"#postcaptcha\").val(),\"jobs_id\": \"{$jobs['id']}\",\"company_id\": \"{$jobs['company_id']}\",\"time\": new Date().getTime(),\"act\":\"comment_save\"},";
$html.="function (data,textStatus)";
$html.="{";
$html.="if (data==\"err\" || data==\"errcaptcha\" || data==\"err1\")";
$html.="{";		
$html.="$(\"#submitcomment\").val('�ύ').attr(\"disabled\",\"\");";
$html.="$(\"#posterr\").html('');";
$html.="if (data==\"err\")";
$html.="{";
$html.="errinfo=\"����ʧ�ܣ�\";";
$html.="}";
$html.="else if(data==\"errcaptcha\")";
$html.="{";
$html.="$(\"#imgdiv img\").attr(\"src\",$(\"#imgdiv img\").attr(\"src\")+\"1\");";
$html.="errinfo=\"��֤�����\";";
$html.="}";
$html.="if (data==\"err1\")";
$html.="{";
$html.="errinfo=\"�����췢������۹��࣬�����������԰ɣ�\";";
$html.="}";
$html.="$(\"#posterr\").html(errinfo);";
$html.="}";
$html.="else";
$html.="{";
$html.="$(\"#submitcomment\").val('�ύ').attr(\"disabled\",\"\");";
$html.="$(\"#countcomment\").html(data);";
$html.="$(\"#content\").val('');";
$html.="$(\"#postcaptcha\").val('�����ȡ��֤��');";
$html.="$(\"#imgdiv img\").attr(\"src\",$(\"#imgdiv img\").attr(\"src\")+\"1\");";
$html.="var tsTimeStamp= new Date().getTime();";
$html.="$.get(\"{$_CFG['site_dir']}plus/ajax_comment.php\", { \"id\": \"{$jobs['id']}\",\"time\":tsTimeStamp,\"act\":\"show_list\",\"offset\":\"0\",\"rows\":\"5\"},";
$html.="function (data,textStatus)";
$html.="{";
$html.="$(\"#comment_list_box\").html(data);";
$html.="$(\".comment_more\").show();";
$html.="$(\".noinfo\").remove();";
$html.="$(\".comment_more span\").html('���ظ���...');";
$html.="}";
$html.=");";
$html.="alert('����ɹ�');";
$html.="}";
$html.="})	";
$html.="}";
$html.="});";
//���ظ���
$html.="$(\".comment_more\").click(function(){";
$html.="$(\".comment_more\").show();";
$html.="$(\".comment_more span\").html('���ڼ��أ����Ժ�...');";
$html.="var offset=$(\"#comment_list_box div[class='listbox']:last-child\").attr('id');";
$html.="offset=parseInt(offset.substr(3));";
$html.="var tsTimeStamp= new Date().getTime();";
$html.="$.get(\"{$_CFG['site_dir']}plus/ajax_comment.php\", { \"id\": \"{$jobs['id']}\",\"time\":tsTimeStamp,\"act\":\"show_list\",\"offset\":offset+5,\"rows\":\"5\"},";
$html.="function (data,textStatus)";
$html.="{";
$html.="if (data=='empty!')";
$html.="{";
$html.="$(\".comment_more span\").html('�Ѽ����������ݣ�');";
//$html.="$(\".comment_more\").unbind();";
$html.="}";
$html.="else";
$html.="{";
$html.="$(\".comment_more span\").html('���ظ���...');";
$html.="$(\"#comment_list_box\").append(data);";
$html.="}";
$html.="}";
$html.=");";
$html.="});";
$html.="});";
$html.="</script>";
exit($html);
}
elseif ($act=='comment_save')
{
	if ($_SESSION['uid']=='' || $_SESSION['username']=='' || intval($_SESSION['uid'])===0)
	{
	exit('err');
	}
	$today=mktime(0,0,0,date("m"),date("d"),date("Y"));
	$n=$db->get_total("SELECT COUNT(*) AS num FROM ".table('comment')." WHERE uid='".intval($_SESSION['uid'])."' AND addtime>{$today}");
	if($n>=30)
	{
	 exit('err1');
	}
	$captcha=get_cache('captcha');
	if ($captcha['verify_comment']=="1")
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
			unset($_SESSION['imageCaptcha_content']);
	}
	$setsqlarr['content']=trim($_POST['content']);
	if (strcasecmp(QISHI_DBCHARSET,"utf8")!=0)
	{
	$setsqlarr['content']=iconv("utf-8",QISHI_DBCHARSET,$setsqlarr['content']);
	}
	$setsqlarr['uid']=intval($_SESSION['uid']);
	$setsqlarr['jobs_id']=intval($_POST['jobs_id']);
	$setsqlarr['company_id']=intval($_POST['company_id']);
	$setsqlarr['addtime']=time();
	inserttable(table('comment'),$setsqlarr);
	$sql="update ".table('jobs')." set comment=comment+1 WHERE id='{$setsqlarr['jobs_id']}'  LIMIT 1";
	$db->query($sql);
	$jobs=$db->getone("select comment from ".table('jobs')." where id='{$setsqlarr['jobs_id']}' LIMIT 1");
	exit($jobs['comment']);
}
elseif ($act=='show_list')
{
$commenthtml="";
$rows=intval($_GET['rows']);
$offset=intval($_GET['offset']); 
$id=intval($_GET['id']); 
$commentarray=$db->getall("select  c.*,m.avatars,m.username from ".table('comment')." as c LEFT JOIN  ".table('members')." AS m ON c.uid=m.uid where jobs_id = '{$id}' ORDER BY c.id DESC LIMIT {$offset},{$rows}");
if (!empty($commentarray) && $offset<=100)
{
	foreach($commentarray as $li)
	{
		$commenthtml.="<div class=\"listbox\" id=\"li-{$offset}\"><div class=\"leftimgbox\">";
			if ($li['avatars'])
			{
			$commenthtml.="<img src=\"{$_CFG['site_dir']}data/avatar/48/{$li['avatars']}\" border=\"0\" width=\"48\" height=\"48\"/>";
			}
			else
			{
			$commenthtml.="<img src=\"{$_CFG['site_dir']}data/avatar/_no_photo.gif\" border=\"0\" width=\"48\" height=\"48\"/>";
			}
		$commenthtml.="</div><div class=\"txtbox\"><strong>{$li['username']}</strong><span>".date('Y-m-d H:i',$li['addtime'])."</span><br />{$li['content']}</div><div class=\"clear\"></div></div>";
	}
	exit($commenthtml);
}
else
{
	exit('empty!');
}
}
?>