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
		$bannerResults = $cache->get('Banner');
		if ($bannerResults === false){
			$bannerResults = Banner::model()->findAll('status_id=1');
			$cache->set('Banner', $bannerResults, 60*60);
		}
		
	
		 
		//PruductsType的二级菜单
		//1 hour cache
		$pruductsTypeResults = $cache->get('PruductsType');
		if ($pruductsTypeResults === false){
			$pruductsTypeResults = PruductsType::model()->getPruductsTypeList();
// 			$newsTypeResults[998] = '下载';
			$cache->set('PruductsType', $pruductsTypeResults, 60*60);
		}
		
		
		//Pruducts_type_img
		//1 hour cache
		$pruductsTypeImgResults = $cache->get('PruductsTypeImg');
		if ($pruductsTypeImgResults === false){
			$pruductsTypeImgResults = PruductsType::model()->findAll();
			// 			$newsTypeResults[998] = '下载';
			$cache->set('PruductsTypeImg', $pruductsTypeImgResults, 60*60);
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
				
				'dataBanner'=>$bannerResults,
				'dataPruductsType'=>$pruductsTypeResults,
// 				'dataGonggao'=>$indexGongGaoResults,
// 				'dataNews'=>$indexNewsResults,
				'dataPruductsTypeImg'=>$pruductsTypeImgResults,
				'dataPruductsImg'=>$pruductsImgResults,
// 				'dataDownload'=>$downloadResults
		));
	
	}
	
	
	/**
	 * 产品二级页面，左侧产品类别，右侧类别包含产品
	 * Lists type models. in spage.php page
	 */
	public function actionSPage($id)
	{
			$id = (int)$id;
			if ($id ==0) $id = 1;
			//TODO Pruducts
			$criteria =  new CDbCriteria();
			$criteria->condition = 'status_id = 1 and type_id =:type_id';
			$criteria->params[':type_id'] = $id;
			$criteria->order = 'create_time DESC';
			 
			$spageResults = new CActiveDataProvider('Pruducts',array(
					'criteria'=>$criteria,
					'pagination'=>array('pageSize'=>6),
			));
		
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
		$bannerResults = $cache->get('Banner');
		if ($bannerResults === false){
			$bannerResults = Banner::model()->findAll('status_id=1');
			$cache->set('Banner', $bannerResults, 60*60);
		}
		
	
		 
		//PruductsType的二级菜单
		//1 hour cache
		$pruductsTypeResults = $cache->get('PruductsType');
		if ($pruductsTypeResults === false){
			$pruductsTypeResults = PruductsType::model()->getPruductsTypeList();
// 			$newsTypeResults[998] = '下载';
			$cache->set('PruductsType', $pruductsTypeResults, 60*60);
		}

		
		//Pruducts_type_img
		//1 hour cache
		$pruductsTypeImgResults = $cache->get('PruductsTypeImg');
		if ($pruductsTypeImgResults === false){
			$pruductsTypeImgResults = PruductsType::model()->findAll();
			// 			$newsTypeResults[998] = '下载';
			$cache->set('PruductsTypeImg', $pruductsTypeImgResults, 60*60);
		}
		 
		 
		//test part
		//	  echo '<pre>';
		//	  print_r($downloadResults);
		 
		$this->render('spage',array(
				'dataNav'=>$navResults,
				
				'dataBanner'=>$bannerResults,
				'dataPruductsType'=>$pruductsTypeResults,
				'dataPruductsTypeImg'=>$pruductsTypeImgResults,
				'dataSpage'=>$spageResults,
				'id'=>$id,
		));
	}
	
	
	/**
	 * 产品3级页面，显示产品详细信息
	 * Lists type models. in spage.php page
	 */
	public function actionTPage($id)
	{
		$id = (int)$id;
		if ($id ==0) $id = 1;
		 
		$pruductsNameResult = Pruducts::model()->find('id = :id',array(':id'=>$id));
		$this->pageTitle .= ' - '.$pruductsNameResult->pruducts_name;
		$tid=$pruductsNameResult->type_id;
		
		
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
		$bannerResults = $cache->get('Banner');
		if ($bannerResults === false){
			$bannerResults = Banner::model()->findAll('status_id=1');
			$cache->set('Banner', $bannerResults, 60*60);
		}
		
	
		 
		//PruductsType的二级菜单
		//1 hour cache
		$pruductsTypeResults = $cache->get('PruductsType');
		if ($pruductsTypeResults === false){
			$pruductsTypeResults = PruductsType::model()->getPruductsTypeList();
// 			$newsTypeResults[998] = '下载';
			$cache->set('PruductsType', $pruductsTypeResults, 60*60);
		}
		 
		//Pruducts_type_img
		//1 hour cache
		$pruductsTypeImgResults = $cache->get('PruductsTypeImg');
		if ($pruductsTypeImgResults === false){
			$pruductsTypeImgResults = PruductsType::model()->findAll();
			// 			$newsTypeResults[998] = '下载';
			$cache->set('PruductsTypeImg', $pruductsTypeImgResults, 60*60);
		}
						
			
		//get pruducts_img data
		//1 hour cache
		$pruductsImgResults = $cache->get('Pruducts');
		if ($pruductsImgResults === false){
			$pruductsImgResults = Pruducts::model()->findAll('status_id=1 order by id DESC');
			$cache->set('Pruducts', $pruductsImgResults, 60*60);
		}
		 
		//test part
		//	  echo '<pre>';
		//	  print_r($newResult);
		 
		$this->render('tpage',array(
				'dataNav'=>$navResults,
				
				'dataBanner'=>$bannerResults,
				'dataPruductsType'=>$pruductsTypeResults,
				'dataPruductsName'=>$pruductsNameResult,
				'dataPruductsTypeImg'=>$pruductsTypeImgResults,
				'dataPruductsImg'=>$pruductsImgResults,
				'tid'=>$tid,
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