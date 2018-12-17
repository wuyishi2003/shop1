<?php /*a:3:{s:71:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\goods\edit.html";i:1544066903;s:67:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\layout.html";i:1543406342;s:72:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\common\menu.html";i:1542977520;}*/ ?>
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
            <script type="text/javascript" charset="utf-8" src="/static/js//jquery-2.1.3.min.js"> </script>
<link rel="stylesheet" href="/static/js/croppic/croppic.css">
<script type="text/javascript" charset="utf-8" src="/static/js/croppic/croppic.js"> </script>

<style>
    #container{
        padding: 0px;
        border-radius:0px;
        border-width:0px;
    }
    #img_preview{
        display: inline;
        float: left;
        margin-top: 40px;
        overflow: hidden;
    }
    .imgdiv{
        display: inline;
        float: left;
        text-align: center;
        border: 1px solid #ccc;
        padding: 5px;
        padding-bottom: 0;
        margin-right: 10px;
    }
    #operate{
    	margin-top: 5px;
    }
    #operate a{
     	cursor:pointer
    }
    #operate a:hover{
    	color: #009688;
    }
    .layui-btn{
    	margin-top: 10px;
    }
</style>
<form class="layui-form seller-alone-form" action="<?php echo url('goods/doEdit'); ?>" method="post">
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;"> <legend>基础信息</legend></fieldset>


    <div class="layui-form-item">
        <label class="layui-form-label"> 商品分类：</label>
        <div class="layui-input-inline">
            <select name="goods_cat_id[]" id="goods_cat_id" lay-filter="goods_cat_id">
                <option value="">请选择分类</option>
                <?php if(count($catList)>0): if(is_array($catList) || $catList instanceof \think\Collection || $catList instanceof \think\Paginator): $i = 0; $__LIST__ = $catList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo htmlentities($vo['id']); ?>" <?php if($catInfo[0]['id'] == $vo['id']): ?> selected<?php endif; ?>><?php echo htmlentities($vo['name']); ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>
            </select>
        </div>
        <div id="view">
            <?php if($secondCat): ?>
            <div class="layui-input-inline">
                <select name="goods_cat_id[]">
                    <option value="">请选择分类</option>
                    <?php if(is_array($secondCat) || $secondCat instanceof \think\Collection || $secondCat instanceof \think\Paginator): $i = 0; $__LIST__ = $secondCat;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo htmlentities($vo['id']); ?>" <?php if($catInfo[1]['id'] == $vo['id']): ?> selected<?php endif; ?>><?php echo htmlentities($vo['name']); ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label"><i class="required-color">*</i>商品类型：</label>
        <div class="layui-input-inline">
            <select name="goods_type_id" id="goods_type_id" lay-filter="goods_type_id">
                <option value="">请选择类型</option>
                <?php if(count($typeList)>0): if(is_array($typeList) || $typeList instanceof \think\Collection || $typeList instanceof \think\Paginator): $i = 0; $__LIST__ = $typeList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo htmlentities($vo['id']); ?>" <?php if($vo['id'] == $data['goods_type_id']): ?> selected<?php endif; ?>><?php echo htmlentities($vo['name']); ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>
            </select>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label"><i class="required-color">*</i>商品名称：</label>
        <div class="layui-input-inline">
            <input type="text" name="goods[name]" value="<?php echo htmlentities($data['name']); ?>" lay-verify="title" autocomplete="off" placeholder="请输入商品名称" class="layui-input">
            <input type="hidden" name="goods[id]" id="goods_id" value="<?php echo htmlentities($data['id']); ?>">

        </div>
        <div class="layui-form-mid layui-word-aux">最多可输入200个汉字</div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">商品编号：</label>
        <div class="layui-input-inline">
            <input type="text" name="goods[bn]" value="<?php echo htmlentities($data['bn']); ?>"  lay-verify="title" autocomplete="off" placeholder="请输入商品编号" class="layui-input">
        </div>
    </div>


    <div class="layui-form-item">
        <label class="layui-form-label">一级分销比例：</label>
        <div class="layui-input-inline">
            <input type="text" name="goods[p]"  value="<?php echo htmlentities($data['p']); ?>"  lay-verify="title" autocomplete="off" placeholder="一级分销比例" class="layui-input">

        </div>

        <div class="layui-form-mid layui-word-aux"> %</div>

    </div>



    <div class="layui-form-item">
        <label class="layui-form-label">二级分销比例：</label>
        <div class="layui-input-inline">
            <input type="text" name="goods[pp]"  value="<?php echo htmlentities($data['pp']); ?>"  lay-verify="title" autocomplete="off" placeholder="二级分销比例" class="layui-input">

        </div>
        <div class="layui-form-mid layui-word-aux"> %</div>
    </div>






    <div class="layui-form-item">
        <label class="layui-form-label">商品品牌：</label>
        <div class="layui-input-inline">
            <select name="goods[brand_id]">
                <option value="">请选择品牌</option>
                <?php if(count($brandList)>0): if(is_array($brandList) || $brandList instanceof \think\Collection || $brandList instanceof \think\Paginator): $i = 0; $__LIST__ = $brandList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <option value="<?php echo htmlentities($vo['id']); ?>" <?php if($vo['id'] == $data['brand_id']): ?> selected <?php endif; ?>><?php echo htmlentities($vo['name']); ?></option>
                <?php endforeach; endif; else: echo "" ;endif; endif; ?>
            </select>
        </div>
    </div>
    <div class="layui-form-item layui-form-text">
        <label class="layui-form-label">商品简介：</label>
        <div class="layui-input-block">
            <textarea placeholder="请输入商品简介" name="goods[brief]" class="layui-textarea"><?php echo htmlentities($data['brief']); ?></textarea>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label"><i class="required-color">*</i>商品图片：</label>

        <div class="layui-upload" id="imgs">
            <button type="button" class="layui-btn" id="goods_img" onclick="upImage()">上传图片</button>
            <blockquote class="layui-elem-quote layui-quote-nm" style="margin-top: 10px;">
                <p>预览图：[第一张图片为默认图]</p>
                <div class="layui-upload-list" id="img_preview">
                    <?php if(is_array($data['images']) || $data['images'] instanceof \think\Collection || $data['images'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['images'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$image): $mod = ($i % 2 );++$i;?>
                    <div class="imgdiv">
                        <img src="<?php echo htmlentities($image['image_path']); ?>"  class="layui-upload-img" style="width: 100px;height:100px;">
                        <div id="operate">
                            <div><a class="del" onclick="delImg(this,'<?php echo htmlentities($image['image_id']); ?>')">删除</a>|<a class="setmain" onclick="setDefault(this,'<?php echo htmlentities($image['image_id']); ?>')">设为主图</a>|<a class="croppic" data-id="<?php echo htmlentities($image['image_id']); ?>" onclick="croppic(this,'<?php echo htmlentities($image['image_path']); ?>')">裁剪</a></div>
                        </div>
                        <input type='hidden' name='goods[img][]' value="<?php echo htmlentities($image['image_id']); ?>">
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </blockquote>
        </div>
    </div>
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;"><legend>销售信息</legend></fieldset>
    <div id="product-info">
    <?php echo $spec_html; ?>
    </div>

    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;"> <legend>商品详情</legend></fieldset>
    <?php echo hook('editgoodsview',['id'=>$data['id']]); ?>

    <div class="layui-form-item">
        <label class="layui-form-label">重量：</label>
        <div class="layui-input-inline">
            <input type="text" name="goods[weight]" value="<?php echo htmlentities($data['weight']); ?>" lay-verify="title" autocomplete="off" placeholder="请输入商品重量，单位（克）" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">单位：</label>
        <div class="layui-input-inline">
            <input type="text" name="goods[unit]" value="<?php echo htmlentities($data['unit']); ?>" lay-verify="title" autocomplete="off" placeholder="请输入商品单位" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item" pane>
        <label class="layui-form-label">上架：</label>
        <div class="layui-input-block">
            <input type="checkbox" <?php if($data['marketable'] == 1): ?> checked="" <?php endif; ?> value="1" name="goods[marketable]" lay-skin="switch" lay-filter="switchTest" title="开关"><div class="layui-unselect layui-form-switch layui-form-onswitch" lay-skin="_switch"><em></em><i></i></div>
        </div>
    </div>
    <div class="layui-form-item" pane>
        <label class="layui-form-label">推荐：</label>
        <div class="layui-input-block">
            <input type="checkbox" value="1"  <?php if($data['is_recommend'] == 1): ?> checked="true" <?php endif; ?> name="goods[is_recommend]" lay-skin="switch" lay-filter="switchTest" title="开关"><div class="layui-unselect layui-form-switch layui-form-onswitch" lay-skin="_switch"><em></em><i></i></div>
        </div>
    </div>
    <div class="layui-form-item" pane>
        <label class="layui-form-label">热门：</label>
        <div class="layui-input-block">
            <input type="checkbox"  value="1" name="goods[is_hot]" <?php if($data['is_hot'] == 1): ?> checked="" <?php endif; ?> lay-skin="switch" lay-filter="switchTest" title="开关"><div class="layui-unselect layui-form-switch layui-form-onswitch" lay-skin="_switch"><em></em><i></i></div>
        </div>
    </div>
    <div class="layui-form-item layui-form-text" >
        <label class="layui-form-label">详细介绍：：</label>
        <div id="goods_intro" style="display: none;"><?php echo htmlentities($data['intro']); ?></div>
    </div>
    <div class="layui-form-item" >
        <script id="container" name="goods[intro]" type="text/plain" class="layui-textarea"></script>
    </div>
    <div id="lj"></div>
    <div class="layui-form-item">
        <div class="layui-input-block">
            <input type="hidden" name="open_spec" value="<?php echo htmlentities($open_spec); ?>">
            <button class="layui-btn" lay-submit="" lay-filter="save">保存</button>
            <a href="javascript:history.back(-1);" class="layui-btn layui-btn-primary">返回</a>
        </div>
    </div>
</form>

<script id="cat_tpl" type="text/html">
    <div class="layui-input-inline">
        <select name="goods_cat_id[]">
            <option value="">请选择分类</option>
            {{#  layui.each(d.list, function(index, item){ }}
                <option value="{{ item.id }}">{{ item.name }}</option>
            {{#  }); }}
        </select>
    </div>
</script>

<script id="image_tpl" type="text/html">
    {{# layui.each(d, function(index, item){  }}
    <div class="imgdiv">
        <img src="{{ item.src }}"  class="layui-upload-img" style="width: 100px;height:100px;">
        <div id="operate">
            <div><a class="del" onclick="delImg(this,'{{ item.image_id }}')">删除</a>|<a class="setmain" onclick="setDefault(this,'{{ item.image_id }}')">设为主图</a>|<a class="croppic" data-id="{{ item.image_id }}" onclick="croppic(this,'{{ item.src }}')">裁剪</a></div>
        </div>
        <input type='hidden' name='goods[img][]' value="{{ item.image_id }}">
    </div>
    {{#  }); }}
</script>



<script type="text/javascript">
    var ue = UE.getEditor('container');
    var intro=$("#goods_intro").text();

    ue.ready(function(){
        ue.setContent(intro);
    })
</script>
<script>
    //渲染表单
    var laytpl = '';
    layui.use(['form','laytpl','upload'], function(){
        var $ = layui.jquery
                ,upload = layui.upload;
        var form = layui.form;
            laytpl = layui.laytpl;

        form.render();
        form.on('select(goods_cat_id)', function(data){
            var cat_id = data.value;
            var first_select = $("#goods_cat_id");

            var getTpl = cat_tpl.innerHTML
                    ,view = document.getElementById('view');

            if(cat_id){
                $.ajax({
                    url: '<?php echo url("Goods/getCat"); ?>',
                    type: 'post',
                    data: {
                        'cat_id': cat_id,
                    },
                    dataType: 'json',
                    success: function(e){
                        if(e.status === true){
                            if(e.data.length>0){
                                var tmpData = {};
                                tmpData.list = e.data;
                                laytpl(getTpl).render(tmpData, function(html){
                                    view.innerHTML = html;
                                });
                                form.render();
                            }else{
                                $("#view").html("");
                            }
                        }else{
                            layer.msg(e.msg, {time: 1300});
                        }
                    }
                })
            }
        });
        //保存商品
        form.on('submit(save)', function(data){
            formData = data.field;
            if(!formData){
                layer.msg('请先完善数据', {time: 1300});
                return false;
            }
            $.ajax({
                url: '<?php echo url("Goods/doEdit"); ?>',
                type: 'post',
                data: formData,
                dataType: 'json',
                success: function(e){

                   // $('#lj').append(e.msg);
$
                    if(e.status === true){
                       layer.msg(e.msg, {time: 1300}, function(){
                            window.location.href='<?php echo url("Goods/index"); ?>';
                        });
                    }else{
                        layer.msg(e.msg, {time: 1300});
                    }
                }
            })
            return false;
        });

        form.on('select(goods_type_id)', function (data) {
            var type_id = data.value;
            if (type_id) {
                layer.confirm('更换类型后，货品需重新生成，确定要更换吗？', {
                    btn: ['确定', '取消']
                    , title: '提示',
                }, function (index) {
                    layer.close(index);
                    $.ajax({
                        url: '<?php echo url("Goods/getSpec"); ?>',
                        type: 'post',
                        data: {
                            'type_id': type_id,
                        },
                        dataType: 'json',
                        success: function (e) {
                            if (e.status === true) {
                                $("#product-info").html(e.data);
                            } else {
                                layer.msg(e.msg);
                            }
                        }
                    });
                }, function () {
                });
            }
        });


    });

    $(".layui-body").on("click", "#open_spec", function () {
        var is_open = $(this).attr("is_open");
        if (is_open == 'false') {
            $("input[name=open_spec]").val("1");
            $("#spec_select").show();
            $("#no_spec").hide();
            $(this).html("取消规格");
            $(this).attr("is_open", "true");
        } else {
            $("input[name=open_spec]").val("0");
            $("#spec_select").hide();
            $("#no_spec").show();
            $(this).html("开启");
            $(this).attr("is_open", "false");
            $("#more_spec input").val('');
        }
    });


    $(".layui-body").on("click", ".generate-spec", function () {
        var list = $('#spec_select input[type=checkbox]:checked');
        if (list.length > 0) {
            var data = $("#spec_form input").serialize();
            data = data+'&goods_id='+$("#goods_id").val();
            $.ajax({
                url: '<?php echo url("Goods/getSpecHtml"); ?>',
                type: 'post',
                data: data,
                dataType: 'json',
                success: function (e) {
                    if (e.status === true) {
                        $("#more_spec").html(e.data);
                    } else {
                        layer.msg(e.msg);
                    }
                }
            });

        } else {
            layer.msg("请选择属性");
            return false;
        }
        return false;
    });
    //删除行规格
    $(".layui-body").on("click", ".del-class", function () {
        $(this).parent().parent('tr').remove();
    });

    var _editor = UE.getEditor("edit_image",{
        initialFrameWidth:800,
        initialFrameHeight:300,
    });
    _editor.ready(function (){
        _editor.hide();
        _editor.addListener('beforeInsertImage',function(t,arg){
            if(arg.length>5){
                layer.msg("最多只能选择5张图片，请重新选择");
                return false;
            }
            var getTpl = image_tpl.innerHTML
                ,view = document.getElementById('img_preview');
            var oldHtml = $("#img_preview").html();
            if(arg.length>0) {
                laytpl(getTpl).render(arg, function (html) {
                    view.innerHTML = oldHtml+html;
                });
            }else{
                layer.msg("请先上传图片");
                return false;
            }
        });
    });
    //上传dialog
    function upImage(){
        var myImage = _editor.getDialog("insertimage");
        myImage.open();
    }
    /**
     * 删除图片
     * @param obj
     * @param imageId
     */
    function delImg(obj,imageId) {
        var imgDiv = $(obj).parent().parent().parent();
        imgDiv.remove();
    }
    /**
     * 设为默认图
     * @param obj
     * @param imageId
     */
    function setDefault(obj,imageId) {
        var imgDiv = $(obj).parent().parent().parent();
        $("#img_preview").prepend(imgDiv);
    }

    function croppic(obj, image_src) {
        var image = $(obj).parent().parent().parent();
        var croppicContainerModalOptions = {
            cropUrl: "<?php echo url('images/cropper'); ?>",
            loadPicture: image_src,
            modal: true,
            cropZoomWidth: 300,
            cropZoomHeight: 300,
            imgEyecandyOpacity: 0.4,
            loaderHtml: '<div class="loader bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div> ',
            onAfterImgCrop: function (res) {
                if (res.status=='success') {
                    image.replaceWith(res.image_html);
                    layer.msg("裁剪成功");
                } else {
                    layer.msg(res.msg);
                }
                return true;
            },
            onError: function (errormessage) {
                layer.msg('onError:' + errormessage);
            }
        };
        var cropContainerModal = new Croppic('croppic', croppicContainerModalOptions);
    }

</script>
<textarea id="edit_image" style="display: none;"></textarea>

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