<?php

/**
 * This is the model class for table "aoe_user".
 *
 * The followings are the available columns in table 'aoe_user':
 * @property integer $uid
 * @property integer $uname
 * @property string $other_id
 * @property string $other_type
 * @property string $other_info
 * @property string $ctime
 */
class User extends CActiveRecord
{
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
		return 'aoe_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('uname, other_id, other_type, other_info, ctime', 'required'),
			array('uname', 'numerical', 'integerOnly'=>true),
			array('other_id', 'length', 'max'=>50),
			array('other_type', 'length', 'max'=>4),
			array('ctime', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('uid, uname, other_id, other_type, other_info, ctime', 'safe', 'on'=>'search'),
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
			'uid' => 'Uid',
			'uname' => 'Uname',
			'other_id' => 'Other',
			'other_type' => 'Other Type',
			'other_info' => 'Other Info',
			'ctime' => 'Ctime',
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

		$criteria->compare('uid',$this->uid);
		$criteria->compare('uname',$this->uname);
		$criteria->compare('other_id',$this->other_id,true);
		$criteria->compare('other_type',$this->other_type,true);
		$criteria->compare('other_info',$this->other_info,true);
		$criteria->compare('ctime',$this->ctime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}