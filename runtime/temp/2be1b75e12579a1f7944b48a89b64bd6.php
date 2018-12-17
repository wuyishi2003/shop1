<?php /*a:3:{s:77:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\categories\index.html";i:1543588464;s:67:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\layout.html";i:1543406342;s:72:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\common\menu.html";i:1542977520;}*/ ?>
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
            <style>
    .layui-btn .layui-icon{
        margin-right: 0;
    }
</style>
<form class="layui-form seller-form" action="">
	<div class="layui-form-item">
		<div class="layui-inline">
			<button class="layui-btn layui-btn-sm add-class"><i class="layui-icon">&#xe608;</i> 添加</button>
		</div>
	</div>
</form>

<div class="table-body">
	<table id="categories" lay-data="{id: 'categories'}"></table>
</div>

<script>
    var window_box;
    layui.use(['table', 'layer'], function(){
        var layer = layui.layer, $ = layui.jquery, table = layui.table;

        //获取商品分类数据
        table.render({
            id: 'categories',
            elem: '#categories',
            url: '<?php echo url("categories/index"); ?>',
            method: 'post',
            response: {
                statusName: 'status',
                statusCode: 1
            },
            cols: [[
                {type: 'numbers'},
                {field: 'name_1', title: '一级分类', width:200, align: 'center'},
                {field: 'name_2', title: '二级分类', width:200, align: 'center'},
                {field: 'type_id', title: '所属类型', width:150, align: 'center'},
                {field: 'image_id', title: '图标', width:65, align: 'center', templet: function(data){
                    return '<a href="javascript:void(0);" onclick=viewImage("'+data.image_id+'")><image style="max-width:30px;max-height:30px;" src="'+data.image_id+'"/></a>';
                }},
                {field: 'sort', title: '排序', width:100, align: 'center'},
                {field: 'operating', title: '操作', align: 'center'}
            ]]
        });

        //添加分类
        $(document).on('click', '.add-class', function(){
            var id = $(this).attr('data-id');
            $.ajax({
                url: '<?php echo url("categories/add"); ?>',
                type: 'get',
                data: {
                    'parent_id': id
                },
                success: function(e){
                    window_box = layer.open({
                        type: 1,
                        title: '添加分类',
                        area: ['430px', '560px'], //宽高
                        content: e
                    });
                }
            });
            return false;
        });

        //编辑分类
        $(document).on('click', '.edit-class', function(){
            var id = $(this).attr('data-id');
            $.ajax({
                url: '<?php echo url("categories/edit"); ?>',
                type: 'get',
                data: {
                    'id': id
                },
                success: function(e){
                    window_box = layer.open({
                        type: 1,
                        title: '编辑分类',
                        area: ['430px', '560px'], //宽高
                        content: e
                    });
                }
            })
        });

        //删除分类
        $(document).on('click', '.del-class', function(){
            var id = $(this).attr('data-id');
            $.ajax({
                url: '<?php echo url("categories/del"); ?>',
                type: 'get',
                data: {
                    'id': id
                },
                success: function(e){
                    if(e.status === true){
                        layer.confirm('确认删除分类：'+e.data.name+' 吗？', {
                            title: '提示', btn: ['确认', '取消'] //按钮
                        }, function(){
                            delClass(id);
                        });
                    }else{
                        layer.msg(e.msg, {time: 1300});
                    }
                }
            });
        });

        //删除操作
        function delClass(id){
            $.ajax({
                url: '<?php echo url("categories/del"); ?>',
                type: 'post',
                data: {
                    'id': id
                },
                success: function(e){
                    layer.msg(e.msg, {time: 1300}, function(){
                        table.reload('categories');
                    });
                }
            });
        }

        //添加保存数据
        $(document).on('click', '.add-save-btn', function(){
            var parent_id = $("#parent_id").val();
            var type_id = $("#type_id").val();
            var name = $("#name").val();
            var image_id = $("#image_value_image_id").val();
            var sort = $("#sort").val();

            var error = false;
            if(name.length > 6 || name.length < 1){
                error = true;
                layer.msg('分类名称在1-6个字符之间', {time: 1300});
                return false;
            }
            if(sort < 1 || sort > 100){
                error = true;
                layer.msg('请填写1-100的排序值，越小越靠前', {time: 1300});
                return false;
            }

            if(!error){
                $.ajax({
                    url: '<?php echo url("categories/add"); ?>',
                    type: 'post',
                    data: {
                        'parent_id': parent_id,
                        'type_id': type_id,
                        'name': name,
                        'image_id': image_id,
                        'sort': sort
                    },
                    dataType: 'json',
                    success: function(e){
                        if(e.status === true){
                            layer.close(window_box);
                            layer.msg(e.msg, {time: 1300}, function(){
                                table.reload('categories');
                            });
                        }else{
                            layer.msg(e.msg, {time: 1300});
                        }
                    }
                })
            }
        });

        //编辑保存数据
        $(document).on('click', '.edit-save-btn', function(){
            var id = $("#id").val();
            var parent_id = $("#parent_id").val();
            var type_id = $("#type_id").val();
            var name = $("#name").val();
            var image_id = $("#image_value_image_id").val();
            var sort = $("#sort").val();

            if(name.length > 6){
                layer.msg('分类名称不能大于6个字符');
                return false;
            }else{
                $.ajax({
                    url: '<?php echo url("categories/edit"); ?>',
                    type: 'post',
                    dataType: 'json',
                    data: {
                        'id': id,
                        'parent_id': parent_id,
                        'type_id': type_id,
                        'name': name,
                        'image_id': image_id,
                        'sort': sort
                    },
                    success: function(e){
                        if(e.status === true){
                            layer.close(window_box);
                            layer.msg(e.msg, {item: 1300}, function(){
                                table.reload('categories');
                            });
                        }else{
                            layer.msg(e.msg, {time: 1300});
                        }
                    }
                });
            }
        });
    });
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