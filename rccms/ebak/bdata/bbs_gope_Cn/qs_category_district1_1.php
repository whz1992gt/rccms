<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_category_district1`;");
E_C("CREATE TABLE `qs_category_district1` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parentid` int(10) unsigned NOT NULL DEFAULT '0',
  `categoryname` varchar(30) NOT NULL,
  `category_order` smallint(5) unsigned NOT NULL DEFAULT '0',
  `stat_jobs` varchar(15) NOT NULL,
  `stat_resume` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=539 DEFAULT CHARSET=gbk");
E_D("replace into `qs_category_district1` values('1','0','������','0','','');");
E_D("replace into `qs_category_district1` values('2','0','�Ϻ���','0','','');");
E_D("replace into `qs_category_district1` values('3','0','�����','0','','');");
E_D("replace into `qs_category_district1` values('4','0','������','0','','');");
E_D("replace into `qs_category_district1` values('5','0','�ӱ�ʡ','0','','');");
E_D("replace into `qs_category_district1` values('6','0','ɽ��ʡ','0','','');");
E_D("replace into `qs_category_district1` values('7','0','���ɹ�','0','(1)','');");
E_D("replace into `qs_category_district1` values('8','0','����ʡ','0','(1)','');");
E_D("replace into `qs_category_district1` values('9','0','����ʡ','0','','');");
E_D("replace into `qs_category_district1` values('10','0','������ʡ','0','','');");
E_D("replace into `qs_category_district1` values('11','0','����ʡ','0','','');");
E_D("replace into `qs_category_district1` values('12','0','�㽭ʡ','0','','');");
E_D("replace into `qs_category_district1` values('13','0','����ʡ','0','','');");
E_D("replace into `qs_category_district1` values('14','0','����ʡ','0','','');");
E_D("replace into `qs_category_district1` values('15','0','����ʡ','0','','');");
E_D("replace into `qs_category_district1` values('16','0','ɽ��ʡ','0','(1)','');");
E_D("replace into `qs_category_district1` values('17','0','����ʡ','0','','');");
E_D("replace into `qs_category_district1` values('18','0','����ʡ','0','','');");
E_D("replace into `qs_category_district1` values('19','0','����ʡ','0','','');");
E_D("replace into `qs_category_district1` values('20','0','�㶫ʡ','0','(3)','');");
E_D("replace into `qs_category_district1` values('21','0','����','0','','');");
E_D("replace into `qs_category_district1` values('22','0','����ʡ','0','','');");
E_D("replace into `qs_category_district1` values('23','0','�Ĵ�ʡ','0','','');");
E_D("replace into `qs_category_district1` values('24','0','����ʡ','0','','');");
E_D("replace into `qs_category_district1` values('25','0','����ʡ','0','','');");
E_D("replace into `qs_category_district1` values('26','0','����','0','','');");
E_D("replace into `qs_category_district1` values('27','0','����ʡ','0','(3)','');");
E_D("replace into `qs_category_district1` values('28','0','����ʡ','0','','');");
E_D("replace into `qs_category_district1` values('29','0','�ຣʡ','1','(102)','(1)');");
E_D("replace into `qs_category_district1` values('30','0','������','2','(672)','(5659)');");
E_D("replace into `qs_category_district1` values('31','0','�½�','0','','');");
E_D("replace into `qs_category_district1` values('538','0','��������','0','(1)','(2)');");

require("../../inc/footer.php");
?>