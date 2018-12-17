<?php /*a:3:{s:73:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\user\comment.html";i:1542977520;s:67:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\layout.html";i:1543406342;s:72:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\common\menu.html";i:1542977520;}*/ ?>
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
            <form class="layui-form seller-form" action="">
    <div class="layui-form-item">
        <div class="layui-inline">
            <label style="width:120px" class="layui-form-label">用户手机号码：</label>
            <div class="layui-input-inline seller-inline-3">
                <input type="text" name="mobile" lay-verify="title" placeholder="请输入手机号码" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-inline">
            <label class="layui-form-label">订单号：</label>
            <div class="layui-input-inline seller-inline-3">
                <input type="text" name="order_id" placeholder="请输入订单号" autocomplete="off" class="layui-input">
            </div>
        </div>
        <!--<div class="layui-inline">-->
            <!--<label class="layui-form-label">评价类型：</label>-->
            <!--<div class="layui-input-inline seller-inline-2">-->
                <!--<select name="evaluate" id="evaluate">-->
                    <!--<option value="all">&#45;&#45; 全部 &#45;&#45;</option>-->
                    <!--<option value="1">好评</option>-->
                    <!--<option value="0">中评</option>-->
                    <!--<option value="-1">差评</option>-->
                <!--</select>-->
            <!--</div>-->
        <!--</div>-->
        <div class="layui-inline" style="margin-left: 17px;">
            <div class="layui-input-inline">
                <button class="layui-btn layui-btn-sm" lay-submit lay-filter="*"><i class="iconfont icon-chaxun"></i>筛选</button>
            </div>
        </div>
    </div>
</form>

<div class="table-body">
    <table id="CommentTable" lay-filter="test"></table>
</div>

<script>
    layui.use(['form', 'layedit', 'laydate','table'], function(){
        layui.table.render({
            elem: '#CommentTable',
            height: 'full-210',
            cellMinWidth: '80',
            page: 'true',
            limit:'20',
            url: "<?php echo url('user/comment'); ?>",
            id:'CommentTable',
            method: 'post',
            response: {
                statusName: 'status',
                statusCode: true
            },
            cols: [[
                {type:'numbers'},
                {field:'nickname', width:210, title:'用户', align:'center', templet: function(data) {
                    if(data.user)
                    {
                        return data.user.nickname?data.user.nickname:data.user.mobile;
                    }
                    else
                    {
                        return data.user_id;
                    }
                }},
                {field:'evaluate', width:150, sort:true, title:'评价星数', align:'center', templet: function (data) {
                    // if (data.score == 1) {
                    //     return '好评';
                    // } else if (data.score == 0) {
                    //     return '中评';
                    // } else if (data.score == -1) {
                    //     return '差评';
                    // }
                        return data.score+'星';
                }},
                {field:'goods_name', width:250, sort:true, title:'商品名称', align:'center', templet: function (data) {
                    return data.goods.name;
                }},
                {field:'content', title:'评价内容', align:'center'},
                {field:'order_id', width:190, title:'订单号', align:'center'},
                {field:'ctime', width:230, sort:true, title:'评价时间', align:'center'},
                {field:'display', width:150, sort:true, title:'前台显示', align:'center', templet:function(data){
                        if(data.display === 1){
                            return '<a href="javascript:void(0);" class="display" data-id="'+data.id+'">隐藏</a>';
                        }else{
                            return '<a href="javascript:void(0);" class="display" data-id="'+data.id+'">显示</a>';
                        }
                    }},
                {field:'operating', width:200, title:'操作', align:'center', templet:function(data){
                        var html = '';
                        html += '<a class="layui-btn layui-btn-xs comment-return" data-id="' + data.id + '">评价回复</a>';
                        return html;
                }, fixed:'right'}
            ]]
        });
        layui.form.on('submit(*)', function(data){
            layui.table.reload('CommentTable', {
                where: data.field
                ,page: {
                    curr: 1 //重新从第 1 页开始
                }
            });
            return false; //阻止表单跳转。如果需要表单跳转，去掉这段即可。
        });

        //前台展示设置
        $(document).on("click", '.display', function () {
            var id = $(this).attr('data-id');
            layer.confirm('是否确认该操作？', {
                title: "提示",
                btn: ['是', '否']
            }, function () {
                JsPost("<?php echo url('Goods/setDisplay'); ?>",{'id':id},function(res){
                    layer.msg(res.msg);
                    layui.table.reload('CommentTable');
                });
            }, function(){
                layer.closeAll();
            });
        });

        //回复
        $(document).on("click", '.comment-return', function () {
            var id = $(this).attr('data-id');
            JsPost("<?php echo url('Goods/getCommentInfo'); ?>", {'id':id}, function(res) {
                if(res.status) {
                    var seller_content = res.data.seller_content == null?'':res.data.seller_content;
                    window_box = layer.open({
                        type: 1,
                        title: "商家回复",
                        area: ['450px', '300px'], //宽高
                        btn:['保存','关闭'],
                        content: '<div style="padding:20px"><input type="hidden" id="return-id" value="'+id+'">' +
                        '<div><span>用户评价：</span>'+res.data.content+'</div>' +
                        '<div><span>商家回复：</span><textarea class="layui-textarea" name="return-content" id="return-content" cols="10" rows="5">'+seller_content+'</textarea></div></div>',
                        yes:function () {
                            var id = $("#return-id").val();
                            var return_content = $("#return-content").val();
                            JsPost("<?php echo url('Goods/sellerContent'); ?>", {'id':id, "seller_content":return_content}, function(res) {
                                layer.closeAll();
                                layer.msg(res.msg);
                                layui.table.reload('CommentTable');
                            });
                        }
                    });
                }else{
                    layer.msg(res.msg);
                    layui.table.reload('CommentTable');
                }
            });
            return false;
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