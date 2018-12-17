<?php /*a:1:{s:76:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\order\logistics.html";i:1542977520;}*/ ?>
<div class="layui-form layui-form-pane" style="padding:30px">

    <?php if($data['status']): ?>

    <table class="layui-table" lay-even lay-skin="row">
        <div style="text-align: center"><?php echo htmlentities($data['data']['state']); ?></div>
        <thead>
            <tr>
                <th>时间</th>
                <th>流转信息</th>
            </tr>
        </thead>
        <tbody>
            <?php if(is_array($data['data']['list']) || $data['data']['list'] instanceof \think\Collection || $data['data']['list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['data']['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr>
                <td style="text-align: center;"><?php echo htmlentities($vo['ftime']); ?></td>
                <td><?php echo htmlentities($vo['context']); ?></td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>

    <?php else: ?>

    <table class="layui-table">
        <thead>
            <tr>
                <th><?php echo htmlentities($data['msg']); ?></th>
            </tr>
        </thead>
    </table>

    <?php endif; ?>

</div>