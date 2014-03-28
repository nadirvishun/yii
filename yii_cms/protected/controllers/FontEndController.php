<?php

class FontEndController extends Controller
{
	public function actionIndex()
	{
// 		//prepare Nav 
// 		//1 Hour cache on it.
// 		$cache = Yii::app()->cache;
// 		$navResults = $cache->get('Nav');
// 		if ($navResults === false){
// 			$navResults = Nav::model()->findAll('status_id = 1 limit 0, 6');
// 			$cache->set('NavMenu', $navResults, 60*60);
// 		}
		 
// 		//get one bg image name by random
// 		//cache embed in function
// 		$bgImageResults = BgImage::model()->getRandomBgImg();
		 
// 		//get second Nav Items as an Array
// 		//1 hour cache
// 		$newsTypeResults = $cache->get('NewsTypes');
// 		if ($newsTypeResults === false){
// 			$newsTypeResults = NewsType::model()->getNewsTypeList();
// 			$newsTypeResults[998] = '下载';
// 			$cache->set('NewsTypes', $newsTypeResults, 60*60);
// 		}
		 
// 		//get gonggao contents
// 		$indexGongGaoResults = News::model()->getLastNewsByType('1');
// 		//get News contents
// 		$indexNewsResults = News::model()->getLastNewsByType('2');
		 
// 		//get ImgLib data
// 		//1 hour cache
// 		$imgLibResults = $cache->get('IndexImageLib');
// 		if ($imgLibResults === false){
// 			$imgLibResults = ImgLib::model()->getLastImg();
// 			$cache->set('IndexImageLib', $imgLibResults, 60*60);
// 		}
		 
// 		//get Download files
// 		$downloadResults = Download::model()->getLastDownloadItems();
		 
// 		//test part
// 		//	  echo '<pre>';
// 		//	  print_r($downloadResults);
		 
// 		$this->render('siteindex',array(
// 				'dataNavs'=>$navResults,
// 				'dataSecondNavs'=>$newsTypeResults,
// 				'dataBgImgName'=>$bgImageResults,
// 				'dataGonggao'=>$indexGongGaoResults,
// 				'dataNews'=>$indexNewsResults,
// 				'dataImgLib'=>$imgLibResults,
// 				'dataDownload'=>$downloadResults
// 		));
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