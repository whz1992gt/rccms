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
E_D("replace into `qs_tpl` values('1','2','��Ҷ��¶','1','fengyehanlu','0');");
E_D("replace into `qs_tpl` values('2','2','Ĭ��ģ��','1','default','0');");
E_D("replace into `qs_tpl` values('3','1','��������','1','shenlanshangwu','0');");
E_D("replace into `qs_tpl` values('4','1','��ɫ','1','huanse','0');");
E_D("replace into `qs_tpl` values('5','1','Ĭ��ģ��','1','default','0');");
E_D("replace into `qs_tpl` values('6','2','����ɳ̲','1','xiarishatan','0');");
E_D("replace into `qs_tpl` values('7','2','ԭҰ','1','yuanye','0');");
E_D("replace into `qs_tpl` values('8','1','��ɫ���շ��','1','baoji','0');");
E_D("replace into `qs_tpl` values('9','1','�±���','1','newbaoji','0');");

require("../../inc/footer.php");
?>