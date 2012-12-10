<?php

/**
 * This is the model class for table "aoe_item".
 *
 * The followings are the available columns in table 'aoe_item':
 * @property string $item_id
 * @property string $title
 * @property string $photo
 * @property string $Details
 * @property string $ctime
 */
class Item extends CActiveRecord
{
    public $yPosition,$lineMaxCount, $fontSize, $fixLeft, $shadowFix;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Item the static model class
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
		return 'aoe_item';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, photo', 'required'),
			array('title, photo, yPosition', 'length', 'max'=>255),
            array('lineMaxCount, fontSize, fixLeft, shadowFix', 'length', 'max'=>4),
			array('ctime', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('item_id, title, photo, Details, ctime ', 'safe', 'on'=>'search'),
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
			'item_id' => 'Item',
			'title' => 'Title',
			'photo' => 'Photo',
			'Details' => 'Details',
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

		$criteria->compare('item_id',$this->item_id,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('photo',$this->photo,true);
		$criteria->compare('Details',$this->Details,true);
		$criteria->compare('ctime',$this->ctime,true);
        $criteria->compare('lineMaxCount',$this->ctime,true);


		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    public function beforeSave(){
        if($this->getIsNewRecord()){
            $this->ctime = time();
        }

        if(!$this->getIsNewRecord() && !empty($this->Details)){
            $detailArray = unserialize($this->Details);
        }else{
            $detailArray = array();
        }

        $fixArray = array("yPosition", "lineMaxCount", "fontSize", "fixLeft", "shadowFix");
        foreach($fixArray as $fix){
           if(!empty($this->$fix)){
               $detailArray[$fix] = $this->$fix;
           }
        }

        if(!empty($detailArray)){
            $this->Details = serialize($detailArray);
        }

        return parent::beforeSave();
    }

    public function afterFind(){
        if(!empty($this->Details)){
            $detailArray = unserialize($this->Details);
            foreach($detailArray as $k=>$detail){
                $this->$k = $detail;
            }
        }
        return parent::afterFind();
    }
}