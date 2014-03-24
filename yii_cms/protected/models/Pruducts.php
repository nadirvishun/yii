<?php

/**
 * This is the model class for table "{{pruducts}}".
 *
 * The followings are the available columns in table '{{pruducts}}':
 * @property string $id
 * @property string $pruducts_name
 * @property string $pruducts_img
 * @property string $pruducts_content
 * @property string $type_id
 * @property string $create_time
 * @property string $update_time
 * @property string $create_user_id
 * @property string $update_user_id
 * @property integer $status_id
 * @property string $hit
 */
class Pruducts extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pruducts the static model class
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
		return '{{pruducts}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pruducts_name, pruducts_img', 'required'),
			array('status_id', 'numerical', 'integerOnly'=>true),
			array('pruducts_name, pruducts_img, hit', 'length', 'max'=>255),
// 			array('type_id, create_user_id, update_user_id', 'length', 'max'=>10),
			array('pruducts_content,type_id,status_id','safe'),
			array('pruducts_img', 'file', 'types'=>'jpg,gif,png', 'on'=>'create'),
			array('pruducts_img', 'file', 'allowEmpty'=>true, 'types'=>'jpg,gif,png'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, pruducts_name, pruducts_img, pruducts_content, type_id, create_time, update_time, create_user_id, update_user_id, status_id, hit', 'safe', 'on'=>'search'),
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
				'typeName'=>array(self::BELONGS_TO,'PruductsType','type_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'pruducts_name' => '产品名称',
			'pruducts_img' => '产品图片',
			'pruducts_content' => '产品描述',
			'type_id' => '产品类别',
			'create_time' => '创建时间',
			'update_time' => '更新时间',
			'create_user_id' => '创建人',
			'update_user_id' => '更新人',
			'status_id' => '状态',
			'hit' => '点击量',
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
		$criteria->compare('pruducts_name',$this->pruducts_name,true);
		$criteria->compare('pruducts_img',$this->pruducts_img,true);
		$criteria->compare('pruducts_content',$this->pruducts_content,true);
		$criteria->compare('type_id',$this->type_id,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('create_user_id',$this->create_user_id,true);
		$criteria->compare('update_user_id',$this->update_user_id,true);
		$criteria->compare('status_id',$this->status_id);
		$criteria->compare('hit',$this->hit,true);

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