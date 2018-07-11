<?php
include_once ("conn.php");
$sql="select * from article ORDER BY id ASC ";
$str=$conn->query($sql);
if($str && mysqli_num_rows($str)){
    while($row= mysqli_fetch_assoc($str)){
        $data[]=$row;
    }
}

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
        <li class="layui-this"><a href="article1.html">写文章</a></li>
        <li class="layui-this"><a href="article5.php">查看评论</a></li>

        <div class="main-tab-item">留言管理</div>
    </ul>
    <div class="layui-tab-content">
        <div class="layui-tab-item layui-show">
            <!-- 搜索 -->
            <form class="layui-form layui-form-pane search-form">
                <div class="layui-form-item">
                    <label class="layui-form-label">标题</label>
                    <div class="layui-input-inline">
                        <input type="text" name="search[title]" value="" lay-verify="" placeholder="请输入标题搜索" autocomplete="off" class="layui-input">
                    </div>
                    <button class="layui-btn" lay-submit="" lay-filter="">搜索</button>
                </div>
            </form>
            <form class="layui-form">
                <table class="list-table">
                    <thead>
                    <tr>
                        <th style="width:40px"><input type="checkbox" name="checkAll" lay-filter="checkAll" title=" "></th>
                        <th>ID</th>
                        <th>标题</th>
                        <th class="can_click">
                            <a href="">留言时间 ▼</a>
                        </th>
                        <th class="can_click">
                            <a href="">内容 ▼</a>
                        </th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(empty($data)){
                        echo "当前没有留言";
                    }
                    else{
                        foreach($data as $value) {
                            ?>
                    <tr>
                        <td><input type="checkbox" name="ids[9]" lay-filter="checkOne" value="9" title=" "><div class="layui-unselect layui-form-checkbox"><span> </span><i class="layui-icon"></i></div></td>
                        <td><?php echo $value['id']; ?></td>
                        <td><a class="list-title" href="javascript:void(0)" feedback-id="9"><?php echo $value['title']; ?></a></td>
                        <td><?php echo $value['time']; ?></td>
                        <td><?php echo $value['content']; ?></td>
                        <td style="text-align: center;">
                            <?php echo "<a href='article3.php?id=".$value['id']."' class='layui-btn layui-btn-small' title='编辑'><i class='layui-icon'></i></a>"?>
                            <?php echo "<a href='articledelete.php?id=".$value['id']."' class='layui-btn layui-btn-small layui-btn-danger del_btn' feedback-id='9' title='删除' ><i class='layui-icon'></i></a>"?>
                        </td>
                    </tr>
                    <?php
                    }
                    }
                    ?>
                    </tbody>
                    <thead>
                    <tr>
                        <th><button class="layui-btn layui-btn-small" lay-submit lay-filter="delete">删除</button></th>
                        <th colspan="6"><div id="page"></div></th>
                    </tr>
                    </thead>
                </table>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    layui.use(['element', 'laypage', 'layer', 'form'], function(){
        var element = layui.element()
            ,jq = layui.jquery
            ,form = layui.form()
            ,laypage = layui.laypage;

        //留言预览
        jq('.list-title').click(function(){
            loading = layer.load(2, {
                shade: [0.2,'#000'] //0.2透明度的白色背景
            });
            var id = jq(this).attr('feedback-id');

            layer.close(loading);
            layer.open({
                type: 1,
                area: ['500px'],
                title: '留言内容',
                content: '<div style="padding:15px 20px;">'+'95的小鲜肉啊95的小鲜肉啊95的小鲜肉啊95的小鲜肉啊95的小鲜肉啊95的小鲜肉啊95的小鲜肉啊95的小鲜肉啊95的小鲜肉啊'+'</div>' //注意，如果str是object，那么需要字符拼接。
            });
        });

        //留言回复
        jq('.reply_btn').click(function(){
            var id = jq(this).attr('feedback-id');
            layer.open({
                type: 2,
                icon: 2,
                maxmin: true,
                area: ['800px','500px'],
                title: '回复内容',
                content: ['' ,'no']
            });
        });


        //ajax删除
        jq('.del_btn').click(function(){
            var name = jq(this).attr('feedback-name');
            var id = jq(this).attr('feedback-id');
            layer.confirm('确定删除【'+name+'】?', function(index){
                loading = layer.load(2, {
                    shade: [0.2,'#000'] //0.2透明度的白色背景
                });
                jq.post('',{'id':id},function(data){

                    layer.close(loading);
                    layer.msg(data.msg, {icon: 1, time: 1000}, function(){
                        location.reload();//do something
                    });

                });
            });

        });

        //全选
        form.on('checkbox(checkAll)', function(data){
            if(data.elem.checked){
                jq("input[type='checkbox']").prop('checked',true);
            }else{
                jq("input[type='checkbox']").prop('checked',false);
            }
            form.render('checkbox');
        });

        form.on('checkbox(checkOne)', function(data){
            var is_check = true;
            if(data.elem.checked){
                jq("input[lay-filter='checkOne']").each(function(){
                    if(!jq(this).prop('checked')){ is_check = false; }
                });
                if(is_check){
                    jq("input[lay-filter='checkAll']").prop('checked',true);
                }
            }else{
                jq("input[lay-filter='checkAll']").prop('checked',false);
            }
            form.render('checkbox');
        });

        //监听提交
        form.on('submit(delete)', function(data){
            //判断是否有选项
            var is_check = false;
            jq("input[lay-filter='checkOne']").each(function(){
                if(jq(this).prop('checked')){ is_check = true; }
            });
            if(!is_check){
                layer.msg('请选择数据', {icon: 2,anim: 6,time: 1000});
                return false;
            }
            //确认删除
            layer.confirm('确定批量删除?', function(index){
                loading = layer.load(2, {
                    shade: [0.2,'#000'] //0.2透明度的白色背景
                });
                var param = data.field;
                jq.post('',param,function(data){
                    if(data.code == 200){
                        layer.close(loading);
                        layer.msg(data.msg, {icon: 1, time: 1000}, function(){
                            location.reload();//do something
                        });
                    }else{
                        layer.close(loading);
                        layer.msg(data.msg, {icon: 2,anim: 6, time: 1000});
                    }
                });
            });
            return false;
        });



        laypage({
            cont: 'page'
            ,skip: true
            ,pages: 100 //总页数
            ,groups: 5 //连续显示分页数
            ,curr: 2
            ,jump: function(e, first){ //触发分页后的回调
                if(!first){ //一定要加此判断，否则初始时会无限刷新
                    loading = layer.load(2, {
                        shade: [0.2,'#000'] //0.2透明度的白色背景
                    });
                    location.href = '?&page='+e.curr;
                }
            }
        });
    })
</script>

</body>
</html>