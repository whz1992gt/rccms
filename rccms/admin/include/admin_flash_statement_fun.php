<?php
 /*
 * �׺��˲��� FLASH����
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

function get_userreg_30_days()
{
	global $db;
	$xml="userreg_30_days.xml";
	if (!check_xml($xml))
	{
		$datelist=array();
		for ($i = 30; $i>=1; $i--)
		{
		$day=date("m/d",strtotime("-{$i} day"));
		$datelist[$day]=0;
		}
		$result = $db->query("SELECT * FROM ".table('members_log')." WHERE log_type=1000 and  log_addtime>".strtotime("-30 day"));
		while($row = $db->fetch_array($result))
		{
			$date=date("m/d",$row['log_addtime']);
			$datelist[$date]++;
		}
		write_xml($xml,$datelist);
	}	 
}
function check_xml($xml)
{
	$xmlname=ADMIN_ROOT_PATH."statement/{$xml}";
	if (!is_writable(ADMIN_ROOT_PATH.'statement/'))
	{
	exit("���Ƚ���̨��statement��Ŀ¼���ÿɶ�д��");
	}
	if (file_exists($xmlname))
	{
		$filemtime=filemtime($xmlname);
		if ($filemtime>strtotime("-1 day"))
		{
			return true;
		}
	}
	return false;
}
function write_xml($xml, $array)
{
	$content = "<graph divlinecolor='FEDD69' numdivlines='4' showAreaBorder='1' areaBorderColor='cccccc' numberPrefix='' showNames='1' numVDivLines='29' vDivLineAlpha='30' formatNumberScale='0' rotateNames='1'  decimalPrecision='0' bgColor='' yAxisName=''  showAlternateVGridColor='0' canvasBorderThickness='0' decimalPrecision='0' areaBorderColor='cccccc'>
>\n";
	$content .= "<categories fontSize='9'>\n";
	foreach($array as $key => $value)
	{
	$content .= "<category name='{$key}'/>\n";
	}
	$content .= "</categories>\n";
	$content .= "<dataset  color='00CC00' showValues='0' areaAlpha='30' showAreaBorder='1' areaBorderThickness='1' areaBorderColor='006600'>\n";
	foreach($array as $key => $value)
	{
	$content .= "<set value='{$value}' />\n";
	}
	$content .= "</dataset>\n";
	$content .= "</graph>\n";
	$xmlname=ADMIN_ROOT_PATH."statement/{$xml}";
	if (!file_put_contents($xmlname, $content, LOCK_EX))
	{
		$fp = @fopen($xmlname, 'wb+');
		if (!$fp)
		{
			exit('��xml�ļ�ʧ�ܣ������ú�̨Ŀ¼��statement���Ķ�дȨ��');
		}
		if (!@fwrite($fp, trim($content)))
		{
			exit('��xml�ļ�ʧ�ܣ������ú�̨Ŀ¼��statement���Ķ�дȨ��');
		}
		@fclose($fp);
	}
}
?>