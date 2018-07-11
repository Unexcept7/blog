<?php
$id=$_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lz_CMS-后台管理中心</title>
    <link rel="stylesheet" href="./layui/css/layui.css">
    <link rel="stylesheet" href="./css/global.css">
    <script type="text/javascript" src="./layui/layui.js"></script>
</head>
<body>
<div class="layui-tab layui-tab-brief main-tab-container">
    <ul class="layui-tab-title main-tab-title">
        <li class="layui-this">修改文章</li>
        <li class="layui-this"><a href="article2.php">查看文章</a></li>
        <div class="main-tab-item">文章管理</div>
    </ul>
    <div class="layui-tab-content">
        <?php echo "<form class='layui-form' method='post' action='articleedit.php?id=".$id."'>"?>
            <div class="layui-tab-item layui-show">
                <div class="layui-form-item">
                    <label class="layui-form-label">标题</label>
                    <div class="layui-input-inline input-custom-width">
                        <input type="text" name="title" value="试试" lay-verify="required" autocomplete="off" placeholder="请输入标题" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">写作时间</label>
                    <div class="layui-input-inline input-custom-width">
                        <input type="datetime-local" name="create_time" value="2017-02-24 21:47:42" id="date"  placeholder="YYYY-MM-DD hh:mm:ss" autocomplete="off" class="layui-input" onclick="layui.laydate({elem: this,istime: 1, format: 'YYYY-MM-DD hh:mm:ss' })">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">内容</label>
                    <textarea rows="10" cols="60"name="content" id="content">试试</textarea>
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
</html>