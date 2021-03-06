<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_explain`;");
E_C("CREATE TABLE `qs_explain` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type_id` smallint(5) unsigned NOT NULL,
  `title` varchar(100) NOT NULL,
  `subsite_id` int(10) DEFAULT NULL,
  `content` mediumtext NOT NULL,
  `tit_color` varchar(10) DEFAULT NULL,
  `tit_b` tinyint(1) NOT NULL DEFAULT '0',
  `is_display` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `is_url` varchar(200) NOT NULL DEFAULT '0',
  `seo_keywords` varchar(100) DEFAULT NULL,
  `seo_description` varchar(200) DEFAULT NULL,
  `click` int(11) NOT NULL DEFAULT '1',
  `addtime` int(10) NOT NULL,
  `show_order` smallint(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `type_id` (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gbk");
E_D("replace into `qs_explain` values('1','1','服务内容','0','','','0','1','http://','','','1','1264332774','0');");
E_D("replace into `qs_explain` values('2','1','联系我们','0','','','0','1','http://','','','1','1266987290','0');");
E_D("replace into `qs_explain` values('3','1','网站声明','0','本网站\"云云人才网\"及与本网站链接的网站，仅提供求职、招聘及其它与此相关联之服务。求职者、招聘单位以及因其它任何目的进入本网站的访问者接受本协议书条款，注册成为会员，并遵守本协议所述之条款使用本网站所提供之服务。如果您不接受本声明之条款， 请勿使用本网站。接受本声明之条款，您将遵守本协议之规定。<br />\r\n<br />\r\n　　 一. 信息的发布<br />\r\n　　1): 不得发布任何违反有关法律规定信息；<br />\r\n　　2): 不得发布任何与本网站求职、招聘目的不适之信息；<br />\r\n　　3): 不得发布任何不完整、虚假的信息；<br />\r\n　　4): 用户对所发布的信息承担完全责任。<br />\r\n<br />\r\n　　二. 信息的使用<br />\r\n　　1): 招聘单位仅可就招聘目的使用求职者之简历信息；<br />\r\n　　2): 求职者仅可因应聘某职位，使用招聘单位发布之招聘信息；<br />\r\n　　3): 本网站提供的其它信息，仅与其相应内容有关的目的而被使用；<br />\r\n　　4): 不得将任何本网站的信息用作任何商业目的。<br />\r\n<br />\r\n　　三. 信息的公开<br />\r\n　　在本网站所登录的任何信息，均有可能被任何本网站的访问者浏览，也可能被错误使用。本网站对此将不予承担任何责任。<br />\r\n<br />\r\n　　四. 信息的准确性<br />\r\n　　任何在本网站发布的信息，均必须符合合法、准确、及时、完整的原则。但本网站将不能保证所有由第三方提供的信息，或本网站自行采集的信息完全准确。使用者了解，对这些信息的使用，需要经过进一步核实。本网站对访问者未经自行核实误用本网站信息造成的任何损失不予承担任何责任。<br />\r\n<br />\r\n　　五. 信息更改与删除<br />\r\n　　除了信息的发布者外，任何访问者不得更改或删除他人发布的任何信息。本网站有权根据其判断保留修改或删除任何不适信息之权利。<br />\r\n<br />\r\n　　六. 版权、商标权<br />\r\n　　本网站的图形、图像、文字及其程序等均属云云人才网之版权，受商标法及相关知识产权法律保护，未经云云人才网书面许可，任何人不得下载、复制、再使用。在本网发布信息之商标， 归其相应的商标所有权人，受商标法保护。<br />\r\n<br />\r\n　　七. 注册信息使用<br />\r\n　　注册会员所提供的个人资料将会被云云人才网统计、汇总，在我们的严格管理下，为云云人才网的广告商及合作者提供依据。云云人才网会不定期地通过注册会员留下的电子邮件同该会员保持联系。<br />\r\n　　云云人才网承诺：在未经访问者授权同意的情况下，云云人才网不会将访问者的个人资料泄露给第三方。但以下情况除外。<br />\r\n　　1): 根据执法单位之要求或为公共之目的向相关单位提供个人资料；<br />\r\n　　2): 由于您将用户密码告知他人或与他人共享注册帐户，由此导致的任何个人资料泄露；<br />\r\n　　3): 由于计算机2000年问题、黑客攻击、计算机病毒侵入或发作、因政府管制而造成的暂时性关闭等影响网络正常经营之不可抗力而造成的个人资料泄露、丢失、被盗用或被窜改等；<br />\r\n　　4): 由于与云云人才网链接的其它网站所造成之个人资料泄露及由此而导致的任何法律争议和后果；<br />\r\n　　5): 为免除访问者在生命、身体或财产方面之急迫危险。<br />\r\n<br />\r\n　　八. 自责<br />\r\n　　所有使用本网站的用户，对使用本网站信息和在本网站发布信息的被使用，承担完全责任。本网站对任何因使用本网站而产生的第三方之间的纠纷，不负任何责任。<br />\r\n<br />\r\n　　 　　九. 服务终止<br />\r\n　　本网站有权在预先通知或不予通知的情况下终止任何免费服务。<br />\r\n<br />\r\n　　十. 争议处理<br />\r\n　　本网站因正常的系统维护、系统升级，或者因网络拥塞而导致网站不能访问，本网站不承担任何责任。<br />\r\n<br />\r\n　　十一. 免责条款<br />\r\n　　本网并无随时监视此网址，但保留对其实施实时监视的权利。对于他方输入的，不是本网发布的材料，本网概不负任何法律责任。 应聘信息发布方必须对其存入简历中心的个人简历及材料的格式、内容的准确性和合法性独立承担一切法律责任。招聘信息的发布方对其在职位数据库公布的材料独立承担一切法律责任。<br />\r\n　　本网不保证对某一种职位描述会有一定数目的使用者来浏览，也不保证会有一位特定的使用者来浏览。对于其他网址链接在本网址的内容，本网概不负法律责任。 <br />','','0','1','','','','1','1366093657','10');");
E_D("replace into `qs_explain` values('4','1','关于我们','0','','','0','1','','','','1','1366093790','0');");

require("../../inc/footer.php");
?>