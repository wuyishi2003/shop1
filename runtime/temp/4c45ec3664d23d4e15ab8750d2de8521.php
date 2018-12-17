<?php /*a:3:{s:71:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\user\index.html";i:1544667175;s:67:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\layout.html";i:1543406342;s:72:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\common\menu.html";i:1542977520;}*/ ?>
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
        <div class="layui-inline" style="display:none;">
            <label class="layui-form-label">账号：</label>
            <div class="layui-input-inline">
                <input type="text" name="username" lay-verify="title" style="width:100px;" placeholder="请输入账号" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-inline">
            <label class="layui-form-label">手机号码：</label>
            <div class="layui-input-inline seller-inline-3">
                <input type="text" name="mobile" lay-verify="title" placeholder="请输入手机号码" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-inline">
            <label class="layui-form-label">性别：</label>
            <div class="layui-input-inline seller-inline-2" >
                <select name="sex" lay-verify="">
                    <option value=""></option>
                    <option value="1">男</option>
                    <option value="2">女</option>
                    <option value="3">其他</option>
                </select>
            </div>
        </div>
        <div class="layui-inline">
            <label class="layui-form-label">昵称：</label>
            <div class="layui-input-inline seller-inline-2">
                <input type="text" name="nickname" lay-verify="title" placeholder="用户昵称" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-inline">
            <label class="layui-form-label">状态：</label>
            <div class="layui-input-inline seller-inline-3">
                <select name="status" lay-verify="">
                    <option value=""></option>
                    <option value="1">正常</option>
                    <option value="2">停用</option>
                </select>
            </div>
        </div>
        <div class="layui-inline">
            <label class="layui-form-label">推荐人：</label>
            <div class="layui-input-inline seller-inline-3">
                <input type="text" name="pmobile" lay-verify="title" placeholder="推荐人手机号" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-inline">
	        <div class="layui-input-block">
	            <button class="layui-btn layui-btn-sm" lay-submit lay-filter="*"><i class="iconfont icon-chaxun"></i>筛选</button>
                <button class="layui-btn layui-btn-sm" lay-submit  lay-filter="user-add"><i class="layui-icon">&#xe608;</i>添加</button>
            </div>
        </div>
    </div>
</form>

<div class="table-body">
    <table id="userTable" lay-filter="test"></table>
</div>

<script>
    layui.use(['form', 'layedit', 'laydate','table'], function(){
        layui.table.render({
            elem: '#userTable',
            height: 'full-260',
            cellMinWidth: '80',
            page: 'true',
            limit:'20',
            url: "<?php echo url('user/index'); ?>?_ajax=1",
            id:'userTable',
            cols: [[
                {type:'numbers'},
//                {field:'username', width:100,title:'账号'},
                {field:'mobile', width:150, title:'手机号码'},
                {field:'sex', width:80, title:'性别'},

                {field:'isdl', width:80, title:'代理'},



                {field:'birthday',width:150, title:'生日'},
                {field:'avatar',title:'头像',
                    templet: function(d){
                        if (d.avatar) {
                            return '<a href="javascript:void(0);" onclick=viewImage("'+d.avatar+'")><image style="max-width:30px;max-height:30px;" src="'+d.avatar+'"/></a>';
                        }else{
                            return '<a href="javascript:void(0);" onclick=viewImage("<?php echo config('jshop.default_image'); ?>")><image style="max-width:30px;max-height:30px;" src="<?php echo config('jshop.default_image');?>"/></a>';
                        }
                    }, width: 80
                },
                {field:'nickname',title:'昵称'},
                {field:'balance',title:'余额'},
                {field:'point', sort:true, title:'积分'},
                {field:'status',title:'状态'},
                {field:'pid_name', title: '邀请人'},
                {field:'ctime', title:'创建时间'},
                {field:'option',title:'操作', templet: function (d) {
                    var html = '<span class="layui-btn layui-btn-xs inviteEdit" data-id="'+d.id+'">邀请人修改</span>';
                    html += '<span class="layui-btn layui-btn-xs pointEdit" data-id="'+d.id+'">积分修改</span>';
                    html += '<span class="layui-btn layui-btn-xs pointLog" data-id="'+d.id+'">积分详情</span>';

                    html += '<a class="layui-btn layui-btn-xs edit" data-id="' + d.id + '">修改</a>';
                    html += '<a class="layui-btn layui-btn-xs editMoney" data-id="' + d.id + '">修改余额</a>';
                    html += '<a class="layui-btn layui-btn-xs infoMoney" data-id="' + d.id + '">余额明细</a>';

                        html += '<a class="layui-btn layui-btn-xs daili" data-id="' + d.id + '">设置代理</a>';
                    return html;


                }, align:'center', fixed:'right',width:535}
            ]]
        });
        //搜索
        layui.form.on('submit(*)', function(data){
            layui.table.reload('userTable', {
                where: data.field
                ,page: {
                    curr: 1 //重新从第 1 页开始
                }
            });
            return false; //阻止表单跳转。如果需要表单跳转，去掉这段即可。
        });

        //积分编辑
        $(document).on('click', '.pointEdit', function () {
            var id = $(this).attr('data-id');
            $.ajax({
                url: "<?php echo url('manage/user/editPoint'); ?>",
                type: 'get',
                data: {
                    'user_id': id,
                    'flag': 'false'
                },
                success: function (e) {
                    layer.open({
                        type: 1,
                        title: '修改用户积分',
                        area: ['450px', '300px'], //宽高
                        content: e
                    });
                }
            });
        });
        //保存积分
        $(document).on('click', '.edit-point-save', function(){
            var user_id = $("#user_id").val();
            var point = $("#point").val();
            var memo = $("#memo").val();
            $.ajax({
                url: "<?php echo url('manage/user/editPoint'); ?>",
                type: 'post',
                data: {
                    'user_id': user_id,
                    'flag': 'true',
                    'point': point,
                    'memo': memo
                },
                success: function (e) {
                    if(e.status){
                        layer.msg(e.msg, {time: 1500}, function(){
                            layer.closeAll();
                            layui.table.reload('userTable');
                        });
                    }else{
                        layer.msg(e.msg);
                    }
                }
            });
        });
        //积分记录
        $(document).on('click', '.pointLog', function () {
            var id = $(this).attr('data-id');
            $.ajax({
                url: "<?php echo url('manage/user/pointLog'); ?>",
                type: 'get',
                data: {
                    'user_id': id,
                    'flag': 'false'
                },
                success: function (e) {
                    layer.open({
                        type: 1,
                        title: '用户积分记录',
                        area: ['800px', '535px'], //宽高
                        content: e
                    });
                }
            });
        });
        //邀请人修改
        $(document).on('click', '.inviteEdit', function () {
            var id = $(this).attr('data-id');
            layer.prompt({title: '请输入邀请人手机号', formType: 3}, function(mobile, index){
                $.ajax({
                    url: "<?php echo url('manage/User/editInvite'); ?>",
                    type: 'post',
                    dataType: 'json',
                    data: {
                        'id': id,
                        'mobile': mobile
                    },
                    success: function (e) {
                        if(e.status){
                            layer.close(index);
                            layer.msg(e.msg, {time: 1500}, function(){
                                layui.table.reload('userTable');
                            });
                        }else{
                            layer.msg(e.msg);
                        }
                    }
                });
            });

        });

        //添加
        layui.form.on('submit(user-add)',function(){
            $.ajax({
                type:'get',
                url: "<?php echo url('User/addUser'); ?>",
                success:function(e){
                    window.box = layer.open({
                        type: 1,
                        content: e,
                        area: ['700px', '550px'],
                        title:'添加用户',
                        btn: ['确定','取消'],
                        yes: function(){
                            var data = $("#userAdd").serializeArray();
                            $.ajax({
                                type: 'post',
                                url: '<?php echo url("User/addUser"); ?>',
                                data: data,
                                dataType: 'json',
                                success: function (e) {
                                    if(e.status){
                                        layer.close(window.box);
                                        layer.msg(e.msg, {time:1300},function(){
                                            layui.table.reload('userTable');
                                        });
                                    }else{
                                        layer.msg(e.msg);
                                    }
                                }
                            });
                        }
                    });
                }
            });
            return false;
        });
        //编辑
        $(document).on('click', '.edit', function(){
            var user_id = $(this).attr('data-id');
            $.ajax({
                url: '<?php echo url("User/editUser"); ?>',
                data: {
                    user_id: user_id
                },
                type: 'get',
                success: function (e) {
                    window.box = layer.open({
                        type: 1,
                        content: e,
                        area: ['700px', '500px'],
                        title:'编辑用户',
                        btn: ['确定','取消'],
                        yes: function(){
                            var data = $("#userEdit").serializeArray();
                            $.ajax({
                                type: 'post',
                                url: '<?php echo url("User/editUser"); ?>',
                                data: data,
                                dataType: 'json',
                                success: function (e) {
                                    if(e.status){
                                        layer.close(window.box);
                                        layer.msg(e.msg, {time:1300},function(){
                                            layui.table.reload('userTable');
                                        });
                                    }else{
                                        layer.msg(e.msg);
                                    }
                                }
                            });
                        }
                    });
                }
            });
        });


        //余额编辑
        $(document).on('click', '.editMoney', function () {
            var id = $(this).attr('data-id');
            $.ajax({
                url: "<?php echo url('manage/user/editMoney'); ?>",
                type: 'get',
                data: {
                    'user_id': id,
                    'flag': 'false'
                },
                success: function (e) {
                    layer.open({
                        type: 1,
                        title: '修改用户余额',
                        area: ['450px', '300px'], //宽高
                        content: e
                    });
                }
            });
        });
        //保存余额
        $(document).on('click', '.edit-money-save', function(){
            var user_id = $("#user_id").val();
            var money = $("#money").val();
            $.ajax({
                url: "<?php echo url('manage/user/editMoney'); ?>",
                type: 'post',
                data: {
                    'user_id': user_id,
                    'flag': 'true',
                    'money': money
                },
                success: function (e) {
                    if(e.status){
                        layer.msg(e.msg, {time: 1500}, function(){
                            layer.closeAll();
                            layui.table.reload('userTable');
                        });
                    }else{
                        layer.msg(e.msg);
                    }
                }
            });
        });

        $(document).on('click', '.edit-dl-save', function(){

            var data = $("#userAdd").serializeArray();
            var user_id = $("#user_id").val();
            var isdl = $("input[name='isdl']:checked").val();;


            $.ajax({
                url: "<?php echo url('manage/user/editDaili'); ?>",
                type: 'post',
                data: {
                    'user_id': user_id,
                    'flag': true,
                    'isdl': isdl
                },
                success: function (e) {
                    // alert(e.msg);
                    // layer.msg(e.msg);
                    if(e.status){
                        layer.msg(e.msg, {time: 1500}, function(){
                            layer.closeAll();
                            layui.table.reload('userTable');
                        });
                    }else{
                        layer.msg(e.msg);
                    }
                }
            });
        });


        $(document).on('click', '.daili', function(){
            var user_id = $(this).attr('data-id');

            //alert(user_id);
           // var money = $("#money").val();
            $.ajax({
                url: "<?php echo url('manage/user/editDaili'); ?>",
                type: 'post',
                data: {
                    'user_id': user_id,
                    // 'flag': 'true',
                    // 'money': money
                },
                success: function (e) {
                    layer.open({
                        type: 1,
                        title: '用户余额明细',
                        area: ['800px', '535px'], //宽高
                        content: e
                    });
                }
            });
        });

        //余额明细
        $(document).on('click', '.infoMoney', function () {
            var id = $(this).attr('data-id');
            $.ajax({
                url: "<?php echo url('manage/user/moneyLog'); ?>",
                type: 'get',
                data: {
                    'user_id': id,
                    'flag': 'false'
                },
                success: function (e) {
                    layer.open({
                        type: 1,
                        title: '用户余额明细',
                        area: ['800px', '535px'], //宽高
                        content: e
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