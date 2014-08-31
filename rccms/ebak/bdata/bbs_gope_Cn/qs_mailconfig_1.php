<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_mailconfig`;");
E_C("CREATE TABLE `qs_mailconfig` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=gbk");
E_D("replace into `qs_mailconfig` values('1','method','1');");
E_D("replace into `qs_mailconfig` values('2','smtpservers','smtp.163.com');");
E_D("replace into `qs_mailconfig` values('3','smtpusername','5474');");
E_D("replace into `qs_mailconfig` values('4','smtppassword','25727217');");
E_D("replace into `qs_mailconfig` values('5','smtpfrom','0400m@163.com');");
E_D("replace into `qs_mailconfig` values('6','smtpport','25');");
E_D("replace into `qs_mailconfig` values('7','set_reg','1');");
E_D("replace into `qs_mailconfig` values('8','set_applyjobs','1');");
E_D("replace into `qs_mailconfig` values('9','set_invite','1');");
E_D("replace into `qs_mailconfig` values('10','set_order','1');");
E_D("replace into `qs_mailconfig` values('11','set_payment','1');");
E_D("replace into `qs_mailconfig` values('12','set_editpwd','1');");
E_D("replace into `qs_mailconfig` values('13','set_jobsallow','1');");
E_D("replace into `qs_mailconfig` values('14','set_jobsnotallow','1');");
E_D("replace into `qs_mailconfig` values('15','set_licenseallow','1');");
E_D("replace into `qs_mailconfig` values('16','set_licensenotallow','1');");
E_D("replace into `qs_mailconfig` values('17','set_addmap','1');");
E_D("replace into `qs_mailconfig` values('18','set_resumeallow','1');");
E_D("replace into `qs_mailconfig` values('19','set_resumenotallow','1');");

require("../../inc/footer.php");
?>