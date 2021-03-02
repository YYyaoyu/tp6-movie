-- 创建cinema(影院表)
DROP TABLE IF EXISTS `cinema`;
CREATE TABLE `cinema` (
  `id` INT(45) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `rate` FLOAT(45) NOT NULL,
  `provinceid` VARCHAR(45) NOT NULL,
  `cityid` VARCHAR(45) NOT NULL,
  `areaid` VARCHAR(45) NOT NULL,
  `districtid` VARCHAR(45) NOT NULL,
  `address` VARCHAR(45) NOT NULL,
  `tel` VARCHAR(45) NOT NULL,
  `item` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`)
  );


insert into cinema values(1,'万达影城（包河店）',9.4,'340000','340100','340111','3401111','包河区马鞍山路130号合肥万达广场娱乐楼4层','0551-4000806060','可停车');
insert into cinema values(2,'万达影城（包河店）',9.4,'340000','340100','340111','3401111','包河区马鞍山路130号合肥万达广场娱乐楼4层','0551-4000806060','可停车，退票，改签');
insert into cinema values(3,'万达影城（包河店）',9.4,'340000','340100','340111','3401111','包河区马鞍山路130号合肥万达广场娱乐楼4层','0551-4000806060','可停车，退票，改签');
insert into cinema values(4,'万达影城（包河店）',9.4,'340000','340100','340111','3401111','包河区马鞍山路130号合肥万达广场娱乐楼4层','0551-4000806060','可停车，退票，改签');
insert into cinema values(5,'合肥中影国际影城（正大广场店）',9.4,'340000','340100','340104','3401043','蜀山区经济技术开发区芙蓉路南、合安路东正大广场七楼（开车的顾客建议从步仙路停车场入口进入B2，直接乘1号客梯直达7楼影城）','0551-63650369','可停车，退票，改签');
