<?php /*a:3:{s:71:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\role\index.html";i:1544184414;s:67:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\layout.html";i:1543406342;s:72:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\common\menu.html";i:1542977520;}*/ ?>
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
            <link rel="stylesheet" href="/static/lib/layui/layui_ext/dtree/dtree.css">
<link rel="stylesheet" href="/static/lib/layui/layui_ext/dtree/font/iconfont.css">

<form class="layui-form seller-form"  action="" >
    <div class="layui-form-item">

        <div class="layui-inline">
            <label class="layui-form-label">角色名称：</label>
            <div class="layui-input-inline seller-inline-3">
                <input type="text" name="name" lay-verify="title" placeholder="请输入角色名称" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-inline">
	        <div class="layui-input-block">
	            <button class="layui-btn layui-btn-sm" lay-submit lay-filter="*"><i class="iconfont icon-chaxun"></i>筛选</button>
                <button class="layui-btn layui-btn-sm" lay-submit  lay-filter="role-add"><i class="layui-icon">&#xe608;</i>添加</button>
	        </div>
        </div>
    </div>
</form>

<div class="table-body">
    <table id="userTable" lay-filter="test"></table>
</div>

<script>
    layui.extend({
        dtree: '/static/lib/layui/layui_ext/dtree/dtree'
    }).use(['table', 'form', 'layer', 'dtree','util'], function() {

        var element = layui.element,
                layer = layui.layer,
                table = layui.table,
                util = layui.util,
                dtree = layui.dtree,
                form = layui.form,
                laytpl = layui.laytpl,
                $ = layui.$;
        form.render();
        var userTables =layui.table.render({
            elem: '#userTable',
            height: 'full-330',
            cellMinWidth: '80',
            page: 'true',
            limit:'20',
            url: "<?php echo url('role/index'); ?>?_ajax=1",
            id:'userTable',
            cols: [[
                {type:'numbers'},
                {field:'name',title:'角色名称'},
                {field:'utime',title:'创建时间'},
                {field: 'operating', title: '操作', width:250, align: 'center', fixed: 'right',templet:function(data){
                    var html = '';
                    html += '<a  class="layui-btn layui-btn-xs option-perm" data-id="' + data.id + '">编辑权限</a>';
                    html += '<a  class="layui-btn layui-btn-xs option-del layui-btn-primary" data-id="' + data.id + '">删除</a>';
                    return html;
                }}
            ]]
        });
        layui.form.on('submit(*)', function(data){
            layui.table.reload('userTable', {
                where: data.field
                ,page: {
                    curr: 1 //重新从第 1 页开始
                }
            });
            return false; //阻止表单跳转。如果需要表单跳转，去掉这段即可。
        });
        //监听form提交  (add)
        layui.form.on('submit(role-add)',function(data){
            $.ajax({
                type:'get',
                url: "<?php echo url('role/add'); ?>",
                success:function(e){
                    window.box = layer.open({
                        type: 1,
                        content: e,
                        area: ['400px', '300px'],
                        title:'添加角色',
                        btn: ['确定','取消'],
                        yes: function(index, layero){
                            if($('#edit_name').val() != ''){
                                //保存支付方式
                                $.ajax({
                                    type:'post',
                                    url: "<?php echo url('role/add'); ?>",
                                    data: $('#edit_form').serialize(),
                                    success:function(res){
                                        if(res.status){
                                            layer.close(index);
                                            layer.msg(res.msg,{time:1300},function(){
                                                userTables.reload();
                                            });
                                        }else{
                                            layer.msg(res.msg);
                                        }
                                    }
                                });
                            }else{
                                layer.msg('请输入角色名称');
                            }


                        }
                    });
                }
            });
            return false;
        });

        //角色删除
        $(document).on('click','.option-del',function(){
            var id = $(this).attr('data-id');
            layer.confirm('您确定删除此角色吗？', {
                btn: ['确认','取消'] //按钮
            }, function(){
                //去删除
                JsPost("<?php echo url('role/del'); ?>",{'id':id},function(res){
                    if(res.status){
                        layer.msg('删除成功');
                        userTables.reload();
                    }else{
                        layer.msg(res.msg);
                    }

                });
            }, function(){
                layer.close(1);
            });
        });

        //设置权限
        $(document).on('click','.option-perm',function(){
            var id = $(this).attr('data-id');
            layer.open({
                type: 1,
                area: ['400px', '600px'],
                content:'<ul id="areaTree" class="dtree" data-id="0"></ul>',
                title: '配置权限',
                btn:['保存','关闭'],
                success: function(layero, index) {
                    var obj = $(layero).find("#areaTree");
                    DTree = dtree.render({
                        obj: obj,
                        initLevel: 1,
                        request:{"id":id},
                        url: '<?php echo url("role/getOperation"); ?>',
                        checkbar: true,
                        cache: true,
                        checkbarType: "all",
                        response:{message:"msg",statusCode:0},
                        dataStyle: "layuiStyle",
                    });
                },
                yes:function (index,layero) {
                    var thedata = dtree.getCheckbarNodesParam(DTree);
                    var ids = [];
                    $.each(thedata,function (i,obj) {
                        ids.push({'id':obj.nodeId,'pid':obj.parentId,'name':obj.context});
                    });
                    JsPost('<?php echo url("role/savePerm"); ?>',{'id':id,'data':ids},function (re) {
                        if(re.status){
                            layer.msg('保存成功');
                            layer.close(index);
                        }else{
                            layer.msg(re.msg);
                        }
                    });
                }
            });
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