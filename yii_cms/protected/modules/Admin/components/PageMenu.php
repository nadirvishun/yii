<?php
Yii::import('zii.widgets.CPortlet');
class PageMenu extends CPortlet
{
	public function init()
	{
		$this->title='页面管理';
		parent::init();
	}
	protected function renderContent()
	{
		$this->render('pageMenu');
	}
}