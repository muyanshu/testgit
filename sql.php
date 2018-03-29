

create database if not exists SearchStudy;
create table if not exists `search_word`(
    `id` int not null auto_increment key comment '字库id',
    `word` varchar(500) comment '关键字',
    `hits` int comment '被搜索次数',
    `addTime` datetime comment '关键字添加时间'
)engine=innodb default charset=utf8;

create table if not exists `search_hot`(
    `id` int not null auto_increment key comment '热词id',
    `hotWord` varchar(500) comment '热词',
    `addTime` datetime comment '热词添加时间'

)engine=innodb default charset=utf8;


create table if not exists `search_log`（
    `id` int not null auto_increment key comment '搜索日志id',
    ``