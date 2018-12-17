<?php /*a:1:{s:75:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\categories\add.html";i:1543588464;}*/ ?>
<div style="padding:30px" class="layui-form layui-form-pane">
    <div class="layui-form-item">
        <label class="layui-form-label">所属分类：</label>
        <div class="layui-input-block">
            <select name="parent_id" id="parent_id" lay-verify="required" lay-search="">
                <option value="0" <?php if($parent_id == '0'): ?>selected<?php endif; ?>>顶级分类</option>
                <?php foreach($parent as $key=>$vo): ?>
                <option value="<?php echo htmlentities($vo['id']); ?>" <?php if($parent_id == $vo['id']): ?>selected<?php endif; ?>><?php echo htmlentities($vo['name']); ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">所属类型：</label>
        <div class="layui-input-block">
            <select name="type_id" id="type_id" lay-verify="required" lay-search="">
                <option value="0">通用类型</option>
                <?php foreach($type as $key=>$vo): ?>
                <option value="<?php echo htmlentities($vo['id']); ?>"><?php echo htmlentities($vo['name']); ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">分类名称：</label>
        <div class="layui-input-block">
            <input type="text" name="name" id="name" required lay-verify="required" placeholder="请输入分类名称" autocomplete="off" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">分类图标：</label>

        <div class="layui-input-block">
            
            <button type="button" class="layui-btn" id="upload_img_image_id" onclick="upImagimage_ide()">上传图片</button>
            <div class="layui-upload-list">
                <img class="layui-upload-img"  src="/static/images/default.png" id="image_src_image_id" style="width:90px;height:90px;" >
                <p id="upload_text_image_id"></p>
            </div>
            <input class="layui-upload-file" type="hidden" name="image_id"  id="image_value_image_id" value="">
            <textarea id="edit_image_id" style="display: none;"></textarea>
            <script>
            var _editoimage_idr = UE.getEditor("edit_image_id",{
                initialFrameWidth:800,
                initialFrameHeight:300,
            });
            _editoimage_idr.ready(function (){
                //_editoimage_idr.setDisabled();
                _editoimage_idr.hide();
                //侦听图片上传
                _editoimage_idr.addListener('beforeInsertImage',function(t,arg){
                        $("#image_value_image_id").attr("value",arg[0].image_id);
                        //将图片地址赋给img的src,实现预览
                        $("#image_src_image_id").attr("src",arg[0].src);
                });
            });
            //上传dialog
            function upImagimage_ide(){
                var myImagimage_ide = _editoimage_idr.getDialog("insertimage");
                myImagimage_ide.open();
            }
</script>
            

            <div class="layui-form-mid layui-word-aux list-tag">
                图标尺寸建议：60px*60px
            </div>
        </div>

    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">排序：</label>
        <div class="layui-input-block">
            <input type="number" name="sort" id="sort" required lay-verify="required" placeholder="排序" autocomplete="off" class="layui-input" value="100">
        </div>
    </div>
    <button class="layui-btn layui-btn-fluid add-save-btn">保存</button>
</div>

<script>
    //渲染表单
    layui.use('form', function(){
        var form = layui.form;
        form.render();
    });
</script>