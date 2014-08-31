<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_gifts`;");
E_C("CREATE TABLE `qs_gifts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `t_id` int(10) unsigned NOT NULL,
  `account` varchar(160) NOT NULL,
  `password` varchar(160) NOT NULL,
  `usettime` int(10) unsigned NOT NULL DEFAULT '0',
  `useuid` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `account` (`account`),
  KEY `addtime` (`addtime`),
  KEY `t_id` (`t_id`),
  KEY `usettime` (`usettime`)
) ENGINE=MyISAM AUTO_INCREMENT=301 DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>