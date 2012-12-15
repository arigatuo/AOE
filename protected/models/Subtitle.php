<?php

/**
 * This is the model class for table "aoe_subtitle".
 *
 * The followings are the available columns in table 'aoe_subtitle':
 * @property string $subtitle_id
 * @property string $item_id
 * @property string $subtilte_info
 * @property string $subtilte_photo
 * @property string $ctime
 */
class Subtitle extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Subtitle the static model class
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
		return 'aoe_subtitle';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('item_id, subtilte_info, subtilte_photo, ctime', 'required'),
			array('item_id', 'length', 'max'=>20),
			array('subtilte_photo', 'length', 'max'=>255),
			array('ctime', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('subtitle_id, item_id, subtilte_info, subtilte_photo, ctime', 'safe', 'on'=>'search'),
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
			'subtitle_id' => 'Subtitle',
			'item_id' => 'Item',
			'subtilte_info' => 'Subtilte Info',
			'subtilte_photo' => 'Subtilte Photo',
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

		$criteria->compare('subtitle_id',$this->subtitle_id,true);
		$criteria->compare('item_id',$this->item_id,true);
		$criteria->compare('subtilte_info',$this->subtilte_info,true);
		$criteria->compare('subtilte_photo',$this->subtilte_photo,true);
		$criteria->compare('ctime',$this->ctime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}