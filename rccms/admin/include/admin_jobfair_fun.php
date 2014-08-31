<?php
 /*
 * �׺��˲��� ��Ƹ��
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
function get_jobfair($offset, $perpage, $sql= '')
{
	global $db;
	$row_arr = array();
	$limit=" LIMIT ".$offset.','.$perpage;
	$result = $db->query("SELECT * FROM ".table('jobfair')." ".$sql." ".$limit);
	while($row = $db->fetch_array($result))
	{
	$color = $row['color'] ? "color:".$row['color'].";" : '';
	$weight = $row['weight']>0 ? "font-weight:bold;" : '';
	if  ($color || $weight)
	{
	$row['title']="<span style=\"{$color}{$weight}\">{$row['title']}</span>";
	}
	$row_arr[] = $row;
	}
	return $row_arr;
}
function get_jobfair_display()
{
	global $db;
	$info = $db->getall("SELECT * FROM ".table('jobfair')." WHERE display=1  order BY `order` DESC,id DESC");
	return $info;
}
function get_jobfair_audit()
{
	global $db;
	$info = $db->getall("SELECT * FROM ".table('jobfair')." WHERE display=1 AND predetermined_status=1 AND holddates>".time()." order BY `order` DESC,id DESC");
	return $info;
}
function del_jobfair($id)
{
	global $db;
	if(!is_array($id)) $id=array($id);
	$return=0;
	$sqlin=implode(",",$id);
	if (preg_match("/^(\d{1,10},)*(\d{1,10})$/",$sqlin))
	{
		if (!$db->query("Delete from ".table('jobfair')." WHERE id IN (".$sqlin.")")) return false;
		$return=$return+$db->affected_rows();
	}
	return $return;
}
function get_jobfair_exhibitors($offset, $perpage, $sql= '')
{
	global $db;
	$row_arr = array();
	$limit=" LIMIT ".$offset.','.$perpage;
	$result = $db->query("SELECT * FROM ".table('jobfair_exhibitors')." ".$sql." ".$limit);
	while($row = $db->fetch_array($result))
	{
	if ($row['uid']>0 && $row['company_id']>0)
	{
	$row['company_url']=url_rewrite('QS_companyshow',array('id'=>$row['company_id']));
	}
	else
	{
	$row['company_url']="";
	}	
	$row['jobfair_url']=url_rewrite('QS_jobfairshow',array('id'=>$row['jobfairid']));
	$row_arr[] = $row;
	}
	return $row_arr;
}
function del_exhibitors($id)
{
	global $db;
	if(!is_array($id)) $id=array($id);
	$return=0;
	$sqlin=implode(",",$id);
	if (preg_match("/^(\d{1,10},)*(\d{1,10})$/",$sqlin))
	{
		if (!$db->query("Delete from ".table('jobfair_exhibitors')." WHERE id IN (".$sqlin.")")) return false;
		$return=$return+$db->affected_rows();
	}
	return $return;
}
function edit_exhibitors_audit($id,$audit)
{
	global $db;
	if (!is_array($id))$id=array($id);
	$return=0;
	$sqlin=implode(",",$id);	
	if (preg_match("/^(\d{1,10},)*(\d{1,10})$/",$sqlin))
	{
		if (!$db->query("update  ".table('jobfair_exhibitors')." SET audit='".intval($audit)."'  WHERE id IN (".$sqlin.")")) return false;
		$return=$return+$db->affected_rows();
	}
	return $return;
}
?>