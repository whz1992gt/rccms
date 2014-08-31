<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_link`;");
E_C("CREATE TABLE `qs_link` (
  `link_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type_id` tinyint(3) unsigned NOT NULL,
  `subsite_id` int(10) DEFAULT NULL,
  `display` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `alias` varchar(30) NOT NULL,
  `link_name` varchar(255) NOT NULL,
  `link_url` varchar(255) NOT NULL,
  `link_logo` varchar(255) NOT NULL,
  `show_order` smallint(5) unsigned NOT NULL DEFAULT '50',
  `Notes` varchar(255) DEFAULT NULL,
  `app_notes` varchar(300) NOT NULL,
  PRIMARY KEY (`link_id`),
  KEY `show_order` (`show_order`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=gbk");
E_D("replace into `qs_link` values('18','1','0','1','QS_index','微信助手','http://weixin.mandnt.com/','','50','','');");
E_D("replace into `qs_link` values('19','1','0','1','QS_index','兆和网络','http://www.mandnt.com','','50','','');");
E_D("replace into `qs_link` values('20','1','0','1','QS_index','服务器平台','http://www.mandnetwork.com','','50','','');");

require("../../inc/footer.php");
?>