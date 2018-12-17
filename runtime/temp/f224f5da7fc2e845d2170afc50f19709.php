<?php /*a:1:{s:71:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\order\view.html";i:1542977520;}*/ ?>
<style>
	.layui-form-label{
		width: 100px;
		padding: 5px 15px;
	}
	.layui-form-mid{
		padding: 5px 0 !important;
	}
</style>
<div class="layui-form seller-alone-form">
	<div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
		<ul class="layui-tab-title">
			<li class="layui-this">基本信息</li>
			<li>收货人信息</li>
			<li>商品信息</li>
			<li>备注信息</li>
			<li>订单记录</li>
		</ul>
	  	<div class="layui-tab-content">
	  	
			<!--订单信息-->
			<div class="layui-tab-item layui-show">
				<div class="layui-form-item" lay-size="sm">
					<label class="layui-form-label">订单号：</label>
					<div class="layui-form-mid seller-inline-4"><?php echo htmlentities($order['order_id']); ?></div>

					<label class="layui-form-label">订单总金额：</label>
					<div class="layui-form-mid seller-inline-4">￥<?php echo htmlentities($order['order_amount']); ?>元</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">支付状态：</label>
					<div class="layui-form-mid seller-inline-4"><?php echo config('params.order.pay_status')[$order['pay_status']]; ?></div>

					<label class="layui-form-label">发货状态：</label>
					<div class="layui-form-mid seller-inline-4"><?php echo config('params.order.ship_status')[$order['ship_status']]; ?></div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">订单状态：</label>
					<div class="layui-form-mid seller-inline-4"><?php echo config('params.order.status')[$order['status']]; ?></div>

					<label class="layui-form-label">已支付金额：</label>
					<div class="layui-form-mid seller-inline-4">￥<?php echo htmlentities($order['payed']); ?>元</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">支付方式：</label>
					<div class="layui-form-mid seller-inline-4"><?php echo config('params.payment_type')[$order['payment_code']]; ?></div>

					<label class="layui-form-label">配送方式：</label>
					<div class="layui-form-mid seller-inline-4"><?php if($order['logistics']): ?><?php echo htmlentities($order['logistics']['logi_name']); endif; ?></div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">发票类型：</label>
					<div class="layui-form-mid seller-inline-4"><?php echo config('params.order.tax_type')[$order['tax_type']]; ?></div>

					<label class="layui-form-label">发票内容：</label>
					<div class="layui-form-mid seller-inline-4"><?php echo htmlentities($order['tax_content']); ?></div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">税号：</label>
					<div class="layui-form-mid seller-inline-4"><?php echo htmlentities($order['tax_code']); ?></div>

					<label class="layui-form-label">发票抬头：</label>
					<div class="layui-form-mid seller-inline-4"><?php echo htmlentities($order['tax_title']); ?></div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">订单优惠金额：</label>
					<div class="layui-form-mid seller-inline-4">￥<?php echo htmlentities($order['order_pmt']); ?></div>

					<label class="layui-form-label">商品优惠金额：</label>
					<div class="layui-form-mid seller-inline-4">￥<?php echo htmlentities($order['goods_pmt']); ?></div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">商品总重量：</label>
					<div class="layui-form-mid seller-inline-4"><?php echo htmlentities($order['weight']); ?></div>

					<label class="layui-form-label">商品总价：</label>
					<div class="layui-form-mid seller-inline-4">￥<?php echo htmlentities($order['goods_amount']); ?></div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">下单来源：</label>
					<div class="layui-form-mid seller-inline-4"><?php echo config('params.order.source')[$order['source']]; ?></div>

					<label class="layui-form-label">下单时间：</label>
					<div class="layui-form-mid seller-inline-4"><?php echo date('Y-m-d H:i:s', $order['ctime']); ?></div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">配送费用：</label>
					<div class="layui-form-mid seller-inline-4">￥<?php echo htmlentities($order['cost_freight']); ?>元</div>

					<label class="layui-form-label">收货状态：</label>
					<div class="layui-form-mid seller-inline-4"><?php echo config('params.order.confirm')[$order['confirm']]; ?></div>
				</div>
			</div>

			<!--收货人信息-->
			<div class="layui-tab-item">
				<div class="layui-form-item">
					<label class="layui-form-label">收货时间：</label>
					<div class="layui-form-mid seller-inline-4"><?php if($order['confirm'] == 2): ?><?php echo date('Y-m-d H:i:s', $order['confirm_time']); else: ?>未收货<?php endif; ?></div>

					<label class="layui-form-label">收货区域：</label>
					<div class="layui-form-mid seller-inline-4"><?php echo htmlentities($order['ship_area_name']); ?></div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">收货人姓名：</label>
					<div class="layui-form-mid seller-inline-4"><?php echo htmlentities($order['ship_name']); ?></div>

					<label class="layui-form-label">收货人电话：</label>
					<div class="layui-form-mid seller-inline-4"><?php echo htmlentities($order['ship_mobile']); ?></div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">收货地址：</label>
					<div class="layui-form-mid seller-inline-9"><?php echo htmlentities($order['ship_address']); ?></div>
				</div>
			</div>

			<!--商品详情-->
			<div class="layui-tab-item">
				<table class="layui-table" lay-size="sm">
					<thead>
						<tr>
							<th>商品名称</th>
							<th>商品单价</th>
							<th>购买数量</th>
							<th>商品总价</th>
							<th>货品编码</th>
							<th>商品编码</th>
							<th>商品总重量</th>
							<th>发货数量</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($order['items'] as $key=>$vo): ?>
							<tr>
								<td><?php echo htmlentities($vo['name']); ?> - <?php echo htmlentities($vo['addon']); ?></td>
								<td><?php echo htmlentities($vo['price']); ?></td>
								<td><?php echo htmlentities($vo['nums']); ?></td>
								<td><?php echo htmlentities($vo['amount']); ?></td>
								<td><?php echo htmlentities($vo['sn']); ?></td>
								<td><?php echo htmlentities($vo['bn']); ?></td>
								<td><?php echo htmlentities($vo['weight']); ?></td>
								<td><?php if($vo['sendnums']): ?><?php echo htmlentities($vo['sendnums']); else: ?>0<?php endif; ?></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>

			<!--备注信息-->
			<div class="layui-tab-item">
				<div class="layui-form-item">
					<label class="layui-form-label">买家备注：</label>
					<div class="layui-form-mid seller-inline-9"><?php echo htmlentities($order['memo']); ?></div>
				</div>
			</div>

			<!--订单记录-->
			<div class="layui-tab-item">
				<table class="layui-table" lay-size="sm">
					<thead>
					<tr>
						<th>订单号</th>
						<th>操作类型</th>
						<th>描述</th>
						<th>时间</th>
					</tr>
					</thead>
					<tbody>
					<?php foreach($order_log as $key=>$vo): ?>
					<tr>
						<td><?php echo htmlentities($vo['order_id']); ?></td>
						<td><?php echo htmlentities($vo['type']); ?></td>
						<td><?php echo htmlentities($vo['msg']); ?></td>
						<td><?php echo htmlentities($vo['ctime']); ?></td>
					</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div> 
</div>	