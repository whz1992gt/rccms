<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_category_group`;");
E_C("CREATE TABLE `qs_category_group` (
  `g_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `g_alias` varchar(60) NOT NULL,
  `g_name` varchar(100) NOT NULL,
  `g_sys` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`g_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=gbk");
E_D("replace into `qs_category_group` values('1','QS_trade','行业分类','1');");
E_D("replace into `qs_category_group` values('2','QS_company_type','企业性质分类','1');");
E_D("replace into `qs_category_group` values('3','QS_wage','月薪分类','1');");
E_D("replace into `qs_category_group` values('4','QS_jobs_nature','职位性质分类','1');");
E_D("replace into `qs_category_group` values('5','QS_education','学历分类','1');");
E_D("replace into `qs_category_group` values('6','QS_experience','工作经验分类','1');");
E_D("replace into `qs_category_group` values('7','QS_scale','企业规模','1');");
E_D("replace into `qs_category_group` values('8','QS_officebuilding','写字楼','1');");
E_D("replace into `qs_category_group` values('9','QS_street','道路','1');");
E_D("replace into `qs_category_group` values('10','QS_jobtag','职位标签','1');");
E_D("replace into `qs_category_group` values('11','QS_resumetag','简历标签','1');");

require("../../inc/footer.php");
?>