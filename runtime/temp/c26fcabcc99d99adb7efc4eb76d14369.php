<?php /*a:1:{s:75:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\user\editDaili.html";i:1544663924;}*/ ?>
<style>
    .layui-inline .layui-input-block{
        margin-left: 110px;
    }
</style>

<form class="layui-form" id="editdaili" style="margin-top: 20px;">
<div class="layui-form" style="margin-top: 20px;">
    <div class="layui-form-item">
        <div class="layui-inline">

            <label class="layui-form-label">性别：</label>
            <div class="layui-input-inline">
                <input type="hidden" id="user_id" name="user_id" value="<?php echo htmlentities($user_id); ?>">

                <input type="radio" name="isdl" value="1" title="非代理" checked="checked">
                <input type="radio" name="isdl" value="2" title="代理">
            </div>


        </div>
    </div>

    <div class="layui-form-item">
        <div class="layui-inline">
            <div class="layui-input-block">
                <button class="layui-btn layui-btn-sm edit-dl-save">更改</button>
            </div>
        </div>
    </div>
</div>


</form>
<script>
    layui.use(['form', 'laydate'], function () {
        var form = layui.form, laydate = layui.laydate;
        form.render();


    });
</script>