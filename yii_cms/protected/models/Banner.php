<?php

/**
 * This is the model class for table "{{banner}}".
 *
 * The followings are the available columns in table '{{banner}}':
 * @property string $id
 * @property string $banner_url
 * @property string $banner_img
 * @property string $banner_title
 * @property string $create_time
 * @property string $update_time
 * @property string $create_user_id
 * @property string $update_user_id
 * @property integer $status_id
 */
class Banner extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Banner the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{banner}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(

			array('status_id', 'numerical', 'integerOnly'=>true),
			array('banner_url', 'length', 'max'=>1000),
			array('banner_img', 'length', 'max'=>255),
			array('banner_title', 'length', 'max'=>100),
			array('banner_img', 'file', 'types'=>'jpg,gif,png', 'on'=>'create'),
			array('banner_img', 'file', 'allowEmpty'=>true, 'types'=>'jpg,gif,png'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, banner_url, banner_img, banner_title, create_time, update_time, create_user_id, update_user_id, status_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
				'statusName'=>array(self::BELONGS_TO,'Status','status_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'banner_url' => '地址',
			'banner_img' => '轮播图片',
			'banner_title' => '轮播图片标题',
			'create_time' => '创建时间',
			'update_time' => '更新时间',
			'create_user_id' => '创建人',
			'update_user_id' => '更新人',
			'status_id' => '状态',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('banner_url',$this->banner_url,true);
		$criteria->compare('banner_img',$this->banner_img,true);
		$criteria->compare('banner_title',$this->banner_title,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('create_user_id',$this->create_user_id,true);
		$criteria->compare('update_user_id',$this->update_user_id,true);
		$criteria->compare('status_id',$this->status_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	/**
	 * 自动保存创建时间创建人等
	 */
	public function beforeSave()
	{
		if (parent::beforeSave()){
			if($this->isNewRecord){
				$this->create_time=$this->update_time=date('Y-m-d H:i:s');
				$this->create_user_id=$this->update_user_id=Yii::app()->user->id;
			}else{
				$this->update_time=date('Y-m-d H:i:s');
				$this->update_user_id=Yii::app()->user->id;
			}
			return true;
		}else {
			return false;
		}
	}
}