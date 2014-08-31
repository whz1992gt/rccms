<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_notice_category`;");
E_C("CREATE TABLE `qs_notice_category` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `categoryname` varchar(80) NOT NULL,
  `sort` smallint(5) unsigned NOT NULL DEFAULT '0',
  `admin_set` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk");
E_D("replace into `qs_notice_category` values('1','首页公告','0','1');");
E_D("replace into `qs_notice_category` values('2','企业会员公告','0','1');");
E_D("replace into `qs_notice_category` values('3','个人会员公告','0','1');");

require("../../inc/footer.php");
?>