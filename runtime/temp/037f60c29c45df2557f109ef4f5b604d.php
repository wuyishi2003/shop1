<?php /*a:1:{s:72:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\manage\edit.html";i:1542977520;}*/ ?>
<form style="padding:30px;" class="layui-form" id="edit_form">

    <div class="layui-form-item">
        <label class="layui-form-label"><i class="required-color">*</i>用户名：</label>
        <?php if($manageInfo): ?>
        <div class="layui-form-mid">
            <input type="hidden" name="id" value="<?php echo htmlentities($manageInfo['id']); ?>" />
            <?php echo htmlentities($manageInfo['username']); ?>(<?php echo htmlentities($manageInfo['username']); ?>)
        </div>
        <?php else: ?>
            <div class="layui-input-inline seller-inline-6">
                <input name="username" value="<?php echo htmlentities($data['username']); ?>" lay-verify="required" placeholder="请输入用户名" class="layui-input" type="text">
            </div>
        <?php endif; ?>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label"><i class="required-color">*</i>手机号码：</label>
        <div class="layui-input-inline seller-inline-6">
            <input name="mobile" value="<?php echo htmlentities($manageInfo['mobile']); ?>" lay-verify="phone" placeholder="请输入管理员手机号码" class="layui-input" type="text">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label"><i class="required-color">*</i>密码：</label>
        <div class="layui-input-inline seller-inline-4">
            <input name="password" value="" placeholder="请输入密码" lay-verify="pass" class="layui-input" type="text">
        </div>
        <div class="layui-form-mid layui-word-aux">请填写6到12位密码</div>
    </div>
    <?php if($manageInfo): ?>
    <div class="layui-form-item">
        <label class="layui-form-label"></label>
        <div class="layui-form-mid layui-word-aux">编辑账号的时候，如果密码为空则是不修改密码，否则，就是修改密码</div>
    </div>
    <?php endif; ?>
    <div class="layui-form-item">
        <label class="layui-form-label">角色：</label>
        <div class="layui-input-inline seller-inline-6">
            <?php if(is_array($roleList) || $roleList instanceof \think\Collection || $roleList instanceof \think\Paginator): $i = 0; $__LIST__ = $roleList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <input type="checkbox" name="role_id[<?php echo htmlentities($vo['id']); ?>]" lay-skin="primary" title="<?php echo htmlentities($vo['name']); ?>" <?php if(isset($vo['checked']) && $vo['checked']): ?>checked=""<?php endif; ?> >
            <?php endforeach; endif; else: echo "" ;endif; ?>


        </div>
    </div>
</form>
<script>
    layui.use('form', function(){
        layui.form.render();
    });
</script>