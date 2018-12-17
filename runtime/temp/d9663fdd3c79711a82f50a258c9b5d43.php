<?php /*a:3:{s:74:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\setting\index.html";i:1543588464;s:67:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\layout.html";i:1543406342;s:72:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\common\menu.html";i:1542977520;}*/ ?>
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
    .layui-form-item label {
        width: 120px;
    }
    .classifyimg{
        margin-bottom: 20px;
        width: 600px !important;
    }
    .classifyimg-item{
        display: inline-block;
        width: 140px;
    }
    .classifyimg img{
        width: 100px;
        display: block;
    }
    .classifyimg .layui-form-radio{
        vertical-align: top;
        display: block;
        margin-bottom: 10px;
    }
    .image_storage_type .item{
        display: none;
    }
</style>
<div class="layui-card" style="padding:10px;">
    <div class="layui-tab">
        <ul class="layui-tab-title">
            <li class="layui-this">店铺设置</li>
            <li>商品设置</li>
            <li>订单管理</li>
            <li>积分设置</li>
            <li>其他设置</li>
        </ul>
        <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                <form class="layui-form seller-alone-form" action="" method="post">
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo htmlentities($data['shop_name']['name']); ?>：</label>
                        <div class="layui-input-inline seller-inline-5">
                            <input type="text" name="shop_name" value="<?php echo htmlentities($data['shop_name']['value']); ?>" lay-verify="title" autocomplete="off" placeholder="请输入店铺名称" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">店铺名称会显示到前台，请合理输入此名称</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo htmlentities($data['shop_mobile']['name']); ?>：</label>
                        <div class="layui-input-inline seller-inline-3">
                            <input type="text" name="shop_mobile" value="<?php echo htmlentities($data['shop_mobile']['value']); ?>" lay-verify="title" autocomplete="off" placeholder="请输入店铺电话或手机号" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux"></div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo htmlentities($data['shop_logo']['name']); ?>：</label>
                        <div class="layui-input-inline seller-inline-6">
                            
            <button type="button" class="layui-btn" id="upload_img_shop_logo" onclick="upImagshop_logoe()">上传图片</button>
            <div class="layui-upload-list">
                <img class="layui-upload-img"  src='<?php echo _sImage($data['shop_logo']['value'])?>' id="image_src_shop_logo" style="width:90px;height:90px;" >
                <p id="upload_text_shop_logo"></p>
            </div>
            <input class="layui-upload-file" type="hidden" name="shop_logo"  id="image_value_shop_logo" value="<?php echo $data['shop_logo']['value']?>">
            <textarea id="edit_shop_logo" style="display: none;"></textarea>
            <script>
            var _editoshop_logor = UE.getEditor("edit_shop_logo",{
                initialFrameWidth:800,
                initialFrameHeight:300,
            });
            _editoshop_logor.ready(function (){
                //_editoshop_logor.setDisabled();
                _editoshop_logor.hide();
                //侦听图片上传
                _editoshop_logor.addListener('beforeInsertImage',function(t,arg){
                        $("#image_value_shop_logo").attr("value",arg[0].image_id);
                        $("#image_src_shop_logo").attr("src",arg[0].src);
                });
            });
            //上传dialog
            function upImagshop_logoe(){
                var myImagshop_logoe = _editoshop_logor.getDialog("insertimage");
                myImagshop_logoe.open();
            }
</script>
            
                        </div>
                        <div class="layui-form-mid layui-word-aux"></div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo htmlentities($data['store_switch']['name']); ?>：</label>
                        <div class="layui-input-inline seller-inline-7">
                            <input type="radio" lay-filter="store_switch" name="store_switch" value="1" title="开启" <?php if($data['store_switch']['value'] == '1'): ?>checked<?php endif; ?>>
                            <input type="radio" lay-filter="store_switch" name="store_switch" value="2" title="不开启" <?php if($data['store_switch']['value'] == '2'): ?>checked<?php endif; ?>>
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo htmlentities($data['cate_style']['name']); ?>：</label>
                        <div class="layui-input-inline seller-inline-7 classifyimg">
                            <div class="classifyimg-item">
                            	<input type="radio" lay-filter="cate_style" name="cate_style" value="1" title="一级大图" <?php if($data['cate_style']['value'] == '1'): ?>checked<?php endif; ?>>
                                <img src="/static/images/one-big.png" onclick="viewImage('/static/images/one-big.png')">
                            </div>

                            <div class="classifyimg-item">
                            	<input type="radio" lay-filter="cate_style" name="cate_style" value="2" title="一级小图" <?php if($data['cate_style']['value'] == '2'): ?>checked<?php endif; ?>>
                                <img src="/static/images/one-small.png" onclick="viewImage('/static/images/one-small.png')">
                            </div>

                            <div class="classifyimg-item">
                            	<input type="radio" lay-filter="cate_style" name="cate_style" value="3" title="二级小图" <?php if($data['cate_style']['value'] == '3'): ?>checked<?php endif; ?>>
                                <img src="/static/images/two-small.png" onclick="viewImage('/static/images/two-small.png')">
                            </div>

                            <div class="layui-form-mid layui-word-aux list-tag">
                                1、一级大图分类图标尺寸建议：350px*150px<br/>
                                2、一级小图分类图标尺寸建议：105px*105px<br/>
                                3、二级分类图标尺寸建议：60px*60px<br/>
                            </div>

                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo htmlentities($data['tocash_money_low']['name']); ?>：</label>
                        <div class="layui-input-inline seller-inline-5">
                            <input type="text" name="tocash_money_low" value="<?php echo htmlentities($data['tocash_money_low']['value']); ?>" lay-verify="title" autocomplete="off" placeholder="" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">最低提现标准，默认0不限制</div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">&nbsp;</label>
                        <div class="layui-input-block">
                            <button class="layui-btn layui-btn-sm" lay-submit="" lay-filter="save" style="height: 37px;padding: 0 27px;font-size: 14px;">保存</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="layui-tab-item">
                <form class="layui-form seller-alone-form" action="" method="post">
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo htmlentities($data['goods_stocks_warn']['name']); ?>：</label>
                        <div class="layui-input-inline seller-inline-2">
                            <input type="text" name="goods_stocks_warn" value="<?php echo htmlentities($data['goods_stocks_warn']['value']); ?>" lay-verify="title" autocomplete="off" placeholder="数量" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">商品低库存的报警数量，当商品库存低于此数量是会在后台提示</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">&nbsp;</label>
                        <div class="layui-input-block">
                            <button class="layui-btn layui-btn-sm" lay-submit="" lay-filter="save" style="height: 37px;padding: 0 27px;font-size: 14px;">保存</button>
                        </div>
                    </div>

                </form>
            </div>
            <div class="layui-tab-item">
                <form class="layui-form seller-alone-form" action="" method="post">
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo htmlentities($data['order_cancel_time']['name']); ?>：</label>
                        <div class="layui-input-inline seller-inline-2">
                            <input type="text" name="order_cancel_time" value="<?php echo htmlentities($data['order_cancel_time']['value']); ?>" lay-verify="title" autocomplete="off" placeholder="请输入正整数" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">未付款订单取消的时间间隔，单位为天</div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo htmlentities($data['order_complete_time']['name']); ?>：</label>
                        <div class="layui-input-inline seller-inline-2">
                            <input type="text" name="order_complete_time" value="<?php echo htmlentities($data['order_complete_time']['value']); ?>" lay-verify="title" autocomplete="off" placeholder="请输入正整数" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">已付款的订单完成的时间间隔，单位为天</div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo htmlentities($data['order_autoSign_time']['name']); ?>：</label>
                        <div class="layui-input-inline seller-inline-2">
                            <input type="text" name="order_autoSign_time" value="<?php echo htmlentities($data['order_autoSign_time']['value']); ?>" lay-verify="title" autocomplete="off" placeholder="请输入正整数" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">发货后的订单自动确认收货时间,单位为天</div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo htmlentities($data['order_autoEval_time']['name']); ?>：</label>
                        <div class="layui-input-inline seller-inline-2">
                            <input type="text" name="order_autoEval_time" value="<?php echo htmlentities($data['order_autoEval_time']['value']); ?>" lay-verify="title" autocomplete="off" placeholder="请输入正整数" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">确认收货后的订单自动评价时间间隔,单位为天</div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo htmlentities($data['reship_name']['name']); ?>：</label>
                        <div class="layui-input-inline seller-inline-3">
                            <input type="text" name="reship_name" value="<?php echo htmlentities($data['reship_name']['value']); ?>" lay-verify="title" autocomplete="off" placeholder="收货人名称" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">用户退货时的收货人姓名</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo htmlentities($data['reship_mobile']['name']); ?>：</label>
                        <div class="layui-input-inline seller-inline-3">
                            <input type="text" name="reship_mobile" value="<?php echo htmlentities($data['reship_mobile']['value']); ?>" lay-verify="title" autocomplete="off" placeholder="收货人手机号码" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">用户退货时的收货人联系方式</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo htmlentities($data['reship_area_id']['name']); ?>：</label>
                        <div class="layui-input-inline seller-inline-4 address-class">
                            <input type="hidden" name="reship_area_id" value="<?php echo ($data['reship_area_id']['value']);?>" />
            <script>
                $(function(){
                    $.ajax({
                        type: "POST",
                        url: "/api/common/area.html",
                        data: "id=<?php echo ($data['reship_area_id']['value']);?>",
                        success:function(data) {
                            var str = "";
                            $.each(data, function(i,n){
                                str += "<select lay-ignore name='reship_area_id_"+(i+1)+"' dep='"+(i+1)+"'  class='select-address'>";
                                str += "<option value='' >请选择</option>";
                                $.each(n.list,function(h,z){
                                    if(n.hasOwnProperty('info') && n.info.id == z.id){
                                        str += "<option value='"+z.id+"' selected='selected'>"+z.name+"</option>";
                                    }else{
                                        str += "<option value='"+z.id+"' >"+z.name+"</option>";
                                    }
                                });
                                str += "</select>";

                            });
                            $("input[name='reship_area_id']").after(str);
                            //以上数据输出完，以下绑定事件
                            $.each(data, function(i,n){
                                if(i<(data.length)){
                                    $("select[name='reship_area_id_"+(i+1)+"']").change(function(){
                                        changereship_area_idArea(i+1,data.length);
                                    });
                                }
                            });

                        }
                    });
                    function changereship_area_idArea(i,max_i){
                        //清除后面节点
                        for(var x = i+1;x<=6;x++){  //最多6层，足够了
                            $("select[name='reship_area_id_"+x+"']").remove();
                        }
                        var val = $("select[name='reship_area_id_"+i+"']").val();
                        if(val != ""){
                            //取子节点数据，然后显示下一级
                            $.ajax({
                                type: "POST",
                                url: "/api/common/areachildren.html",
                                data: "id="+val,
                                success:function(data) {
                                    if(data.length > 0){
                                        var str = "";
                                        str += "<select lay-ignore name='reship_area_id_"+(i+1)+"' dep='"+(i+1)+"'  class='select-address'>";
                                        str += "<option value='' >请选择</option>";
                                        $.each(data,function(h,z){
                                           str += "<option value='"+z.id+"' >"+z.name+"</option>";
                                        });
                                        str += "</select>";
                                        $("select[name='reship_area_id_"+i+"']").after(str);
                                        //以上数据输出完，以下绑定事件
                                        $("select[name='reship_area_id_"+(i+1)+"']").change(function(){
                                            changereship_area_idArea(i+1,i+2);
                                        });

                                        //如果有返回值，就说明省市区没有选择到最终节点
                                        if( 1== 1){
                                            $("input[name='reship_area_id']").val("");
                                        }else{
                                            $("input[name='reship_area_id']").val($("select[name='reship_area_id_"+i+"']").val());
                                        }
                                    }else{
                                        $("input[name='reship_area_id']").val($("select[name='reship_area_id_"+i+"']").val());
                                    }
                                }
                            });
                        }else{
                            if( 1 == 1){
                                $("input[name='reship_area_id']").val("");
                            }else{
                                //第一级的元素就直接赋值为空就是了
                                if(i == 1){
                                    $("input[name='reship_area_id']").val("");
                                }else{
                                    i--;
                                    $("input[name='reship_area_id']").val($("select[name='reship_area_id_"+ i +"']").val());
                                }

                            }
                        }
                    }
                });
            </script>
        
                        </div>
                        <div class="layui-form-mid layui-word-aux">退货的邮寄地区</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo htmlentities($data['reship_address']['name']); ?>：</label>
                        <div class="layui-input-inline seller-inline-5">
                            <input type="text" name="reship_address" value="<?php echo htmlentities($data['reship_address']['value']); ?>" lay-verify="title" autocomplete="off" placeholder="退货地址" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">退货的详细地址</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">&nbsp;</label>
                        <div class="layui-input-block">
                            <button class="layui-btn layui-btn-sm" lay-submit="" lay-filter="save" style="height: 37px;padding: 0 27px;font-size: 14px;">保存</button>
                        </div>
                    </div>

                </form>
            </div>
            <div class="layui-tab-item">
                <form class="layui-form seller-alone-form" action="" method="post">
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo htmlentities($data['point_switch']['name']); ?>：</label>
                        <div class="layui-input-inline seller-inline-7">
                            <input type="radio" lay-filter="point_switch" name="point_switch" value="1" title="开启" <?php if($data['point_switch']['value'] == '1'): ?>checked<?php endif; ?>>
                            <input type="radio" lay-filter="point_switch" name="point_switch" value="2" title="不开启" <?php if($data['point_switch']['value'] == '2'): ?>checked<?php endif; ?>>
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo htmlentities($data['point_discounted_proportion']['name']); ?>：</label>
                        <div class="layui-input-inline seller-inline-2">
                            <input type="number" name="point_discounted_proportion" value="<?php echo htmlentities($data['point_discounted_proportion']['value']); ?>" lay-verify="title" autocomplete="off" placeholder="请输入正整数" class="layui-input" min="0">
                        </div>
                        <div class="layui-form-mid layui-word-aux">多少积分可以折现1元人民币</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo htmlentities($data['orders_point_proportion']['name']); ?>：</label>
                        <div class="layui-input-inline seller-inline-2">
                            <input type="number" name="orders_point_proportion" value="<?php echo htmlentities($data['orders_point_proportion']['value']); ?>" lay-verify="title" autocomplete="off" placeholder="请输入正整数" class="layui-input" max="100" min="0">
                        </div>
                        <div class="layui-form-mid layui-word-aux">（%）单个订单积分折现最大百分比</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo htmlentities($data['orders_reward_proportion']['name']); ?>：</label>
                        <div class="layui-input-inline seller-inline-2">
                            <input type="number" name="orders_reward_proportion" value="<?php echo htmlentities($data['orders_reward_proportion']['value']); ?>" lay-verify="title" autocomplete="off" placeholder="请输入正整数" class="layui-input" min="0">
                        </div>
                        <div class="layui-form-mid layui-word-aux">订单多少人民币奖励1个积分</div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo htmlentities($data['sign_point_type']['name']); ?>：</label>
                        <div class="layui-input-inline seller-inline-7">
                            <input type="radio" lay-filter="sign_point_type" name="sign_point_type" value="1" title="固定奖励" <?php if($data['sign_point_type']['value'] == '1'): ?>checked<?php endif; ?>>
                            <input type="radio" lay-filter="sign_point_type" name="sign_point_type" value="2" title="随机奖励" <?php if($data['sign_point_type']['value'] == '2'): ?>checked<?php endif; ?>>
                        </div>
                        <input type="hidden" id="sign_point_type" value="<?php echo htmlentities($data['sign_point_type']['value']); ?>">
                    </div>

                    <div class="sign-random">
                        <div class="layui-form-item">
                            <label class="layui-form-label"><?php echo htmlentities($data['sign_random_min']['name']); ?>：</label>
                            <div class="layui-input-inline seller-inline-2">
                                <input type="text" name="sign_random_min" value="<?php echo htmlentities($data['sign_random_min']['value']); ?>" lay-verify="title" autocomplete="off" placeholder="请输入正整数" class="layui-input">
                            </div>
                            <div class="layui-form-mid layui-word-aux">签到随机最小奖励积分</div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label"><?php echo htmlentities($data['sign_random_max']['name']); ?>：</label>
                            <div class="layui-input-inline seller-inline-2">
                                <input type="text" name="sign_random_max" value="<?php echo htmlentities($data['sign_random_max']['value']); ?>" lay-verify="title" autocomplete="off" placeholder="请输入正整数" class="layui-input">
                            </div>
                            <div class="layui-form-mid layui-word-aux">签到随机最大奖励积分</div>
                        </div>
                    </div>

                    <div class="sign-fixed">
                        <div class="layui-form-item">
                            <label class="layui-form-label"><?php echo htmlentities($data['first_sign_point']['name']); ?>：</label>
                            <div class="layui-input-inline seller-inline-2">
                                <input type="text" name="first_sign_point" value="<?php echo htmlentities($data['first_sign_point']['value']); ?>" lay-verify="title" autocomplete="off" placeholder="请输入正整数" class="layui-input">
                            </div>
                            <div class="layui-form-mid layui-word-aux">起始签到奖励积分</div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label"><?php echo htmlentities($data['continuity_sign_additional']['name']); ?>：</label>
                            <div class="layui-input-inline seller-inline-2">
                                <input type="text" name="continuity_sign_additional" value="<?php echo htmlentities($data['continuity_sign_additional']['value']); ?>" lay-verify="title" autocomplete="off" placeholder="请输入正整数" class="layui-input">
                            </div>
                            <div class="layui-form-mid layui-word-aux">连续签到追加积分</div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label"><?php echo htmlentities($data['sign_most_point']['name']); ?>：</label>
                            <div class="layui-input-inline seller-inline-2">
                                <input type="text" name="sign_most_point" value="<?php echo htmlentities($data['sign_most_point']['value']); ?>" lay-verify="title" autocomplete="off" placeholder="请输入正整数" class="layui-input">
                            </div>
                            <div class="layui-form-mid layui-word-aux">连续签到奖励积分单日上限</div>
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">&nbsp;</label>
                        <div class="layui-input-block">
                            <button class="layui-btn layui-btn-sm" lay-submit="" lay-filter="save" style="height: 37px;padding: 0 27px;font-size: 14px;">保存</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="layui-tab-item">
                <form class="layui-form seller-alone-form" action="" method="post">

                    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;"> <legend>腾讯地图</legend></fieldset>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo htmlentities($data['qq_map_key']['name']); ?>：</label>
                        <div class="layui-input-inline seller-inline-5">
                            <input type="text" name="qq_map_key" value="<?php echo htmlentities($data['qq_map_key']['value']); ?>" lay-verify="title" autocomplete="off" placeholder="" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">腾讯地图key，申请地址：https://lbs.qq.com/</div>
                    </div>
                    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;"> <legend>快递100</legend></fieldset>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo htmlentities($data['kuaidi100_customer']['name']); ?>：</label>
                        <div class="layui-input-inline seller-inline-5">
                            <input type="text" name="kuaidi100_customer" value="<?php echo htmlentities($data['kuaidi100_customer']['value']); ?>" lay-verify="title" autocomplete="off" placeholder="" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">快递100公司编码，申请地址：https://www.kuaidi100.com</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo htmlentities($data['kuaidi100_key']['name']); ?>：</label>
                        <div class="layui-input-inline seller-inline-5">
                            <input type="text" name="kuaidi100_key" value="<?php echo htmlentities($data['kuaidi100_key']['value']); ?>" lay-verify="title" autocomplete="off" placeholder="" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">快递100授权key，申请地址：https://www.kuaidi100.com</div>
                    </div>
                    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;"> <legend>图片存储</legend></fieldset>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo htmlentities($data['image_storage_type']['name']); ?>：</label>
                        <div class="layui-input-inline seller-inline-5">
                            <select name="image_storage_type" lay-filter="image_storage_type">
                                <option value="Local" <?php if($data['image_storage_type']['value'] == 'Local'): ?> selected <?php endif; ?> >本地</option>
                                <option value="Aliyun" <?php if($data['image_storage_type']['value'] == 'Aliyun'): ?> selected <?php endif; ?> >阿里云OSS</option>
                            </select>
                        </div>
                        <div class="layui-form-mid layui-word-aux">图片保存方式</div>
                    </div>
                    <div class="image_storage_type ">
                        <div class="item Aliyun" <?php if($data['image_storage_type']['value'] == 'Aliyun'): ?> style="display: block" <?php endif; ?>>
                            <div class="layui-form-item">
                                <label class="layui-form-label">AccessKeyId：</label>
                                <div class="layui-input-inline seller-inline-5">
                                    <input type="text" name="image_storage_params[accessKeyId]" value="<?php if($data['image_storage_params']['value']): ?><?php echo htmlentities($data['image_storage_params']['value']['accessKeyId']); endif; ?>" lay-verify="title" autocomplete="off" placeholder="" class="layui-input">
                                </div>
                                <div class="layui-form-mid layui-word-aux">阿里云AccessKeyId，申请地址：阿里云用户AccessKey控制台地址：https://usercenter.console.aliyun.com/#/manage/ak</div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">AccessKeySecret：</label>
                                <div class="layui-input-inline seller-inline-5">
                                    <input type="text" name="image_storage_params[accessKeySecret]" value="<?php if($data['image_storage_params']['value']): ?><?php echo htmlentities($data['image_storage_params']['value']['accessKeySecret']); endif; ?>" lay-verify="title" autocomplete="off" placeholder="" class="layui-input">
                                </div>
                                <div class="layui-form-mid layui-word-aux">阿里云accessKeySecret，申请地址：https://www.kuaidi100.com</div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">存储节点：</label>
                                <div class="layui-input-inline seller-inline-5">
                                    <input type="text" name="image_storage_params[endpoint]" value="<?php if($data['image_storage_params']['value']): ?><?php echo htmlentities($data['image_storage_params']['value']['endpoint']); endif; ?>" lay-verify="title" autocomplete="off" placeholder="" class="layui-input">
                                </div>
                                <div class="layui-form-mid layui-word-aux">阿里云OSS的 endpoint</div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">空间名称：</label>
                                <div class="layui-input-inline seller-inline-5">
                                    <input type="text" name="image_storage_params[bucket]" value="<?php if($data['image_storage_params']['value']): ?><?php echo htmlentities($data['image_storage_params']['value']['bucket']); endif; ?>" lay-verify="title" autocomplete="off" placeholder="" class="layui-input">
                                </div>
                                <div class="layui-form-mid layui-word-aux">阿里云OSS的 bucket</div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">绑定域名：</label>
                                <div class="layui-input-inline seller-inline-5">
                                    <input type="text" name="image_storage_params[domain]" value="<?php if($data['image_storage_params']['value']): ?><?php echo htmlentities($data['image_storage_params']['value']['domain']); endif; ?>" lay-verify="title" autocomplete="off" placeholder="" class="layui-input">
                                </div>
                                <div class="layui-form-mid layui-word-aux">阿里云OSS绑定的域名，例如：https://image.jihainet.com</div>
                            </div>
                        </div>

                    </div>




                    <div class="layui-form-item">
                        <label class="layui-form-label">&nbsp;</label>
                        <div class="layui-input-block">
                            <button class="layui-btn layui-btn-sm" lay-submit="" lay-filter="save" style="height: 37px;padding: 0 27px;font-size: 14px;">保存</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<script>
    layui.use('form', function() {
        var form = layui.form;
        //保存商品
        form.on('submit(save)', function(data) {
            formData = data.field;
            if (!formData) {
                layer.msg('请先完善数据', {
                    time: 1300
                }); //layer.msg(JSON.stringify(data.field));
                return false;
            }
            $.ajax({
                url: '<?php echo url("Setting/index"); ?>',
                type: 'post',
                data: formData,
                dataType: 'json',
                success: function(e) {
                    if (e.status === true) {
                        layer.msg('保存成功');
                    } else {
                        layer.msg(e.msg, {
                            time: 1300
                        });
                    }
                }
            });
            return false;
        });

        //积分奖励类型切换
        var type = $("#sign_point_type").val();
        if (type == 1) {
            $(".sign-random").hide();
            $(".sign-fixed").show();
        } else {
            $(".sign-random").show();
            $(".sign-fixed").hide();
        }
        form.on('radio(sign_point_type)', function(data) {
            if (data.value == 1) {
                $(".sign-random").hide();
                $(".sign-fixed").show();
            } else {
                $(".sign-random").show();
                $(".sign-fixed").hide();
            }
        });
        //存储引擎切换
        form.on('select(image_storage_type)', function(data) {
            $(".image_storage_type .item").hide(10);
            $("."+data.value).show(10);
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