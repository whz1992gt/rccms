<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_members_points_rule`;");
E_C("CREATE TABLE `qs_members_points_rule` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `operation` tinyint(1) NOT NULL DEFAULT '2',
  `value` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=gbk");
E_D("replace into `qs_members_points_rule` values('1','刷新职位','jobs_refresh','2','0');");
E_D("replace into `qs_members_points_rule` values('2','发布职位','jobs_add','1','5');");
E_D("replace into `qs_members_points_rule` values('3','职位有效期内每天','jobs_daily','2','0');");
E_D("replace into `qs_members_points_rule` values('4','下载普通简历','resume_download','2','10');");
E_D("replace into `qs_members_points_rule` values('5','下载高级人才简历','resume_download_advanced','2','20');");
E_D("replace into `qs_members_points_rule` values('6','发起普通人才面试邀请','interview_invite','2','3');");
E_D("replace into `qs_members_points_rule` values('7','发起高级人才面试邀请','interview_invite_advanced','2','6');");
E_D("replace into `qs_members_points_rule` values('8','修改招聘信息','jobs_edit','2','3');");
E_D("replace into `qs_members_points_rule` values('9','永久开通电子地图','company_map','2','10');");
E_D("replace into `qs_members_points_rule` values('10','上传营业执照并认证通过','company_auth','1','15');");
E_D("replace into `qs_members_points_rule` values('11','新注册会员赠送','reg_points','1','100');");
E_D("replace into `qs_members_points_rule` values('12','会员每天第一次登录','userlogin','1','1');");
E_D("replace into `qs_members_points_rule` values('13','会员邮箱认证通过','verifyemail','1','6');");
E_D("replace into `qs_members_points_rule` values('14','会员手机认证通过','verifymobile','1','6');");

require("../../inc/footer.php");
?>