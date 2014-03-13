<?php

/**
 * This is the model class for table "{{pruducts}}".
 *
 * The followings are the available columns in table '{{pruducts}}':
 * @property string $id
 * @property string $pruducts_name
 * @property integer $pruducts_img
 * @property string $pruducts_content
 * @property string $type_id
 * @property string $create_time
 * @property string $update_time
 * @property string $creat_user_id
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
			array('pruducts_name, pruducts_img, pruducts_content, type_id, create_time, update_time, creat_user_id, update_user_id, status_id', 'required'),
			array('pruducts_img, status_id', 'numerical', 'integerOnly'=>true),
			array('pruducts_name, hit', 'length', 'max'=>255),
			array('type_id, creat_user_id, update_user_id', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, pruducts_name, pruducts_img, pruducts_content, type_id, create_time, update_time, creat_user_id, update_user_id, status_id, hit', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'pruducts_name' => 'Pruducts Name',
			'pruducts_img' => 'Pruducts Img',
			'pruducts_content' => 'Pruducts Content',
			'type_id' => 'Type',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
			'creat_user_id' => 'Creat User',
			'update_user_id' => 'Update User',
			'status_id' => 'Status',
			'hit' => 'Hit',
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
		$criteria->compare('pruducts_img',$this->pruducts_img);
		$criteria->compare('pruducts_content',$this->pruducts_content,true);
		$criteria->compare('type_id',$this->type_id,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('creat_user_id',$this->creat_user_id,true);
		$criteria->compare('update_user_id',$this->update_user_id,true);
		$criteria->compare('status_id',$this->status_id);
		$criteria->compare('hit',$this->hit,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}