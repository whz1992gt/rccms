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
E_D("replace into `qs_category_district1` values('1','0','北京市','0','','');");
E_D("replace into `qs_category_district1` values('2','0','上海市','0','','');");
E_D("replace into `qs_category_district1` values('3','0','天津市','0','','');");
E_D("replace into `qs_category_district1` values('4','0','重庆市','0','','');");
E_D("replace into `qs_category_district1` values('5','0','河北省','0','','');");
E_D("replace into `qs_category_district1` values('6','0','山西省','0','','');");
E_D("replace into `qs_category_district1` values('7','0','内蒙古','0','(1)','');");
E_D("replace into `qs_category_district1` values('8','0','辽宁省','0','(1)','');");
E_D("replace into `qs_category_district1` values('9','0','吉林省','0','','');");
E_D("replace into `qs_category_district1` values('10','0','黑龙江省','0','','');");
E_D("replace into `qs_category_district1` values('11','0','江苏省','0','','');");
E_D("replace into `qs_category_district1` values('12','0','浙江省','0','','');");
E_D("replace into `qs_category_district1` values('13','0','安徽省','0','','');");
E_D("replace into `qs_category_district1` values('14','0','福建省','0','','');");
E_D("replace into `qs_category_district1` values('15','0','江西省','0','','');");
E_D("replace into `qs_category_district1` values('16','0','山东省','0','(1)','');");
E_D("replace into `qs_category_district1` values('17','0','河南省','0','','');");
E_D("replace into `qs_category_district1` values('18','0','湖北省','0','','');");
E_D("replace into `qs_category_district1` values('19','0','湖南省','0','','');");
E_D("replace into `qs_category_district1` values('20','0','广东省','0','(3)','');");
E_D("replace into `qs_category_district1` values('21','0','广西','0','','');");
E_D("replace into `qs_category_district1` values('22','0','海南省','0','','');");
E_D("replace into `qs_category_district1` values('23','0','四川省','0','','');");
E_D("replace into `qs_category_district1` values('24','0','贵州省','0','','');");
E_D("replace into `qs_category_district1` values('25','0','云南省','0','','');");
E_D("replace into `qs_category_district1` values('26','0','西藏','0','','');");
E_D("replace into `qs_category_district1` values('27','0','陕西省','0','(3)','');");
E_D("replace into `qs_category_district1` values('28','0','甘肃省','0','','');");
E_D("replace into `qs_category_district1` values('29','0','青海省','1','(102)','(1)');");
E_D("replace into `qs_category_district1` values('30','0','临沂市','2','(672)','(5659)');");
E_D("replace into `qs_category_district1` values('31','0','新疆','0','','');");
E_D("replace into `qs_category_district1` values('538','0','其他地区','0','(1)','(2)');");

require("../../inc/footer.php");
?>