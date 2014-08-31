<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_payment`;");
E_C("CREATE TABLE `qs_payment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `listorder` int(10) unsigned NOT NULL DEFAULT '50',
  `typename` varchar(15) NOT NULL,
  `byname` varchar(50) NOT NULL,
  `p_introduction` varchar(100) NOT NULL,
  `notes` text,
  `partnerid` varchar(80) DEFAULT NULL,
  `ytauthkey` varchar(100) DEFAULT NULL,
  `fee` varchar(6) NOT NULL DEFAULT '0',
  `parameter1` varchar(50) DEFAULT NULL,
  `parameter2` varchar(50) DEFAULT NULL,
  `parameter3` varchar(50) DEFAULT NULL,
  `p_install` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk");
E_D("replace into `qs_payment` values('1','50','remittance','转账/汇款','没有开通网银的请选择此项，到款后需客服为您手动开通','<br /><br />\r\n<div align=\"center\"><strong style=\" color:#FF6600; font-size:18px;\">付款后请通知我们客服！为你开通相关服务！</strong></div>\r\n <br />\r\n<strong style=\"color:#FF0000\" >联系客服</strong>\r\n  <br />\r\n客服QQ:000000000; 客服电话：000-0000000\r\n<br />\r\n<br />\r\n<strong style=\"color:#FF0000\" >付款方式</strong>\r\n<br />\r\n工商银行<br />\r\n  账号：000000000000000000000<br />\r\n户名：xxxxxxxxxxxxxxx<br />\r\n开户行：XXXXXXXXXXXXXX<br />\r\n---------------------------<br />\r\n  建设银行<br />\r\n  账号：000000000000000000000<br />\r\n  户名：xxxxxxxxxxxxxxx<br />\r\n开户行：XXXXXXXXXXXXXX\r\n<br />','remittance','','0','','','','2');");
E_D("replace into `qs_payment` values('2','50','chinabank','网银在线','全面支持全国19家银行的信用卡及借记卡实现网上支付','网银在线与中国工商银行、招商银行、中国建设银行、农业银行、民生银行等数十家金融机构达成协议。全面支持全国19家银行的信用卡及借记卡实现网上支付。（网址：http://www.chinabank.com.cn）','','','0','','','','1');");
E_D("replace into `qs_payment` values('3','50','tenpay','财付通','财付通是腾讯公司创办的中国领先的在线支付平台','财付通支持全国各大银行的网银支付，用户也可以先充值到财付通，享受更加便捷的财付通余额支付体验。财付通的提现、收款、付款等配套账户功能，让资金使用更灵活。','','','0','','','','2');");
E_D("replace into `qs_payment` values('4','50','alipay','支付宝','全球领先的独立第三方支付平台','支付宝，全球领先的独立第三方支付平台，致力于为广大用户提供安全快速的电子支付/网上支付/安全支付/手机支付体验，及转账收款/水电煤缴费/信用卡还款/AA收款等生活服务应用','','','1.5','','','','2');");

require("../../inc/footer.php");
?>