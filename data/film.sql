-- 创建province(省表)
CREATE TABLE `film` (
  `id` VARCHAR(45) NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`));

-- 中国34个省级行政单位 23个省 5个自治区 4个直辖市 2特别行政区

insert into province values(1,'北京市');
insert into province values(2,'天津市');
insert into province values(3,'上海市');
insert into province values(4,'重庆市');
insert into province values(5,'河北省');
insert into province values(6,'山西省');
insert into province values(7,'台湾省');
insert into province values(8,'辽宁省');
insert into province values(9,'吉林省');
insert into province values(10,'黑龙江省');
insert into province values(11,'江苏省');
insert into province values(12,'浙江省');
insert into province values(13,'安徽省');
insert into province values(14,'福建省');
insert into province values(15,'江西省');
insert into province values(16,'山东省');
insert into province values(17,'河南省');
insert into province values(18,'湖北省');
insert into province values(19,'湖南省');
insert into province values(20,'广东省');
insert into province values(21,'甘肃省');
insert into province values(22,'四川省');
insert into province values(23,'贵州省');
insert into province values(24,'海南省');
insert into province values(25,'云南省');
insert into province values(26,'青海省');
insert into province values(27,'陕西省');
insert into province values(28,'广西壮族自治区');
insert into province values(29,'西藏自治区');
insert into province values(30,'宁夏回族自治区');
insert into province values(31,'新疆维吾尔自治区');
insert into province values(32,'内蒙古自治区');
insert into province values(33,'澳门特别行政区');
insert into province values(34,'香港特别行政区');