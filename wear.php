<?php 
use yii\helpers\Html;

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>layui</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="layui/css/layui.css"  media="all">
  <!-- 注意：如果你直接复制所有代码到本地，上述css路径需要改成你本地的 -->
</head>
<body>
<?= Html::beginForm(['test/wear_do'], 'post', ['class' => 'layui-form']) ?>
  <div class="layui-form-item">
    <label class="layui-form-label">城市</label>
    <div class="layui-input-block">
      <input type="text" name="name" lay-verify="title" autocomplete="off" placeholder="请输入标题" class="layui-input">
    </div>
  </div>

  <div class="layui-form-item">
    <button class="layui-btn" lay-submit="" lay-filter="demo2">提交</button>
  </div>
<?= Html::endForm() ?>
          
<script src="layui/layui.js" charset="utf-8"></script>
<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
<script>
layui.use(['form', 'layedit', 'laydate'], function(){
  var form = layui.form
  ,layer = layui.layer
  ,layedit = layui.layedit
  ,laydate = layui.laydate;

 
  //自定义验证规则
  form.verify({
    title: function(value){
      if(value.length > 30){
        return '标题不能大于30个字符啊';
      }
      if (value.length==0) {
        return '标题不能为空';
      }
    }
  
  });
  
  //监听提交
  form.on('submit(demo1)', function(data){
    layer.alert(JSON.stringify(data.field), {
      title: '最终的提交信息'
    })
    return false;
  });
  
});
</script>

</body>
</html>