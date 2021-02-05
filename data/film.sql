-- 创建film(电影表)
CREATE TABLE `film` (
  `id` INT(45) NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `rate` FLOAT(45) NOT NULL,
  `dir` VARCHAR(45) NOT NULL,
  `star` VARCHAR(45) NOT NULL,
  `catid` VARCHAR(45) NOT NULL,
  `fra` VARCHAR(45) NOT NULL,
  `showTime` VARCHAR(45) NOT NULL,
  `hours` INT(45) NOT NULL,
  `info` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`id`)
  )AUTO_INCREMENT=60;


insert into film values(1,'送你一朵小红花',9.4,'韩延','易烊千玺,刘浩存,朱媛媛,高亚麟',1,'中国大陆','2021-01-05',120,'两个抗癌家庭，两组生活轨迹。影片讲述了一个温情的现实故事，思考和直面了每一个普通人都会面临的终极问题——想象死亡随时可能到来，我们唯一要做的就是爱和珍惜。');
insert into film values(2,'送你一朵小红花',9.4,'韩延','易烊千玺,刘浩存,朱媛媛,高亚麟',1,'中国大陆','2021-01-05',120,'两个抗癌家庭，两组生活轨迹。影片讲述了一个温情的现实故事，思考和直面了每一个普通人都会面临的终极问题——想象死亡随时可能到来，我们唯一要做的就是爱和珍惜。');
insert into film values(3,'送你一朵小红花',9.4,'韩延','易烊千玺,刘浩存,朱媛媛,高亚麟',1,'中国大陆','2021-01-05',120,'两个抗癌家庭，两组生活轨迹。影片讲述了一个温情的现实故事，思考和直面了每一个普通人都会面临的终极问题——想象死亡随时可能到来，我们唯一要做的就是爱和珍惜。');
insert into film values(4,'送你一朵小红花',9.4,'韩延','易烊千玺,刘浩存,朱媛媛,高亚麟',1,'中国大陆','2021-01-05',120,'两个抗癌家庭，两组生活轨迹。影片讲述了一个温情的现实故事，思考和直面了每一个普通人都会面临的终极问题——想象死亡随时可能到来，我们唯一要做的就是爱和珍惜。');
