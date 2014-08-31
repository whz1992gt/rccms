<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_setmeal`;");
E_C("CREATE TABLE `qs_setmeal` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `display` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `apply` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `setmeal_name` varchar(200) NOT NULL,
  `days` int(10) unsigned NOT NULL DEFAULT '0',
  `expense` int(10) unsigned NOT NULL,
  `jobs_ordinary` int(10) unsigned NOT NULL DEFAULT '0',
  `download_resume_ordinary` int(10) unsigned NOT NULL DEFAULT '0',
  `download_resume_senior` int(10) unsigned NOT NULL DEFAULT '0',
  `interview_ordinary` int(10) unsigned NOT NULL DEFAULT '0',
  `interview_senior` int(10) unsigned NOT NULL DEFAULT '0',
  `talent_pool` int(10) unsigned NOT NULL DEFAULT '0',
  `added` varchar(255) NOT NULL,
  `show_order` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=gbk");
E_D("replace into `qs_setmeal` values('1','1','0','免费会员','15','0','3','3','1','5','1','15','','0');");
E_D("replace into `qs_setmeal` values('2','1','1','月度会员','30','600','10','30','5','30','5','3000','1、《成辉人才》周刊：5*8cm 刊登1个月，合计4期；\r\n2、《成辉招聘网》首页文字招聘显示1个月；','0');");
E_D("replace into `qs_setmeal` values('3','1','1','季度会员','90','1600','45','90','20','90','20','9000','1、《成辉人才》周刊：5*8cm刊登3个月，合计12期；\r\n2、刊登价值1000元《成辉人才》周刊1/8彩版3期\r\n6、《成辉招聘网》首页LOGO招聘显示1个月，文字招 聘显示2月','0');");
E_D("replace into `qs_setmeal` values('4','1','1','半年会员','180','3000','30','180','45','180','45','18000','1、《成辉人才》周刊：5*8刊登6个月，合计24期\r\n2、刊登价值2500元《成辉人才》周刊1/8彩版6期\r\n3、《成辉招聘网》首页LOGO招聘显示2个月文字招聘显示3月','0');");
E_D("replace into `qs_setmeal` values('5','1','1','年度会员','360','6000','60','360','95','360','95','36000','1、《成辉人才》周刊：5*8刊登12个月，合计48期\r\n2、刊登价值4000元《成辉人才》周刊1/8彩版12期\r\n3、《成辉招聘网》首页LOGO招聘显示3个月，文字招聘显示5个月','0');");
E_D("replace into `qs_setmeal` values('6','1','1','VIP客户个性定制','0','0','0','0','0','0','0','0','此套餐包含成辉招聘网、《成辉人才》、《成辉广告》、成辉专场招聘会，如需个性定制可拨打0951-6884155  13619587163进行定制','0');");

require("../../inc/footer.php");
?>