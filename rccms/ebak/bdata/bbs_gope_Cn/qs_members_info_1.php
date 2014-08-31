<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_members_info`;");
E_C("CREATE TABLE `qs_members_info` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL,
  `realname` varchar(30) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `birthday` varchar(30) NOT NULL,
  `addresses` varchar(120) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `qq` varchar(30) NOT NULL,
  `msn` varchar(60) NOT NULL,
  `profile` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=gbk");
E_D("replace into `qs_members_info` values('1','6429','林聪','男','1987-10-11','宁夏回族自治区银川市宁夏大学','','243649318','','踏实做事，技术才是真本事');");
E_D("replace into `qs_members_info` values('2','6438','王同鑫','男','1992-02-23','宁夏职业技术学院','18795387492','547540534','','性格开朗、谦虚诚实的我，具有较强的工作责任感与团队合作精神，有良好的组织协调能力，良好的学校教育，让我用科学的理论知识和熟练的专业技能干好每一件事，坦诚、踏实的性格，让我在做任何事情上踏踏实实，没有百分之九十九的汗水就没有百分之一的成功。');");
E_D("replace into `qs_members_info` values('3','6440','赵子博','男','1994 10.3','宁夏银川市西夏区','','2329602227','','本人性格开朗 活泼希望找一份收入稳定  的工作 工资待遇上都算可以');");
E_D("replace into `qs_members_info` values('6','6459','测试','男','19870805','银川正源南街','18295686211','958119576','','测试');");
E_D("replace into `qs_members_info` values('9','6648','吴丹','女','','宁夏省银川市西夏区学知园','15109611185','593340936','','性格活泼，热爱生活，做事有责任心，始终坚信财富是自己创造出来的，我是最棒的');");
E_D("replace into `qs_members_info` values('7','6467','赵海龙','男','1989年11月26日','宁夏银川市西夏区','','348158259','','');");
E_D("replace into `qs_members_info` values('8','6475','王刚','男','1988年9月25日','宁夏石嘴山市大武口','','635102540','','2年房地产开发公司工程管理经验。\r\n专业特长：熟悉房地产工程开发及验收的相关流程，熟悉建筑强弱电、消防、通风工程安装及外装饰等工程的施工。');");
E_D("replace into `qs_members_info` values('10','6659','','','','','','','','');");
E_D("replace into `qs_members_info` values('11','6680','童德豪','男','1989.5.24','宁夏银川 北方民族大学','13895378966','382230425','','北方民族大学法学院法学专业应届毕业生。');");
E_D("replace into `qs_members_info` values('12','6708','蒯燕','女','1993 —02 —10','宁夏银川市永宁县','13369575742','962470210','','性格开朗大方，外语好，善于交际');");
E_D("replace into `qs_members_info` values('13','6709','倪娜','女','1989.10.10','兴庆区治平路林华苑16-2-202','','601623513','','本人性格开朗，自信热情，做事稳重，有责任心，能吃苦耐劳，具有团队合作精神及集体荣誉感，有较强的语言表达能力，善于沟通交际，具有良好的人际关系。');");
E_D("replace into `qs_members_info` values('14','6718','王扬州','男','19870510','银川市在水一方','','903129971','','');");
E_D("replace into `qs_members_info` values('15','6721','马旭','女','1987.11','宝湖路武警家属院','','','','');");
E_D("replace into `qs_members_info` values('17','6751','王永平','男','19891128','银川市兴庆区中山北街369','15769500160','1127592538','','为人踏实守信，吃苦耐劳，学习能力强，执行力强');");
E_D("replace into `qs_members_info` values('18','6766','','','','','','','','');");
E_D("replace into `qs_members_info` values('19','6774','刘宝晖','男','19861126','湖滨小区18号楼3单元402','','1063623127','','');");
E_D("replace into `qs_members_info` values('21','6474','','','','','','','','');");
E_D("replace into `qs_members_info` values('22','6812','','','','','','','','');");
E_D("replace into `qs_members_info` values('23','6824','王泽政','男','19850704','灵武市宁东镇','','','','');");
E_D("replace into `qs_members_info` values('24','6832','王俊智','男','1990.7.11','宁夏银川市西夏区','','','','');");
E_D("replace into `qs_members_info` values('25','3021','段金娥','女','1986.5','湖滨街体育巷','','','','');");
E_D("replace into `qs_members_info` values('26','6833','','','','','','','','');");
E_D("replace into `qs_members_info` values('32','7011','王娟','女','1993.08.13','宁夏银川市西夏区','15909663634','1127804561','','我个人性格开朗，对待工作认真负责，待人真诚，善于沟通、协调有较强的组织能力与团队精神；活泼开朗、乐观上进、有爱心并善于施教并行；上进心强、勤于学习能不断与综合素质。');");
E_D("replace into `qs_members_info` values('33','7010','','','','','','','','');");
E_D("replace into `qs_members_info` values('34','7087','马彦萍','女','1989年12月1日','兴庆区北门雅合苑','15009514988','649003433','','性格开朗，有亲和力，有上进心，吃苦耐劳，对待工作认真负责');");
E_D("replace into `qs_members_info` values('35','4695','任荣','女','','银川市兴庆区','','462306134','','');");
E_D("replace into `qs_members_info` values('37','7128','丁虎','男','1993.12.10','银川友爱一区','','849310825','','适应能力强，细心，有责任心，积极进取，能吃苦，');");
E_D("replace into `qs_members_info` values('38','7132','哈伟','男','1988.11.17','宁夏石嘴山市平罗县','18995235520','648428148','','');");
E_D("replace into `qs_members_info` values('39','7131','余远庆','男','1986.07.13','南门广场大地裕民苑','18227372635','418535241','','诚实稳重，有亲和力，学习能力强，对新的环境适应能力强，能吃苦耐劳。');");
E_D("replace into `qs_members_info` values('40','7135','余银安','男','','宁夏中卫市海原县黑城镇坪路村','','','','');");
E_D("replace into `qs_members_info` values('41','7140','徐佳婷','女','1990.09.09','银川市贺兰县','18295196525','401593631','','');");
E_D("replace into `qs_members_info` values('42','7144','马小军','男','19890106','银川市西夏区同心南路','','','','');");
E_D("replace into `qs_members_info` values('43','7143','买波','男','19870101','宁夏同心县园艺村','15349570732','245885116','','工作踏实，能吃苦');");
E_D("replace into `qs_members_info` values('44','7146','孙哲','男','19910125','银川市西夏区西夏小区','15009672680','512334446','','');");
E_D("replace into `qs_members_info` values('45','7149','童慧文','男','19901214','青海省大通县黄家寨镇台台村','13139082232','417477356','','毕业于青海师范大学');");
E_D("replace into `qs_members_info` values('47','7151','陈国','男','','宁夏银川市兴庆区','13469612137','','','');");
E_D("replace into `qs_members_info` values('48','7154','杜照日格图','男','1969.10.21','金凤区紫檀水景小区','18209580169','603975712','','1991-2003年内蒙古查盐公司负责生产管理，任生产主任，2003-2006年个体矿业负责人');");
E_D("replace into `qs_members_info` values('49','7167','徐翔','男','19890708','旅游汽车站对面','','871815324','','有上进心，能吃苦耐劳，有良好的团队意识');");
E_D("replace into `qs_members_info` values('50','7177','何杜娟','女','1990-04-29','宁夏大学本部','13629579401','1852169219','','');");

require("../../inc/footer.php");
?>