<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_category`;");
E_C("CREATE TABLE `qs_category` (
  `c_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `c_parentid` int(10) unsigned NOT NULL,
  `c_alias` char(30) NOT NULL,
  `c_name` char(30) NOT NULL,
  `c_order` int(10) NOT NULL,
  `c_index` char(1) NOT NULL,
  `c_note` char(60) NOT NULL,
  `stat_jobs` char(15) NOT NULL,
  `stat_resume` char(15) NOT NULL,
  PRIMARY KEY (`c_id`),
  KEY `c_alias` (`c_alias`)
) ENGINE=MyISAM AUTO_INCREMENT=253 DEFAULT CHARSET=gbk");
E_D("replace into `qs_category` values('1','0','QS_trade','计算机软件/硬件','0','','','(6)','(2)');");
E_D("replace into `qs_category` values('2','0','QS_trade','计算机系统/维修','0','','','(21)','(2)');");
E_D("replace into `qs_category` values('3','0','QS_trade','通信(设备/运营/服务)','0','','','(24)','(2)');");
E_D("replace into `qs_category` values('4','0','QS_trade','互联网/电子商务','0','','','(151)','(2)');");
E_D("replace into `qs_category` values('5','0','QS_trade','网络游戏','0','','','','(2)');");
E_D("replace into `qs_category` values('6','0','QS_trade','电子/半导体/集成电路','0','','','(45)','(2)');");
E_D("replace into `qs_category` values('7','0','QS_trade','仪器仪表/工业自动化','0','','','(18)','(2)');");
E_D("replace into `qs_category` values('8','0','QS_trade','会计/审计','0','','','','(2)');");
E_D("replace into `qs_category` values('9','0','QS_trade','金融(投资/证券','0','','','','(2)');");
E_D("replace into `qs_category` values('10','0','QS_trade','金融(银行/保险)','0','','','','(2)');");
E_D("replace into `qs_category` values('11','0','QS_trade','贸易/进出口','0','','','(110)','(2)');");
E_D("replace into `qs_category` values('12','0','QS_trade','批发/零售','0','','','','(2)');");
E_D("replace into `qs_category` values('13','0','QS_trade','消费品(食/饮/烟酒)','0','','','(65)','(2)');");
E_D("replace into `qs_category` values('14','0','QS_trade','服装/纺织/皮革','0','','','(49)','(2)');");
E_D("replace into `qs_category` values('15','0','QS_trade','家具/家电/工艺品/玩具','0','','','(28)','(2)');");
E_D("replace into `qs_category` values('16','0','QS_trade','办公用品及设备','0','','','(2)','(2)');");
E_D("replace into `qs_category` values('17','0','QS_trade','机械/设备/重工','0','','','(156)','(2)');");
E_D("replace into `qs_category` values('18','0','QS_trade','汽车/摩托车/零配件','0','','','(94)','(2)');");
E_D("replace into `qs_category` values('19','0','QS_trade','制药/生物工程','0','','','(50)','(2)');");
E_D("replace into `qs_category` values('20','0','QS_trade','医疗/美容/保健/卫生','0','','','(10)','(2)');");
E_D("replace into `qs_category` values('21','0','QS_trade','医疗设备/器械','0','','','(40)','(2)');");
E_D("replace into `qs_category` values('22','0','QS_trade','广告/市场推广','0','','','(2)','(2)');");
E_D("replace into `qs_category` values('23','0','QS_trade','会展/博览','0','','','','(2)');");
E_D("replace into `qs_category` values('24','0','QS_trade','影视/媒体/艺术/出版','0','','','','(2)');");
E_D("replace into `qs_category` values('25','0','QS_trade','印刷/包装/造纸','0','','','(28)','(2)');");
E_D("replace into `qs_category` values('26','0','QS_trade','房地产开发','0','','','(263)','(2)');");
E_D("replace into `qs_category` values('27','0','QS_trade','建筑与工程','0','','','(103)','(2)');");
E_D("replace into `qs_category` values('28','0','QS_trade','家居/室内设计/装潢','0','','','(69)','(2)');");
E_D("replace into `qs_category` values('29','0','QS_trade','物业管理/商业中心','0','','','(32)','(2)');");
E_D("replace into `qs_category` values('30','0','QS_trade','中介服务/家政服务','0','','','(3)','(2)');");
E_D("replace into `qs_category` values('31','0','QS_trade','专业服务/财会/法律','0','','','(28)','(2)');");
E_D("replace into `qs_category` values('32','0','QS_trade','检测/认证','0','','','(2)','(2)');");
E_D("replace into `qs_category` values('33','0','QS_trade','教育/培训','0','','','(72)','(2)');");
E_D("replace into `qs_category` values('34','0','QS_trade','学术/科研','0','','','','(2)');");
E_D("replace into `qs_category` values('35','0','QS_trade','餐饮/娱乐/休闲','0','','','','(2)');");
E_D("replace into `qs_category` values('36','0','QS_trade','酒店/旅游','0','','','(14)','(2)');");
E_D("replace into `qs_category` values('37','0','QS_trade','交通/运输/物流','0','','','(38)','(2)');");
E_D("replace into `qs_category` values('38','0','QS_trade','航天/航空','0','','','','(2)');");
E_D("replace into `qs_category` values('39','0','QS_trade','能源(石油/化工/矿产)','0','','','','(2)');");
E_D("replace into `qs_category` values('40','0','QS_trade','能源(采掘/冶炼/原材料)','0','','','(11)','(2)');");
E_D("replace into `qs_category` values('41','0','QS_trade','电力/水利/新能源','0','','','(3)','(2)');");
E_D("replace into `qs_category` values('42','0','QS_trade','政府部门/事业单位','0','','','','(2)');");
E_D("replace into `qs_category` values('43','0','QS_trade','非盈利机构/行业协会','0','','','','(2)');");
E_D("replace into `qs_category` values('44','0','QS_trade','农业/渔业/林业/牧业','0','','','','(2)');");
E_D("replace into `qs_category` values('45','0','QS_trade','其他行业','0','','','(1000)','(2)');");
E_D("replace into `qs_category` values('46','0','QS_company_type','国企','0','','','','');");
E_D("replace into `qs_category` values('47','0','QS_company_type','民营','0','','','','');");
E_D("replace into `qs_category` values('48','0','QS_company_type','合资','0','','','','');");
E_D("replace into `qs_category` values('49','0','QS_company_type','外商独资','0','','','','');");
E_D("replace into `qs_category` values('50','0','QS_company_type','股份制企业','0','','','','');");
E_D("replace into `qs_category` values('51','0','QS_company_type','上市公司','0','','','','');");
E_D("replace into `qs_category` values('52','0','QS_company_type','国家机关','0','','','','');");
E_D("replace into `qs_category` values('53','0','QS_company_type','事业单位','0','','','','');");
E_D("replace into `qs_category` values('54','0','QS_company_type','其它','0','','','','');");
E_D("replace into `qs_category` values('55','0','QS_wage','面议','0','','','(1098)','(2)');");
E_D("replace into `qs_category` values('56','0','QS_wage','1000~1500元/月','0','','','(2)','(2)');");
E_D("replace into `qs_category` values('57','0','QS_wage','1500~2000元/月','0','','','(318)','(2)');");
E_D("replace into `qs_category` values('58','0','QS_wage','2000~3000元/月','0','','','(690)','(2)');");
E_D("replace into `qs_category` values('59','0','QS_wage','3000~5000元/月','0','','','(429)','(2)');");
E_D("replace into `qs_category` values('60','0','QS_wage','5000~10000元/月','0','','','','(2)');");
E_D("replace into `qs_category` values('61','0','QS_wage','1万以上/月','0','','','','(2)');");
E_D("replace into `qs_category` values('62','0','QS_jobs_nature','全职','0','','','(2510)','(2)');");
E_D("replace into `qs_category` values('63','0','QS_jobs_nature','兼职','0','','','(21)','(2)');");
E_D("replace into `qs_category` values('64','0','QS_jobs_nature','实习','0','','','(6)','(2)');");
E_D("replace into `qs_category` values('65','0','QS_education','初中','0','','','','');");
E_D("replace into `qs_category` values('66','0','QS_education','高中','0','','','','');");
E_D("replace into `qs_category` values('67','0','QS_education','中技','0','','','','');");
E_D("replace into `qs_category` values('68','0','QS_education','中专','0','','','','');");
E_D("replace into `qs_category` values('69','0','QS_education','大专','0','','','','');");
E_D("replace into `qs_category` values('70','0','QS_education','本科','0','','','','');");
E_D("replace into `qs_category` values('71','0','QS_education','硕士','0','','','','');");
E_D("replace into `qs_category` values('72','0','QS_education','博士','0','','','','');");
E_D("replace into `qs_category` values('73','0','QS_education','博后','0','','','','');");
E_D("replace into `qs_category` values('74','0','QS_experience','无经验','0','','','','');");
E_D("replace into `qs_category` values('75','0','QS_experience','1年以下','0','','','','');");
E_D("replace into `qs_category` values('76','0','QS_experience','1-3年','0','','','','');");
E_D("replace into `qs_category` values('77','0','QS_experience','3-5年','0','','','','');");
E_D("replace into `qs_category` values('78','0','QS_experience','5-10年','0','','','','');");
E_D("replace into `qs_category` values('79','0','QS_experience','10年以上','0','','','','');");
E_D("replace into `qs_category` values('80','0','QS_scale','20人以下','0','','','','');");
E_D("replace into `qs_category` values('81','0','QS_scale','20-99人','0','','','','');");
E_D("replace into `qs_category` values('82','0','QS_scale','100-499人','0','','','','');");
E_D("replace into `qs_category` values('83','0','QS_scale','500-999人','0','','','','');");
E_D("replace into `qs_category` values('84','0','QS_scale','1000-9999人','0','','','','');");
E_D("replace into `qs_category` values('85','0','QS_scale','10000人以上','0','','','','');");
E_D("replace into `qs_category` values('86','0','QS_officebuilding','宝塔石化大厦','0','b','金凤区宁安大街88号','','');");
E_D("replace into `qs_category` values('87','0','QS_officebuilding','博文大厦','0','b','民族南街与宗睦巷交汇处','','');");
E_D("replace into `qs_category` values('88','0','QS_officebuilding','财富大厦','0','c','新昌东路蓝山名邸附近','','');");
E_D("replace into `qs_category` values('89','0','QS_officebuilding','长城商务楼','0','c','中山街与解放街交汇处附近','','');");
E_D("replace into `qs_category` values('90','0','QS_officebuilding','电力投资大厦','0','d','新华西街与西桥南巷附近','','');");
E_D("replace into `qs_category` values('91','0','QS_officebuilding','东升大厦','0','d','解放街与清河街交叉口','','');");
E_D("replace into `qs_category` values('92','0','QS_officebuilding','飞翔大厦','0','f','庆丰街与银盛路交汇处','','');");
E_D("replace into `qs_category` values('93','0','QS_officebuilding','凤凰商务广场B座','0','f','新华东街70号','','');");
E_D("replace into `qs_category` values('94','0','QS_officebuilding','凤凰写字楼','0','f','凤凰街与南熏西路交汇处','','');");
E_D("replace into `qs_category` values('95','0','QS_officebuilding','富华大厦','0','f','富宁街142','','');");
E_D("replace into `qs_category` values('96','0','QS_officebuilding','富龙大厦','0','f','清和北街1025','','');");
E_D("replace into `qs_category` values('97','0','QS_officebuilding','高尔夫商务大厦','0','g','民族北街与上海路交汇处向南','','');");
E_D("replace into `qs_category` values('98','0','QS_officebuilding','光辉大厦','0','g','北京东路公交旅游总站附近','','');");
E_D("replace into `qs_category` values('99','0','QS_officebuilding','光耀大厦','0','g','民族南街长城东路交汇处','','');");
E_D("replace into `qs_category` values('100','0','QS_officebuilding','国控大厦','0','g','新华西街51号（新华西街与民族街交汇处向西）','','');");
E_D("replace into `qs_category` values('101','0','QS_officebuilding','和信创展中心','0','h','上海西路与正源北街交汇处附近','','');");
E_D("replace into `qs_category` values('102','0','QS_officebuilding','国际会展中心','0','g','金凤区北京中路169号（北京路与亲水大街交汇处向东）','','');");
E_D("replace into `qs_category` values('103','0','QS_officebuilding','国贸大厦','0','g','文化西街与公园路交汇处','','');");
E_D("replace into `qs_category` values('104','0','QS_officebuilding','和信商务中心','0','h','新昌东路158号（新昌路与宁安东巷交汇处）','','');");
E_D("replace into `qs_category` values('105','0','QS_officebuilding','恒泰大厦','0','h','正源街与黄河路交汇处','','');");
E_D("replace into `qs_category` values('106','0','QS_officebuilding','虹桥行政楼','0','h','解放西街与教育南巷交汇处附近','','');");
E_D("replace into `qs_category` values('107','0','QS_officebuilding','华丰大厦','0','h','新华东街99号（新华东街与鼓楼南街交汇处）','','');");
E_D("replace into `qs_category` values('108','0','QS_officebuilding','华通达商务楼','0','h','宁安大街与富安巷交汇处东侧','','');");
E_D("replace into `qs_category` values('109','0','QS_officebuilding','黄河龙大厦','0','h','上海东路与中山北街交汇处','','');");
E_D("replace into `qs_category` values('110','0','QS_officebuilding','建发东方红','0','j','新华东街199附近','','');");
E_D("replace into `qs_category` values('111','0','QS_officebuilding','建发公寓B座','0','j','新华东街与清和南街交汇处附近','','');");
E_D("replace into `qs_category` values('112','0','QS_officebuilding','建发家世界','0','j','宏佑巷新华东街路口西侧','','');");
E_D("replace into `qs_category` values('113','0','QS_officebuilding','建发现代城','0','j','解放西街与进宁北街交汇处','','');");
E_D("replace into `qs_category` values('114','0','QS_officebuilding','京德大厦','0','j','宁安西巷清馨苑附近','','');");
E_D("replace into `qs_category` values('115','0','QS_officebuilding','建设大厦','0','j','上海东路48号','','');");
E_D("replace into `qs_category` values('116','0','QS_street','丽景街','0','l','','','');");
E_D("replace into `qs_category` values('117','0','QS_street','清河街','0','q','0','','');");
E_D("replace into `qs_category` values('118','0','QS_street','民族街','0','m','0','','');");
E_D("replace into `qs_category` values('119','0','QS_street','中山街','0','z','0','','');");
E_D("replace into `qs_category` values('120','0','QS_street','解放街','0','j','0','','');");
E_D("replace into `qs_category` values('121','0','QS_street','进宁街','0','j','0','','');");
E_D("replace into `qs_category` values('122','0','QS_street','凤凰街','0','f','0','','');");
E_D("replace into `qs_category` values('123','0','QS_street','正源街','0','z','0','','');");
E_D("replace into `qs_category` values('124','0','QS_street','尹家渠街','0','y','0','','');");
E_D("replace into `qs_category` values('125','0','QS_street','泰康街','0','t','0','','');");
E_D("replace into `qs_category` values('126','0','QS_street','宁安大街','0','n','0','','');");
E_D("replace into `qs_category` values('127','0','QS_street','人民广场东街','0','r','0','','');");
E_D("replace into `qs_category` values('128','0','QS_street','人民广场西街','0','r','0','','');");
E_D("replace into `qs_category` values('129','0','QS_street','亲水大街','0','q','0','','');");
E_D("replace into `qs_category` values('130','0','QS_street','满城街','0','m','0','','');");
E_D("replace into `qs_category` values('131','0','QS_street','福州街','0','f','0','','');");
E_D("replace into `qs_category` values('132','0','QS_street','通达街','0','t','0','','');");
E_D("replace into `qs_category` values('133','0','QS_street','兴洲街','0','x','0','','');");
E_D("replace into `qs_category` values('134','0','QS_jobtag','环境好','0','h','0','','');");
E_D("replace into `qs_category` values('135','0','QS_jobtag','年终奖','0','n','0','','');");
E_D("replace into `qs_category` values('136','0','QS_jobtag','双休','0','s','0','','');");
E_D("replace into `qs_category` values('137','0','QS_jobtag','五险一金','0','w','0','','');");
E_D("replace into `qs_category` values('138','0','QS_jobtag','加班费','0','j','0','','');");
E_D("replace into `qs_category` values('139','0','QS_jobtag','朝九晚五','0','c','0','','');");
E_D("replace into `qs_category` values('140','0','QS_jobtag','美女多','0','m','0','','');");
E_D("replace into `qs_category` values('141','0','QS_jobtag','帅哥多','0','s','0','','');");
E_D("replace into `qs_category` values('142','0','QS_jobtag','包食宿','0','b','0','','');");
E_D("replace into `qs_category` values('143','0','QS_jobtag','管理规范','0','g','0','','');");
E_D("replace into `qs_category` values('144','0','QS_jobtag','有提成','0','y','0','','');");
E_D("replace into `qs_category` values('145','0','QS_jobtag','全勤奖','0','q','0','','');");
E_D("replace into `qs_category` values('146','0','QS_jobtag','有年假','0','y','0','','');");
E_D("replace into `qs_category` values('147','0','QS_jobtag','专车接送','0','z','0','','');");
E_D("replace into `qs_category` values('148','0','QS_jobtag','有补助','0','y','0','','');");
E_D("replace into `qs_category` values('149','0','QS_jobtag','晋升快','0','j','0','','');");
E_D("replace into `qs_category` values('150','0','QS_jobtag','车贴','0','c','0','','');");
E_D("replace into `qs_category` values('151','0','QS_jobtag','房贴','0','f','0','','');");
E_D("replace into `qs_category` values('152','0','QS_jobtag','压力小','0','y','0','','');");
E_D("replace into `qs_category` values('153','0','QS_jobtag','技术培训','0','j','0','','');");
E_D("replace into `qs_category` values('154','0','QS_jobtag','旅游','0','l','0','','');");
E_D("replace into `qs_category` values('155','0','QS_resumetag','形象好','0','x','0','','');");
E_D("replace into `qs_category` values('156','0','QS_resumetag','气质佳','0','q','0','','');");
E_D("replace into `qs_category` values('157','0','QS_resumetag','能出差','0','n','0','','');");
E_D("replace into `qs_category` values('158','0','QS_resumetag','很幽默','0','h','0','','');");
E_D("replace into `qs_category` values('159','0','QS_resumetag','技术精悍','0','j','0','','');");
E_D("replace into `qs_category` values('160','0','QS_resumetag','有亲和力','0','y','0','','');");
E_D("replace into `qs_category` values('161','0','QS_resumetag','身材好','0','s','0','','');");
E_D("replace into `qs_category` values('162','0','QS_resumetag','经验丰富','0','j','0','','');");
E_D("replace into `qs_category` values('163','0','QS_resumetag','能加班','0','n','0','','');");
E_D("replace into `qs_category` values('164','0','QS_resumetag','海归','0','h','0','','');");
E_D("replace into `qs_category` values('165','0','QS_resumetag','会开车','0','h','0','','');");
E_D("replace into `qs_category` values('166','0','QS_resumetag','口才好','0','k','0','','');");
E_D("replace into `qs_category` values('167','0','QS_resumetag','声音甜美','0','s','0','','');");
E_D("replace into `qs_category` values('168','0','QS_resumetag','会应酬','0','h','0','','');");
E_D("replace into `qs_category` values('169','0','QS_resumetag','诚实守信','0','c','0','','');");
E_D("replace into `qs_category` values('170','0','QS_resumetag','外语好','0','w','0','','');");
E_D("replace into `qs_category` values('171','0','QS_resumetag','性格开朗','0','x','0','','');");
E_D("replace into `qs_category` values('172','0','QS_resumetag','有上进心','0','y','0','','');");
E_D("replace into `qs_category` values('173','0','QS_resumetag','人脉广','0','r','0','','');");
E_D("replace into `qs_category` values('174','0','QS_resumetag','知识丰富','0','z','0','','');");
E_D("replace into `qs_category` values('175','0','QS_resumetag','才艺多','0','c','0','','');");
E_D("replace into `qs_category` values('176','0','QS_officebuilding','金泰大厦AB座','0','j','新华东街与清河街交汇处','','');");
E_D("replace into `qs_category` values('177','0','QS_officebuilding','金源大厦','0','j','北京东路379号（北京东路与北安巷交汇处）','','');");
E_D("replace into `qs_category` values('178','0','QS_officebuilding','科贸大厦','0','k','解放东街229号','','');");
E_D("replace into `qs_category` values('179','0','QS_officebuilding','老大楼写字楼','0','l','解放街与民族街交汇处西侧','','');");
E_D("replace into `qs_category` values('180','0','QS_officebuilding','丽景商务楼','0','l','丽景北街安宁巷路口南侧','','');");
E_D("replace into `qs_category` values('181','0','QS_officebuilding','路星大厦','0','l','文化东街98（鼓楼北街与文化街交汇处）','','');");
E_D("replace into `qs_category` values('182','0','QS_officebuilding','美铂大厦','0','m','长城中路256号（长城路与庆丰街交汇处）','','');");
E_D("replace into `qs_category` values('183','0','QS_officebuilding','名都国际大厦','0','m','宗睦巷与民族南街交汇处','','');");
E_D("replace into `qs_category` values('184','0','QS_officebuilding','名人大厦','0','m','民族南街699-1（民族街与富华巷交汇处）','','');");
E_D("replace into `qs_category` values('185','0','QS_officebuilding','南苑商务楼','0','n','银盛路与庆丰街交汇处','','');");
E_D("replace into `qs_category` values('186','0','QS_officebuilding','宁报集团商务写字楼','0','n','中山南街31号（中山南街与泽民巷交汇处）','','');");
E_D("replace into `qs_category` values('187','0','QS_officebuilding','宁夏对外贸易大厦','0','n','南薰西路370号（凤凰街与南熏路交汇处向东）','','');");
E_D("replace into `qs_category` values('188','0','QS_officebuilding','宁夏软件园','0','n','新昌东路159号','','');");
E_D("replace into `qs_category` values('189','0','QS_officebuilding','农业大厦','0','n','北京中路159号（尹家渠街与育安巷交汇处）','','');");
E_D("replace into `qs_category` values('190','0','QS_officebuilding','派胜大厦','0','p','上海西路188（泰康街与上海西路交汇处）','','');");
E_D("replace into `qs_category` values('191','0','QS_officebuilding','青春大厦','0','q','解放西街教育南巷路口东侧','','');");
E_D("replace into `qs_category` values('192','0','QS_officebuilding','荣恒大厦','0','r','北京东路476（中山北街与北京路交汇处）','','');");
E_D("replace into `qs_category` values('193','0','QS_officebuilding','瑞银财富中心','0','r','北京中路与正源北街交汇处','','');");
E_D("replace into `qs_category` values('194','0','QS_officebuilding','天乐苑大厦','0','t','正源南街534号（正源南街与银盛路交汇处向南）','','');");
E_D("replace into `qs_category` values('195','0','QS_officebuilding','天骏大厦','0','t','北京中路与满城南街交汇处','','');");
E_D("replace into `qs_category` values('196','0','QS_officebuilding','天润商务写字楼','0','t','长城东路218号（利民街与长城路交汇处向东）','','');");
E_D("replace into `qs_category` values('197','0','QS_officebuilding','投资大厦','0','t','湖滨西街65号（湖滨街与进凝）','','');");
E_D("replace into `qs_category` values('198','0','QS_officebuilding','投资大厦','0','t','湖滨西街65号（湖滨街与进宁街交汇处）','','');");
E_D("replace into `qs_category` values('199','0','QS_officebuilding','五宝大厦','0','w','清和北街1011-1','','');");
E_D("replace into `qs_category` values('200','0','QS_officebuilding','万达公寓','0','w','正源街与北京路交汇处向北','','');");
E_D("replace into `qs_category` values('201','0','QS_officebuilding','新华写字楼','0','x','新华东街53号（新华街与中心巷交汇处向东）','','');");
E_D("replace into `qs_category` values('202','0','QS_officebuilding','新新大厦','0','x','北京中路与满城街交汇处','','');");
E_D("replace into `qs_category` values('203','0','QS_officebuilding','鑫磊大厦','0','','中心巷148号（中心巷与南熏路交汇处）','','');");
E_D("replace into `qs_category` values('204','0','QS_officebuilding','鑫翔大厦','0','','新昌西路与宁安西巷交汇处','','');");
E_D("replace into `qs_category` values('205','0','QS_officebuilding','鑫业大厦','0','','上海西路与尹家渠北街交汇处附近','','');");
E_D("replace into `qs_category` values('206','0','QS_officebuilding','星光SOHO公寓','0','x','宝湖东路民族南街交汇处','','');");
E_D("replace into `qs_category` values('207','0','QS_officebuilding','亚美大厦','0','y','解放东街180号（解放街与清河街交汇处）','','');");
E_D("replace into `qs_category` values('208','0','QS_officebuilding','亚西招商大厦','0','y','黄河东路788号（黄河东路与庆丰街交汇处）','','');");
E_D("replace into `qs_category` values('209','0','QS_officebuilding','邮政大厦','0','y','解放街与民族街交汇处','','');");
E_D("replace into `qs_category` values('210','0','QS_officebuilding','浙江大厦','0','z','解放东街333（海天大酒店附近）','','');");
E_D("replace into `qs_category` values('211','0','QS_officebuilding','朝阳大厦','0','c','民族北街200号','','');");
E_D("replace into `qs_category` values('212','0','QS_officebuilding','中房富力城ABC','0','z','中心巷与南熏街交汇处附近','','');");
E_D("replace into `qs_category` values('213','0','QS_officebuilding','中盐大厦','0','z','宁安大街108号（宁安街与富安巷交汇处）','','');");
E_D("replace into `qs_category` values('214','0','QS_officebuilding','中苑大厦','0','z','黄河东路与安宁大街交叉处','','');");
E_D("replace into `qs_category` values('215','0','QS_officebuilding','众一商务写字楼','0','z','北京东路521（北京路与清河街交汇处）','','');");
E_D("replace into `qs_category` values('216','0','QS_officebuilding','紫荆花商务中心','0','z','新昌西路65号','','');");
E_D("replace into `qs_category` values('217','0','QS_officebuilding','民航大厦','0','m','胜利北街87号','','');");
E_D("replace into `qs_category` values('218','0','QS_officebuilding','银河商务公寓','0','y','清和北街196 号','','');");
E_D("replace into `qs_category` values('219','0','QS_officebuilding','世纪大厦','0','s','玉皇阁北街24号(近解放东街)','','');");
E_D("replace into `qs_category` values('220','0','QS_officebuilding','天成大厦','0','t','长城中路与满城南街交叉口北侧200米','','');");
E_D("replace into `qs_category` values('221','0','QS_officebuilding','光耀美居光华店商务写字楼','0','g','兴庆区第二小学附近','','');");
E_D("replace into `qs_category` values('222','0','QS_officebuilding','清源大厦','0','q','西夏区怀远西路155号','','');");
E_D("replace into `qs_category` values('223','0','QS_officebuilding','宁夏工会大厦','0','n','解放街与民族街交汇处','','');");
E_D("replace into `qs_category` values('224','0','QS_officebuilding','鑫翔大厦','0','','新昌西路与宁安西巷交汇处','','');");
E_D("replace into `qs_category` values('225','0','QS_officebuilding','银凤大厦','0','y','正源南街377号','','');");
E_D("replace into `qs_category` values('226','0','QS_officebuilding','恒诺大厦','0','h','凤凰北街17号','','');");
E_D("replace into `qs_category` values('227','0','QS_officebuilding','宁夏对外经济贸易大厦','0','n','南薰西街370号','','');");
E_D("replace into `qs_category` values('228','0','QS_street','丽子园街','0','l','','','');");
E_D("replace into `qs_category` values('229','0','QS_street','金波街','0','j','','','');");
E_D("replace into `qs_category` values('230','0','QS_street','文萃街','0','w','','','');");
E_D("replace into `qs_category` values('231','0','QS_street','同心路','0','t','','','');");
E_D("replace into `qs_category` values('232','0','QS_street','文昌路','0','w','','','');");
E_D("replace into `qs_category` values('233','0','QS_street','学院路','0','x','','','');");
E_D("replace into `qs_category` values('234','0','QS_street','北京路','0','b','','','');");
E_D("replace into `qs_category` values('235','0','QS_street','上海路','0','s','','','');");
E_D("replace into `qs_category` values('236','0','QS_street','贺兰山路','0','h','','','');");
E_D("replace into `qs_category` values('237','0','QS_street','黄河路','0','h','','','');");
E_D("replace into `qs_category` values('238','0','QS_street','长城路','0','c','','','');");
E_D("replace into `qs_category` values('239','0','QS_street','南熏路','0','n','','','');");
E_D("replace into `qs_category` values('240','0','QS_street','宝湖路','0','b','','','');");
E_D("replace into `qs_category` values('241','0','QS_street','新华街','0','x','','','');");
E_D("replace into `qs_category` values('242','0','QS_street','胜利街','0','s','','','');");
E_D("replace into `qs_category` values('243','0','QS_street','湖滨街','0','h','','','');");
E_D("replace into `qs_category` values('244','0','QS_street','大连路','0','d','','','');");
E_D("replace into `qs_category` values('245','0','QS_street','沈阳路','0','s','','','');");
E_D("replace into `qs_category` values('246','0','QS_street','康平路','0','k','','','');");
E_D("replace into `qs_category` values('247','0','QS_officebuilding','其他','0','q','如有疑问请联系管理员','','');");
E_D("replace into `qs_category` values('248','0','QS_street','其他','100','q','','','');");
E_D("replace into `qs_category` values('249','0','QS_officebuilding','鹿鸣苑','0','l','正源南街与黄河路向南500米','','');");
E_D("replace into `qs_category` values('250','0','QS_street','新昌路','0','x','','','');");
E_D("replace into `qs_category` values('251','0','QS_street','贺兰县','0','h','','','');");
E_D("replace into `qs_category` values('252','0','QS_resumetag','吃苦耐劳','0','c','','','');");

require("../../inc/footer.php");
?>