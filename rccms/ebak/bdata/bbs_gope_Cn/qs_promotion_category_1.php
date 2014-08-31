<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_promotion_category`;");
E_C("CREATE TABLE `qs_promotion_category` (
  `cat_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cat_available` tinyint(1) NOT NULL DEFAULT '1',
  `cat_name` varchar(30) NOT NULL,
  `cat_type` tinyint(3) unsigned NOT NULL,
  `cat_minday` smallint(5) unsigned NOT NULL DEFAULT '0',
  `cat_maxday` int(10) unsigned NOT NULL DEFAULT '0',
  `cat_points` int(10) NOT NULL DEFAULT '0',
  `cat_notes` text NOT NULL,
  `cat_order` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk");
E_D("replace into `qs_promotion_category` values('1','1','�Ƽ�ְλ','1','15','360','3','<p>ְλ�Ƽ�����վ��ҳ�Ƽ�ְλ��Ŀ������������Ƽ�ְλ���������Ժܴ�̶����������ƸЧ�ʡ�<br />\r\n�Ƽ�ְλ���ں��Զ�ȡ���Ƽ���</p>','0');");
E_D("replace into `qs_promotion_category` values('2','1','������Ƹ','1','7','360','3','<p>���ý�����Ƹ��ְλ����������ҳ������Ƹ��Ŀ�У�������ְλ���ƺ����м�Ƹ������ͼƬ��</p>\r\n<p>������Ƹ�ǰ���Ʒѣ����ں��Զ�ȡ����</p>','0');");
E_D("replace into `qs_promotion_category` values('3','1','ְλ�ö�','1','7','360','6','<p>�ö���Ƹ������ְλ�б���ҳ�ö���ʾ������Ч�����ƸЧ�ʡ�</p>\r\n<p>�ö���Ƹ�ǰ���Ʒѣ����ں��Զ�ȡ����</p>','0');");
E_D("replace into `qs_promotion_category` values('4','1','ְλ��ɫ','1','7','360','2','<p>ͨ���˷�����������ְλ������ɫ����任������������Ŀ��</p>\r\n<p>ְλ��ɫ�ǰ���Ʒѣ����ں��Զ�ȡ����</p>','0');");

require("../../inc/footer.php");
?>