<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_sms_templates`;");
E_C("CREATE TABLE `qs_sms_templates` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=gbk");
E_D("replace into `qs_sms_templates` values('1','set_applyjobs','{sitename}提醒您:{personalfullname}申请了您发布的职位{jobsname}，请登录{sitedomain}查看');");
E_D("replace into `qs_sms_templates` values('2','set_invite','{sitename}提醒您：{companyname}对您发起了面试邀请，请登录{sitedomain}查看');");
E_D("replace into `qs_sms_templates` values('3','set_order','{sitename}提醒您：订单{oid}已经添加成功，付款方式为：{paymenttpye}，应付金额{amount}。请登录{sitedomain}查看');");
E_D("replace into `qs_sms_templates` values('4','set_payment','{sitename}提醒您：充值成功，系统已为您开通服务，请登录{sitedomain}查看');");
E_D("replace into `qs_sms_templates` values('5','set_editpwd','{sitename}提醒您：您的密码修改成功，新密码为：{newpassword}');");
E_D("replace into `qs_sms_templates` values('6','set_jobsallow','{sitename}提醒您：职位({jobsname})已经通过审核！请登录{sitedomain}查看');");
E_D("replace into `qs_sms_templates` values('7','set_jobsnotallow','{sitename}提醒您：职位({jobsname})未通过审核，请修改后再次提交审核！请登录{sitedomain}查看');");
E_D("replace into `qs_sms_templates` values('8','set_licenseallow','{sitename}提醒您：您的企业资料已认证通过！请登录{sitedomain}查看');");
E_D("replace into `qs_sms_templates` values('9','set_licensenotallow','{sitename}提醒您：你的企业认证未通过，请重新上传营业执照！请登录{sitedomain}查看');");
E_D("replace into `qs_sms_templates` values('10','set_addrecommend','{sitename}提醒您：您的职位已经成功推荐，请登录{sitedomain}查看');");
E_D("replace into `qs_sms_templates` values('11','set_addmap','{sitename}提醒您：您已成功开通企业电子地图！请登录{sitedomain}查看');");
E_D("replace into `qs_sms_templates` values('12','set_resumeallow','{sitename}提醒您：您的简历已通过审核！请登录{sitedomain}查看');");
E_D("replace into `qs_sms_templates` values('13','set_resumenotallow','{sitename}提醒您：您的简历未通过审核，请修改后再次提交审核！请登录{sitedomain}查看');");

require("../../inc/footer.php");
?>