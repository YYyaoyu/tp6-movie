DROP TABLE IF EXISTS `districts`;
CREATE TABLE `districts` (
  `id` int(11) NOT NULL auto_increment,
  `districtid` varchar(20) NOT NULL,
  `district` varchar(50) NOT NULL,
  `areaid` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='商圈表';

insert into districts(id,districtid,district,areaid) values(1,'3401041','三里庵','340104');
insert into districts(id,districtid,district,areaid) values(2,'3401042','翡翠湖','340104');
insert into districts(id,districtid,district,areaid) values(3,'3401043','正大广场','340104');
insert into districts(id,districtid,district,areaid) values(4,'3401044','明珠广场','340104');
insert into districts(id,districtid,district,areaid) values(5,'3401111','包公园','340111');
