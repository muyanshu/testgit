<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="search_deal.php" method="post">
<input id='word' type="text" placeholder="请输入你要查询的字符串" value="" name="my_search" style="width:500px">
    <input type="button" value="搜索" onclick="FF();">
    <div id="content">搜索结果展示区域</div>
</form>
<script>
    var search= document.querySelector('#word');

   function FF(){
       var xhr = new XMLHttpRequest();
       xhr.onreadystatechange=function(){ //这里的state是小写的
            if(xhr.readyState ==4){ //这里的state是大写的

                var content = document.querySelector('#content');
                if(xhr.responseText=='1'){
                    content.innerHTML ='抱歉没有您要搜索的内容,请换一个词汇';

                }else{
                    //将字符串分割成数组
                    var res= xhr.responseText.split(',');

                    var ul ="<ul>";
                    for(var i=0;i<res.length;i++){
                        ul +="<li>"+res[i]+"</li>";
                    }
                    ul +="</ul>";
                    content.innerHTML = ul;  var ul ="<ul>";
                    for(var i=0;i<res.length;i++){
                        ul +="<li>"+res[i]+"</li>";
                    }
                    ul +="</ul>";
                    content.innerHTML = ul;
                }

            }

       }
       xhr.open("POST",'search_deal.php');
       xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
       xhr.send("my_search="+search.value)
   }


</script>

</body>
</html>