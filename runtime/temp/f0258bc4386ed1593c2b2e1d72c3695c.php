<?php /*a:1:{s:74:"D:\newphp\PHPTutorial\WWW\shop1\application/manage/view\user\moneyLog.html";i:1544184414;}*/ ?>
<table id="moneyLog" lay-filter="moneyLog"></table>
<script>
    var table;
    layui.use(['form', 'layedit', 'laydate','table'], function(){
        table = layui.table.render({
            elem: '#moneyLog',
            cellMinWidth: '80',
            page: 'true',
            limit:'10',
            url: "<?php echo url('User/moneyLog'); ?>?_ajax=1&user_id=<?php echo htmlentities($user_id); ?>&flag=true",
            id:'moneyLog',
            height: '471',
            cols: [[
                {type:'numbers'},
                {field:'type', width:95, title:'类型'},
                {field:'money', width:110, title:'金额'},
                {field:'balance', width:150, title:'余额'},
                {field:'memo', title: '备注'},
                {field:'ctime', width:165, title:'时间'}
            ]]
        });
    });
</script>
