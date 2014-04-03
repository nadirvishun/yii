<?php

class PruductsTypeController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='/layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
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
// 			array('allow',  // allow all users to perform 'index' and 'view' actions
// 				'actions'=>array('index','view'),
// 				'users'=>array('*'),
// 			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','view','admin','delete'),
				'users'=>array('@'),
			),
// 			array('allow', // allow admin user to perform 'admin' and 'delete' actions
// 				'actions'=>array('admin','delete'),
// 				'users'=>array('admin'),
// 			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new PruductsType('create');

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['PruductsType']))
		{
			$model->attributes=$_POST['PruductsType'];
			
			if(!empty($_FILES['PruductsType']['name']['pruducts_type_img'])){
			
			
				$model->pruducts_type_img=CUploadedFile::getInstance($model, 'pruducts_type_img');
				$ext = $model->pruducts_type_img->extensionName;
				$tmpName='pruducts_type_'.time().'.'.$ext;
				if ($model->validate(array('pruducts_type_img'))) {
					$model->pruducts_type_img->Saveas(Yii::app()->basePath.'/../upload/pruducts_type_img/'.$tmpName);
					$model->pruducts_type_img=$tmpName;
				}else {
					$model->pruducts_type_img='default';
				}
			}
			
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['PruductsType']))
		{
			
			

			$tmpOldName=$model->pruducts_type_img;
			$model->attributes=$_POST['PruductsType'];
			if (@!empty($_FILES['PruductsType']['name']['pruducts_type_img'])) {
				$model->pruducts_type_img=CUploadedFile::getInstance($model, 'pruducts_type_img');
				$ext = $model->pruducts_type_img->extensionName;
				$tmpName='pruducts_type_'.time().'.'.$ext;
			
				if ($model->validate(array('pruducts_type_img'))) {
					$model->pruducts_type_img->Saveas(Yii::app()->basePath.'/../upload/pruducts_type_img/'.$tmpName);
					$model->pruducts_type_img=$tmpName;
					@unlink(Yii::app()->basePath.'/../upload/pruducts_type_img/'.$tmpOldName);
				}
			}else {
				$model->pruducts_type_img = $tmpOldName;
			}
			
			
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		//删除upload中的图片
		$model=$this->loadModel($id);
		$tmpOldName=$model->pruducts_type_img;
		@unlink(Yii::app()->basePath.'/../upload/pruducts_type_img/'.$tmpOldName);
		//删除其它
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('PruductsType');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new PruductsType('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['PruductsType']))
			$model->attributes=$_GET['PruductsType'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return PruductsType the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=PruductsType::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param PruductsType $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='pruducts-type-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
