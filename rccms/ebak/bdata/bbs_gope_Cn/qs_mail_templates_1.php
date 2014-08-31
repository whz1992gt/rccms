<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_mail_templates`;");
E_C("CREATE TABLE `qs_mail_templates` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=gbk");
E_D("replace into `qs_mail_templates` values('1','set_reg','<p>恭喜你成为<strong><a href=\"{sitedomain}\" target=\"_blank\">{sitename}</a></strong>的会员<br />\r\n你的用户名是：<strong>{username}</strong><br />\r\n你的密码是：<strong>{password}</strong></p>\r\n<p><span style=\"color:#e53333;\">成辉招聘网是宁夏专业的招聘网站（<a href=\"http://www.hr951.com\">http://www.hr951.com</a>），通过招聘网、招聘报、招聘会为企搭建人才桥梁，招募各界精英！为个开拓求职通道，追寻职业理想！</span></p>\r\n<p><span style=\"color:#e53333;\">详情咨询：0951-6884155</span><br />\r\n此邮件由系统自动发出，请勿回复！<br />\r\n</p>');");
E_D("replace into `qs_mail_templates` values('2','set_applyjobs','亲爱的会员：<br />\r\n<strong>{personalfullname}</strong> 申请了您发布的职位:<strong>{jobsname}</strong><br />\r\n请登录<a href=\"{sitedomain}\" target=\"_blank\">会员中心</a>详细查看。<br />\r\n此信息由系统自动发送，请勿回复！');");
E_D("replace into `qs_mail_templates` values('3','set_invite','亲爱的会员：<br />\r\n<strong>{companyname}</strong>  对你发起了面试邀请<br />\r\n请登录<a href=\"{sitedomain}\" target=\"_blank\">会员中心</a>详细查看。<br />\r\n此信息由系统自动发送，请勿回复！');");
E_D("replace into `qs_mail_templates` values('4','set_order','亲爱的会员：<br />\r\n你的订单已添加成功，请及时付款，订单号：{oid}，付款方式为：{paymenttpye}，应付金额为：{amount} 元。<br />\r\n付款后系统将为您自动开通相关服务。<br />\r\n请登录<a href=\"{sitedomain}\" target=\"_blank\">会员中心</a>详细查看。<br />\r\n此信息由系统自动发送，请勿回复！');");
E_D("replace into `qs_mail_templates` values('5','set_payment','亲爱的会员：<br />\r\n你已经付款成功，系统已为您开通服务。<br />\r\n请登录<a href=\"{sitedomain}\" target=\"_blank\">会员中心</a>详细查看。<br />\r\n此信息由系统自动发送，请勿回复！');");
E_D("replace into `qs_mail_templates` values('6','set_editpwd','亲爱的会员：<br />\r\n你已经成功修改密码，新密码为：{newpassword}。<br />\r\n此信息由系统自动发送，请勿回复！');");
E_D("replace into `qs_mail_templates` values('7','set_jobsallow','亲爱的会员：<br />\r\n恭喜，你发布的职位({jobsname})已经通过审核！<br />\r\n请登录<a href=\"{sitedomain}\" target=\"_blank\">会员中心</a>详细查看。<br />\r\n此信息由系统自动发送，请勿回复！');");
E_D("replace into `qs_mail_templates` values('8','set_jobsnotallow','亲爱的会员：<br />\r\n很抱歉，你发布的职位({jobsname})未通过审核，请修改后再次提交审核！<br />\r\n请登录<a href=\"{sitedomain}\" target=\"_blank\">会员中心</a>详细查看。<br />\r\n此信息由系统自动发送，请勿回复！');");
E_D("replace into `qs_mail_templates` values('9','set_licenseallow','亲爱的会员：<br />\r\n恭喜，您的企业资料已认证通过！<br />\r\n请登录<a href=\"{sitedomain}\" target=\"_blank\">会员中心</a>详细查看。<br />\r\n此信息由系统自动发送，请勿回复！');");
E_D("replace into `qs_mail_templates` values('10','set_licensenotallow','亲爱的会员：<br />\r\n很抱歉，你的企业认证未通过，请重新上传营业执照！<br />\r\n请登录<a href=\"{sitedomain}\" target=\"_blank\">会员中心</a>详细查看。<br />\r\n此信息由系统自动发送，请勿回复！');");
E_D("replace into `qs_mail_templates` values('11','set_addmap','亲爱的会员：<br />\r\n恭喜，您已成功开通企业电子地图！<br />\r\n请登录<a href=\"{sitedomain}\" target=\"_blank\">会员中心</a>详细查看。<br />\r\n此信息由系统自动发送，请勿回复！');");
E_D("replace into `qs_mail_templates` values('12','set_resumeallow','亲爱的会员：<br />\r\n恭喜，您的简历已通过审核！<br />\r\n请登录<a href=\"{sitedomain}\" target=\"_blank\">会员中心</a>详细查看。<br />\r\n此信息由系统自动发送，请勿回复！');");
E_D("replace into `qs_mail_templates` values('13','set_resumenotallow','亲爱的会员：<br />\r\n很抱歉，您的简历未通过审核，请修改后再次提交审核！<br />\r\n请登录<a href=\"{sitedomain}\" target=\"_blank\">会员中心</a>详细查看。<br />\r\n此信息由系统自动发送，请勿回复！');");
E_D("replace into `qs_mail_templates` values('14','set_reg_title','恭喜你成为{sitename}的会员');");
E_D("replace into `qs_mail_templates` values('15','set_applyjobs_title','{personalfullname}申请了您发布的职位:{jobsname}');");
E_D("replace into `qs_mail_templates` values('16','set_invite_title','{companyname}邀请你参加面试');");
E_D("replace into `qs_mail_templates` values('17','set_order_title','充值订单添加成功');");
E_D("replace into `qs_mail_templates` values('18','set_payment_title','充值成功，系统已为您开通服务！');");
E_D("replace into `qs_mail_templates` values('19','set_editpwd_title','密码修改成功！');");
E_D("replace into `qs_mail_templates` values('20','set_jobsallow_title','恭喜，您发布的职位({jobsname})已经通过审核！');");
E_D("replace into `qs_mail_templates` values('21','set_jobsnotallow_title','很抱歉，你发布的职位({jobsname})未通过审核！');");
E_D("replace into `qs_mail_templates` values('22','set_licenseallow_title','恭喜，你的企业信息已认证通过！');");
E_D("replace into `qs_mail_templates` values('23','set_licensenotallow_title','很抱歉，你的企业信息未认证通过！');");
E_D("replace into `qs_mail_templates` values('24','set_addmap_title','恭喜，您已成功开通企业电子地图！');");
E_D("replace into `qs_mail_templates` values('25','set_resumeallow_title','恭喜，您的简历已通过审核！');");
E_D("replace into `qs_mail_templates` values('26','set_resumenotallow_title','很抱歉，你的简历未通过审核！');");

require("../../inc/footer.php");
?>