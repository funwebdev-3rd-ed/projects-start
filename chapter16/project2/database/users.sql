
--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `email` varchar(64) NOT NULL PRIMARY KEY,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,  
  `password` varchar(100) DEFAULT NULL,
  `salt` varchar(50) DEFAULT NULL,
  `password_sha256` varchar(100) DEFAULT NULL
) ;


LOCK TABLES `users` WRITE;

INSERT INTO `users` VALUES ('hemmens0@de.vu','Honey','Kyllford','Calgary','Canada','$2a$12$F.jpatdVlOnrYWLi/lxPNO90T0auUpFnDP5JTb3aTx7z1QSu5nX42','048d741e931f907110adf460816ff958','1b7f054c4c6a92aeb1813ccf0b162cab31cdb9cad0a6cd3820a724f0819af20c');
INSERT INTO `users` VALUES ('gcrannage1@mit.edu','Gaylene','Walenta','Seattle','United States','$2a$12$o9lzPmLOFgpODyhYHUOXO.wojqkQph.fBZKO8k83hromrC0bC4TFi','9bce2f838034b8c8d2ba1220daef2e7e','b3efa8c9c09f76778fdd7f70b340c69a03d48861d2424bb5f4f4cd0d7ce11c06');
INSERT INTO `users` VALUES ('mbrocket2@deviantart.com','Moyra','Coo','Chicago','United States','$2a$12$QYTq9bIvZ/asycZCoh.GAOhsycshCzvEahXvXRrCczdqnGFdZ0XVS','c3a10800118c3bc6c50b1ac82d31e4a6','b8e62ee19ebbc23976b21e0820723405e27de1d4f2fd24e4e1f456c129cee82c');
INSERT INTO `users` VALUES ('mbeekman3@patch.com','Melisenda','Clissold','Dallas','United States','$2a$12$43FcE3LDDWlev12JkV4qae45LouL6pbXz/GeE4vSNT56OU1tAzdW2','d24e7731e8051cf253ca8e89e0dd0be9','e7a6803fc7d3db79780e300167aa8d05efebcffe5dba3a760f4f8eafe84a1af6');
INSERT INTO `users` VALUES ('sfolbigg4@histats.com','Shaina','Houlaghan','Calgary','Canada','$2a$12$FbS.fUfQT9Aq9D8REtRx5udl4wKwxKwSuhgEe1Ef0EPcGDZoB8GCS','b3f2be95228f481bc544154fa77b56c6','c7c097bac3f74fb336965b98de2aa84afa6bae00651761be7277bc464869efce');
INSERT INTO `users` VALUES ('abaudic5@yellowpages.com','Annadiane','Humpage','Birmingham','United States','$2a$12$TnZVOMj5H27JLk/IHtEsD.1cVrSuvToa9dAyM8QbENRXP74MVT5cm','231e1ed0db2b5dc8193ac7c78071aea4','62f5f09daf08a97ef8471d76ebf625bdaab121451bfd062d5a138bf04e30f8a1');
INSERT INTO `users` VALUES ('hpenbarthy6@nationalgeographic.com','Heath','Craney','Denver','United States','$2a$12$F.jpatdVlOnrYWLi/lxPNO90T0auUpFnDP5JTb3aTx7z1QSu5nX42','7f9301cbee13b0afb7e7c79aa65c9483','ee3f23dcb0a13743fc84384ab46244b03ede2ee1bc56f6c77af906140fc78f94');
INSERT INTO `users` VALUES ('rlamas7@nyu.edu','Ronnica','MacGorley','Boston','United States','$2y$12$xpmpbRqGQx4Oc0DWl6i27egN/hBRkIEA6sYQo4zbKLXyGJRNY6voO','1fc0e8b9a5704994608c34a189228f51','fb78347933ba30fd2ac53bd1d98581bbd612721f2ca177e87913c5a7773e6e40');
INSERT INTO `users` VALUES ('lbroadbury8@smugmug.com','Lynn','Wignall','New York City','United States','$2y$12$qzh6jvFIvGSKtSpr4SOBcuPgZ0N/zRfwTq594pV2oz59JQwGBEakW','23a56dcf9c599bf803f2b7abf1db4b79','c46a4d121688f1fe18d23d35af64a74325255a4dbea07f6b18640ca055c54b68');
INSERT INTO `users` VALUES ('asherland9@jalbum.net','Ashli','Raymont','Miami','United States','$2y$12$ZhfTqJ3svu5zPT3/rxJko.fsw1Pt1mLyrMlQh5Wv.6AqE9bvWDxbm','ea9f13c97a277bb3917b63a2a1234b39','746848aba0c93093bbba9dd75f41e687f1651b5888d06c10a21b65d80005e1ee');

UNLOCK TABLES;

