<?php /*a:3:{s:81:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\wechat\official_menu.html";i:1544184414;s:67:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\layout.html";i:1543406342;s:72:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\common\menu.html";i:1542977520;}*/ ?>
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
    .we-body-ul .active{
        border: 1px solid #20a53a;
    }
</style>
<div class="warning-msg">
    <div class="warning-msg-content">
        1、请先添加菜单->保存，确定无误后，再点击发布菜单。</p><br/>
        2、请注意添加IP白名单，点击登录<a target="_blank" href="https://mp.weixin.qq.com">微信公众平台</a>，进入微信公众号，基本配置->IP白名单 点击修改配置即可。</p>
    </div>
</div>
<div class="wechat-content">
    <div class="wechat-body">
    	<div class="wechat-body-l">
            <div class="we-body-c">
            	<div class="we-body-bot">
            		<ul class="we-body-ul">
                        <?php if(empty($menu) || (($menu instanceof \think\Collection || $menu instanceof \think\Paginator ) && $menu->isEmpty())): ?>
                            <li class="we-body-li addfirst">+</li>
                        <?php else: if(is_array($weixin_menu) || $weixin_menu instanceof \think\Collection || $weixin_menu instanceof \think\Paginator): $i = 0; $__LIST__ = $weixin_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                        <li id="li-first-<?php echo htmlentities($item['menu_id']); ?>" data-id="<?php echo htmlentities($item['menu_id']); ?>" data-pid="<?php echo htmlentities($item['pid']); ?>"><span><?php echo htmlentities($item['name']); ?></span>
                            <div class="li-menu">
                                <ul>
                                    <?php if(empty($item['child']) || (($item['child'] instanceof \think\Collection || $item['child'] instanceof \think\Paginator ) && $item['child']->isEmpty())): ?>
                                        <li class="we-body-list addchild">+</li>
                                    <?php else: if(is_array($item['child']) || $item['child'] instanceof \think\Collection || $item['child'] instanceof \think\Paginator): $k = 0; $__LIST__ = $item['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$child): $mod = ($k % 2 );++$k;?>
                                        <li class="we-body-list" id="item-li-<?php echo htmlentities($child['menu_id']); ?>-<?php echo htmlentities($child['pid']); ?>" data-id="<?php echo htmlentities($child['menu_id']); ?>" data-pid="<?php echo htmlentities($child['pid']); ?>"><?php echo htmlentities($child['name']); ?></li>
                                    <?php endforeach; endif; else: echo "" ;endif; if(count($item['child'])<5): ?>
                                        <li class="we-body-list addchild">+</li>
                                    <?php endif; endif; ?>
                                </ul>
                            </div>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; if(count($weixin_menu)<3): ?>
                        <li class="we-body-li addfirst">+</li>
                        <?php endif; endif; ?>
            		</ul>
            	</div>
            </div>
        </div>
        <div class="wechat-body-r" style="display: none">
            <div >
                <h3 class="we-body-r-head">菜单名称<a href="javascript:void(0);" onclick="delete_menu_node()" data-id="0" data-pid="0" id="edit-menu">删除</a></h3>
                <div class="we-body-r-c" id="edit-menu-content">

                </div>
            </div>
        </div>


    </div>
    <div class="wechat-btn">
        <button type="button" class="layui-btn" id="update-menu">发布菜单</button>
    </div>
</div>
<script type="text/javascript">
    var form = '';
    layui.use(['form', 'laytpl'], function () {
        form = layui.form;

        form.on('select(menu-type)', function (data) {
            $("#edit-menu-content").find(".action-type").hide();
            $("." + data.value).show();
        })
        //保存菜单
        form.on('submit(save-menu)', function (data) {
            var formData = data.field;
            JsPost("<?php echo url('Wechat/doEditMenu'); ?>", formData, function (res) {
                layer.msg(res.msg);
                if (res.status) {
                    if (formData.pid == "0") {
                        $("#li-first-" + formData.menu_id).children('span').text(formData.name);
                    } else {
                        $("#li-first-" + formData.pid).find('#item-li-' + formData.menu_id + '-' + formData.pid).text(formData.name);
                    }
                }
            });
            return false;
        });
    });
    //删除菜单
    function delete_menu_node() {
        var id = $("#edit-menu").attr('data-id');
        var pid = $("#edit-menu").attr('data-pid');
        JsPost("<?php echo url('Wechat/deleteMenu'); ?>", {id: id, pid: pid}, function (res) {
            if (res.status) {
                $(".wechat-body-r").hide();
                if (pid != 0) {
                    var pul = $("#item-li-" + id + '-' + pid).parent();
                    $("#item-li-" + id + '-' + pid).remove();
                    if (pul.find('.addchild').length <= 0 && pul.length < 5) {
                        pul.append('<li class="we-body-list addchild">+</li>');
                    }
                } else {
                    $("#li-first-" + id).remove();
                    var len = $(".we-body-ul").children('li').length;
                    if (len < 3 && $(".we-body-ul").find('addfirst').length <= 0) {
                        $(".we-body-ul").append('<li class="we-body-li addfirst">+</li>');
                    }
                }
            } else {
                layer.msg(res.msg);
            }
        });
    }

    //添加或选中菜单
    $(".we-body-c").on('click', 'li', function () {
        $(".wechat-body-r").show();
        $(".we-body-c").find('li').removeClass('active');

        if ($(this).hasClass('addchild')) {
            var len = $(this).parent().children().length;
            var lastId = $(this).parent().children().first().attr('data-id');
            if (len < 6) {
                if (typeof lastId == 'undefined') {
                    lastId = 0;
                }
                var id = parseInt(lastId) + 1;
                var pid = $(this).parent().parent().parent().attr('data-id');
                $("#edit-menu").attr("data-id", id);
                $("#edit-menu").attr("data-pid", pid);

                JsPost("<?php echo url('Wechat/editMenu'); ?>", {id: id, pid: pid}, function (res) {
                    $("#edit-menu-content").html(res);
                    form.render();
                });
                $(this).parent().prepend("<li class='we-body-list active ' id='item-li-" + id + "-" + pid + "' data-id='" + id + "' data-pid='" + pid + "' >二级菜单</li>");

            }
            if (len == 5) {
                $(this).remove();
            }
            return false;
        } else if ($(this).hasClass('addfirst')) {
            var uls = $(".we-body-ul");
            var lis = $(".we-body-ul>li");
            var lastId = uls.children().eq(-2).attr('data-id');
            var len = uls.children().length;
            if (len < 4) {
                if (typeof lastId == 'undefined') {
                    lastId = 1;
                }
                var id = parseInt(lastId) + 1;
                $("#edit-menu").attr("data-id", id);
                $("#edit-menu").attr("data-pid", 0);
                JsPost("<?php echo url('Wechat/editMenu'); ?>", {id: id, pid: 0}, function (res) {
                    $("#edit-menu-content").html(res);
                    form.render();
                });
                $(this).before("<li id='li-first-" + id + "' class='active' data-id='" + id + "' data-pid='0'><span>一级菜单</span><div class='li-menu'><ul><li class='we-body-list addchild'>+</li></ul></div></li>");
            }
            if (len == 3) {
                $(this).remove();
            }
        } else {
            var id = $(this).attr('data-id');
            var pid = $(this).attr('data-pid');

            $("#edit-menu").attr("data-id", id);
            $("#edit-menu").attr("data-pid", pid);

            $(this).addClass('active');
            if (typeof id != "undefined") {
                JsPost("<?php echo url('Wechat/editMenu'); ?>", {id: id, pid: pid}, function (res) {
                    $("#edit-menu-content").html(res);
                    form.render();
                });
            }
            return false;
        }
    });

    //更新菜单
    $("#update-menu").click(function () {
        JsGet("<?php echo url('Wechat/updateMenu'); ?>", function (res) {
            if(res.status){
                layer.msg(res.msg);
            }else{
                layer.msg(res.msg);
            }
        });
    })
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