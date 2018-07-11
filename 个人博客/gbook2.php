
<?php
include_once ("conn.php");
$sql="select * from messageboard ORDER BY dateline DESC ";
$str=$conn->query($sql);
if($str && mysqli_num_rows($str)){
    while($row= mysqli_fetch_assoc($str)){
        $data[]=$row;
    }
}
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <meta name="keywords" content="个人博客" />
    <meta name="description" content="陈思达的个人博客" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/base.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <link href="css/m.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/modernizr.js"></script>
    <![endif]-->
    <script>
        window.onload = function ()
        {
            var oH2 = document.getElementsByTagName("h2")[0];
            var oUl = document.getElementsByTagName("ul")[0];
            oH2.onclick = function ()
            {
                var style = oUl.style;
                style.display = style.display == "block" ? "none" : "block";
                oH2.className = style.display == "block" ? "open" : ""
            }
        }
    </script>
</head>
<body>
<header>
    <div class="tophead">
        <div class="logo"><a href="/">陈思达和赵朋硕的个人博客</a></div>
        <div id="mnav">
            <h2><span class="navicon"></span></h2>
            <ul>
                <li><a href="index.html">网站首页</a></li>

                <li><a href="list.html">学无止境</a></li>
                <li><a href="info.html">慢生活</a></li>
                <li><a href="judge.php">留言</a></li>
            </ul>
        </div>
        <nav class="topnav" id="topnav">
            <ul>
                <li><a href="index.html">网站首页</a></li>

                <li><a href="list.html">学无止境</a></li>
                <li><a href="info.html">慢生活</a></li>
                <li><a href="myarticle.php">我的文章</a></li>
                <li><a href="judge.php">留言</a></li>
                <li><a href="logout.php">退出登录</a></li>
            </ul>
        </nav>
    </div>
</header>
<article>
    <h1 class="t_nav"><span>像“草根”一样，紧贴着地面，低调的存在，冬去春来，枯荣无恙。</span><a href="index.html" class="n1">网站首页</a><a href="gbook2.php" class="n2">留言</a></h1>
    <div class="ab_box">
        <div class="rightbox">
            <div class="aboutme">
                <h2 class="hometitle">关于我</h2>
                <div class="avatar"> <img src="images/avatar.jpg"> </div>
                <div class="ab_con">
                    <p>网名：满脸黑线 | 陈思达</p>
                    <p>职业：大二学生 </p>
                    <p>个人QQ：1061378220</p>
                    <p>邮箱：1061378220@qq.com</p>
                </div>
            </div>
            <div class="weixin">
                <h2 class="hometitle">给我留言</h2>
                <ul>
                    <h1 align="center">留言板</h1>
                    <div class="message">
                        <form name="addform" id="addform" method="post" action="message_handle.php">
                            <table type="text" align="center" border="1px,solid">
                                <input type="hidden" id="id" name="id" />
                                <tr>
                                    <td>标题</td>
                                    <td><input type="text" name="title" id="title"/></td>
                                </tr>
                                <tr>
                                    <td>作者</td>
                                    <td><input type="text" name="author" id="author"/> </td>
                                </tr>
                                <tr>
                                    <td>内容</td>
                                    <td><textarea name="message" id="message" cols="60" role="15"></textarea></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" name="sumbit"/></td>
                                    <td><input type="reset" name="reset"/></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </ul>
            </div>
        </div>
        <div class="leftbox">
            <div class="newsview">
                <div class="news_infos">
                    <div>
                        <?php
                        if(empty($data)){
                            echo "当前没有留言";
                        }
                        else{
                        foreach($data as $value) {
                        ?>
                        <table width="500px" cellpadding="2" cellspacing="8" align="center" border="1px,solid">

                            <tr>
                                <td>标题</td>
                                <td><?php  echo $value['title']; ?></td>
                            </tr>
                            <tr>
                                <td>作者</td>
                                <td><?php echo $value['author']; ?></td>
                            </tr>
                            <tr>
                                <td>内容</td>
                                <td><?php echo $value['message']; ?></td>
                            </tr>
                            <tr>
                                <td>时间</td>
                                <td><?php echo $value['dateline']; ?></td>
                            </tr>
                        </table>
                    </div>
                    <?php
                    }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</article>
<footer>
    <p>Design by <a href="/">赵朋硕陈思达个人博客</a> <a href="/">石家庄铁道大学</a></p>
</footer>
<script src="js/nav.js"></script>
</body>
</html>

