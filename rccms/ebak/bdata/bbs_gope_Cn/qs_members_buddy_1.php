<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_members_buddy`;");
E_C("CREATE TABLE `qs_members_buddy` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL,
  `tuid` int(10) unsigned NOT NULL,
  `addtime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk");
E_D("replace into `qs_members_buddy` values('1','7865','7682','1381753116');");

require("../../inc/footer.php");
?>