<?php /* @var $this Controller */ ?>
<?php $this->beginContent('/layouts/main'); ?>

<div class="span-19">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="span-5 last">
	<div id="sidebar">
	
	<?php
			$this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>'Operations',
			));
			$this->widget('zii.widgets.CMenu', array(
				'items'=>$this->menu,
				'htmlOptions'=>array('class'=>'operations'),
			));
			$this->endWidget();
			
			$this->widget('PageMenu', array('htmlOptions'=>array('class'=>'operations'),));
			
			$this->widget('PruductsMenu', array('htmlOptions'=>array('class'=>'operations'),));
			
			$this->widget('CacheMenu', array('htmlOptions'=>array('class'=>'operations'),));
			$this->widget('UserMenu', array('htmlOptions'=>array('class'=>'operations'),));
// 			$this->widget('AdminUserMenu', array('htmlOptions'=>array('class'=>'operations'),));
		?>
	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>