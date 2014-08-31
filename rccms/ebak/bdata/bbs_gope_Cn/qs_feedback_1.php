<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_feedback`;");
E_C("CREATE TABLE `qs_feedback` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL,
  `replyinfo` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `usertype` tinyint(3) unsigned NOT NULL,
  `username` varchar(80) NOT NULL,
  `infotype` tinyint(3) unsigned NOT NULL,
  `feedback` varchar(250) NOT NULL,
  `reply` varchar(250) NOT NULL,
  `addtime` int(10) NOT NULL,
  `feedbacktime` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>