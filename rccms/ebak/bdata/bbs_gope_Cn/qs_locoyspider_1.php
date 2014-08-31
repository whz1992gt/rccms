<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_locoyspider`;");
E_C("CREATE TABLE `qs_locoyspider` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=gbk");
E_D("replace into `qs_locoyspider` values('1','open','1');");
E_D("replace into `qs_locoyspider` values('2','search_threshold','55');");
E_D("replace into `qs_locoyspider` values('3','article_display','1');");
E_D("replace into `qs_locoyspider` values('4','article_focos','1');");
E_D("replace into `qs_locoyspider` values('5','company_audit','1');");
E_D("replace into `qs_locoyspider` values('6','company_nature','48');");
E_D("replace into `qs_locoyspider` values('7','company_trade','45');");
E_D("replace into `qs_locoyspider` values('8','company_district','467');");
E_D("replace into `qs_locoyspider` values('9','company_scale','81');");
E_D("replace into `qs_locoyspider` values('10','company_registered','100');");
E_D("replace into `qs_locoyspider` values('11','company_currency','ศหร๑ฑา');");
E_D("replace into `qs_locoyspider` values('12','jobs_display','1');");
E_D("replace into `qs_locoyspider` values('13','jobs_audit','1');");
E_D("replace into `qs_locoyspider` values('14','jobs_nature','62');");
E_D("replace into `qs_locoyspider` values('15','jobs_days_min','200');");
E_D("replace into `qs_locoyspider` values('16','jobs_days_max','300');");
E_D("replace into `qs_locoyspider` values('17','jobs_category','483');");
E_D("replace into `qs_locoyspider` values('18','jobs_subclass','499');");
E_D("replace into `qs_locoyspider` values('19','jobs_district','467');");
E_D("replace into `qs_locoyspider` values('20','jobs_education','69');");
E_D("replace into `qs_locoyspider` values('21','jobs_experience','76');");
E_D("replace into `qs_locoyspider` values('22','jobs_wage','55');");
E_D("replace into `qs_locoyspider` values('23','jobs_amount_min','2');");
E_D("replace into `qs_locoyspider` values('24','jobs_amount_max','10');");
E_D("replace into `qs_locoyspider` values('25','jobs_notify','0');");
E_D("replace into `qs_locoyspider` values('26','jobs_sex','3');");
E_D("replace into `qs_locoyspider` values('27','reg_usname','sp_');");
E_D("replace into `qs_locoyspider` values('28','reg_password_tpye','3');");
E_D("replace into `qs_locoyspider` values('29','reg_password','77889966');");
E_D("replace into `qs_locoyspider` values('30','reg_email','@126.com');");

require("../../inc/footer.php");
?>