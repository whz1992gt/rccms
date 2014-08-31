<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_pms_reply`;");
E_C("CREATE TABLE `qs_pms_reply` (
  `rid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pmid` int(10) unsigned NOT NULL,
  `replyuid` int(10) unsigned NOT NULL,
  `replyusername` varchar(30) NOT NULL,
  `new` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `replytime` int(10) unsigned NOT NULL,
  `replytext` varchar(250) NOT NULL,
  PRIMARY KEY (`rid`),
  KEY `pmid` (`pmid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>