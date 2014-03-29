<ul>
	<li><?php echo CHtml::link('删除导航标签缓存','default/deletenavcache', array('onclick'=>'$("#mydialog").dialog("open"); return false;'));?></li>
	<li><?php echo CHtml::link('删除轮播图片缓存', array('default/deletebannercache'));?></li>
	<li><?php echo CHtml::link('删除产品类型二级缓存', array('default/deletepruductstypecache'));?></li>
	<li><?php echo CHtml::link('删除产品类型图片缓存', array('default/deletepruductstypeimgcache'));?></li>
	<li><?php echo CHtml::link('删除产品图片缓存', array('default/deletepruductscache'));?></li>
</ul>
