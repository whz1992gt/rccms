<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_help_category`;");
E_C("CREATE TABLE `qs_help_category` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `parentid` smallint(5) unsigned NOT NULL,
  `categoryname` varchar(80) NOT NULL,
  `category_order` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=gbk");
E_D("replace into `qs_help_category` values('1','0','�˻�����','3');");
E_D("replace into `qs_help_category` values('2','0','������ҵ','2');");
E_D("replace into `qs_help_category` values('3','0','���Ǹ���','1');");
E_D("replace into `qs_help_category` values('4','1','ע�����¼','0');");
E_D("replace into `qs_help_category` values('5','1','�����һ�������','0');");
E_D("replace into `qs_help_category` values('6','1','�˻�״̬','0');");
E_D("replace into `qs_help_category` values('7','1','������ͷ��','0');");
E_D("replace into `qs_help_category` values('8','1','�ֻ���������֤','0');");
E_D("replace into `qs_help_category` values('9','2','ְλ���������','0');");
E_D("replace into `qs_help_category` values('10','2','ְλ�ƹ�','0');");
E_D("replace into `qs_help_category` values('11','2','��Ƹ����','0');");
E_D("replace into `qs_help_category` values('12','2','��Ƹ��','0');");
E_D("replace into `qs_help_category` values('13','2','��ֵ������','0');");
E_D("replace into `qs_help_category` values('14','2','ʹ����Ʒ��','0');");
E_D("replace into `qs_help_category` values('15','2','�������ͼ','0');");
E_D("replace into `qs_help_category` values('16','3','�������������','0');");
E_D("replace into `qs_help_category` values('17','3','��ְ����','0');");

require("../../inc/footer.php");
?>