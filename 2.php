<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/28
 * Time: 14:31
 */
//$word = $_POST['my_search'];
// 连接数据库
$conn = new mysqli('localhost','root','123','SearchStudy');
// 判断是否连接成功
!mysqli_connect_error() or die("连接失败");

//var_dump($conn);
$word='好';



//$sql = "select * from search_word where word like '%'".$word."'%'";
// select * from search_word where word like '%'1'%'
$sql = "select * from search_word where word like '%".$word."%'";
//$sql = "select * from search_word";
//echo $sql;
$rs=$conn->query($sql);
if($rs->num_rows>0){
    //echo "数据查询成功";
    $arr ='';
    while($row = $rs->fetch_array()){
        // echo $row['word']."<br>";
        $arr[]=$row['word'];
       // $sql_2="update search_word set hits=".(int)$row['hits']."+1 where id=".$row['id'];
        $sql_2="update search_word set hits=hits+1 where id=".$row['id'];
        echo $sql_2;
        $res_2= $conn->query($sql_2);
        if($res_2){
            echo "命中率加1"."<br>";

        }else{
            echo "失败";
        }
    }

}else{
     echo "查询结果为空";
}
