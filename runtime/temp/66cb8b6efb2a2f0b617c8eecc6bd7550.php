<?php /*a:3:{s:78:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\bill_lading\index.html";i:1543588464;s:67:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\layout.html";i:1543406342;s:72:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\common\menu.html";i:1542977520;}*/ ?>
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
            <form class="layui-form seller-form">
    <div class="layui-form-item">
        <div class="layui-inline">
            <label class="layui-form-label">提货单号：</label>
            <div class="layui-input-inline seller-inline-3">
                <input type="text" name="id" id="id" placeholder="提货单号" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-inline">
            <label class="layui-form-label">订单号：</label>
            <div class="layui-input-inline seller-inline-3">
                <input type="text" name="order_id" id="order_id" placeholder="订单号" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-inline">
            <label class="layui-form-label">提货门店：</label>
            <div class="layui-input-inline seller-inline-3">
                <select name="store_id" id="store_id" autocomplete="off">
                    <option value="">-- 全部 --</option>
                    <?php foreach($store as $v): ?>
                    <option value="<?php echo htmlentities($v['id']); ?>"><?php echo htmlentities($v['store_name']); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="layui-inline">
            <label class="layui-form-label">提货人名：</label>
            <div class="layui-input-inline seller-inline-3">
                <input type="text" name="name" id="name" placeholder="提货人姓名" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-inline">
            <label class="layui-form-label">提货电话：</label>
            <div class="layui-input-inline seller-inline-3">
                <input type="tel" name="mobile" id="mobile" placeholder="提货人电话" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-inline">
            <label class="layui-form-label">提货状态：</label>
            <div class="layui-input-inline seller-inline-3">
                <select name="status" id="status" autocomplete="off">
                    <option value="">-- 全部 --</option>
                    <option value="1">未提货</option>
                    <option value="2">已提货</option>
                </select>
            </div>
        </div>
        <div class="layui-inline">
            <div class="layui-input-inline">
                <button class="layui-btn layui-btn-sm" lay-submit lay-filter="*"><i class="iconfont icon-chaxun"></i>筛选</button>
            </div>
        </div>
    </div>
</form>

<div class="table-body">
    <table class="layui-table" id="ladingTable" lay-filter="ladingTable"></table>
</div>

<script>
    layui.use(['table', 'form', 'layer'], function(){
        var table = layui.table, form = layui.form, layer = layui.layer;

        table.render({
            elem: '#ladingTable',
            height: 'full-330',
            cellMinWidth: '80',
            page: 'true',
            limit: '20',
            id: 'ladingTable',
            url: "<?php echo url('manage/BillLading/index'); ?>",
            response: {
                statusName: 'status',
                statusCode: 1
            },
            cols: [[ //标题栏
                {type: 'numbers'},
                {field: 'id', title: '提货单号', align: 'center', width: 150},
                {field: 'order_id', title: '订单号', align: 'center', width: 150},
                {field: 'store_name',title: '提货门店', align: 'center', width: 150, sort: true},
                {field: 'name', title: '提货人名', align: 'center'},
                {field: 'mobile', title: '提货电话', align: 'center' },
                {field: 'status_name', title: '提货状态', align: 'center', sort: true},
                {field: 'ctime', title: '下单时间', align: 'center', sort: true},
                {field: 'option', title: '操作', align: 'center', toolbar: '#ladingBar', fixed: 'right'}
            ]]
        });

        //筛选条件
        form.on('submit(*)', function(data){
            table.reload('ladingTable', {
                where: data.field,
                page: {curr: 1}
            });
            return false; //阻止表单跳转。如果需要表单跳转，去掉这段即可。
        });

        //监听工具条
        table.on('tool(ladingTable)', function(obj){
            var data = obj.data;
            var layEvent = obj.event;

            if(layEvent === 'info'){
                //获取详情
                $.ajax({
                    url: "<?php echo url('manage/billLading/info'); ?>",
                    type: 'get',
                    data: {
                        'id': data.id
                    },
                    success: function (e) {
                        layer.open({
                            type: 1,
                            title: '详情',
                            area: ['650px', '310px'], //宽高
                            content: e
                        });
                    }
                });
            }else if(layEvent === 'write'){
                //核销提货单
                if(data.status === 2){
                    layer.msg('该提货单已经核销，无需重复核销');
                }else{
                    layer.confirm('确认核销该提货单吗？', {
                        btn: ['确认', '取消'] //按钮
                    }, function(){
                        $.ajax({
                            url: "<?php echo url('manage/BillLading/write'); ?>",
                            data: {
                                'id': data.id
                            },
                            type: 'post',
                            dataType: 'json',
                            success: function(e){
                                layer.msg(e.msg, {time: 1500}, function(){
                                    table.reload('ladingTable');
                                });
                            }
                        });
                    }, function(){

                    });
                }
            }else if(layEvent === 'del'){
                //删除
                layer.confirm('真的删除么', {icon: 3}, function(index){
                    JsGet("<?php echo url('manage/billLading/delLading'); ?>?id="+data.id, function(res){
                        if(res.status){
                            obj.del();
                            layer.close(index);
                        }
                        layer.msg(res.msg);
                    });
                });
            }
        });

        //修改保存
        $(document).on('click', '.editBtn', function(){
            var data = $('#edit-form').serialize();
            $.ajax({
                url: '<?php echo url("manage/BillLading/info"); ?>',
                data: data,
                type: 'post',
                dataType: 'json',
                success: function (e) {
                    if(e.status){
                        layer.msg(e.msg, {time:1500}, function(){
                            layer.closeAll();
                            table.reload('ladingTable');
                        });
                    }else{
                        layer.msg(e.msg);
                    }
                }
            });
            return false;
        });
    });
</script>

<script type="text/html" id="ladingBar">
    <a class="layui-btn layui-btn-xs" lay-event="info">详情</a>
    <a class="layui-btn layui-btn-xs" lay-event="write">核销</a>
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