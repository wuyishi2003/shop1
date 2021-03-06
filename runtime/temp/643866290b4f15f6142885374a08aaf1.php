<?php /*a:1:{s:71:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\order\ship.html";i:1544184414;}*/ ?>
<style type="text/css">
    .layui-form-label {
        width: 100px;
    }
</style>
<div class="layui-form seller-alone-form" style="padding:10px">
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 0;">
        <legend>收货人信息</legend>
    </fieldset>
    <div class="layui-form-item" lay-size="sm">
        <label class="layui-form-label">订单号：</label>
        <div class="layui-form-mid seller-inline-4"><?php echo htmlentities($order['order_id']); ?></div>
        <input type="hidden" id="order_id" value="<?php echo htmlentities($order['order_id']); ?>">
        <label class="layui-form-label">配送方式：</label>
        <div class="layui-form-mid seller-inline-4">啊撒大声地<?php echo htmlentities($order['logistics_name']); ?></div>
        <label class="layui-form-label">配送费用：</label>
        <div class="layui-form-mid seller-inline-4"><?php echo htmlentities($order['cost_freight']); ?></div>
        <label class="layui-form-label">收货区域：</label>
        <div class="layui-form-mid seller-inline-4"><?php echo htmlentities($order['ship_area_id']); ?></div>
    </div>
    <div class="layui-form-item" lay-size="sm">
        <label class="layui-form-label">收货人姓名：</label>
        <div class="layui-form-mid seller-inline-4"><?php echo htmlentities($order['ship_name']); ?></div>
        <label class="layui-form-label">收货人电话：</label>
        <div class="layui-form-mid seller-inline-4"><?php echo htmlentities($order['ship_mobile']); ?></div>

        <label class="layui-form-label">商品总重：</label>
        <div class="layui-form-mid seller-inline-4"><?php echo htmlentities($order['weight']); ?></div>
    </div>
    <div class="layui-form-item" lay-size="sm">
        <label class="layui-form-label">详细收货地址：</label>
        <div class="layui-form-mid seller-inline-4"><?php echo htmlentities($order['ship_address']); ?></div>
    </div>
    <div class="layui-form-item" lay-size="sm">
        <label class="layui-form-label">买家备注信息：</label>
        <div class="layui-form-mid seller-inline-4"><?php echo htmlentities($order['memo']); ?></div>
    </div>
    <fieldset class="layui-elem-field layui-field-title">
        <legend>商品详情</legend>
    </fieldset>
    <table class="layui-table" lay-size="sm">
        <thead>
            <tr>
                <th>商品名称</th>
                <th>商品编码</th>
                <th>货品编码</th>
                <th>购买数量</th>
                <th>已发数量</th>
                <th>发货数量</th>
            </tr>
        </thead>
        <?php foreach($order['items'] as $key=>$vo): ?>
        <tbody>
            <td><?php echo htmlentities($vo['name']); ?> - <?php echo htmlentities($vo['addon']); ?></td>
            <td><?php echo htmlentities($vo['bn']); ?></td>
            <td><?php echo htmlentities($vo['sn']); ?></td>
            <td><?php echo htmlentities($vo['nums']); ?></td>
            <td><?php if($vo['sendnums']): ?><?php echo htmlentities($vo['sendnums']); else: ?>0<?php endif; ?></td>
            <td><?php echo htmlentities($vo['nums']-$vo['sendnums']); ?><input type="hidden" data-id="<?php echo htmlentities($vo['id']); ?>" class="order-ship-nums" max="<?php echo htmlentities($vo['nums']-$vo['sendnums']); ?>" value="<?php echo htmlentities($vo['nums']-$vo['sendnums']); ?>" min="0"></td>
        </tbody>
        <?php endforeach; ?>
    </table>
    <fieldset class="layui-elem-field layui-field-title">
        <legend>物流信息</legend>
    </fieldset>
    <div class="layui-form-item" lay-size="sm">
        <label class="layui-form-label">物流公司：</label>
        <div class="layui-input-inline seller-inline-3">
            <select name="logi_code" id="logi_code" lay-search>
				<option value="">搜索选择物流公司</option>
				<?php foreach($logi as $k=>$v): ?>
					<option value="<?php echo htmlentities($v['logi_code']); ?>" <?php if($v['logi_code'] == $ship['logi_code']): ?>selected<?php endif; ?>><?php echo htmlentities($v['logi_name']); ?></option>
				<?php endforeach; ?>
			</select>
        </div>
        <label class="layui-form-label">物流单号：</label>
        <div class="layui-input-inline seller-inline-3">
            <input type="text" id="logi_no" value="" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item" lay-size="sm">
        <label class="layui-form-label">发货备注：</label>
        <div class="layui-input-inline seller-inline-9">
            <input type="text" id="memo" value="" class="layui-input">
        </div>
    </div>
    <button class="layui-btn layui-btn-fluid order-ship-btn">发货</button>
</div>
<script>
    //渲染表单
    layui.use('form', function() {
        var form = layui.form;
        form.render();
    });
</script>