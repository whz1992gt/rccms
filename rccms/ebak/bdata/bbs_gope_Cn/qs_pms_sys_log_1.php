<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_pms_sys_log`;");
E_C("CREATE TABLE `qs_pms_sys_log` (
  `lid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `loguid` int(10) unsigned NOT NULL,
  `pmid` int(10) unsigned NOT NULL,
  PRIMARY KEY (`lid`),
  KEY `loguid` (`loguid`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=gbk");
E_D("replace into `qs_pms_sys_log` values('1','7573','1');");
E_D("replace into `qs_pms_sys_log` values('2','7682','1');");
E_D("replace into `qs_pms_sys_log` values('3','7785','1');");
E_D("replace into `qs_pms_sys_log` values('4','7815','1');");
E_D("replace into `qs_pms_sys_log` values('5','7848','1');");
E_D("replace into `qs_pms_sys_log` values('6','7849','1');");
E_D("replace into `qs_pms_sys_log` values('7','7850','1');");
E_D("replace into `qs_pms_sys_log` values('8','7851','1');");
E_D("replace into `qs_pms_sys_log` values('9','7852','1');");
E_D("replace into `qs_pms_sys_log` values('10','7853','1');");
E_D("replace into `qs_pms_sys_log` values('11','7854','1');");
E_D("replace into `qs_pms_sys_log` values('12','7855','1');");
E_D("replace into `qs_pms_sys_log` values('13','7856','1');");
E_D("replace into `qs_pms_sys_log` values('14','7857','1');");
E_D("replace into `qs_pms_sys_log` values('15','7858','1');");
E_D("replace into `qs_pms_sys_log` values('16','7859','1');");
E_D("replace into `qs_pms_sys_log` values('17','7860','1');");
E_D("replace into `qs_pms_sys_log` values('18','7861','1');");
E_D("replace into `qs_pms_sys_log` values('19','7862','1');");
E_D("replace into `qs_pms_sys_log` values('20','7863','1');");
E_D("replace into `qs_pms_sys_log` values('21','7864','1');");
E_D("replace into `qs_pms_sys_log` values('22','7865','1');");
E_D("replace into `qs_pms_sys_log` values('23','7866','1');");
E_D("replace into `qs_pms_sys_log` values('24','7867','1');");
E_D("replace into `qs_pms_sys_log` values('25','7868','1');");
E_D("replace into `qs_pms_sys_log` values('26','7869','1');");
E_D("replace into `qs_pms_sys_log` values('27','7870','1');");
E_D("replace into `qs_pms_sys_log` values('28','7871','1');");
E_D("replace into `qs_pms_sys_log` values('29','7872','1');");
E_D("replace into `qs_pms_sys_log` values('30','7873','1');");
E_D("replace into `qs_pms_sys_log` values('31','7874','1');");
E_D("replace into `qs_pms_sys_log` values('32','7875','1');");
E_D("replace into `qs_pms_sys_log` values('33','7876','1');");
E_D("replace into `qs_pms_sys_log` values('34','7877','1');");
E_D("replace into `qs_pms_sys_log` values('35','7878','1');");
E_D("replace into `qs_pms_sys_log` values('36','7879','1');");
E_D("replace into `qs_pms_sys_log` values('37','7880','1');");
E_D("replace into `qs_pms_sys_log` values('38','7881','1');");

require("../../inc/footer.php");
?>