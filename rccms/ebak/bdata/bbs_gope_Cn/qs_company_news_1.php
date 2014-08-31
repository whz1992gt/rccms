<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_company_news`;");
E_C("CREATE TABLE `qs_company_news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` int(10) unsigned NOT NULL,
  `uid` int(10) unsigned NOT NULL,
  `title` varchar(80) NOT NULL,
  `content` text NOT NULL,
  `order` int(10) NOT NULL,
  `click` int(10) unsigned NOT NULL DEFAULT '1',
  `addtime` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `company_id` (`company_id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>