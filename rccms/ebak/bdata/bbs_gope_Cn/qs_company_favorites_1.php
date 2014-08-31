<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `qs_company_favorites`;");
E_C("CREATE TABLE `qs_company_favorites` (
  `did` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `resume_id` int(10) unsigned NOT NULL,
  `company_uid` int(10) unsigned NOT NULL,
  `favoritesa_ddtime` int(10) unsigned NOT NULL,
  PRIMARY KEY (`did`),
  KEY `company_uid` (`company_uid`)
) ENGINE=MyISAM AUTO_INCREMENT=120 DEFAULT CHARSET=gbk");
E_D("replace into `qs_company_favorites` values('1','5152','6260','1365557831');");
E_D("replace into `qs_company_favorites` values('2','5192','6270','1366179895');");
E_D("replace into `qs_company_favorites` values('3','5237','6270','1366180628');");
E_D("replace into `qs_company_favorites` values('4','5225','6270','1366180774');");
E_D("replace into `qs_company_favorites` values('5','5200','6270','1366181073');");
E_D("replace into `qs_company_favorites` values('6','5174','6270','1366181997');");
E_D("replace into `qs_company_favorites` values('10','5117','6270','1366277966');");
E_D("replace into `qs_company_favorites` values('8','5190','6270','1366185129');");
E_D("replace into `qs_company_favorites` values('9','5161','6270','1366276657');");
E_D("replace into `qs_company_favorites` values('11','5273','6378','1366349508');");
E_D("replace into `qs_company_favorites` values('12','5341','6261','1367302251');");
E_D("replace into `qs_company_favorites` values('13','5338','6261','1367302251');");
E_D("replace into `qs_company_favorites` values('14','5325','6261','1367302251');");
E_D("replace into `qs_company_favorites` values('15','5360','6145','1367458235');");
E_D("replace into `qs_company_favorites` values('16','5447','6524','1367547403');");
E_D("replace into `qs_company_favorites` values('17','5069','6200','1368068576');");
E_D("replace into `qs_company_favorites` values('18','717','6462','1368257297');");
E_D("replace into `qs_company_favorites` values('19','5528','6753','1368322655');");
E_D("replace into `qs_company_favorites` values('20','5518','6753','1368322672');");
E_D("replace into `qs_company_favorites` values('21','5198','5790','1368511511');");
E_D("replace into `qs_company_favorites` values('22','5524','6791','1368774089');");
E_D("replace into `qs_company_favorites` values('23','5178','6792','1369037241');");
E_D("replace into `qs_company_favorites` values('24','5571','6811','1369044024');");
E_D("replace into `qs_company_favorites` values('25','5572','6811','1369044024');");
E_D("replace into `qs_company_favorites` values('26','5570','6811','1369044024');");
E_D("replace into `qs_company_favorites` values('27','5569','6811','1369044024');");
E_D("replace into `qs_company_favorites` values('28','5568','6811','1369044024');");
E_D("replace into `qs_company_favorites` values('29','5567','6811','1369044024');");
E_D("replace into `qs_company_favorites` values('30','5513','6811','1369044024');");
E_D("replace into `qs_company_favorites` values('31','5566','6811','1369044024');");
E_D("replace into `qs_company_favorites` values('32','5565','6811','1369044024');");
E_D("replace into `qs_company_favorites` values('33','5564','6811','1369044024');");
E_D("replace into `qs_company_favorites` values('34','2848','6814','1369106368');");
E_D("replace into `qs_company_favorites` values('35','5309','6839','1369298975');");
E_D("replace into `qs_company_favorites` values('36','5332','6839','1369299067');");
E_D("replace into `qs_company_favorites` values('37','5348','6839','1369299106');");
E_D("replace into `qs_company_favorites` values('38','5350','6839','1369299118');");
E_D("replace into `qs_company_favorites` values('39','5369','6839','1369299129');");
E_D("replace into `qs_company_favorites` values('40','5402','6839','1369299307');");
E_D("replace into `qs_company_favorites` values('41','5583','6847','1369533343');");
E_D("replace into `qs_company_favorites` values('42','5580','6847','1369533780');");
E_D("replace into `qs_company_favorites` values('43','5579','6847','1369533821');");
E_D("replace into `qs_company_favorites` values('44','5566','6847','1369533889');");
E_D("replace into `qs_company_favorites` values('45','5578','6847','1369533908');");
E_D("replace into `qs_company_favorites` values('46','5325','6847','1369534013');");
E_D("replace into `qs_company_favorites` values('47','5491','6847','1369534135');");
E_D("replace into `qs_company_favorites` values('48','5524','6847','1369534319');");
E_D("replace into `qs_company_favorites` values('49','5518','6845','1369710223');");
E_D("replace into `qs_company_favorites` values('50','5605','6845','1369710229');");
E_D("replace into `qs_company_favorites` values('51','5326','6903','1369711759');");
E_D("replace into `qs_company_favorites` values('52','5609','6882','1369728505');");
E_D("replace into `qs_company_favorites` values('53','5551','6882','1369728758');");
E_D("replace into `qs_company_favorites` values('54','5583','6882','1369729112');");
E_D("replace into `qs_company_favorites` values('55','5377','6445','1369903501');");
E_D("replace into `qs_company_favorites` values('56','3507','6445','1369987540');");
E_D("replace into `qs_company_favorites` values('57','5717','6720','1370318871');");
E_D("replace into `qs_company_favorites` values('58','5587','6720','1370319142');");
E_D("replace into `qs_company_favorites` values('59','5560','6720','1370319148');");
E_D("replace into `qs_company_favorites` values('60','5496','6720','1370319173');");
E_D("replace into `qs_company_favorites` values('61','5495','6720','1370319180');");
E_D("replace into `qs_company_favorites` values('62','5237','6720','1370319200');");
E_D("replace into `qs_company_favorites` values('63','5198','6720','1370319207');");
E_D("replace into `qs_company_favorites` values('64','5192','6720','1370319211');");
E_D("replace into `qs_company_favorites` values('65','5155','6720','1370319218');");
E_D("replace into `qs_company_favorites` values('66','5718','6720','1370319241');");
E_D("replace into `qs_company_favorites` values('67','5710','6720','1370319249');");
E_D("replace into `qs_company_favorites` values('68','5709','6720','1370319252');");
E_D("replace into `qs_company_favorites` values('69','5676','6720','1370319256');");
E_D("replace into `qs_company_favorites` values('70','5640','6720','1370319260');");
E_D("replace into `qs_company_favorites` values('71','5638','6720','1370319266');");
E_D("replace into `qs_company_favorites` values('72','5621','6720','1370319270');");
E_D("replace into `qs_company_favorites` values('73','5610','6720','1370319275');");
E_D("replace into `qs_company_favorites` values('74','5579','6720','1370319280');");
E_D("replace into `qs_company_favorites` values('75','5566','6720','1370319285');");
E_D("replace into `qs_company_favorites` values('76','5385','6720','1370319303');");
E_D("replace into `qs_company_favorites` values('77','5360','6720','1370319308');");
E_D("replace into `qs_company_favorites` values('78','5233','6720','1370319335');");
E_D("replace into `qs_company_favorites` values('79','5194','6720','1370319342');");
E_D("replace into `qs_company_favorites` values('80','5185','6720','1370319347');");
E_D("replace into `qs_company_favorites` values('81','5187','6720','1370319350');");
E_D("replace into `qs_company_favorites` values('82','5178','6720','1370319354');");
E_D("replace into `qs_company_favorites` values('83','5175','6720','1370319367');");
E_D("replace into `qs_company_favorites` values('84','5153','6720','1370319380');");
E_D("replace into `qs_company_favorites` values('85','5736','6720','1370324185');");
E_D("replace into `qs_company_favorites` values('86','812','6442','1370330713');");
E_D("replace into `qs_company_favorites` values('87','5547','6720','1370568404');");
E_D("replace into `qs_company_favorites` values('88','1541','6720','1370568807');");
E_D("replace into `qs_company_favorites` values('89','3078','6720','1370568807');");
E_D("replace into `qs_company_favorites` values('90','3481','6720','1370568807');");
E_D("replace into `qs_company_favorites` values('91','5307','6814','1371085205');");
E_D("replace into `qs_company_favorites` values('92','5627','7129','1371114861');");
E_D("replace into `qs_company_favorites` values('93','5708','7129','1371172272');");
E_D("replace into `qs_company_favorites` values('94','5622','7129','1371172938');");
E_D("replace into `qs_company_favorites` values('95','5602','7129','1371173031');");
E_D("replace into `qs_company_favorites` values('96','5517','7129','1371173183');");
E_D("replace into `qs_company_favorites` values('97','5402','7129','1371173400');");
E_D("replace into `qs_company_favorites` values('98','5395','7129','1371173430');");
E_D("replace into `qs_company_favorites` values('99','5369','7129','1371173521');");
E_D("replace into `qs_company_favorites` values('100','5350','7129','1371173564');");
E_D("replace into `qs_company_favorites` values('101','5332','7129','1371173691');");
E_D("replace into `qs_company_favorites` values('102','5300','7129','1371173759');");
E_D("replace into `qs_company_favorites` values('103','5309','7129','1371173797');");
E_D("replace into `qs_company_favorites` values('104','5152','7129','1371174301');");
E_D("replace into `qs_company_favorites` values('105','5773','7141','1371266043');");
E_D("replace into `qs_company_favorites` values('106','5253','7170','1371517494');");
E_D("replace into `qs_company_favorites` values('107','5321','6851','1371530101');");
E_D("replace into `qs_company_favorites` values('108','5496','6851','1371530207');");
E_D("replace into `qs_company_favorites` values('109','5711','6851','1371530255');");
E_D("replace into `qs_company_favorites` values('110','5717','6851','1371530275');");
E_D("replace into `qs_company_favorites` values('111','5746','6851','1371530317');");
E_D("replace into `qs_company_favorites` values('112','5747','6851','1371530343');");
E_D("replace into `qs_company_favorites` values('113','5755','6851','1371530380');");
E_D("replace into `qs_company_favorites` values('114','5761','6851','1371530409');");
E_D("replace into `qs_company_favorites` values('115','5631','6851','1371530555');");
E_D("replace into `qs_company_favorites` values('116','5638','6851','1371530591');");
E_D("replace into `qs_company_favorites` values('117','5769','6851','1371533988');");
E_D("replace into `qs_company_favorites` values('118','5797','7865','1382362343');");
E_D("replace into `qs_company_favorites` values('119','5800','7865','1382362353');");

require("../../inc/footer.php");
?>