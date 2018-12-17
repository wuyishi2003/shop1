<?php /*a:1:{s:82:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\goods\editGetSpecHtml.html";i:1544063737;}*/ ?>
<div id="spec_form">
<div id="spec_select" <?php if($items): else: ?>style="display:none;"<?php endif; ?>>
    <div id="spec_form_item"  >
        <?php if(is_array($spec) || $spec instanceof \think\Collection || $spec instanceof \think\Paginator): $i = 0; $__LIST__ = $spec;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <div class="layui-form-item" pane>
            <label class="layui-form-label"><?php echo htmlentities($vo['name']); ?></label>
            <div class="layui-input-block">
                <?php if(is_array($vo['specValue']) || $vo['specValue'] instanceof \think\Collection || $vo['specValue'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['specValue'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                <input type="checkbox" name="spec[<?php echo htmlentities($vo['name']); ?>][]" <?php if($v['isSelected'] == 'true'): ?> checked="true"  <?php endif; ?> value="<?php echo htmlentities($v['value']); ?>" lay-skin="primary" title="<?php echo htmlentities($v['value']); ?>" lay-filter="spec_select">
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <div class="layui-form-item">
        <div class="layui-input-inline">
            <button class="layui-btn layui-btn-sm generate-spec">生成 规格</button>
        </div>
    </div>

    <div id="more_spec" >
        <?php if($items): ?>
        <table class="layui-table" lay-size="sm">
            <colgroup>
                <col width="150">
                <col width="200">
                <col>
            </colgroup>
            <thead>
            <tr>
                <th>默认货品</th>
                <th>货号</th>
                <th>规格</th>
                <th>库存</th>
                <th>销售价</th>
                <th>代理销售价</th>
                <th>成本价</th>
                <th>市场价</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($items) || $items instanceof \think\Collection || $items instanceof \think\Paginator): $i = 0; $__LIST__ = $items;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr>
                <td>
                    <input type="hidden" name="product[<?php echo htmlentities($vo['spec_name']); ?>][id]" value="<?php echo htmlentities($vo['product_id']); ?>">
                    <input type="checkbox" name="product[<?php echo htmlentities($vo['spec_name']); ?>][is_defalut]" title="是否默认" value="1" <?php if($vo['is_defalut'] == 1): ?> checked="true"  <?php endif; ?> class="isdefalut" lay-filter="isdefalut">
                </td>
                <td>
                    <input type="text" name="product[<?php echo htmlentities($vo['spec_name']); ?>][sn]" value="<?php echo htmlentities($vo['sn']); ?>"  placeholder="货号" autocomplete="off" class="layui-input">
                </td>
                <td>
                    <?php echo htmlentities($vo['spec_name']); ?>
                </td>
                <td>
                    <input type="text" name="product[<?php echo htmlentities($vo['spec_name']); ?>][stock]" value="<?php echo htmlentities($vo['stock']); ?>"  placeholder="库存" autocomplete="off" class="layui-input">
                </td>
                <td>
                    <input type="text" name="product[<?php echo htmlentities($vo['spec_name']); ?>][price]" value="<?php echo htmlentities($vo['price']); ?>"  placeholder="销售价" autocomplete="off" class="layui-input">
                </td>


                <td>
                    <input type="text" name="product[<?php echo htmlentities($vo['spec_name']); ?>][dlprice]" value="<?php echo htmlentities($vo['dlprice']); ?>"  placeholder="代理销售价" autocomplete="off" class="layui-input">
                </td>


                <td>
                    <input type="text" name="product[<?php echo htmlentities($vo['spec_name']); ?>][costprice]" value="<?php echo htmlentities($vo['costprice']); ?>"  placeholder="成本价" autocomplete="off" class="layui-input">
                </td>
                <td>
                    <input type="text" name="product[<?php echo htmlentities($vo['spec_name']); ?>][mktprice]" value="<?php echo htmlentities($vo['mktprice']); ?>"  placeholder="市场价" autocomplete="off" class="layui-input">
                </td>
                <td>
                    <a class="layui-btn layui-btn-danger layui-btn-xs del-class" >删除</a>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
        <?php else: endif; ?>
    </div>
</div>
<div id="no_spec" <?php if($items): ?>style="display:none;"<?php else: endif; ?>>




<div class="layui-form-item">
    <label class="layui-form-label">销售价：</label>
    <div class="layui-input-inline">
        <input type="hidden" name="product[id]" value="<?php echo htmlentities($product['id']); ?>">
        <input type="text" name="goods[price]" value="<?php echo htmlentities($goods['price']); ?>" placeholder="￥" autocomplete="off" class="layui-input">
    </div>
</div>




<div class="layui-form-item">
    <label class="layui-form-label">代理价格：</label>
    <div class="layui-input-inline">
        <input type="text" name="goods[dlprice]" value="<?php echo htmlentities($goods['dlprice']); ?>" placeholder="￥" autocomplete="off" class="layui-input">
    </div>
</div>



    <div class="layui-form-item">
        <label class="layui-form-label">成本价：</label>
        <div class="layui-input-inline">
            <input type="text" name="goods[costprice]" value="<?php echo htmlentities($goods['costprice']); ?>" placeholder="￥" autocomplete="off" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">市场价：</label>
        <div class="layui-input-inline">
            <input type="text" name="goods[mktprice]" value="<?php echo htmlentities($goods['mktprice']); ?>" placeholder="￥" autocomplete="off" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">货号：</label>
        <div class="layui-input-inline">
            <input type="text" name="goods[sn]" value="<?php echo htmlentities($goods['bn']); ?>" lay-verify="title" autocomplete="off" placeholder="请输入货号" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">库存：</label>
        <div class="layui-input-inline">
            <input type="text" name="goods[stock]" value="<?php echo htmlentities($goods['stock']); ?>"  lay-verify="title" autocomplete="off" placeholder="请输入商品库存" class="layui-input">
        </div>
    </div>
</div>
</div>


<?php if($canOpenSpec == 'true'): ?>
<div class="layui-form-item">
    <label class="layui-form-label" >开启规格：</label>
    <div class="layui-input-inline">
        <?php if($items): ?>
        <button type="button" class="layui-btn layui-btn-sm" id="open_spec" is_open="true" lay-filter="open_spec" data-id="<?php echo htmlentities($typeInfo['id']); ?>" style="margin-top:5px;">关闭</button>
        <?php else: ?>
        <button type="button" class="layui-btn layui-btn-sm" id="open_spec" is_open="false" lay-filter="open_spec" data-id="<?php echo htmlentities($typeInfo['id']); ?>" style="margin-top:5px;">开启</button>
        <?php endif; ?>
    </div>
</div>
<?php endif; if(!(empty($typeParams) || (($typeParams instanceof \think\Collection || $typeParams instanceof \think\Paginator ) && $typeParams->isEmpty()))): ?>
<fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;"><legend>商品参数</legend></fieldset>
<?php if(is_array($typeParams) || $typeParams instanceof \think\Collection || $typeParams instanceof \think\Paginator): $i = 0; $__LIST__ = $typeParams;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
<div class="layui-form-item">
    <label class="layui-form-label"><?php echo htmlentities($vo['params']['name']); ?>：</label>
    <div class="layui-input-inline">
        <?php if($vo['params']['type'] == 'text'): ?>
            <input type="text" name="goods[params][<?php echo htmlentities($vo['params']['name']); ?>]" value="<?php echo htmlentities($goodsParams[$vo['params']['name']]); ?>" class="layui-input">
        <?php elseif($vo['params']['type'] == 'checkbox'): if(is_array($vo['params']['value']) || $vo['params']['value'] instanceof \think\Collection || $vo['params']['value'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['params']['value'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$params): $mod = ($i % 2 );++$i;if($goodsParams[$vo['params']['name']]): ?>
                <input type="checkbox" name="goods[params][<?php echo htmlentities($vo['params']['name']); ?>][<?php echo htmlentities($params); ?>]" lay-skin="primary" title="<?php echo htmlentities($params); ?>" <?php if(in_array($params, $goodsParams[$vo['params']['name']])): ?>checked<?php endif; ?>>
                <?php else: ?>
                <input type="checkbox" name="goods[params][<?php echo htmlentities($vo['params']['name']); ?>][<?php echo htmlentities($params); ?>]" lay-skin="primary" title="<?php echo htmlentities($params); ?>">
                <?php endif; endforeach; endif; else: echo "" ;endif; elseif($vo['params']['type'] == 'radio'): if(is_array($vo['params']['value']) || $vo['params']['value'] instanceof \think\Collection || $vo['params']['value'] instanceof \think\Paginator): $p = 0; $__LIST__ = $vo['params']['value'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$params): $mod = ($p % 2 );++$p;if($goodsParams[$vo['params']['name']]): ?>
                    <input type="radio" name="goods[params][<?php echo htmlentities($vo['params']['name']); ?>]" value="<?php echo htmlentities($params); ?>" title="<?php echo htmlentities($params); ?>" <?php if($params == $goodsParams[$vo['params']['name']]): ?>checked<?php endif; ?>>
                <?php else: ?>
                    <input type="radio" name="goods[params][<?php echo htmlentities($vo['params']['name']); ?>]" value="<?php echo htmlentities($params); ?>" title="<?php echo htmlentities($params); ?>" <?php if($p == 1): ?>checked<?php endif; ?>>
                <?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>
    </div>
</div>
<?php endforeach; endif; else: echo "" ;endif; endif; ?>
<script>
    layui.use('form', function(){
        var form = layui.form;
        form.render();
        form.on('checkbox(isdefalut)', function(data){
            if(data.elem.checked){
                var checkedName = $(data.elem).attr("name");
                $(".isdefalut").each(function (i,dom) {
                    var name = $(dom).attr("name");
                    if(name != checkedName){
                        $(dom).attr("checked",false);
                        $(dom).attr("value","0");
                        $("#more_spec .layui-form-checkbox").removeClass('layui-form-checked');
                    }else {
                        $(dom).attr("checked", true);
                        $(dom).attr("value","1");
                    }
                });
                $(data.othis).addClass("layui-form-checked");
            }else{
                $(dom).attr("checked",false);
                $(dom).attr("value","0");
                $("#more_spec .layui-form-checkbox").removeClass('layui-form-checked');
            }
        });
    });
</script>