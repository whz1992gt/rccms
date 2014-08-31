<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_promotion_category`;");
E_C("CREATE TABLE `qs_promotion_category` (
  `cat_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cat_available` tinyint(1) NOT NULL DEFAULT '1',
  `cat_name` varchar(30) NOT NULL,
  `cat_type` tinyint(3) unsigned NOT NULL,
  `cat_minday` smallint(5) unsigned NOT NULL DEFAULT '0',
  `cat_maxday` int(10) unsigned NOT NULL DEFAULT '0',
  `cat_points` int(10) NOT NULL DEFAULT '0',
  `cat_notes` text NOT NULL,
  `cat_order` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk");
E_D("replace into `qs_promotion_category` values('1','1','推荐职位','1','15','360','3','<p>职位推荐后，网站首页推荐职位栏目将会出现您的推荐职位。这样可以很大程度提高您的招聘效率。<br />\r\n推荐职位到期后将自动取消推荐。</p>','0');");
E_D("replace into `qs_promotion_category` values('2','1','紧急招聘','1','7','360','3','<p>设置紧急招聘后职位将出现在首页紧急招聘栏目中，而且在职位名称后面有急聘字样的图片。</p>\r\n<p>紧急招聘是按天计费，过期后将自动取消。</p>','0');");
E_D("replace into `qs_promotion_category` values('3','1','职位置顶','1','7','360','6','<p>置顶招聘将会在职位列表首页置顶显示，可有效提高招聘效率。</p>\r\n<p>置顶招聘是按天计费，过期后将自动取消。</p>','0');");
E_D("replace into `qs_promotion_category` values('4','1','职位变色','1','7','360','2','<p>通过此方案可让您的职位名称颜色随意变换，更加引人瞩目！</p>\r\n<p>职位套色是按天计费，过期后将自动取消。</p>','0');");

require("../../inc/footer.php");
?>