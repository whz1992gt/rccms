<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_link_category`;");
E_C("CREATE TABLE `qs_link_category` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `categoryname` varchar(80) NOT NULL,
  `c_sys` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `c_alias` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk");
E_D("replace into `qs_link_category` values('1','网站首页','1','QS_index');");
E_D("replace into `qs_link_category` values('2','招聘首页','1','QS_jobs');");
E_D("replace into `qs_link_category` values('3','求职首页','1','QS_resume');");
E_D("replace into `qs_link_category` values('4','资讯首页','1','QS_news');");

require("../../inc/footer.php");
?>