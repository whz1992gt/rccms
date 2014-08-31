<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_resume_tmp`;");
E_C("CREATE TABLE `qs_resume_tmp` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `subsite_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `uid` int(10) unsigned NOT NULL,
  `display` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `display_name` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `audit` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `title` varchar(80) NOT NULL,
  `fullname` varchar(15) NOT NULL,
  `sex` tinyint(3) unsigned NOT NULL,
  `sex_cn` varchar(3) NOT NULL,
  `nature` tinyint(3) unsigned NOT NULL,
  `nature_cn` varchar(30) NOT NULL,
  `trade` varchar(60) NOT NULL,
  `trade_cn` varchar(100) NOT NULL,
  `birthdate` smallint(4) unsigned NOT NULL,
  `height` tinyint(3) unsigned NOT NULL,
  `marriage` tinyint(3) unsigned NOT NULL,
  `marriage_cn` varchar(5) NOT NULL,
  `experience` smallint(5) unsigned NOT NULL,
  `experience_cn` varchar(30) NOT NULL,
  `district` smallint(5) unsigned NOT NULL,
  `sdistrict` smallint(5) unsigned NOT NULL,
  `district_cn` varchar(30) NOT NULL,
  `wage` tinyint(5) unsigned NOT NULL,
  `wage_cn` varchar(30) NOT NULL,
  `householdaddress` varchar(80) NOT NULL,
  `education` smallint(5) unsigned NOT NULL,
  `education_cn` varchar(30) NOT NULL,
  `tag` varchar(160) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `email_notify` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `qq` varchar(25) NOT NULL,
  `address` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `recentjobs` varchar(200) NOT NULL,
  `intention_jobs` varchar(100) NOT NULL,
  `specialty` varchar(200) NOT NULL,
  `photo` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `photo_img` varchar(80) NOT NULL,
  `photo_audit` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `photo_display` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `addtime` int(10) unsigned NOT NULL,
  `refreshtime` int(10) unsigned NOT NULL,
  `talent` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `complete` tinyint(3) unsigned NOT NULL DEFAULT '2',
  `complete_percent` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `user_status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `key` text NOT NULL,
  `click` int(10) unsigned NOT NULL DEFAULT '1',
  `tpl` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `refreshtime` (`refreshtime`),
  KEY `addtime` (`addtime`),
  KEY `audit` (`audit`)
) ENGINE=MyISAM AUTO_INCREMENT=5799 DEFAULT CHARSET=gbk");
E_D("replace into `qs_resume_tmp` values('5297','0','6423','1','1','1','焊工','胡亚彬','1','男','62','全职','45','其他行业','1968','0','1','未婚','79','10年以上','30','0','宁夏','60','5000~10000元/月','宁夏','66','高中','','13519288769','13519288769@163.com','0','','宁夏','','','其他','高级焊工，焊接各种管道','0','','1','1','1366618538','1366618538','1','2','45','1','','1','');");
E_D("replace into `qs_resume_tmp` values('5584','4','6844','1','1','1','求职简历','田海俊','1','男','62','全职','18','汽车/摩托车/零配件','1992','180','1','未婚','76','1-3年','30','467','宁夏/银川市','58','2000~3000元/月','宁夏贺兰县','68','中专','160,有亲和力|163,能加班|165,会开车|169,诚实守信|172,有上进心','18109587632','1162186599@qq.com','1','1162186599','宁夏贺兰县南梁台子铁东八队42社','','汽车美容师','销售代表,其他技工类职位,培训生','','0','','1','1','1369488490','1369488490','1','2','30','1','','1','');");
E_D("replace into `qs_resume_tmp` values('5274','0','6395','1','1','1','电气自动化相关（电厂，风电场）','顾上林','1','男','0','','','','1989','0','1','未婚','75','1年以下','0','0','','0','','宁夏','70','本科','','18902247689','243549523@qq.com','0','','银川市西夏区','','','','','0','','1','1','1366370221','1366370221','1','2','15','1','','1','');");
E_D("replace into `qs_resume_tmp` values('5651','4','6959','1','1','1','工程监理','刘雪梅','2','女','0','','','','1992','163','1','未婚','74','无经验','0','0','','0','','宁夏银川市兴庆区','69','大专','','180095581130','1023522076@qq.com','0','','银川市兴庆区掌政镇','','','','','0','','1','1','1369873558','1369873558','1','2','15','1','','1','');");
E_D("replace into `qs_resume_tmp` values('5191','0','6304','1','1','1','司机','谭礼明','1','男','62','全职','37','交通/运输/物流','1970','172','2','已婚','77','3-5年','30','467','宁夏/银川市','58','2000~3000元/月','银川','67','中技','','13895471335','13895471335@139.com','0','','银川市兴庆区东方小区3#-1-102','','','司机','有较好的工作经验，能吃苦耐劳，有较强的责任心','0','','1','1','1366083586','1366083586','1','2','45','1','','1','');");
E_D("replace into `qs_resume_tmp` values('5616','4','6920','1','1','1','网络维护','李伟','1','男','0','','','','1988','0','1','未婚','74','无经验','0','0','','0','','河南','70','本科','','15296909676','1055009281@qq.com','0','','宁夏石嘴山','','','','','0','','1','1','1369728660','1369728660','1','2','15','1','','1','');");
E_D("replace into `qs_resume_tmp` values('5678','4','6994','1','1','1','电气','梁立鹏','1','男','0','','','','1991','0','1','未婚','74','无经验','0','0','','0','','宁夏','69','大专','','18795097087','18795097087@qq.com','0','','宁夏','','','','','0','','1','1','1369972676','1369972676','1','2','15','1','','1','');");
E_D("replace into `qs_resume_tmp` values('5229','0','6342','1','1','1','求职意向','黄继国','1','男','62','全职','33,45','教育/培训,其他行业','1987','183','1','未婚','76','1-3年','30','467','宁夏/银川市','59','3000~5000元/月','银川市石嘴山','69','大专','169,诚实守信|171,性格开朗|172,有上进心','13007909594','271813885@qq.com','0','271813885','大武口','','业务经理','市场策划主管,市场营销专员','善于交流，沟通，市场营销，国际贸易，团队意识强','0','','1','1','1366104329','1366104329','1','2','45','1','','1','');");
E_D("replace into `qs_resume_tmp` values('5230','0','6341','1','1','1','人事，行政，客服','吴云丽','2','女','62','全职','45','其他行业','1983','0','1','未婚','78','5-10年','30','467','宁夏/银川市','58','2000~3000元/月','银川','66','高中','','18795189306','18795189306@137.com','0','','银川','','','行政专员/助理,人事专员/助理','···················································','0','','1','1','1366104332','1366104332','1','2','45','1','','1','');");
E_D("replace into `qs_resume_tmp` values('5301','0','0','1','1','1','出纳、会计','蒋丽','2','女','0','','','','1990','0','1','未婚','76','1-3年','0','0','','0','','银川石嘴山','69','大专','','15909677395','','0','','银川市','','','','','0','','1','1','1366697107','1370763595','1','2','15','1','','2','');");
E_D("replace into `qs_resume_tmp` values('5576','4','6825','1','3','1','个人简历','马春宁','1','男','62','全职','1,3,25,37,45','计算机软件/硬件,通信(设备/运营/服务),印刷/包装/造纸,交通/运输/物流,其他行业','1989','175','1','未婚','76','1-3年','30','467','宁夏/银川市','58','2000~3000元/月','宁夏银川市','65','初中','158,很幽默|160,有亲和力|163,能加班|169,诚实守信|171,性格开朗','18995036020','xiaobmaning@163.com','0','464276163','宁夏银川市','xiaobmaning@163.com','网吧主管','其他,促销员,店面销售,电信工程师','擅长不重要 重要的是自能肯下心去学习\r\n老实 勤奋','0','','1','1','1369157521','1369158843','1','2','45','1','宁夏银川市高兴逸夫中学 其他00 促销员0 店面销售 电信工程师 马春宁0  促销00 店面00 销售00 电信00 工程00 工程师0 网吧00 主管00 擅长00 重要00 学习00 初中00 没专业','4','default');");
E_D("replace into `qs_resume_tmp` values('5614','4','0','1','1','1','网络维护','傅国升','1','男','0','','','','1992','0','1','未婚','74','无经验','0','0','','0','','宁夏','70','本科','','15109578515','','0','','宁夏','','','','','0','','1','1','1369727848','1370763595','1','2','15','1','','1','');");
E_D("replace into `qs_resume_tmp` values('5679','4','6994','1','1','1','电气','梁立鹏','1','男','0','','','','1991','0','1','未婚','74','无经验','0','0','','0','','宁夏','69','大专','','18795097087','18795097087@qq.com','0','','宁夏','','','','','0','','1','1','1369972679','1369972679','1','2','15','1','','1','');");
E_D("replace into `qs_resume_tmp` values('5559','4','6786','1','1','1','成长','刘晨光','1','男','62','全职','45','其他行业','1987','175','1','未婚','76','1-3年','30','467','宁夏/银川市','58','2000~3000元/月','银川','70','本科','160,有亲和力|169,诚实守信|171,性格开朗|172,有上进心','13519203770','liuxinyongyuan@163.com','1','','西夏区盈北小区','','保险公司查勘员','其他','本人性格外向，善于交际；办事细致，有耐心，谨慎，踏实；勤奋好学，善于总结，适应能力强，能很快的适应新的工作及环境；责任心强并具有团队精神！','0','','1','1','1368773441','1368773441','1','2','45','1','','1','');");
E_D("replace into `qs_resume_tmp` values('5555','4','6774','1','1','1','111','刘宝晖','1','男','62','全职','13','消费品(食/饮/烟酒)','1984','173','1','未婚','77','3-5年','30','467','宁夏/银川市','59','3000~5000元/月','甘肃 平凉','66','高中','','18995097465','1063623127@qq.com','1','1063623127','湖滨小区18号楼三单元402','','','销售代表','本人对工作踏实认真.','0','','1','1','1368605003','1368605202','1','1','60','2','泾川一中 销售代表 刘宝晖0  销售00 代表00 本人00 工作00 踏实00 认真00 高中00 计算机','12','');");
E_D("replace into `qs_resume_tmp` values('5537','4','6739','1','1','1','导购','姜涛','1','男','0','','','','1982','172','1','未婚','78','5-10年','0','0','','0','','银川市','69','大专','','13639584795','jiangtao1982029@163.com','0','','银川市','','','','','0','','1','1','1368174354','1368174354','1','2','15','1','','1','');");
E_D("replace into `qs_resume_tmp` values('5480','0','6667','1','1','1','兼职','支笑','1','男','63','兼职','45','其他行业','1993','0','1','未婚','74','无经验','30','467','宁夏/银川市','57','1500~2000元/月','河北','70','本科','','15209583778','1033981529@qq.com','0','','宁夏银川','','','其他','希望可以提高自己','0','','1','1','1367825768','1367825768','1','2','45','1','','2','');");
E_D("replace into `qs_resume_tmp` values('5515','0','6706','1','1','1','求职文员','武鹏娟','2','女','62','全职','45','其他行业','1991','0','1','未婚','75','1年以下','30','467','宁夏/银川市','55','面议','宁夏固原','69','大专','','18309502619','1553741000@qq.com','0','','银川市 兴庆区','','','文员/秘书','乐观   积极向上 ','0','','1','1','1367977929','1367977929','1','2','45','1','','1','');");
E_D("replace into `qs_resume_tmp` values('5443','0','6622','1','1','1','小车司机','雍小芳','2','女','0','','','','1978','168','2','已婚','76','1-3年','0','0','','0','','陕西汉中','65','初中','169,诚实守信','13892616366','13892616366@139.com','0','','陕西汉中','','','','','0','','1','1','1367314768','1367314768','1','2','15','1','','1','');");
E_D("replace into `qs_resume_tmp` values('5448','0','6627','1','1','1','个人求职','张鹏伟','1','男','0','','','','1991','168','1','未婚','77','3-5年','0','0','','0','','甘肃','65','初中','172,有上进心','18395190274','976156579@qq.com','0','976156579','新华东街','','','','','0','','1','1','1367547872','1367547872','1','2','15','1','','1','');");
E_D("replace into `qs_resume_tmp` values('5543','4','6746','1','1','1','贾晓玉','贾晓玉','2','女','0','','','','1987','166','1','未婚','74','无经验','0','0','','0','','河北省唐山市','70','本科','','15769512905','1107202099@qq.com','0','','银川市金凤区保伏桥新村','','','','','0','','1','1','1368238021','1368238021','1','2','15','1','','2','');");
E_D("replace into `qs_resume_tmp` values('5561','4','6797','1','1','1','大三学生求销售相关实习单位','王见见','2','女','64','实习','9,13,22,29,45','金融(投资/证券,消费品(食/饮/烟酒),广告/市场推广,物业管理/商业中心,其他行业','1988','163','1','未婚','75','1年以下','30','0','宁夏','58','2000~3000元/月','宁夏银川','70','本科','157,能出差|160,有亲和力|163,能加班|169,诚实守信|171,性格开朗','18295085763','1293403116@qq.com','1','','宁夏银川西夏区文昌北街204号','','服装导购','市场助理,销售主管/助理,商务专员/助理,客户服务/咨询,证券期货,大学应届毕业生,实习生','本人性格开朗，擅长理财以及销售类工作，精通计算机基本办公软件操作及运用，能够处理协调好合作伙伴关系，增强团体凝聚力','0','','1','1','1368860028','1368860028','1','2','45','1','','1','');");
E_D("replace into `qs_resume_tmp` values('5459','0','6640','1','1','1','文员','张静','2','女','0','','','','1989','173','1','未婚','76','1-3年','0','0','','0','','宁夏中卫','69','大专','','13209598903','13209598903@139.com','0','','宁夏银川市金凤区','','','','','0','','1','1','1367571449','1367571449','1','2','15','1','','1','');");
E_D("replace into `qs_resume_tmp` values('5468','0','6653','1','1','1','幼教','朱红霞','2','女','0','','','','1988','0','1','未婚','76','1-3年','0','0','','0','','甘肃天水','69','大专','','15209503895','15209503895@q139.com','0','','宁夏银川','','','','','0','','1','1','1367628809','1367628809','1','2','15','1','','3','');");
E_D("replace into `qs_resume_tmp` values('5516','0','6708','1','1','1','求职简历','蒯燕','2','女','0','','','','1993','165','1','未婚','74','无经验','0','0','','0','','宁夏银川','69','大专','166,口才好|170,外语好','13369575742','kuaiyan@163.com','1','962470210','宁夏银川永宁县','','','','','0','','1','1','1367978382','1367978382','1','2','15','1','','1','');");
E_D("replace into `qs_resume_tmp` values('5464','0','6648','1','1','1','行政管理类求职简历','吴丹','1','男','62','全职','45','其他行业','1989','162','1','未婚','76','1-3年','30','467','宁夏/银川市','58','2000~3000元/月','宁夏省中卫市中宁县','69','大专','155,形象好|156,气质佳|160,有亲和力|169,诚实守信|172,有上进心','15109611185','936780729@qq.com','1','593340936','银川市西夏区','','','机械制图员,仪器仪表,置业顾问/售楼员,行政经理/主管,人事专员/助理','','0','','1','1','1367576988','1367576988','1','2','30','1','','1','');");
E_D("replace into `qs_resume_tmp` values('5603','4','6896','1','1','1','求职信','张磊','1','男','0','','','','1996','172','1','未婚','76','1-3年','0','0','','0','','宁夏银川市西夏区','65','初中','','18709605343','2219609790@qq.com','1','291348223','宁夏银川市西夏区镇北堡镇华西村','','','','','0','','1','1','1369661576','1369661576','1','2','15','1','','1','');");
E_D("replace into `qs_resume_tmp` values('5628','4','6930','1','1','1','求职销售','谢安','1','男','62','全职','45','其他行业','1992','0','1','未婚','76','1-3年','30','467','宁夏/银川市','55','面议','宁夏隆德','68','中专','','18395277010','1335815683@qq.com','0','','兴庆区福通小区','','','销售代表','','0','','1','1','1369735140','1369735140','1','2','30','1','','1','');");
E_D("replace into `qs_resume_tmp` values('5635','4','6937','1','1','1','找工作','李万科','1','男','62','全职','1,2,3,28,37','计算机软件/硬件,计算机系统/维修,通信(设备/运营/服务),家居/室内设计/装潢,交通/运输/物流','1992','163','1','未婚','76','1-3年','30','467','宁夏/银川市','58','2000~3000元/月','宁夏','66','高中','157,能出差|160,有亲和力|171,性格开朗|172,有上进心','13299505930','1303480333@qq.com','0','1303480333','贺兰','','','中专/职校生','','0','','1','1','1369743646','1369743646','1','2','30','1','','1','');");
E_D("replace into `qs_resume_tmp` values('5648','4','6951','1','1','1','苏嘉正','苏嘉正','2','女','62','全职','3,22,29,45','通信(设备/运营/服务),广告/市场推广,物业管理/商业中心,其他行业','1991','160','1','未婚','75','1年以下','30','467','宁夏/银川市','58','2000~3000元/月','银川','69','大专','155,形象好|156,气质佳|160,有亲和力|169,诚实守信|172,有上进心','15009500153','15009500153@163.com','1','344898510','新一中','','华润万家前台，文员海悦建国前台。','行政专员/助理,人事专员/助理,文员/秘书,档案管理员,接待/总机/接线,其他文职类职位','','0','','1','1','1369800864','1369800864','1','2','30','1','','1','');");
E_D("replace into `qs_resume_tmp` values('5706','4','7028','1','1','1','会计','王喜燕','2','女','0','','','','1988','160','1','未婚','74','无经验','0','0','','0','','银川市','70','本科','','13895402494','1181749997@qq.com','0','','银川市','','','','','0','','1','1','1370248919','1370248919','1','2','15','1','','1','');");
E_D("replace into `qs_resume_tmp` values('5772','4','7122','2','1','1','求职','赵国庆','1','男','62','全职','1,19,20,32,39','计算机软件/硬件,制药/生物工程,医疗/美容/保健/卫生,检测/认证,能源(石油/化工/矿产)','1984','171','1','未婚','78','5-10年','30','467','宁夏/银川市','59','3000~5000元/月','宁夏吴忠','69','大专','155,形象好|157,能出差|160,有亲和力|162,经验丰富|171,性格开朗','18295209888','33602225@163.com','0','','宁夏银川市贺兰县安家园5-5-301','','','经理助理,针灸推拿,临床医学,品质/质量管理(QA·QC),物料管理,仓库管理,跟单员,储备干部','能吃苦耐劳，学习能力强，适合任何环境。','0','','1','1','1370849772','1371433462','1','1','73','1','湖北省荆门医学院 经理助理 针灸推拿 临床医学 品质/质量管理(QA·QC) 物料管理 仓库管理 跟单员0 储备干部 赵国庆0  经理00 助理00 针灸00 推拿00 临床00 医学00 品质00 质量00 质量管理 管理00 QA000 QC000 物料00 物料管0 仓库00 库管00 跟单00 储备00 干部00 吃苦00 学习00 能力00 力强00 适合00 任何00 环境00 大专00 临川医学','8','');");
E_D("replace into `qs_resume_tmp` values('5798','4','7166','1','1','1','幽兰若谷','支杜娟','2','女','62','全职','42,45','政府部门/事业单位,其他行业','1988','158','2','已婚','76','1-3年','30','467','宁夏/银川市','58','2000~3000元/月','陕西西安临潼','69','大专','160,有亲和力|169,诚实守信|252,吃苦耐劳','18092533853','872055325@qq.com','0','','银川湖滨小区','','电话销售','行政专员/助理,人事专员/助理,物流专员/助理,品质/质量管理(QA·QC)','','0','','1','1','1371454614','1371454614','1','2','30','1','','1','');");

require("../../inc/footer.php");
?>