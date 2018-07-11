
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
                <li><a href="index1.php">网站首页</a></li>

                <li><a href="list1.html">学无止境</a></li>
                <li><a href="info1.html">慢生活</a></li>
                <li><a href="judge.php">留言</a></li>
                <li><a href="article.php">写文章</a></li>
                <li><a href="logout.php">退出登录</a></li>
            </ul>
        </nav>
    </div>
</header>
<article>
    <h1 class="t_nav"><span>像“草根”一样，紧贴着地面，低调的存在，冬去春来，枯荣无恙。</span><a href="index.html" class="n1">网站首页</a><a href="article.php" class="n2">写文章</a></h1>
        <div class="ab_box" width="100%">
            <div class="iframe-mask" id="iframe-mask" style="display: none;"></div>
            <iframe class="admin-iframe" id="admin-iframe" name="main" position="absolute"; width="100%"; height="100%"; src="article1.html"></iframe>
        </div>
</article>
<footer>
    <p>Design by <a href="/">赵朋硕陈思达个人博客</a> <a href="/">石家庄铁道大学</a></p>
</footer>
<script src="js/nav.js"></script>
</body>
</html>

