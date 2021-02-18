-- 创建cinema(影院表)
CREATE TABLE `cinema` (
  `id` INT(45) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `rate` FLOAT(45) NOT NULL,
  `provinceid` VARCHAR(45) NOT NULL,
  `cityid` VARCHAR(45) NOT NULL,
  `areaid` VARCHAR(45) NOT NULL,
  `address` VARCHAR(45) NOT NULL,
  `tel` VARCHAR(45) NOT NULL,
  `item` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`)
  );


insert into cinema values(1,'万达影城（包河店）',9.4,'340000','340100','340104','包河区马鞍山路130号合肥万达广场娱乐楼4层','0551-4000806060','免费停车');
insert into cinema values(2,'万达影城（包河店）',9.4,'340000','340100','340104','包河区马鞍山路130号合肥万达广场娱乐楼4层','0551-4000806060','免费停车');
insert into cinema values(3,'万达影城（包河店）',9.4,'340000','340100','340104','包河区马鞍山路130号合肥万达广场娱乐楼4层','0551-4000806060','免费停车');
insert into cinema values(4,'万达影城（包河店）',9.4,'340000','340100','340104','包河区马鞍山路130号合肥万达广场娱乐楼4层','0551-4000806060','免费停车');
