<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_tpl`;");
E_C("CREATE TABLE `qs_tpl` (
  `tpl_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tpl_type` tinyint(1) NOT NULL,
  `tpl_name` varchar(80) NOT NULL,
  `tpl_display` tinyint(1) NOT NULL DEFAULT '1',
  `tpl_dir` varchar(80) NOT NULL,
  `tpl_val` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tpl_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=gbk");
E_D("replace into `qs_tpl` values('1','2','枫叶寒露','1','fengyehanlu','0');");
E_D("replace into `qs_tpl` values('2','2','默认模版','1','default','0');");
E_D("replace into `qs_tpl` values('3','1','深蓝商务','1','shenlanshangwu','0');");
E_D("replace into `qs_tpl` values('4','1','幻色','1','huanse','0');");
E_D("replace into `qs_tpl` values('5','1','默认模版','1','default','0');");
E_D("replace into `qs_tpl` values('6','2','夏日沙滩','1','xiarishatan','0');");
E_D("replace into `qs_tpl` values('7','2','原野','1','yuanye','0');");
E_D("replace into `qs_tpl` values('8','1','橙色夏日风格','1','baoji','0');");
E_D("replace into `qs_tpl` values('9','1','新宝鸡','1','newbaoji','0');");

require("../../inc/footer.php");
?>