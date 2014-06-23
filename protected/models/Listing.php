<?php

/**
 * This is the model class for table "listing".
 *
 * The followings are the available columns in table 'listing':
 * @property integer $id
 * @property integer $listing_type_id
 * @property double $unit_price
 * @property double $asking_price
 * @property integer $unit_id
 *
 * The followings are the available model relations:
 * @property ListingType $listingType
 * @property Unit $unit
 */
class Listing extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'listing';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('listing_type_id, unit_id', 'required'),
			array('listing_type_id, unit_id', 'numerical', 'integerOnly'=>true),
			array('unit_price, asking_price', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, listing_type_id, unit_price, asking_price, unit_id', 'safe', 'on'=>'search'),
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
			'listingType' => array(self::BELONGS_TO, 'ListingType', 'listing_type_id'),
			'unit' => array(self::BELONGS_TO, 'Unit', 'unit_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'listing_type_id' => 'Listing Type',
			'unit_price' => 'Unit Price',
			'asking_price' => 'Asking Price',
			'unit_id' => 'Unit',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('listing_type_id',$this->listing_type_id);
		$criteria->compare('unit_price',$this->unit_price);
		$criteria->compare('asking_price',$this->asking_price);
		$criteria->compare('unit_id',$this->unit_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Listing the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
