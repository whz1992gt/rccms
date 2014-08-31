<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_config`;");
E_C("CREATE TABLE `qs_config` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=96 DEFAULT CHARSET=gbk");
E_D("replace into `qs_config` values('1','site_name','兆和人才招聘网');");
E_D("replace into `qs_config` values('2','site_domain','http://rccms.demo');");
E_D("replace into `qs_config` values('3','site_dir','/');");
E_D("replace into `qs_config` values('4','template_dir','newbaoji/');");
E_D("replace into `qs_config` values('5','outdated_jobs','0');");
E_D("replace into `qs_config` values('6','top_tel','00000000');");
E_D("replace into `qs_config` values('7','bootom_tel','12345678900');");
E_D("replace into `qs_config` values('8','address','网站底部联系地址');");
E_D("replace into `qs_config` values('9','bottom_other','Copyright(C) 2011 - 2014 兆和网络 All Rights Reserved ');");
E_D("replace into `qs_config` values('10','icp','备案号');");
E_D("replace into `qs_config` values('11','web_logo','logo.gif');");
E_D("replace into `qs_config` values('12','isclose','0');");
E_D("replace into `qs_config` values('13','close_reason','网站维护中');");
E_D("replace into `qs_config` values('14','statistics','');");
E_D("replace into `qs_config` values('15','closereg','0');");
E_D("replace into `qs_config` values('16','showjobcontact','2');");
E_D("replace into `qs_config` values('17','showresumecontact','2');");
E_D("replace into `qs_config` values('18','points_byname','积分');");
E_D("replace into `qs_config` values('19','points_quantifier','点');");
E_D("replace into `qs_config` values('20','points_min_remind','50');");
E_D("replace into `qs_config` values('21','audit_verifycom_addjob','1');");
E_D("replace into `qs_config` values('22','audit_verifycom_editjob','-1');");
E_D("replace into `qs_config` values('23','audit_unexaminedcom_addjob','1');");
E_D("replace into `qs_config` values('24','audit_unexaminedcom_editjob','-1');");
E_D("replace into `qs_config` values('25','company_add_days','60');");
E_D("replace into `qs_config` values('26','company_add_days_min','30');");
E_D("replace into `qs_config` values('27','company_repeat','0');");
E_D("replace into `qs_config` values('28','jobs_list_max','1000');");
E_D("replace into `qs_config` values('29','certificate_max_size','1024');");
E_D("replace into `qs_config` values('30','updir_images','images');");
E_D("replace into `qs_config` values('31','updir_thumb','images/thumb');");
E_D("replace into `qs_config` values('32','updir_certificate','certificate');");
E_D("replace into `qs_config` values('33','payment_min','100');");
E_D("replace into `qs_config` values('34','payment_rate','1');");
E_D("replace into `qs_config` values('35','resume_max','3');");
E_D("replace into `qs_config` values('36','resume_privacy','1');");
E_D("replace into `qs_config` values('37','resume_list_max','1000');");
E_D("replace into `qs_config` values('38','resume_photo_dir','photo');");
E_D("replace into `qs_config` values('39','resume_photo_dir_thumb','photo/thumb');");
E_D("replace into `qs_config` values('40','resume_photo_max','500');");
E_D("replace into `qs_config` values('41','elite_resume_complete_percent','60');");
E_D("replace into `qs_config` values('42','down_resume_limit','1');");
E_D("replace into `qs_config` values('43','logo_max_size','500');");
E_D("replace into `qs_config` values('44','apply_jobs_max','50');");
E_D("replace into `qs_config` values('45','audit_resume','1');");
E_D("replace into `qs_config` values('46','audit_edit_resume','-1');");
E_D("replace into `qs_config` values('47','audit_resume_photo','2');");
E_D("replace into `qs_config` values('48','audit_edit_photo','-1');");
E_D("replace into `qs_config` values('49','audit_add_com','1');");
E_D("replace into `qs_config` values('50','audit_edit_com','-1');");
E_D("replace into `qs_config` values('51','map_zoom','16');");
E_D("replace into `qs_config` values('52','map_center_x','106.254028');");
E_D("replace into `qs_config` values('53','map_center_y','38.475784');");
E_D("replace into `qs_config` values('54','app_link','1');");
E_D("replace into `qs_config` values('55','filter','');");
E_D("replace into `qs_config` values('56','filter_tips','请勿在信息中包敏感词语。');");
E_D("replace into `qs_config` values('57','filter_ip','');");
E_D("replace into `qs_config` values('58','filter_ip_tips','您的IP已经被锁定禁止访问，请联系网站管理员。');");
E_D("replace into `qs_config` values('59','setmeal_to_points','1');");
E_D("replace into `qs_config` values('60','meal_min_remind','3');");
E_D("replace into `qs_config` values('61','reg_service','1');");
E_D("replace into `qs_config` values('62','operation_mode','2');");
E_D("replace into `qs_config` values('63','tpl_company','newbaoji');");
E_D("replace into `qs_config` values('64','tpl_personal','default');");
E_D("replace into `qs_config` values('65','qq_apiopen','1');");
E_D("replace into `qs_config` values('66','qq_appid','100539399');");
E_D("replace into `qs_config` values('67','qq_appkey','1f515a793ecf5354fe015ce39841114d');");
E_D("replace into `qs_config` values('68','open_csrf','0');");
E_D("replace into `qs_config` values('69','simple_open','1');");
E_D("replace into `qs_config` values('70','simple_add_audit','1');");
E_D("replace into `qs_config` values('71','simple_edit_audit','-1');");
E_D("replace into `qs_config` values('72','simple_tel_repeat','1');");
E_D("replace into `qs_config` values('73','simple_tel_edit','0');");
E_D("replace into `qs_config` values('74','login_com_audit_email','0');");
E_D("replace into `qs_config` values('75','login_com_audit_mobile','1');");
E_D("replace into `qs_config` values('76','login_per_audit_email','0');");
E_D("replace into `qs_config` values('77','login_per_audit_mobile','1');");
E_D("replace into `qs_config` values('78','subsite','0');");
E_D("replace into `qs_config` values('79','jobsearch_purview','1');");
E_D("replace into `qs_config` values('80','jobsearch_type','1');");
E_D("replace into `qs_config` values('81','jobsearch_sort','1');");
E_D("replace into `qs_config` values('82','resumesearch_purview','1');");
E_D("replace into `qs_config` values('83','resumesearch_type','1');");
E_D("replace into `qs_config` values('84','resumesearch_sort','1');");
E_D("replace into `qs_config` values('85','qq_logintype','1');");
E_D("replace into `qs_config` values('86','contact_img_com','1');");
E_D("replace into `qs_config` values('87','contact_img_job','1');");
E_D("replace into `qs_config` values('88','contact_img_resume','1');");
E_D("replace into `qs_config` values('89','open_comment','1');");
E_D("replace into `qs_config` values('90','sina_apiopen','0');");
E_D("replace into `qs_config` values('91','sina_appkey','');");
E_D("replace into `qs_config` values('92','sina_appsecret','');");
E_D("replace into `qs_config` values('93','taobao_apiopen','0');");
E_D("replace into `qs_config` values('94','taobao_appkey','');");
E_D("replace into `qs_config` values('95','taobao_appsecret','');");

require("../../inc/footer.php");
?>