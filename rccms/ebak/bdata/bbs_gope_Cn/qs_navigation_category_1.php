<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_navigation_category`;");
E_C("CREATE TABLE `qs_navigation_category` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `alias` varchar(100) NOT NULL,
  `categoryname` varchar(30) NOT NULL,
  `admin_set` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk");
E_D("replace into `qs_navigation_category` values('1','QS_top','¶¥²¿µ¼º½','1');");

require("../../inc/footer.php");
?>