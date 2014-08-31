<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_pms_sys`;");
E_C("CREATE TABLE `qs_pms_sys` (
  `spmid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `spms_usertype` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `spms_type` tinyint(1) NOT NULL DEFAULT '1',
  `message` varchar(250) NOT NULL,
  `dateline` int(10) NOT NULL,
  PRIMARY KEY (`spmid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk");
E_D("replace into `qs_pms_sys` values('1','0','1','感谢您注册临沂人才网\r\n\r\n临沂人才网官方网站：http://www.linyijobs.com','1363941301');");

require("../../inc/footer.php");
?>