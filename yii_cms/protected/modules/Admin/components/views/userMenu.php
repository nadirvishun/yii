<ul>
<li><?php echo CHtml::link('用户添加', array('User/create'));?></li>
	<li><?php echo CHtml::link('用户管理', array('User/admin'));?></li>
	<li><?php echo CHtml::link('更新资料', array('User/update', 'id'=>Yii::app()->user->id));?></li>
	<li><?php echo CHtml::link('修改密码', array('User/updatePass', 'id'=>Yii::app()->user->id));?></li>
	<li><?php echo CHtml::link('注销帐号 ['.Yii::app()->user->name.']', array('default/logout'));?></li>
</ul>