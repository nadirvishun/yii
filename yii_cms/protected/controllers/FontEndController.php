<?php

class FontEndController extends Controller
{
	public function actionIndex()
	{
		//prepare Nav 
		//1 Hour cache on it.
		$cache = Yii::app()->cache;
		$navResults = $cache->get('Nav');
		if ($navResults === false){
			$navResults = Nav::model()->findAll('status_id = 1');
			$cache->set('Nav', $navResults, 60*60);
		}
		 
		//prepare Banner 
		//1 Hour cache on it.
		$cache = Yii::app()->cache;
		$bannerResult = $cache->get('Banner');
		if ($bannerResult === false){
			$bannerResult = Banner::model()->findAll('status_id=1');
			$cache->set('Banner', $bannerResult, 60*60);
		}
		
	
		 
		//PruductsType的二级菜单
		//1 hour cache
		$productsTypeResults = $cache->get('PruductsTypes');
		if ($productsTypeResults === false){
			$productsTypeResults = PruductsType::model()->getPruductsTypeList();
// 			$newsTypeResults[998] = '下载';
			$cache->set('PruductsTypes', $productsTypeResults, 60*60);
		}
		
		
		//Pruducts_type_img
		//1 hour cache
		$pruductsTypeImgResults = $cache->get('PruductsTypesImg');
		if ($pruductsTypeImgResults === false){
			$pruductsTypeImgResults = PruductsType::model()->findAll();
			// 			$newsTypeResults[998] = '下载';
			$cache->set('PruductsTypesImg', $pruductsTypeImgResults, 60*60);
		}
		
		
		
		 
		//get gonggao contents
// 		$indexGongGaoResults = News::model()->getLastNewsByType('1');
		//get News contents
// 		$indexNewsResults = News::model()->getLastNewsByType('2');
		 
		//get pruducts_img data
		//1 hour cache
		$pruductsImgResults = $cache->get('Pruducts');
		if ($pruductsImgResults === false){
			$pruductsImgResults = Pruducts::model()->findAll('status_id=1 order by id DESC');
			$cache->set('Pruducts', $pruductsImgResults, 60*60);
		}
		 
		//get Download files
// 		$downloadResults = Download::model()->getLastDownloadItems();
		 
		//test part
		//	  echo '<pre>';
		//	  print_r($downloadResults);
		 
		$this->render('index',array(
				'dataNav'=>$navResults,
				'dataSecondNav'=>$productsTypeResults,
				'dataBanner'=>$bannerResult,
// 				'dataGonggao'=>$indexGongGaoResults,
// 				'dataNews'=>$indexNewsResults,
				'dataPruductsTypeImg'=>$pruductsTypeImgResults,
				'dataPruductsImg'=>$pruductsImgResults,
// 				'dataDownload'=>$downloadResults
		));
	
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