<?php /*a:3:{s:73:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\common\login.html";i:1543588464;s:79:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\common\mini_header.html";i:1542977520;s:79:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\common\mini_footer.html";i:1543471468;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title></title>
    <link rel="stylesheet" href="/static/lib/layui/css/layui.css">
    <link rel="stylesheet" type="text/css" href="/static/css/register.css"/>
    <link rel="stylesheet" type="text/css" href="/static/css/style.css"/>
    <script src="/static/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="/static/lib/layui/layui.js"></script>
    <script>
        <!-- 定义全局变量 -->
        var Jshop_Host = window.location.host;
        var Jshop_Image = "<?php echo url('images/uploadImage'); ?>";
    </script>
    <script src="/static/js/jshop.js"></script>
</head>

<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo"><img src="/static/images/logo3.png"/> </div>
        <div class="state">
        	为确保您账户的安全及正常使用，依《网络安全法》相关要求，会员账户需绑定手机。
        </div>
    </div>
</div>
<div class="mini-content">
<div class="login-content-l"></div>
<div class="login-content">
	<div class="login-content-mid">
		<div class="layui-container">
			<div>
				<div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
				    <h3 class="login-header">登录</h3>
                    <div class="layui-tab-item layui-show">
                        <div class="layui-tab-content layui-form-pane">
                            <form class="layui-form" action="" method="post">
                                <div class="layui-form-item">
                                    <label class="layui-form-label">账号：</label>
                                    <div class="layui-input-inline">
                                        <input type="text" name="mobile" lay-verify="required" autocomplete="off" class="layui-input">
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <label class="layui-form-label">密码：</label>
                                    <div class="layui-input-inline">
                                        <input type="password" name="password" autocomplete="off" class="layui-input">
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <div class="layui-input-inline">
                                        <input class="layui-btn layui-btn-fluid" lay-submit lay-filter="password_login" type="submit" value="登录" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="login-content-r"></div>
		<script>
			layui.use(['element', 'form'], function() {
				//密码登陆
				layui.form.on('submit(password_login)', function(data) {
					$.ajax({
						type: "POST",
						url: "<?php echo url('manage/common/login'); ?>",
						data: data.field,
						success: function(data) {
							if(data.status) {
								layer.msg('登陆成功，跳转中...');
								setTimeout("window.location.href='" + data.data + "'; ", 1500);
							} else {
								layer.msg(data.msg);
							}
						}
					});
					return false;
				});
			});
		</script>
		</div>	
<div class="login-footer">
	<div class="w">
	    <div id="footer-2013">
	        <div class="links">
	            <a rel="nofollow" href="#" target="_blank">
	                关于我们
	            </a>
	            |
	            <a rel="nofollow" href="#" target="_blank">
	                联系我们
	            </a>
	            |
	            <a rel="nofollow"  href="#" target="_blank">
	                人才招聘
	            </a>
	            |
	            <a rel="nofollow"  href="#" target="_blank">
	                商家入驻
	            </a>
	            |
	            <a  href="#" target="_blank">
	                友情链接
	            </a>
	            |
	            <a  href="#" target="_blank">
	                销售联盟
	            </a>
	        </div>
	        <div class="copyright">
	            Copyright&nbsp;©&nbsp;2018&nbsp;&nbsp;矮人科技 &nbsp;版权所有
	        </div>
	    </div>
	</div>
</div>
</body>
</html>