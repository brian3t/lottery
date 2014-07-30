<?php

/**
 * This is the model class for table "toto_result".
 *
 * The followings are the available columns in table 'toto_result':
 * @property integer $id
 * @property string $date
 * @property string $winning_numbers
 * @property integer $additional_winning_number
 * @property integer $draw_number
 * @property string $jackpot_date
 * @property string $jackpot_result
 *
 * The followings are the available model relations:
 * @property WinningGroup[] $winningGroups
 */
class TotoResult extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'toto_result';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('additional_winning_number, draw_number', 'numerical', 'integerOnly'=>true),
			array('winning_numbers, jackpot_result', 'length', 'max'=>800),
			array('date, jackpot_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, date, winning_numbers, additional_winning_number, draw_number, jackpot_date, jackpot_result', 'safe', 'on'=>'search'),
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
			'winningGroups' => array(self::HAS_MANY, 'WinningGroup', 'toto_result_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'date' => 'Date',
			'winning_numbers' => 'Winning Numbers',
			'additional_winning_number' => 'Additional Winning Number',
			'draw_number' => 'Draw Number',
			'jackpot_date' => 'Jackpot Date',
			'jackpot_result' => 'Jackpot Result',
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
		$criteria->compare('date',$this->date,true);
		$criteria->compare('winning_numbers',$this->winning_numbers,true);
		$criteria->compare('additional_winning_number',$this->additional_winning_number);
		$criteria->compare('draw_number',$this->draw_number);
		$criteria->compare('jackpot_date',$this->jackpot_date,true);
		$criteria->compare('jackpot_result',$this->jackpot_result,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TotoResult the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
