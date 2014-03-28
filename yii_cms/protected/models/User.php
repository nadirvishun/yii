<?php

/**
 * This is the model class for table "{{user}}".
 *
 * The followings are the available columns in table '{{user}}':
 * @property string $id
 * @property string $username
 * @property string $password
 * @property string $realname
 * @property string $create_time
 * @property string $update_time
 * @property string $create_user_id
 * @property string $update_user_id
 * @property integer $status_id
 */
class User extends CActiveRecord
{
	public $passwordAgain;
	public $passwordOld;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
		return '{{user}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password', 'required'),
// 			array('password','compare','compareAttribute'=>'passwordAgain', 'message' => '两次密码输入不一致'),
			array('password', 'compare', 'compareAttribute'=>'passwordAgain', 'on'=>'register, updatePass'),
			array('username','unique'),
			array('status_id', 'numerical', 'integerOnly'=>true),
			array('username', 'length', 'max'=>64),
			array('password', 'length', 'max'=>32),
			array('realname', 'length', 'max'=>6),
			array('create_user_id, update_user_id', 'length', 'max'=>10),
				
			array('passwordOld', 'required', 'on'=>'updatePass'),
			array('status_id, passwordAgain, passwordOld', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, password, realname, create_time, update_time, create_user_id, update_user_id, status_id', 'safe', 'on'=>'search'),
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
			'username' => '用户名',
			'password' => '密码',
			'passwordAgain' => '再次输入密码',
			'passwordOld'=>'旧密码',
			'realname' => '真实姓名',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('realname',$this->realname,true);
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
	 * 自动存储创建/更新时间和id
	 */
	public function beforeSave()
	{
		if(parent::beforeSave())
		{
			if($this->isNewRecord)
			{
				$this->create_time = $this->update_time = date('Y-m-d H:i:s');
				$this->create_user_id = $this->update_user_id = Yii::app()->user->id;
				$this->password = User::model()->encrypt($this->password);
			}else{
				$this->update_time=date('Y-m-d H:i:s');
				$this->update_user_id=Yii::app()->user->id;
				//下面这个if语句是为了更改密码时使用？
				if (!empty($this->passwordAgain))
					$this->password=User::model()->encrypt($this->password);
			}
	
			return true;
		}else {
			return false;
		}
	}
	/**
	 * ValidatePassword 利用本身的password作为关键词加密
	 */
	public function validatePassword($password)
	{
		
			return $this->encrypt($password)===$this->password;
		
	}
	/**
	 * md5方式加密
	 * @return string
	 */
	public function encrypt($pass)
	{
		return md5($pass);
	}
}