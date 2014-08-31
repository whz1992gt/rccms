<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_members_gifts`;");
E_C("CREATE TABLE `qs_members_gifts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL DEFAULT '0',
  `usetime` int(10) unsigned NOT NULL DEFAULT '0',
  `account` varchar(180) NOT NULL,
  `giftsname` varchar(180) NOT NULL,
  `giftsamount` int(10) NOT NULL,
  `giftstid` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `giftstid` (`giftstid`),
  KEY `uid` (`uid`),
  KEY `usetime` (`usetime`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>