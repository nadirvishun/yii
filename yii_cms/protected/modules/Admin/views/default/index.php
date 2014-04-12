<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	$this->module->id,
);
?>
<h1>后台使用细则</h1>
<hr/>
<h5 style="color:#f67600">请注意状态的使用，状态为"正常"的才会在首页显示，"异常"的都不会显示。仔细阅读本页说明文字，谢谢。</h5>
<hr/>
<!-- <h3>0.基本操作模式</h3> -->
<!-- <ol> -->
<!-- 	<li>准备 -->
<!--     	<ol> -->
<!--         	<li>添加状态(所有显示与否的决定因素)</li> -->
<!--         	<li>添加新闻类型</li> -->
<!--         	<li>创建班级</li> -->
<!--         	<li>下载类型</li> -->
<!--         	<li>性别默认男/女，无需创建</li> -->
<!--     	</ol> -->
<!-- 	</li> -->
<!-- 	<li>填充 -->
<!--     	<ol> -->
<!--         	<li>添加新闻(使用：状态，新闻类型)</li> -->
<!--         	<li>添加下载(使用：状态，下载类型)</li> -->
<!--         	<li>添加宣传图片(使用：状态)</li> -->
<!--         	<li>添加用户(使用：状态，班级信息，性别)</li> -->
<!--     	</ol> -->
<!-- 	</li> -->
<!-- 	<li>管理 -->
<!--     	<ol> -->
<!--         	<li>新闻管理</li> -->
<!--         	<li>宣传图片管理</li> -->
<!--         	<li>用户管理</li> -->
<!--         	<li>班级管理</li> -->
<!--         	<li>其他管理，包括首页导航，首页背景图片，状态，类型等...</li> -->
<!--     	</ol> -->
<!-- 	</li> -->
<!-- 		<li>附加 -->
<!--     	<ol> -->
<!--         	<li>添加首页导航(1级导航)</li> -->
<!--         	<li>添加首页背景图片</li> -->
<!--     	</ol> -->
<!-- 	</li> -->
<!-- </ol> -->
<!-- <hr/> -->
<h3>1.功能介绍</h3>
<ul>
	首先你可以在本后台进行如下操作：
			<ol>
			<li>导航标签管理</li>
			<li>轮播图片管理</li>
			<li>产品管理</li>
			<li>产品类别管理</li>
			<li>缓存管理</li>
			<li>用户管理</li>
			</ol>
	
			
</ul>
<hr/>
<h3>2.路径导航</h3>
<ul>
<p>所有已经实现的操作，都在侧栏上可以找到对应的链接，简单明了就可以进行操作。</p>
<hr/>
</ul>
<h3>3.约定</h3>
<ul>
<ol>
  <li> 首页轮播图片尺寸 965px * 280px jpg/png/gif格式 </li>
  <li> 产品类别图片上传尺寸 265px * 77px jpg/png/gif格式（暂定）</li>
  <li> 产品图片上传尺寸 430px * 280px jpg/png/gif格式 </li>
  <li> 产品图片编辑器上传尺寸 740px * xxx jpg/png/gif格式 </li>
  <li> 其他格式 见页面说明，或出错提示 </li>
</ol>
</ul>
<hr/>
<h3>4.缓存，整站使用文件级缓存，暂使用5处</h3>
<ul>
<ol>
  <li>导航标签菜单缓存，1小时刷新一次</li>
  <li>轮播图片缓存，1小时刷新一次</li>
  <li>产品类别二级缓存，1小时刷新一次</li>
  <li>产品类型缓存，1小时刷新一次</li>
  <li>产品图片缓存，1小时刷新一次</li>
  <li>已实现可以在右侧缓存管理中来清除缓存，主要用于后台修改后点击清除缓存来立刻查看效果</li>
  <li>也可是手动强制刷新：删除/protected/runtime/cache/内容</li>
</ol>
</ul>
<hr/>
<!-- <h3>5.URL格式化</h3> -->
<!-- <ol> -->
<!--   <li>隐藏index.php</li> -->
<!--   <li>.html伪静态后缀名</li> -->
<!--   <li>前台Action＋参数形成1级文件名，实现简洁URL</li> -->
<!--    <li>前台地址:<?php echo Yii::app()->homeUrl;?></li>
  <li>后台地址:<?php echo $this->createUrl('/Admin')?></li> -->
<!-- </ol> -->



<!-- 这是利用zii.widgets.jui.CJuiDialog的另一种弹窗方式，由于不能自动关闭，暂时不用 -->
 <?php 
// 		$this->beginWidget('zii.widgets.jui.CJuiDialog', array(   
// 		'id'=>'mydialog',  
// 		  // additional javascript options for the dialog plugin  
// 		  'options'=>array(       
// 			 'title'=>'提示',      
// 			  'autoOpen'=>false,      
// 			  'modal'=>'true',       
// 			 'width'=>'auto',    
// 			    'height'=>'auto',   
// 			 ),
// 			));
// 			echo '缓存已成功删除';
// 			$this->endWidget('zii.widgets.jui.CJuiDialog');
// 			// the link that may open the dialog
// // 			echo CHtml::link('点我吧','#',array(  
// // 			 'onclick'=>'$("#mydialog").dialog("open"); return false;',
// // 		)
// // );?>