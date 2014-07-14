<?php

/**
 * This is the model class for table "winning_group".
 *
 * The followings are the available columns in table 'winning_group':
 * @property integer $id
 * @property integer $group_tier
 * @property string $amount
 * @property integer $num_of_winning_shares
 * @property integer $toto_result_id
 *
 * The followings are the available model relations:
 * @property Location[] $locations
 * @property TotoResult $totoResult
 */
class WinningGroup extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'winning_group';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('group_tier, toto_result_id', 'required'),
			array('group_tier, num_of_winning_shares, toto_result_id', 'numerical', 'integerOnly'=>true),
			array('amount', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, group_tier, amount, num_of_winning_shares, toto_result_id', 'safe', 'on'=>'search'),
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
			'locations' => array(self::MANY_MANY, 'Location', 'location_winning_group(winning_group_id, location_id)'),
			'totoResult' => array(self::BELONGS_TO, 'TotoResult', 'toto_result_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'group_tier' => 'Group Tier',
			'amount' => 'Amount',
			'num_of_winning_shares' => 'Num Of Winning Shares',
			'toto_result_id' => 'Toto Result',
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
		$criteria->compare('group_tier',$this->group_tier);
		$criteria->compare('amount',$this->amount,true);
		$criteria->compare('num_of_winning_shares',$this->num_of_winning_shares);
		$criteria->compare('toto_result_id',$this->toto_result_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return WinningGroup the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function TotoResultDate(){
		return "a";
	}
}
