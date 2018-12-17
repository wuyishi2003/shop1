<?php /*a:3:{s:80:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\bill_delivery\index.html";i:1543588464;s:67:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\layout.html";i:1543406342;s:72:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\common\menu.html";i:1542977520;}*/ ?>
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
            <form class="layui-form seller-form"  action="">
    <div class="layui-form-item">
        <div class="layui-inline">
            <label class="layui-form-label">发货单号：</label>
            <div class="layui-input-inline seller-inline-3">
                <input type="text" name="delivery_id" lay-verify="title"  placeholder="请输入发货单号" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-inline">
            <label class="layui-form-label">订单号：</label>
            <div class="layui-input-inline seller-inline-3">
                <input type="text" name="order_id" lay-verify="title" placeholder="请输入订单号" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-inline">
            <label class="layui-form-label">快递单号：</label>
            <div class="layui-input-inline seller-inline-3">
                <input type="text" name="logi_no" lay-verify="title" placeholder="请输入快递单号" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-inline">
            <label class="layui-form-label">电话号：</label>
            <div class="layui-input-inline seller-inline-3">
                <input type="text" name="mobile" lay-verify="title" placeholder="请输入收货电话号码" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-inline">
            <button class="layui-btn layui-btn-sm" lay-submit="" lay-filter="*"><i class="iconfont icon-chaxun"></i>筛选</button>
        </div>
    </div>
</form>

<div class="table-body">
    <table id="billDelivery" lay-filter="test"></table>
</div>

<script>
    layui.use(['form', 'layedit', 'laydate', 'table'], function(){
        //获取列表数据
        layui.table.render({
            elem: '#billDelivery',
            height: 'full-330',
            cellMinWidth: '80',
            page: 'true',
            limit: '20',
            url: "<?php echo url('billDelivery/index'); ?>?_ajax=1",
            id: 'billDelivery',
            method: 'post',
            response: {
                statusName: 'status',
                statusCode: 1
            },
            cols: [[
                {field:'delivery_id', width:140, title:'发货单号', align:'center', fixed:'left'},
                {field:'order_id', width:140, title:'订单号', align:'center'},
                {field:'username', width:130, title:'用户名', align:'center'},
                {field:'logi_name', width:120, title:'快递公司', align:'center'},
                {field:'logi_no', width:150, title:'快递单号', align:'center'},
                {field:'ship_address',  title:'收货地址', align:'center'},
                {field:'ship_mobile', title:'收货电话', align:'center'},
                {field:'ctime', title:'创建时间', align:'center'},
                {field:'operating', title:'操作', align:'center', fixed:'right',templet:function(data){
                    var html = '';
                    html += '<a  class="layui-btn layui-btn-xs option-view layui-btn-delivery" data-id="' + data.delivery_id + '">明细</a>';
                    return html;
                }}
            ]]
        });

        //搜索操作
        layui.form.on('submit(*)', function(data){
            layui.table.reload('billDelivery', {
                where: data.field
                ,page: {
                    curr: 1 //重新从第 1 页开始
                }
            });
            return false; //阻止表单跳转。如果需要表单跳转，去掉这段即可。
        });

        //查看操作
        $(document).on('click', '.option-view', function(){
            $.ajax({
                type:'get',
                url: "<?php echo url('billDelivery/view'); ?>",
                data:'delivery_id='+$(this).attr('data-id'),
                success:function(e){
                    if(e.status){
                        window.box = layer.open({
                            type: 1,
                            content: e.data,
                            area: ['600px', '600px'],
                            title:'发货单查看'
                        });
                    }else{
                        layer.msg(e.msg);
                    }

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