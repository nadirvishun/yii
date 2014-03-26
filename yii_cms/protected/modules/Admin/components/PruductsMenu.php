<?php
Yii::import('zii.widgets.CPortlet');
class PruductsMenu extends CPortlet
{
	public function init()
	{
		$this->title='产品管理';
		parent::init();
	}
	protected function renderContent()
	{
		$this->render('pruductsMenu');
	}
}