DROP TABLE IF EXISTS `districts`;
CREATE TABLE `districts` (
  `id` int(11) NOT NULL auto_increment,
  `districtid` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL,
  `areaid` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='商圈表';

insert into districts(id,districtid,district,areaid) values(1,'3401011','三里庵','340101');
insert into districts(id,districtid,district,areaid) values(2,'3401021','翡翠湖','340102');
insert into districts(id,districtid,district,areaid) values(3,'3401022','正大广场','340102');
insert into districts(id,districtid,district,areaid) values(4,'3401003','明珠广场','340102');