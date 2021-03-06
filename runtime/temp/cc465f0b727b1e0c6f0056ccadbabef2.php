<?php /*a:1:{s:71:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\hooks\edit.html";i:1542977520;}*/ ?>
<div style="padding: 30px;" class="layui-form seller-alone-form">

    <input type="hidden" name="id" value="<?php echo htmlentities($data['id']); ?>">

    <div class="layui-form-item">
        <label class="layui-form-label"><i class="required-color">*</i> 编码：</label>
        <div class="layui-input-inline seller-inline-4">
            <input type="text" name="name" required lay-verify="required" placeholder="请输入钩子编码" autocomplete="off" class="layui-input" value="<?php echo htmlentities($data['name']); ?>">
        </div>
    </div>
    <div class="layui-form-item layui-upload">
        <label class="layui-form-label"><i class="required-color">*</i> 描述：</label>
        <div class="layui-input-inline seller-inline-4">
            <textarea name="description" placeholder="请输入钩子描述" class="layui-textarea"><?php echo htmlentities($data['description']); ?></textarea>
        </div>
    </div>

    <div class="layui-form-item layui-upload">
        <label class="layui-form-label"><i class="required-color">*</i> 类型：</label>
        <div class="layui-input-inline seller-inline-4">
            <input type="radio" name="type" value="1" title="控制器" <?php if($data['type'] == 1): ?>checked<?php endif; ?>>
            <input type="radio" name="type" value="2" title="视图" <?php if($data['type'] == 2): ?>checked<?php endif; ?>>
        </div>
    </div>

    <button class="layui-btn layui-btn-fluid add-save-btn" lay-submit lay-filter="hooks-edit">保存</button>

</div>

<script>
    layui.use('form', function(){
        layui.form.render();
    });
</script>