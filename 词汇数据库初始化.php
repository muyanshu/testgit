<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/28
 * Time: 10:46
 */

// 连接数据库
$conn = new mysqli('localhost','root','123','SearchStudy');
// 判断是否连接成功
!mysqli_connect_error() or die("连接失败");

$str ='php,基础,入门,web,开,发,资源,特点,windows,linux,unix, lamp,wamp,apache,mysql,面,向,对象,
netbean,notepad++,vi,vim,bs/cs,
 browser,client,server,服务,端,口,监听,80,环境,变,量, Bin,目录,dns,ip,
 地址,命令,窗口,cmd,任务,管理,器,部署,站点,访问,权限,安全,配置,
 虚拟,主机,顶级,域名,一级,二级,安装,卸载,系统, 静,态,页,操作,库,备案,数,据,类,型,整,浮点,布尔,字,符,串,组,null,
 复合, uft8,gbk,定义,进制,十,八,六,二,单,引,号,双,html,代码,js,自动,转换, 表达式,比较,运算,三元,流程,控制,顺序,
 分支,多,if,else,循环, while,do,for,条件,函数,自,function,用,机制,堆,区,栈,全, 局,网,络,结构,创建,方式,元素,
 下标,名,遍历,foreach,key,value,增,删,改,查, 使,启动,db,触发,存储,过程,视图,1,2,3,4,5,6,7,9,8,0, 表,集,校对,规则,引擎,列,段, myisam,innodb,memory,engine,文本,日期,date,属性, delete,update,truncate,select,查询,更新,删除,排,序,order by,升,asc,降,desc, 内置,可变,匿名,作,超,赋,值,传递,引用, 地址,键值对,排序,二分,查找,冒泡,内,部,外,算法,选择,插入,快速,一维,二维, 位,按,与,或,节,原,码,反,补,左,移,右,预定义,接,乱,编,解, $,_,GET,POST,提交,REQUEST,SERVER,GLOBALS,支持,程,思想, 实例化,成员,修饰,public,protect,private, 拷贝,构,造,初始化,回,调,自定义,析,销毁, 垃圾,回收,内存,魔术,序列化,克隆,oop,加载,静态,范围,解析,单例,模式, 访问,继承,封装,授权,本,子,重,载,写,约束,抽象,常,多级, 接口,final,标准,反射,api,形,参,实,事件,驱动,鼠标,键盘,绑定,隐藏,显示,下拉,复选,框,滚动, 脚本,语言,弱,试,逻辑,firebug,源,处理,程序,window,document,location,history,navigator, screen,event,事件绑定,节点,表单,标签,坐标,像素,伪类,钩子,特指度,标签选择器,通配符选择器,后代选择器,类选择器,
 ID,Important,行,块,强组合,字体,边距,动画,transition,transform,animation, 样式,跨,jsonp,websocket,
 curl,文件,图片,上传,下载,压缩,打包,父,模板,验证, mvc,controller,model,view,sql,xss,redis,laravel,
 主页,路由,中间件,迁移,跳转,restful,session,闪存, 分,命名,空间,公共,正则,nginx,L,R,AC,B,P,cdn,svn,git,
 github,去重, modify,change,add,alter,show,where,checksum,连接,using,联合,union,having,limit,
  create,drop,备份,mysqldump,scv,索引,唯一,前缀,全文,主键,多列,外键,phpmyadmin,MySQLi,ping,
   网卡,xshell,winscp,putyy,进程,度,秒杀,高,并,大,流量,抢购,原型,链,工厂,注册,适配,策略,观察者,
    装饰器,实用,传输,协议,hypertext transfer protocol,互联网,tcp/ip,httpwatch,http,请求,url,域,浏览器,
    hosts,消息,头,实体,内容,客户,head,google,firefox,ie,内核,盗链,响应,状态,定向, 不,存,在,禁止,路径,框架,
    应用,割,平台, p,c,a,smarty,混,离,定界,私,有,共,受保护,优化,分类,核心,官方,界定,注释,区别,输出,保留,时间戳, 版本,于,小,等,步长,iteration,index,first,last,total,section, 编译,普通,包含,include,布局,架构,语法,管道,缓存,有效,清除,冲突, 集成,insert,implode,default,basename,namespace,mysqli,登录,css,enctype,FILES, pathinfo,strchr,rand,gd2,image,create,range,图灵,construct,de,注入, ob_clean,header,cookie,入,frameset,iframe,特殊, 转义,翻墙,csrf,attack,令牌,token,会话,id,name,
    start,SESSID,非,对称,加,盐,密, 限,定,级,递归,临时,永,久,过期,HTTPS,true,false,负载均衡,分布式,无, 用户,
    免,登陆,md5,联,动,str_repeat,tree,树形,三范式,依赖,防止,攻击,死, 批量,置顶,取消,确认,检索,功能,模糊,还原,起始,位置,关,编辑,open,authorization, CK,Editor,富,Kind,拼接,autoload,clone,toString,set,get,call,迭代,完全,别,异常,exception,捕获,抛出,try,catch,netbeans,navicat,storm, 项目,reflection,代理,object,oriented,programming,OOA,analysis,design,帕斯卡,骆驼, 匈牙利,new,class,protected,this,parent,self,extends,static,延时, abstract,interface,implements,const,defined,serialize,un,invoke,sleep,wakeup, 指针,pdo,启,扩展,oracle,port,fetch,rowCount,回滚,commit,rollback,begin,预处理, prepare,占位,导,演化,nosql,系,远程,硬盘,设置,截取,队,交,差, 权,排行,哈希,hash,快照,追加,snappshoting,append only file,aof,磁盘, pid,短信,第三方,邮件,中转,smtp,simple, mail, transfe, protocol,pop3,foxmail, phpmailer,激活,地图,生成,互联,qq,sdk,秘,钥,匙,中间,access_token,postman,openID, 认证,微信,微博,校验,通信,音,乐,频,翻转,公众,执行,ticket,周期,出口,斐波拉契,递推,下移,list,写时, 复制,copy, on, write,筛选,质数,打乱,shuffle,here,doc,now,ASCII,绝,对,相,require, notice,warning,fatal,error,return,die,exit,默认,极,array,isset,explode,map,diff, merge,push,pop,shift,sort,trim,chr,ord,sub,split,str,iconv, 签约,demo,支付宝,日志,慢,拆分,锁,粒度,共享,排它,cache,分布,阻塞,脏,读,幻,悲,观, 热,冷,w3c,xml,空格,映射,海量,亿,万,采,性能,checkout,订,广播,标识,掩,以太,层,家,族,mac,arp,internet,仓库, 轮次,vpn,parse,reporting,log,错误,刷新,交互,载体,传统,历史,旧,火狐,谷歌,苹果,safari,opera,接收, encode,同,宽带,等待,ajax,javascript,canvas,img,tp,think,pwd,wc,切换,返回,屏, tab,挂载,软件,终,译,subversion,覆盖,取,频繁,local,admin,融合,remote, dictionary,款,丰,介质,memcaceh,string,手,import,link,href,叠,警告,信任, 嵌套,type,附加,柄,句,reboot,grep,find,shutdown,halt,click,on,solid,red,green,color, combine,典,精度,画,斜,线,随机,水平,求余,JQuery,element,过滤,窃,兄弟,邻, 骤,前端,后台,隔离,散,composer,install,ssl,CA,匹配,灵活,智能,决策,回环,bootstrap,hub,centos,ubuntu, 蠕虫,木马,漏洞,BTree,UDP,握,短,PSR-4,VueJS,NodeJS,Cors';


$addTime =date('Y-m-d H:i:s');

$arr =explode(',',$str);

//遍历数组
foreach($arr as $key =>$value){
    echo $key."对应的值是".$value."<br>";
    $sql ="insert into search_word (id,word,hits,addTime) values (null,'".trim($value)."','','".$addTime."')";
    $rs=$conn->query($sql);
    if($rs === true){
        echo "数据添加成功";

    }else{
        echo "添加失败";
    }

}


