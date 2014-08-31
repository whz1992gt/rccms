<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_admin`;");
E_C("CREATE TABLE `qs_admin` (
  `admin_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pwd` varchar(32) NOT NULL,
  `pwd_hash` varchar(30) NOT NULL,
  `purview` text NOT NULL,
  `rank` varchar(32) NOT NULL,
  `add_time` int(10) NOT NULL,
  `last_login_time` int(10) NOT NULL,
  `last_login_ip` varchar(15) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=gbk");
E_D("replace into `qs_admin` values('1','admin','fsffs@126.com','07653056bc41a99723027f244f37c8ed','lOATdW','all','超级管理员','1365429541','1390283815','127.0.0.1');");

require("../../inc/footer.php");
?>