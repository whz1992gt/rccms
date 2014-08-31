<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_navigation`;");
E_C("CREATE TABLE `qs_navigation` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `alias` varchar(100) NOT NULL,
  `urltype` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `display` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL,
  `color` varchar(30) NOT NULL,
  `pagealias` varchar(100) NOT NULL,
  `list_id` varchar(30) NOT NULL,
  `tag` varchar(100) NOT NULL,
  `url` varchar(200) NOT NULL,
  `target` varchar(100) NOT NULL,
  `navigationorder` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=gbk");
E_D("replace into `qs_navigation` values('1','QS_top','0','1','首  页','','QS_index','','homepage','','_self','0');");
E_D("replace into `qs_navigation` values('2','QS_top','1','1','找工作','','QS_jobs','','jobs','/jobs/jobs-list.php','_self','0');");
E_D("replace into `qs_navigation` values('3','QS_top','0','1','微招聘','','QS_simplelist','','simple','','_self','0');");
E_D("replace into `qs_navigation` values('4','QS_top','1','1','聘人才','','QS_resume','','resume','/resume/resume-list.php','_self','0');");
E_D("replace into `qs_navigation` values('5','QS_top','0','0','HR工具箱','','QS_hrtoolslist','1','hrtools','','_self','0');");
E_D("replace into `qs_navigation` values('6','QS_top','0','1','职场资讯','','QS_news','','news','','_self','0');");
E_D("replace into `qs_navigation` values('11','QS_top','0','1','招聘会','','QS_jobfairlist','','jobfair','','_self','0');");
E_D("replace into `qs_navigation` values('12','QS_top','0','0','临沂黄页','','QS_companylist','','company','','_self','0');");
E_D("replace into `qs_navigation` values('13','QS_top','1','1','照片简历','','','','resume-photo','/resume/resume-photo.php','_self','0');");

require("../../inc/footer.php");
?>