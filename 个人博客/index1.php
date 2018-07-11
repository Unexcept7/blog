<!doctype html>
<html>
<head>
    <meta charset="gb2312">
    <title>首页_个人博客</title>
    <meta name="keywords" content="个人博客" />
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
        <div class="logo"><a href="/">个人博客</a></div>
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
<div class="picshow">
    <ul>
        <li><a href="http://www.stdu.edu.cn/"><i><img src="images/b01.jpg"></i>
                <div class="font">
                    <h3>我的学校</h3>
                </div>
            </a></li>
        <li><a href="http://m.ashvsash.com/"><i><img src="images/b02.jpg"></i>
                <div class="font">
                    <h3>我的电影</h3>
                </div>
            </a></li>
        <li><a href="https://www.zhihu.com/"><i><img src="images/b03.jpg"></i>
                <div class="font">
                    <h3>我的思考</h3>
                </div>
            </a></li>
        <li><a href="http://www.runoob.com/"><i><img src="images/b04.jpg"></i>
                <div class="font">
                    <h3>我的学习</h3>
                </div>
            </a></li>
        <li><a href="https://www.battlenet.com.cn/zh/"><i><img src="images/b05.jpg"></i>
                <div class="font">
                    <h3>我的娱乐</h3>
                </div>
            </a></li>
    </ul>
</div>
<article>
    <div class="blogs">
        <li> <span class="blogpic"><a href="/"><img src="images/text02.jpg"></a></span>
            <h3 class="blogtitle"><a href="http://www.cnblogs.com/youknownothing/">陈思达的博客</a></h3>

            <div class="autor"><span class="lm"><a href="/" title="PHP" target="_blank" class="classname">PHP</a></span><span class="dtime">2018-05-04</span><span class="viewnum">浏览（<a href="/">0</a>）</span><span class="readmore"><a href="/">阅读原文</a></span></div>
        </li>
        <li> <span class="blogpic"><a href="/"><img src="images/text01.jpg"></a></span>
            <h3 class="blogtitle"><a href="http://www.cnblogs.com/zpsblog/">赵朋硕的博客       </a></h3>
            <div class="bloginfo">

            </div>
            <div class="autor"><span class="lm"><a href="/" title="PHP" target="_blank" class="classname">PHP</a></span><span class="dtime">2018-05-04</span><span class="viewnum">浏览（<a href="/">0</a>）</span><span class="readmore"><a href="/">阅读原文</a></span></div>
        </li>
    </div>
    <div class="sidebar">
        <div class="about">
            <div class="avatar"> <img src="images/avatar.jpg" alt=""> </div>
            <p class="abname">个人博客</p>
            <p class="abposition">陈思达 ，赵朋硕</p>

        </div>

        <div class="cloud">
            <h2 class="hometitle">博主介绍</h2>
            <ul>
                <a href="/">陈思达</a> <a href="/">赵朋硕</a>
            </ul>
        </div>
        <div class="cloud">
            <h2 class="hometitle">我喜欢的音乐_凉凉</h2>
            <ul>
                <audio controls style='position:absolute;'>
                    <source src="凉凉.ogg" type="audio/ogg">
                    <source src="凉凉.mp3" type="audio/mpeg">
                    您的浏览器不支持 audio 元素。
                </audio>
            </ul>
            <br>
            <br>
        </div>
    </div>
</article>
<footer>
    <p>Design by <a href="/">陈思达赵朋硕个人博客</a> <a href="/">石家庄铁道大学</a></p>
</footer>
<div class="blank"></div>
<script src="js/nav.js"></script>
</body>
</html>
