<?php
Yii::import('zii.widgets.CPortlet');
class UserMenu extends CPortlet
{
	public function init()
	{
		$this->title='用户管理';
		parent::init();
	}
	protected function renderContent()
	{
		$this->render('userMenu');
	}
}