<?php

class CacheController extends Controller
{
	public $layout='/layouts/column2';
	
	public function actionIndex()
	{
		$this->render('index');
	}

	
	/**
	 * 删除缓存
	 */
	//delete Nav cache
	public function actionDeleteNavCache()
	{
		Yii::app()->cache->delete('Nav');
		Yii::app()->user->setFlash('success', '导航标签缓存已删除');
		$this->render('index');
	
// 		$this->redirect(Yii::app()->homeUrl.'?r=Admin/');
	}
	//delete  Banner cache
	public function actionDeleteBannerCache()
	{
		Yii::app()->cache->delete('Banner');
		Yii::app()->user->setFlash('success', '轮播图片缓存已删除');
		$this->render('index');
	}
	//delete PruductsType cache
	public function actionDeletePruductsTypeCache()
	{
		Yii::app()->cache->delete('PruductsType');
		Yii::app()->user->setFlash('success', '产品类型二级缓存已删除');
		$this->render('index');
	}
	//delete Pruducts_type_img cache
	public function actionDeletePruductsTypeImgCache()
	{
		Yii::app()->cache->delete('PruductsTypeImg');
		Yii::app()->user->setFlash('success', '产品类型图片缓存已删除');
		$this->render('index');
	}
	//delete Pruducts
	public function actionDeletePruductsCache()
	{
		Yii::app()->cache->delete('Pruducts');
		Yii::app()->user->setFlash('success', '产品图片缓存已删除');
		$this->render('index');
	}
	

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}