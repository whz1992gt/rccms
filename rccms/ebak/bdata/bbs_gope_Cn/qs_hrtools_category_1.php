<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_hrtools_category`;");
E_C("CREATE TABLE `qs_hrtools_category` (
  `c_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `c_name` varchar(80) NOT NULL,
  `c_order` int(11) NOT NULL DEFAULT '0',
  `c_adminset` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=gbk");
E_D("replace into `qs_hrtools_category` values('1','招聘/面试','0','1');");
E_D("replace into `qs_hrtools_category` values('2','人事档案','0','0');");
E_D("replace into `qs_hrtools_category` values('3','员工管理','0','0');");
E_D("replace into `qs_hrtools_category` values('4','合同/试用','0','0');");
E_D("replace into `qs_hrtools_category` values('5','薪酬制度','0','0');");
E_D("replace into `qs_hrtools_category` values('6','加班/考勤','0','0');");
E_D("replace into `qs_hrtools_category` values('7','出差','0','0');");
E_D("replace into `qs_hrtools_category` values('8','员工培训','0','0');");
E_D("replace into `qs_hrtools_category` values('9','绩效考核','0','0');");
E_D("replace into `qs_hrtools_category` values('10','辞退/移交','0','0');");
E_D("replace into `qs_hrtools_category` values('11','其它','0','0');");

require("../../inc/footer.php");
?>