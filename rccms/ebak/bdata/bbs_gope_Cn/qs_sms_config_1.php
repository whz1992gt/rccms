<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_sms_config`;");
E_C("CREATE TABLE `qs_sms_config` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `value` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=gbk");
E_D("replace into `qs_sms_config` values('1','open','0');");
E_D("replace into `qs_sms_config` values('2','sms_name','');");
E_D("replace into `qs_sms_config` values('3','sms_key','');");
E_D("replace into `qs_sms_config` values('4','set_applyjobs','0');");
E_D("replace into `qs_sms_config` values('5','set_invite','0');");
E_D("replace into `qs_sms_config` values('6','set_order','0');");
E_D("replace into `qs_sms_config` values('7','set_payment','0');");
E_D("replace into `qs_sms_config` values('8','set_editpwd','0');");
E_D("replace into `qs_sms_config` values('9','set_jobsallow','0');");
E_D("replace into `qs_sms_config` values('10','set_jobsnotallow','0');");
E_D("replace into `qs_sms_config` values('11','set_licenseallow','0');");
E_D("replace into `qs_sms_config` values('12','set_licensenotallow','0');");
E_D("replace into `qs_sms_config` values('13','set_addrecommend','0');");
E_D("replace into `qs_sms_config` values('15','set_addmap','0');");
E_D("replace into `qs_sms_config` values('16','set_resumeallow','0');");
E_D("replace into `qs_sms_config` values('17','set_resumenotallow','0');");

require("../../inc/footer.php");
?>