<?php

class DefaultController extends Controller
{
	public $layout='/layouts/column2';
	
	
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
				'accessControl', // perform access control for CRUD operations
		);
	}
	
	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
				array('allow',  // allow all users to perform 'index' and 'view' actions
						'actions'=>array('logout'),
						'users'=>array('*'),
				),
				array('allow', // allow authenticated user to perform 'create' and 'update' actions
						'actions'=>array('index','deletenavcache','deletebannercache','deletepruductstypecache','deletepruductstypeimgcache','deletepruductscache'),
						'users'=>array('@'),
				),
				array('deny',  // deny all users
						'users'=>array('*'),
				),
		);
	}
	
	public function actionIndex()
	{
		$this->render('index');
	}
/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
// 		$this->redirect(Yii::app()->homeUrl);
		$this->redirect(Yii::app()->homeUrl.'?r=Admin/');

	}
	/**
	 * 删除缓存
	 */
	//delete Nav cache
	public function actionDeleteNavCache()
	{
		Yii::app()->cache->delete('Nav');
		
		$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
				'id'=>'mydialog',//弹窗ID
				// additional javascript options for the dialog plugin
				'options'=>array(//传递给JUI插件的参数
						'title'=>'弹窗标题',
						'autoOpen'=>false,//是否自动打开
						'width'=>'auto',//宽度
						'height'=>'auto',//高度
						'buttons'=>array(
								'关闭'=>'js:function(){ $(this).dialog("close");}',//关闭按钮
						),
		
				),
		));
		
		echo 'dialog content here';
		
		$this->endWidget('zii.widgets.jui.CJuiDialog');
		
// 		// 这是弹窗链接,
// 		echo CHtml::link('open dialog', '#', array(
// 				'onclick'=>'$("#mydialog").dialog("open"); return false;',//点击打开弹窗
// 		));
		
		
		
		
		$this->redirect(Yii::app()->homeUrl.'?r=Admin/');
	}
	//delete  Banner cache
	public function actionDeleteBannerCache()
	{
		Yii::app()->cache->delete('Banner');
		$this->redirect(Yii::app()->homeUrl.'?r=Admin/');
	}
	//delete PruductsType cache
	public function actionDeletePruductsTypeCache()
	{
		Yii::app()->cache->delete('PruductsType');
		$this->redirect(Yii::app()->homeUrl.'?r=Admin/');
	}
	//delete Pruducts_type_img cache
	public function actionDeletePruductsTypeImgCache()
	{
		Yii::app()->cache->delete('PruductsTypeImg');
		$this->redirect(Yii::app()->homeUrl.'?r=Admin/');
	}
	//delete Pruducts
	public function actionDeletePruductsCache()
	{
		Yii::app()->cache->delete('Pruducts');
		$this->redirect(Yii::app()->homeUrl.'?r=Admin/');
	}
	
}