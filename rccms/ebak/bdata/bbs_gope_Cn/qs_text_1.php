<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_text`;");
E_C("CREATE TABLE `qs_text` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk");
E_D("replace into `qs_text` values('1','personal_talent_requirement','<p>&nbsp;&nbsp;&nbsp; 企业的HR对高级人才的关注度比普通人才高很多，即使现阶段企业并不需要这样的高级人才但当HR发现这样的人才时也会进行一定关注。所以一分完整的高级简历往往能让更多的HR发现你、关注你，让你拥有更多的机会。</p>\r\n<p>&nbsp;&nbsp; 一份高级简历中工作经历和您在工作中取得的成绩是非常重要的，如果您有比较重要的成绩请不要省略。同时如果有一些比较权威的培训或在社会等地方获得有重大奖项也可以添加到您的简历中，这也会给您的简历增色不少。</p>');");
E_D("replace into `qs_text` values('2','agreement','<table class=\"ke-zeroborder\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">\r\n<tbody>\r\n<tr>\r\n<td class=\"font14\" height=\"40\" align=\"middle\"><strong>会员注册协议</strong></td>\r\n</tr>\r\n<tr>\r\n<td>本网站及与本网站链接的网站，仅提供求职、招聘及其他与此相关联之服务。求职者、招聘单位以及因其他任何目的进入本网站的访问者接受本协议书条款，注册成为网站会员，并遵守本协议所述之条款使用本网站所提供之服务。如果你不接受本声明之条款，请勿使用本网站。接受本声明之条款，你将遵守本协议之规定。 <p>1.信息的发布<br />\r\n·不得发布任何违反有关法律规定信息； <br />\r\n·不得发布任何与本网站求职、招聘目的不适之信息； <br />\r\n·不得发布任何不完整、虚假的信息； <br />\r\n·用户对所发布的信息承担完全责任。 <br />\r\n<p>2.信息的使用<br />\r\n·招聘单位仅可就招聘目的使用求职者之简历信息； <br />\r\n·求职者仅可因应聘某职位，使用招聘单位发布之招聘信息； <br />\r\n·本网站提供的其他信息，仅与其相应内容有关的目的而被使用； <br />\r\n·不得将任何本网站的信息用作任何商业目的。 <br />\r\n<p>3.信息的公开<br />\r\n在本网站所登录的任何信息，均有可能被任何本网站的访问者浏览，也可能被错误使用。本网站对此将不予承担任何责任。</p>\r\n<p>4.信息的准确性<br />\r\n任何在本网站发布的信息，均必须符合合法、准确、及时、完整的原则。但本网站将不能保证所有由第三方提供的信息，或本网站自行采集的信息完全准确。使用者了解，对这些信息的使用，需要经过进一步核实。本网站对访问者未经自行核实误用本网站信息造成的任何损失不予承担任何责任。</p>\r\n<p>5.信息更改与删除<br />\r\n除了信息的发布者外，任何访问者不得更改或删除他人发布的任何信息。本网站有权根据其判断保留修改或删除任何不适信息之权利。</p>\r\n<p>6.版权、商标权<br />\r\n本网站的图形、图像、文字及其程序等均属宁夏成辉文化传媒有限公司之版权，受商标法及相关知识产权法律保护，未经宁夏成辉文化传媒有限公司书面许可，任何人不得下载、复制、再使用。在本网发布信息之商标，归其相应的商标所有权人，受商标法保护。</p>\r\n<p>7、注册信息使用<br />\r\n注册会员所提供的个人资料将会被宁夏成辉文化传媒有限公司统计、汇总，在我们的严格管理下，为宁夏成辉文化传媒有限公司的广告商及合作者提供依据。宁夏成辉文化传媒有限公司会不定期地通过注册会员留下的电子邮件同该会员保持联系。 </p>\r\n<p>宁夏成辉文化传媒有限公司承诺：在未经访问者授权同意的情况下，宁夏成辉文化传媒有限公司不会将访问者的个人资料泄露给第三方。但以下情况除外。</p>\r\n<p>1 ) 根据执法单位之要求或为公共之目的向相关单位提供个人资料； <br />\r\n2 ) 由于你将用户密码告知他人或与他人共享注册帐户，由此导致的任何个人资料泄露； <br />\r\n3 ) 由于计算机2000年问题、黑客攻击、计算机病毒侵入或发作、因政府管制而造成的暂时性关闭等影响网络正常经营之不可抗力而造成的个人资料泄露、丢失、被盗用或被窜改等； <br />\r\n4 ) 由于与宁夏成辉文化传媒有限公司链接的其他网站所造成之个人资料泄露及由此而导致的任何法律争议和后果； <br />\r\n5 ) 为免除访问者在生命、身体或财产方面之急迫危险。 <br />\r\n8.自责<br />\r\n所有使用本网站的用户，对使用本网站信息和在本网站发布信息的被使用，承担完全责任。本网站对任何因使用本网站而产生的第三方之间的纠纷，不负任何责任。</p>\r\n<p>9.服务终止<br />\r\n本网站有权在预先通知或不予通知的情况下终止任何免费服务。</p>\r\n<p>10.争议处理<br />\r\n本网站因正常的系统维护、系统升级，或者因网络拥塞而导致网站不能访问，本网站不承担任何责任。</p>\r\n<p>11.免责条款<br />\r\n本网并无随时监视此网址，但保留对其实施实时监视的权利。对于他方输入的，不是本网发布的材料，本网概不负任何法律责任。应聘信息发布方必须对其存入简历中心的个人简历及材料的格式、内容的准确性和合法性独立承担一切法律责任。招聘信息的发布方对其在职位数据库公布的材料独立承担一切法律责任。</p>\r\n<p>本网不保证对某一种职位描述会有一定数目的使用者来浏览，也不保证会有一位特定的使用者来浏览。对于其他网址链接在本网址的内容，本网概不负法律责任。<br />\r\n</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<table class=\"ke-zeroborder\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">\r\n<tbody>\r\n<tr>\r\n<td class=\"font14\" height=\"40\" align=\"middle\"></td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>&nbsp;</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<table class=\"ke-zeroborder\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">\r\n<tbody>\r\n<tr>\r\n<td class=\"font14\" height=\"40\" align=\"middle\"></td>\r\n</tr>\r\n<tr>\r\n<td><br />\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<table class=\"ke-zeroborder\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">\r\n<tbody>\r\n<tr>\r\n<td class=\"font14\" height=\"40\" align=\"middle\"></td>\r\n</tr>\r\n<tr>\r\n<td></td>\r\n</tr>\r\n</tbody>\r\n</table>');");
E_D("replace into `qs_text` values('3','link_application_txt','有意与本站交换链接的同盟请注意：<br />\r\n1、贵网站为人才相关网站；<br />\r\n2、首页友情连接，要求pr&gt;=1、alexa &lt; 10000；其他页面连接根据具体页面而定（请具体咨询）。<br />\r\n3、贵网站要在百度google都有记录收录，且网站访问速度不能太慢。');");

require("../../inc/footer.php");
?>