<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/28
 * Time: 13:22
 */

$word = $_POST['my_search'];
// 连接数据库

$conn = new mysqli('localhost','root','123','SearchStudy');
// 判断是否连接成功
!mysqli_connect_error() or die("连接失败");

//$word='in';

//先来处理热词库的
$addTime =date('Y-m-d H:i:s'); //热词库要用的时间
$sql_4 ="insert into search_hot (id,hotWord,addTime) values (null,'".$word."','".$addTime."')"; //直接插入数据库

$res_4= $conn->query($sql_4); //执行热词插入操作



//这里是查询用户搜的关键字
$sql = "select * from search_word where word like '%".$word."%'";

$rs=$conn->query($sql);
if($rs->num_rows>0){  //如果查询有结果集的话

    $arr ='';
    while($row = $rs->fetch_array()){

        $arr[]=$row['word'];
        $sql_2="update search_word set hits=hits+1 where id='".$row['id']."'"; //字库表 命中率+1

        $res_2= $conn->query($sql_2); // 字库 执行 命中率更新操作

        if(!$res_2){
            echo "1";die;
        }
    }

    echo  $res_str=implode(',',$arr);

}else{  //没有查到结果
    echo "1";
}

