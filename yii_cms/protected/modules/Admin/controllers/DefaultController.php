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
	 * 删除缓存(这是利用zii.widgets.jui.CJuiDialog的另一种弹窗方式，由于不能自动关闭，暂时不用)
	 */
	//delete Nav cache
// 	public function actionDeleteNavCache()
// 	{
// 		Yii::app()->cache->delete('Nav');
// 		Yii::app()->user->setFlash('success', '导航标签缓存已删除');
// 		$this->render('index');
	
// 		// 		$this->redirect(Yii::app()->homeUrl.'?r=Admin/');
// 	}
// 	//delete  Banner cache
// 	public function actionDeleteBannerCache()
// 	{
// 		Yii::app()->cache->delete('Banner');
// 		Yii::app()->user->setFlash('success', '轮播图片缓存已删除');
// 		$this->render('index');
// 	}
// 	//delete PruductsType cache
// 	public function actionDeletePruductsTypeCache()
// 	{
// 		Yii::app()->cache->delete('PruductsType');
// 		Yii::app()->user->setFlash('success', '产品类型二级缓存已删除');
// 		$this->render('index');
// 	}
// 	//delete Pruducts_type_img cache
// 	public function actionDeletePruductsTypeImgCache()
// 	{
// 		Yii::app()->cache->delete('PruductsTypeImg');
// 		Yii::app()->user->setFlash('success', '产品类型图片缓存已删除');
// 		$this->render('index');
// 	}
// 	//delete Pruducts
// 	public function actionDeletePruductsCache()
// 	{
// 		Yii::app()->cache->delete('Pruducts');
// 		Yii::app()->user->setFlash('success', '产品图片缓存已删除');
// 		$this->render('index');
// 	}
	
}