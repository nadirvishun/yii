<?php
Yii::import('zii.widgets.CPortlet');
class CacheMenu extends CPortlet
{
	public function init()
	{
		$this->title='缓存管理';
		parent::init();
	}
	protected function renderContent()
	{
		$this->render('cacheMenu');
	}
}