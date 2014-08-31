<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_comment`;");
E_C("CREATE TABLE `qs_comment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL,
  `jobs_id` int(10) unsigned NOT NULL,
  `company_id` int(10) unsigned NOT NULL,
  `content` text NOT NULL,
  `addtime` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_id` (`jobs_id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>