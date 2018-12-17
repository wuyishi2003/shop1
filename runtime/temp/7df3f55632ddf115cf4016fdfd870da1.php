<?php /*a:3:{s:72:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\order\index.html";i:1543588464;s:67:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\layout.html";i:1543406342;s:72:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\common\menu.html";i:1542977520;}*/ ?>
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
    .layui-form-pane .layui-form-label, .layui-form-pane .layui-input-inline{
        width: auto;
    }
    .view-data{
        height: 36px;
        line-height: 36px;
        display: inline-block;
        padding: 0 20px;
        border-style:solid;
        border-width:1px;
        background-color:#fff;
        border-radius:2px;
        border-color:#e6e6e6;
    }
    .table-body .layui-btn .iconfont{
    	font-size: 17px !important;
    }
    .layui-card-body{
        background-color: #fff;
        padding: 10px;
        margin-top: 10px;
        border: 1px solid #e6e6e6;
    }
    .layui-tab-card>.layui-tab-title{
        background-color: #f9f9f9;
        border-bottom: none;
    }
    .layui-tab-content{
        padding: 0;
    }
    .layui-table, .layui-table-view{
        margin: 0;
    }
</style>

<form class="layui-form seller-form" action="">
    <div class="layui-form-item">
        <div class="layui-inline">
            <label class="layui-form-label">订单号：</label>
            <div class="layui-input-inline seller-inline-3">
                <input type="text" name="order_id" placeholder="请输入订单号" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-inline">
            <label class="layui-form-label">下单时间：</label>
            <div class="layui-input-inline seller-inline-4">
                <input type="text" name="date" id="date" placeholder="开始时间 到 结束时间" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-inline">
            <label class="layui-form-label">订单来源：</label>
            <div class="layui-input-inline seller-inline-3">
                <select name="source" id="source">
                    <option value="">-- 全部 --</option>
                    <?php foreach($source as $key=>$vo): ?>
                        <option value="<?php echo htmlentities($key); ?>"><?php echo htmlentities($vo); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
    </div>
    <div class="layui-form-item">
        <div class="layui-inline">
            <label class="layui-form-label">用户：</label>
            <div class="layui-input-inline seller-inline-4">
                <input type="text" name="username" placeholder="用户名、昵称、手机" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-inline">
            <label class="layui-form-label">手机号：</label>
            <div class="layui-input-inline seller-inline-3">
                <input type="tel" name="ship_mobile" placeholder="收货人手机号" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-inline">
        	<div class="layui-input-inline">
	            <button class="layui-btn layui-btn-sm" lay-submit lay-filter="*"><i class="iconfont icon-chaxun"></i>筛选</button>
	        </div>
        </div>
    </div>
    <div class="layui-form-item">
        <div class="layui-inline" style="margin-left: 17px;">
            <button class="layui-btn layui-btn-sm" id="pay-order-array"><i class="iconfont icon-zhifu-01"></i>支付</button>
            <button class="layui-btn layui-btn-sm" id="cancel-order-array"><i class="iconfont icon-cancel"></i>取消</button>
        </div>
    </div>
</form>

<div class="table-body">
    <div class="layui-tab layui-tab-card" lay-filter="order-tab">
        <ul class="layui-tab-title">
            <li class="layui-this" lay-id="all">全部订单<span class="layui-badge layui-bg-gray"><?php echo htmlentities((isset($count['all']) && ($count['all'] !== '')?$count['all']:0)); ?></span></li>
            <li lay-id="payment">待支付<span class="layui-badge layui-bg-green"><?php echo htmlentities((isset($count['payment']) && ($count['payment'] !== '')?$count['payment']:0)); ?></span></li>
            <li lay-id="delivered">待发货<span class="layui-badge layui-bg-black"><?php echo htmlentities((isset($count['delivered']) && ($count['delivered'] !== '')?$count['delivered']:0)); ?></span></li>
            <li lay-id="receive">待收货<span class="layui-badge layui-bg-blue"><?php echo htmlentities((isset($count['receive']) && ($count['receive'] !== '')?$count['receive']:0)); ?></span></li>
            <li lay-id="evaluated">待评价<span class="layui-badge layui-bg-orange"><?php echo htmlentities((isset($count['evaluated']) && ($count['evaluated'] !== '')?$count['evaluated']:0)); ?></span></li>
            <li lay-id="cancel">已取消<span class="layui-badge layui-bg-gray"><?php echo htmlentities((isset($count['cancel']) && ($count['cancel'] !== '')?$count['cancel']:0)); ?></span></li>
            <li lay-id="complete">已完成<span class="layui-badge layui-bg-gray"><?php echo htmlentities((isset($count['complete']) && ($count['complete'] !== '')?$count['complete']:0)); ?></span></li>
        </ul>
        <div class="layui-tab-content">
            <table id="order" lay-data="{id:'order'}"></table>
        </div>
    </div>
</div>

<script>
    var window_box, table;
    layui.use(['table', 'layer', 'laydate', 'form', 'element'], function(){
        var layer = layui.layer,
            $ = layui.jquery,
            laydate = layui.laydate,
            form = layui.form,
            element = layui.element,
            tables = layui.table,
            filter = {};

        //时间插件
        laydate.render({
            elem: '#date',
            range: '到',
            format: 'yyyy-MM-dd'
        });

        //获取订单数据
        table  = layui.table.render({
            id: 'order',
            elem: '#order',
            height: 'full-380',
            cellMinWidth: '80',
            page: 'true',
            limit:'20',
            url: '<?php echo url("order/index"); ?>',
            method: 'post',
            response: {
                statusName: 'status',
                statusCode: 1
            },
            cols: [[
                {type:'checkbox', fixed: 'left'},
                {field: 'order_id', title: '订单号', width:140, align: 'center', fixed: 'left'},
                {field: 'ctime', title: '下单时间', width:160, align: 'center'},
                {field: 'status_text', title: '订单状态', width: 90, align: 'center'},
                {field: 'username', title: '用户名', width:120, align: 'center'},
                {field: 'ship_mobile', title: '收货人手机号', width:120, align: 'center'},
                {field: 'area_name', title: '收货地址', width:260, align: 'center'},
                {field: 'pay_status', title: '支付状态', width:90, align: 'center'},
                {field: 'ship_status', title: '发货状态', width:90, align: 'center'},
                {field: 'order_amount', title: '订单总额', width:100, align: 'center', templet:function(data){return '￥'+data.order_amount}},
                {field: 'source', title: '订单来源', width:130, align: 'center'},
                {field: 'operating', title: '操作', width:200, align: 'center', fixed: 'right'}
            ]]
        });

        element.on('tab(order-tab)', function (data) {
            var type = this.getAttribute('lay-id');
            if (type === 'all') {
                filter = {};
            } else if (type === 'payment') {
                filter.order_unified_status = 1;
            } else if (type === 'delivered') {
                filter.order_unified_status = 2;
            } else if (type === 'receive') {
                filter.order_unified_status = 3;
            } else if (type === 'evaluated') {
                filter.order_unified_status = 4;
            } else if (type === 'cancel') {
                filter.order_unified_status = 7;
            } else if (type === 'complete') {
                filter.order_unified_status = 6;
            }
            var basefilter = $(".seller-form").serializeArray();
            $.each(basefilter, function (i, obj) {
                if(!filter.hasOwnProperty(obj.name)){
                    filter[obj.name] = obj.value;
                }
            });
            table.reload({
                where: filter,
                page: {curr: 1}
            });
        });

        //筛选条件
        form.on('submit(*)', function(data){
            table.reload({
                where: data.field,
                page: {curr: 1}
            });
            return false; //阻止表单跳转。如果需要表单跳转，去掉这段即可。
        });

        //查看订单
        $(document).on('click', '.view-order', function(){
            var id = $(this).attr('data-id');
            $.ajax({
                url: '<?php echo url("order/view"); ?>',
                type: 'get',
                data: {
                    'id': id
                },
                success: function(e){
                    window_box = layer.open({
                        type: 1,
                        title: '订单详情',
                        area: ['800px', '445px'], //宽高
                        content: e
                    });
                }
            });
        });

        //编辑订单
        $(document).on('click', '.edit-order', function(){
            var id = $(this).attr('data-id');

            $.ajax({
                url: '<?php echo url("order/edit"); ?>',
                type: 'get',
                data: {
                    'id': id,
                    'order_type': $(this).attr('data-type')
                },
                success: function(e){
                    window_box = layer.open({
                        type: 1,
                        title: '编辑订单',
                        area: ['660px', '280px'], //宽高
                        content: e
                    });
                }
            })
        });

        //保存编辑订单
        $(document).on('click', '.order-edit-btn', function(){
            var order_id = $("#order_id").val();
            var ship_area_id = $("input[name='ship_area_id']").val();
            var ship_address = $("#ship_address").val();
            var ship_name = $("#ship_name").val();
            var ship_mobile = $("#ship_mobile").val();
            var order_amount = $("#order_amount").val();

            $.ajax({
                url: '<?php echo url("order/edit"); ?>',
                type: 'post',
                data: {
                    'order_id': order_id,
                    'ship_area_id': ship_area_id,
                    'ship_address': ship_address,
                    'ship_name': ship_name,
                    'ship_mobile': ship_mobile,
                    'order_amount': order_amount
                },
                success: function(e){
                    layer.close(window_box);
                    layer.msg(e.msg, {time: 1300}, function(){
                        table.reload();
                    });
                }
            });
        });

        //单个去支付订单页面展示
        $(document).on('click', '.pay-order', function(){
            var id = $(this).attr('data-id');
            $.ajax({
                url: '<?php echo url("bill_payments/pay"); ?>',
                type: 'get',
                data: {
                    'order_id': id,
                    'type': 1
                },
                success: function(e){
                    if(e.status){
                        window_box = layer.open({
                            type: 1,
                            title: '支付订单',
                            area: ['530px', '350px'], //宽高
                            content: e.data.tpl
                        });
                    }else{
                        layer.msg(e.msg, {time: 1300}, function(){
                            table.reload();
                        });
                    }
                }
            });
        });

        //多个去支付订单页面展示
        var pay_order_array = function(){ //获取选中数据
            var checkStatus = tables.checkStatus('order'), data = checkStatus.data;
            var ids = '';
            $.each(data, function(){
                ids += this.order_id+',';
            });
            ids = ids.substring(0, ids.length-1);
            if(ids){
                $.ajax({
                    url: '<?php echo url("bill_payments/pay"); ?>',
                    type: 'get',
                    data: {
                        'order_id': ids,
                        'type': 1
                    },
                    success: function(e){
                       if(e.status){
                           window_box = layer.open({
                               type: 1,
                               title: '支付订单',
                               area: ['530px', '520px'], //宽高
                               content: e.data.tpl
                           });
                       }else{
                           layer.msg(e.msg, {time: 1300}, function(){
                               table.reload();
                           });
                       }
                    }
                });
            }else{
                layer.msg('请勾选需要支付的订单');
            }
            return false;
        };
        $('#pay-order-array').on('click', function(){
            pay_order_array ? pay_order_array.call(this) : '';
            return false;
        });

        //去支付
        $(document).on('click', '.goto-pay', function(){
            var order_id = $("#input_order_id").val();
            var type = $("#input_type").val();
            var payment_code = $("#payment_code").val();
            $.ajax({
                url: '<?php echo url("bill_payments/toPay"); ?>',
                type: 'get',
                data: {
                    'order_id': order_id,
                    'type': type,
                    'payment_code': payment_code
                },
                success: function(e){
                    layer.close(window_box);
                    layer.msg(e.msg, {time: 1300}, function(){
                        table.reload();
                    });
                }
            });
            return false;
        });

        //发货页面
        $(document).on('click', '.ship-order', function(){
            var id = $(this).attr('data-id');
            $.ajax({
                url: '<?php echo url("order/ship"); ?>',
                type: 'get',
                data: {
                    'order_id': id
                },
                success: function(e){
                    window_box = layer.open({
                        type: 1,
                        title: '订单发货',
                        area: ['800px', '500px'], //宽高
                        content: e
                    });
                }
            });
            return false;
        });

        //发货生成
        $(document).on('click', '.order-ship-btn', function(){
            var ship_data = [];
            var order_id = $("#order_id").val();
            var logi_no = $("#logi_no").val();
            var logi_code = $("#logi_code").val();
            var memo = $("#memo").val();
            var flag = true;
            $(".order-ship-nums").each(function(){
                var ship_num = $(this).val();
                var max = $(this).attr('max');
                var id = $(this).attr('data-id');
                if(ship_num > max || ship_num < 0){
                    flag = false;
                    layer.msg('发货数量不符合真实情况');
                    return false;
                }else{
                    var item = [id, ship_num];
                    ship_data.push(item);
                }
            });
            if(flag){
                $.ajax({
                    url: '<?php echo url("order/ship"); ?>',
                    type: 'post',
                    data: {
                        'order_id': order_id,
                        'logi_no': logi_no,
                        'memo': memo,
                        'logi_code': logi_code,
                        'ship_data': ship_data
                    },
                    success: function(e){
                        layer.close(window_box);
                        layer.msg(e.msg, {time: 1300}, function(){
                            table.reload();
                        });
                    }
                });
            }
        });

        //取消订单
        $(document).on('click', '.cancel-order', function(){
            var id = $(this).attr('data-id');
            layer.confirm('确认取消订单号：'+id+' 的订单吗？', {
                title: '提示', btn: ['确认', '取消'] //按钮
            }, function(){
                $.ajax({
                    url: '<?php echo url("order/cancel"); ?>',
                    type: 'post',
                    data: {
                        'id': id
                    },
                    success: function(e){
                        layer.msg(e.msg, {time: 1300}, function(){
                            table.reload();
                        });
                    }
                });
            });
            return false;
        });

        //取消多个订单
        var cancel_order_array = function(){ //获取选中数据
            var checkStatus = tables.checkStatus('order'), data = checkStatus.data;
            var ids = '';
            $.each(data, function(){
                ids += this.order_id+',';
            });
            ids = ids.substring(0, ids.length-1);
            if(ids){
                layer.confirm('确认取消这些订单吗？', {
                    title: '提示', btn: ['确认', '取消'] //按钮
                }, function(){
                    $.ajax({
                        url: '<?php echo url("order/cancel"); ?>',
                        type: 'post',
                        data: {
                            'id': ids
                        },
                        success: function(e){
                            layer.msg(e.msg, {time: 1300}, function(){
                                table.reload();
                            });
                        }
                    });
                });
            }else{
                layer.msg('请勾选要取消的订单');
            }
            return false;
        };
        $('#cancel-order-array').on('click', function(){
            cancel_order_array ? cancel_order_array.call(this) : '';
            return false;
        });

        //完成订单
        $(document).on('click', '.complete-order', function(){
            var id = $(this).attr('data-id');
            layer.confirm('确认设置订单号：'+id+' 为完成吗？<br /><font style="color:#f00">完成订单后将不能再对订单进行任何操作。</font>', {
                title: '提示', btn: ['确认', '取消'] //按钮
            }, function(){
                $.ajax({
                    url: '<?php echo url("order/complete"); ?>',
                    type: 'post',
                    data: {
                        'id': id
                    },
                    success: function(e){
                        layer.msg(e.msg, {time: 1300}, function(){
                            table.reload();
                        });
                    }
                });
            });
        });

        //删除订单
        $(document).on('click', '.del-order', function(){
            var id = $(this).attr('data-id');
            layer.confirm('确认删除订单号：'+id+' 的订单吗？', {
                title: '提示', btn: ['确认', '取消'] //按钮
            }, function(){
                $.ajax({
                    url: '<?php echo url("order/del"); ?>',
                    type: 'post',
                    data: {
                        'id': id
                    },
                    success: function(e){
                        layer.msg(e.msg, {time: 1300}, function(){
                            table.reload();
                        });
                    }
                });
            });
        });

        //已发货的物流信息查看
        $(document).on('click','.order-logistics',function(){
           var id = $(this).attr('data-id');
            JsGet("<?php echo url('order/logistics'); ?>?order_id="+id,function(res){
                window_box = layer.open({
                    type: 1,
                    title: '物流信息',
                    area: ['700px', '400px'], //宽高
                    content: res
                });
            })
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