<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_help`;");
E_C("CREATE TABLE `qs_help` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type_id` tinyint(3) unsigned NOT NULL,
  `parentid` smallint(5) unsigned NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `click` int(10) unsigned NOT NULL DEFAULT '1',
  `addtime` int(10) unsigned NOT NULL,
  `order` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `type_id` (`type_id`,`order`,`id`),
  KEY `focos_article_order` (`order`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gbk");
E_D("replace into `qs_help` values('1','4','1','注册与登录','<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p>点击网站最上方“免费注册”或“登录”即可免费注册与登录</p>\r\n<p><img style=\"width:682px;height:75px;\" border=\"0\" alt=\"\" src=\"/data/images/2013/04/25/20130425094109_55656.jpg\" width=\"676\" height=\"75\" /></p>\r\n<p>整个注册过程，一般可以在五分钟内完成。 hr951.com建议您先在文字编辑工具（比如记事本）中把您的自我评价、教育背景、技能专长、工作经历等内容写好保存，然后在填写简历资料时在对应的地方复制上去，这样可以减少您的注册时间，提高注册成功率。</p>\r\n</td>\r\n<tr>\r\n<td height=\"20\"></td>\r\n</tr>\r\n</tbody>\r\n</table>','1','1366854102','100');");
E_D("replace into `qs_help` values('2','5','1','密码找回与重置','<p><strong><span style=\"color:#e53333;\">进入登录页面，然后点击“忘记密码</span><span style=\"color:#e53333;\">”</span></strong></p>\r\n<p><img border=\"0\" alt=\"\" src=\"/data/images/2013/04/25/20130425095131_98959.jpg\" /></p>\r\n<p>&nbsp;</p>\r\n<p><strong><span style=\"color:#e53333;\">在下面输入您的用户名并填写可用的邮箱点击提交即可，我们会在最短的时间内为您处理。</span></strong></p>\r\n<p><img border=\"0\" alt=\"\" src=\"/data/images/2013/04/25/20130425095428_16061.jpg\" /></p>','1','1366855025','99');");
E_D("replace into `qs_help` values('3','8','1','手机与邮箱认证','只有正确填写了您的 E-mail地址和手机号码并进行了认证，招聘企业才能把他们的招聘意向在线发送到您的电子邮箱中；hr951.com才能及时向您推荐最新的职位信息。当您忘记密码时，您还可以通过您的E-mail邮箱取回密码。强烈推荐您在注册时填写真实有效的E-mail地址和手机号码并进行认证。同时当求职者申请了企业的某一个职位时也会通过邮箱把信息发到企业的邮箱中，方便了企业对招聘的及时掌控。','1','1366855475','98');");
E_D("replace into `qs_help` values('4','6','1','账号状态','<p><img border=\"0\" alt=\"\" src=\"/data/images/2013/05/07/20130507182831_31492.jpg\" /></p>\r\n<p>&nbsp;</p>\r\n<p><img border=\"0\" alt=\"\" src=\"/data/images/2013/05/07/20130507184239_91845.jpg\" width=\"662\" height=\"94\" /></p>','1','1367922622','97');");
E_D("replace into `qs_help` values('5','10','2','职位推广','<p>第一步：</p>\r\n<p><img border=\"0\" alt=\"\" src=\"/data/images/2013/05/10/20130510120313_28344.jpg\" /></p>\r\n<p>&nbsp;</p>\r\n<p>第二步：</p>\r\n<p><img border=\"0\" alt=\"\" src=\"/data/images/2013/05/10/20130510120328_64854.jpg\" /></p>\r\n<p>&nbsp;</p>\r\n<p>第三步：</p>\r\n<p><img border=\"0\" alt=\"\" src=\"/data/images/2013/05/10/20130510120347_32447.jpg\" /></p>\r\n<p>&nbsp;</p>','1','1368158629','100');");

require("../../inc/footer.php");
?>