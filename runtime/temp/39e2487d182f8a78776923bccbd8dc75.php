<?php /*a:1:{s:75:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\user\editMoney.html";i:1544184414;}*/ ?>
<style>
    .layui-inline .layui-input-block{
        margin-left: 110px;
    }
</style>
<div class="layui-form" style="margin-top: 20px;">
    <div class="layui-form-item">
        <div class="layui-inline">
            <label class="layui-form-label">账户余额：</label>
            <div class="layui-input-inline seller-inline-3">
                <input type="text" id="money_old" class="layui-input" value="<?php echo htmlentities($money); ?>" disabled="disabled">
                <input type="hidden" id="user_id" value="<?php echo htmlentities($user_id); ?>">
            </div>
        </div>
    </div>
    <div class="layui-form-item">
        <div class="layui-inline">
            <label class="layui-form-label">余额变动：</label>
            <div class="layui-input-inline seller-inline-3">
                <input type="text" id="money" class="layui-input" value="" min="-<?php echo htmlentities($money); ?>">
            </div>
            <div class="layui-form-mid layui-word-aux">正数为加，负数为减</div>
        </div>
    </div>
    <div class="layui-form-item">
        <div class="layui-inline">
            <div class="layui-input-block">
                <button class="layui-btn layui-btn-sm edit-money-save">更改</button>
            </div>
        </div>
    </div>
</div>