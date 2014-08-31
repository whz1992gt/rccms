<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_baiduxml`;");
E_C("CREATE TABLE `qs_baiduxml` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=gbk");
E_D("replace into `qs_baiduxml` values('1','order','1');");
E_D("replace into `qs_baiduxml` values('2','xmlmax','0');");
E_D("replace into `qs_baiduxml` values('3','xmlpagesize','3000');");
E_D("replace into `qs_baiduxml` values('4','xmlpre','li_');");
E_D("replace into `qs_baiduxml` values('5','xmldir','baiduxml/');");
E_D("replace into `qs_baiduxml` values('6','indexname','index.xml');");
E_D("replace into `qs_baiduxml` values('7','indexdir','baiduxml/');");

require("../../inc/footer.php");
?>