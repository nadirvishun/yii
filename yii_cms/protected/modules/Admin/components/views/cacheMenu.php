<ul>
	<li><?php echo CHtml::link('清除导航标签缓存', array('cache/deletenavcache'));?></li>
	<li><?php echo CHtml::link('清除轮播图片缓存', array('cache/deletebannercache'));?></li>
	<li><?php echo CHtml::link('清除产品类型二级缓存', array('cache/deletepruductstypecache'));?></li>
	<li><?php echo CHtml::link('清除产品类型图片缓存', array('cache/deletepruductstypeimgcache'));?></li>
	<li><?php echo CHtml::link('清除产品图片缓存', array('cache/deletepruductscache'));?></li>
</ul>

<!-- 另一种方式，在页面上直接弹窗，但是不会设置自动关闭，所以暂时不用它 -->
<!-- <ul> -->
	<!-- <li><?php echo CHtml::link('删除导航标签缓存',array('default/deletenavcache') ,array(  
		 'onclick'=>'$("#mydialog").dialog("open"); return false;',));?></li> -->
	<!--<li><?php echo CHtml::link('删除轮播图片缓存', array('cache/deletebannercache'));?></li> -->
	<!--<li><?php echo CHtml::link('删除产品类型二级缓存', array('cache/deletepruductstypecache'));?></li> -->
	<!--<li><?php echo CHtml::link('删除产品类型图片缓存', array('cache/deletepruductstypeimgcache'));?></li> -->
	<!--<li><?php echo CHtml::link('删除产品图片缓存', array('cache/deletepruductscache'));?></li> -->
<!-- </ul> -->