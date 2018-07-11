<?php
$title=$_GET['title'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lz_CMS-后台管理中心</title>
    <link rel="stylesheet" href="./layui/css/layui.css">
    <link rel="stylesheet" href="./css/global.css">
    <script type="text/javascript" src="./layui/layui.js"></script>
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
<div class="layui-tab layui-tab-brief main-tab-container">
    <ul class="layui-tab-title main-tab-title">
        <li class="layui-this">评论文章</li>
        <div class="main-tab-item">文章管理</div>
    </ul>
    <div class="layui-tab-content">
        <?php echo "<form class='layui-form' method='post' action='commentsave.php?title=".$title."''>"?>
            <div class="layui-tab-item layui-show">
                <input type="hidden" id="id" name="time" />
                <div class="layui-form-item">
                    <label class="layui-form-label">评论内容</label>
                    <textarea rows="10" cols="60"name="comment" id="content"></textarea>
                </div>
                <div class="layui-form-item">
                    <div class="layui-input-block">
                        <button class="layui-btn" lay-submit="" lay-filter="feedback_edit">立即提交</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>/