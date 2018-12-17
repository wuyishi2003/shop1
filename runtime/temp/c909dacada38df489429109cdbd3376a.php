<?php /*a:3:{s:73:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\addons\index.html";i:1542977520;s:67:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\layout.html";i:1543406342;s:72:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\common\menu.html";i:1542977520;}*/ ?>
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

<div class="table-body">
	<table id="typeTable" lay-filter="test"></table>
</div>

<script>
    var table;
    layui.use(['form', 'layedit', 'laydate','table'], function(){
        var form = layui.form;
        table = layui.table.render({
            elem: '#typeTable',
            height: 'full-330',
            cellMinWidth: '80',
            page: 'true',
            limit:'20',
            url: "<?php echo url('Addons/index'); ?>?_ajax=1",
            id:'typeTable',
            cols: [[
                {field:'title', width:200,title:'插件名称'},
                {field:'name', width:150,title:'编码'},
                {field:'description', width:300,title:'插件描述'},
                {field:'author', width:100,title:'作者'},
                {field:'version', width:150,title:'版本号'},
                {field:'operating',title:'操作',templet:function(data){
                    var html = '';
                    if (data.install == 1) {
                        var html = '<a  class="layui-btn layui-btn-xs setting-class" data-title="' + data.title + '" data-name="' + data.name + '">配置</a>';
                        html += '<a class="layui-btn layui-btn-danger layui-btn-xs uninstall-class" data-name="' + data.name + '" data-title="' + data.title + '">卸载</a>';
                        html += '<a class="layui-btn layui-btn-danger layui-btn-xs stop-class" data-name="' + data.name + '" data-title="' + data.title + '">停用</a>';
                    } else if (data.install == 2) {
                        var html = '<a  class="layui-btn layui-btn-xs setting-class" data-title="' + data.title + '" data-name="' + data.name + '">配置</a>';
                        html += '<a class="layui-btn layui-btn-danger layui-btn-xs uninstall-class" data-name="' + data.name + '" data-title="' + data.title + '">卸载</a>';
                        html += '<a class="layui-btn layui-btn-danger layui-btn-xs stop-class" data-name="' + data.name + '" data-title="' + data.title + '">启用</a>';
                    } else {
                        html = '<a  class="layui-btn layui-btn-xs install-class" data-name="' + data.name + '" data-title="' + data.title + '">安装</a>';
                    }
                    return html;
                }}
            ]]
        });

        //安装插件
        $(document).on('click', '.install-class', function(){
            var name = $(this).attr('data-name');
            var title = $(this).attr('data-title');
            layer.confirm('确认安装插件：'+title+' 吗？', {
                title: '提示', btn: ['确认', '取消'] //按钮
            }, function(){
                installAddon(name);
            });
        });

        //安装插件
        function installAddon(name){
            JsPost('<?php echo url("Addons/install"); ?>',{name:name},function (e) {
                layer.msg(e.msg, {time: 1300}, function(){
                    table.reload('typeTable');
                });
            });
        }

        //插件设置
        $(document).on('click', '.setting-class', function(){
            var title = $(this).attr('data-title');
            var name = $(this).attr('data-name');
            JsPost('<?php echo url("Addons/setting"); ?>',{name:name},function (e) {
                if(e.status){
                    window.box = layer.open({
                        type: 1,
                        content: e.data,
                        area: [e.dialog.width, e.dialog.height],
                        title:'插件配置',
						btn:['保存','取消'],
						yes:function (index,obj) {
							var settingForm = obj.find('form');
                            var addonData = settingForm.serializeArray();
                            addonData.push({'name':'name','value':name});
							JsPost('<?php echo url("Addons/doSetting"); ?>',addonData,function (res) {
							    if(res.status){
							        layer.closeAll();
                                    layer.msg(res.msg, {time: 1300}, function(){
                                        table.reload('typeTable');
                                    });
								}else{
                                    layer.msg(e.msg);
                                }
                            });
                        }
                    });
				}else{
                    layer.msg(e.msg);
				}
            });
        });

        //改变插件状态
        $(document).on('click', '.stop-class', function(){
            var title = $(this).attr('data-title');
            var name = $(this).attr('data-name');
            var type = $(this).html();
            layer.confirm('确认'+type+'插件：'+title+' 吗？', {
                title: '提示', btn: ['确认', '取消'] //按钮
            }, function(){
                changeStatus(name);
            });
        });

        function changeStatus(name){
            JsPost('<?php echo url("Addons/changeStatus"); ?>',{name:name},function (e) {
                layer.msg(e.msg, {time: 1300}, function(){
                    table.reload('typeTable');
                });
            });
        }


        //卸载插件
        $(document).on('click', '.uninstall-class', function(){
            var name = $(this).attr('data-name');
            var title = $(this).attr('data-title');
            layer.confirm('确认卸载插件：'+title+' 吗？', {
                title: '提示', btn: ['确认', '取消'] //按钮
            }, function(){
                uninstallAddon(name);
            });
        });

        //卸载插件
        function uninstallAddon(name){
            JsPost('<?php echo url("Addons/uninstall"); ?>',{name:name},function (e) {
                layer.msg(e.msg, {time: 1300}, function(){
                    table.reload('typeTable');
                });
            });
        }

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