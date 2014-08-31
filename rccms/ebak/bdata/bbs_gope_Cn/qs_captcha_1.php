<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_captcha`;");
E_C("CREATE TABLE `qs_captcha` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `value` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=gbk");
E_D("replace into `qs_captcha` values('1','verify_userreg','0');");
E_D("replace into `qs_captcha` values('2','verify_userlogin','0');");
E_D("replace into `qs_captcha` values('3','verify_getpwd','0');");
E_D("replace into `qs_captcha` values('4','verify_addjob','0');");
E_D("replace into `qs_captcha` values('5','verify_resume','0');");
E_D("replace into `qs_captcha` values('6','verify_link','1');");
E_D("replace into `qs_captcha` values('7','verify_gifts','1');");
E_D("replace into `qs_captcha` values('8','verify_simple','0');");
E_D("replace into `qs_captcha` values('9','verify_adminlogin','0');");
E_D("replace into `qs_captcha` values('10','captcha_width','150');");
E_D("replace into `qs_captcha` values('11','captcha_height','40');");
E_D("replace into `qs_captcha` values('12','captcha_textcolor','');");
E_D("replace into `qs_captcha` values('13','captcha_textfontsize','25');");
E_D("replace into `qs_captcha` values('14','captcha_textlength','4');");
E_D("replace into `qs_captcha` values('15','captcha_lang','en');");
E_D("replace into `qs_captcha` values('16','captcha_bgcolor','');");
E_D("replace into `qs_captcha` values('17','captcha_noisepoint','0');");
E_D("replace into `qs_captcha` values('18','captcha_noiseline','5');");
E_D("replace into `qs_captcha` values('19','captcha_distortion','0');");
E_D("replace into `qs_captcha` values('20','verify_comment','0');");

require("../../inc/footer.php");
?>