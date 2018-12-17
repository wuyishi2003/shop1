<?php /*a:3:{s:72:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\brand\index.html";i:1542977520;s:67:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\layout.html";i:1543406342;s:72:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\common\menu.html";i:1542977520;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="author" content="novice@jihainet.com"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>矮人科技商城管理平台</title>
    <link rel="stylesheet" type="text/css" href="/static/css/iconfont.css"/>
    <link rel="stylesheet" type="text/css" href="/static/css/iconfont2.css"/>
    <link rel="stylesheet" href="/static/lib/layui/css/layui.css">
    <link rel="stylesheet" href="/static/lib/layui/css/layui.seller.css">
    <link rel="stylesheet" type="text/css" href="/static/css/style.css"/>
    <script src="/static/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="/static/lib/layui/layui.js"></script>
    <script>
        <!-- 定义全局变量 -->
        var Jshop_Host = "<?php echo htmlentities($jshopHost); ?>";
        var Jshop_Image = "<?php echo url('images/uploadImage'); ?>";
        var manage_Image = "<?php echo url('images/manage'); ?>";
    </script>
    <script src="/static/js/jshop.js"></script>
    <script type="text/javascript" charset="utf-8" src="/static/js/ue/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/static/js/ue/ueditor.all.min.js"> </script>


</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">    
	<ul class="layui-nav">
        <li class="layui-nav-item" lay-unselect="">
            <a href="javascript:;">
                <img src="<?php echo _sImage(session('user.avatar')); ?>" class="layui-nav-img"><?php echo session('manage.username'); ?>
            </a>
            <dl class="layui-nav-child">
				<dd><a href="<?php echo url('Manage/information'); ?>">个人中心</a></dd>
			    <dd><a href="<?php echo url('Common/logout'); ?>">退出</a></dd>
			</dl>
        </li>
    </ul>
    <div class="layui-side layui-bg-black">
    	
        <div class="layui-side-scroll">
            <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
            <ul class="layui-nav layui-nav-tree" lay-filter="test">
    <li class="layui-nav-item layui-nav-itemed">
        <a class="" href="<?php echo url('index/index'); ?>"><i class="iconfont icon-shouyeshouye"></i>首页</a>
    </li>
    <?php if($menu): foreach($menu as $k=>$v): ?>
    <li class="layui-nav-item <?php if($v['selected']): ?> layui-nav-itemed<?php endif; ?>">
        <a class="menu-icon-<?php echo strtolower($v['code']); ?>" href="javascript:;"><i class="iconfont icon-<?php echo strtolower($v['code']); ?>"></i><?php echo htmlentities($v['name']); ?></a>
        <dl class="layui-nav-child">
            <?php foreach($v['children'] as $x=>$y): ?>
            <dd class="<?php if($y['selected']): ?> layui-this<?php endif; ?>">
                <a href="<?php echo htmlentities(get_operation_url($y['id'])); ?>"><?php echo htmlentities($y['name']); ?></a>
            </dd>
            <?php endforeach; ?>
        </dl>
    </li>
    <?php endforeach; endif; ?>

</ul>
        </div>
    </div>

    <div class="layui-body">
        <!-- 内容主体区域 -->
        <div style="padding: 15px;">
            <span class="layui-breadcrumb" style="visibility: visible;">
                <i class="iconfont icon-shouyeshouye"></i>
                <?php if(is_array($nav) || $nav instanceof \think\Collection || $nav instanceof \think\Paginator): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['url'] == ""): ?>
                        <a><cite><?php echo htmlentities($vo['name']); ?></cite></a>
                    <?php else: ?>
                        <a href="<?php echo htmlentities($vo['url']); ?>"><?php echo htmlentities($vo['name']); ?></a>
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </span>
            <form class="layui-form seller-form"  action="" >

    <div class="layui-form-item">

        <div class="layui-inline">
            <label class="layui-form-label seller-inline-2">品牌名称：</label>
            <div class="layui-input-inline seller-inline-4">
                <input type="text" name="name" lay-verify="title" placeholder="请输入品牌名称关键字" autocomplete="off" class="layui-input">
            </div>
        </div>

        <div class="layui-inline">
            <label class="layui-form-label seller-inline-2">更新时间：</label>
            <div class="layui-input-inline">
                <input type="text" id="utime" name="utime" lay-verify="title" placeholder="请选择更新时间" autocomplete="off" class="layui-input">
            </div>
        </div>

        <div class="layui-inline">
            <button type="button" class="layui-btn layui-btn-sm" lay-submit lay-filter="brand-search"><i class="iconfont icon-chaxun"></i>筛选</button>
            <button type="button" class="layui-btn layui-btn-sm add-brand"><i class="layui-icon">&#xe608;</i> 添加</button>
        </div>

    </div>

</form>

<div class="table-body">
    <table id="brandTable" lay-filter="brandTable"></table>
</div>

<script>
    layui.use(['table','form','layer','laydate'],function(){
        var layer = layui.layer, table = layui.table,form = layui.form,date = layui.laydate;
        //执行渲染
        table.render({
            elem: '#brandTable', //指定原始表格元素选择器（推荐id选择器）
            height: 'full-320',
            cellMinWidth: '80',
            page: 'true',
            limit:'20',
            id:'brandTable',
            url: "<?php echo url('brand/index'); ?>",
            cols: [[ //标题栏
                {type:'numbers'},
                {field: 'name', title: '品牌名',align:'center'},
                {field: 'logo', title: 'LOGO',align:'center',width:120, templet: function(data){
                        return '<a href="javascript:void(0);" onclick=viewImage("'+data.logo+'")><image style="max-width:30px;max-height:30px;" src="'+data.logo+'"/></a>';
                    }
                },
                {field: 'utime',sort: true, title: '更新时间' ,align:'center'},
                {field: 'sort', sort: true, title: '排序',align:'center',width:80},
                {fixed: 'right', width:150, title:'操作',align:'center', toolbar:'#brandBar'}
            ]] //设置表头
            //,…… //更多参数参考右侧目录：基本参数选项
        });

        //search
        date.render({
            elem:'#utime'
        });

        form.on('submit(brand-search)', function(data){
            layui.table.reload('brandTable', {
                where: data.field
                ,page: {
                    curr: 1 //重新从第 1 页开始
                }
            });
            return false; //阻止表单跳转。如果需要表单跳转，去掉这段即可。
        });

        $(document).on('click','.add-brand',function(){
            JsGet("<?php echo url('Brand/add'); ?>", function(e){
                window.box = layer.open({
                    type: 1,
                    content: e,
                    area: ['400px', '450px'],
                    title:'添加品牌'
                });
            })
        });

        //ajax提交商品的添加
        form.on('submit(add-brand)', function(data){
            JsPost("<?php echo url('Brand/add'); ?>", data.field, function(res){
                if(res.status){
                    layer.close(window.box);
                    layer.msg(res.msg,{time:1300},function(){
                        table.reload('brandTable');
                    });
                }else{
                    layer.msg(res.msg);
                }
            })
        });

        form.on('submit(brand-edit)',function(data){
            JsPost("<?php echo url('Brand/edit'); ?>", data.field, function(res){
                if(res.status){
                    layer.close(window.box);
                    layer.msg(res.msg,{time:1300},function(){
                        table.reload('brandTable');
                    });
                }else{
                    layer.msg(res.msg,{time:1300});
                }
            })
        });

        //监听工具条
        table.on('tool(brandTable)', function(obj){ //注：tool是工具条事件名，test是table原始容器的属性 lay-filter="对应的值"
            var data = obj.data; //获得当前行数据
            var layEvent = obj.event; //获得 lay-event 对应的值（也可以是表头的 event 参数对应的值）
            if(layEvent === 'del'){ //删除
                layer.confirm('真的要删除么',{icon: 3}, function(index){
                    JsGet("<?php echo url('Brand/del'); ?>?id=" + data.id, function(res){
                        if(res.status){
                            obj.del(); //删除对应行（tr）的DOM结构，并更新缓存
                            layer.close(index);//向服务端发送删除指令
                        }
                        layer.msg(res.msg);
                    })
                });
            } else if(layEvent === 'edit'){ //编辑
                JsGet("<?php echo url('Brand/edit'); ?>?id=" + data.id, function(e){
                    window.box = layer.open({
                        type:1,
                        content:e,
                        area:['400px','450px'],
                        title:'编辑品牌'
                    })
                })
            }
        });
    })
</script>
<script type="text/html" id="brandBar">
    <a class="layui-btn layui-btn-xs" lay-event="edit">编辑</a>
    <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del">删除</a>
</script>

        </div>
    </div>

    <div class="layui-footer">
        <!-- 底部固定区域 -->
        <p>欣麦吉 © xinmaiji - 版权所有</p>


    </div>
</div>
<script>
    layui.use('element', function() {
        var element = layui.element;

    });
    
</script>
</body>
</html>