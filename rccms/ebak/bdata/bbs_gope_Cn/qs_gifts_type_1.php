<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_gifts_type`;");
E_C("CREATE TABLE `qs_gifts_type` (
  `t_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `t_name` varchar(160) NOT NULL,
  `t_repeat` int(10) unsigned NOT NULL DEFAULT '1',
  `t_pre` varchar(180) NOT NULL,
  `t_starttime` int(10) unsigned NOT NULL DEFAULT '0',
  `t_endtime` int(10) unsigned NOT NULL DEFAULT '0',
  `t_effective` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `t_amount` int(10) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`t_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk");
E_D("replace into `qs_gifts_type` values('1','Î´ÃüÃûÀñÆ·¿¨','1','74cms','0','0','1','100');");

require("../../inc/footer.php");
?>