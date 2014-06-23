<?php

/**
 * This is the model class for table "project_message".
 *
 * The followings are the available columns in table 'project_message':
 * @property integer $id
 * @property string $description
 * @property string $dateCreated
 * @property string $dateChanged
 * @property integer $user_id
 * @property integer $old_project_status_id
 * @property integer $new_project_status_id
 * @property integer $project_id
 * @property string $message
 *
 * The followings are the available model relations:
 * @property Project $project
 * @property ProjectStatus $oldProjectStatus
 * @property ProjectStatus $newProjectStatus
 * @property User $user
 */
class ProjectMessage extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'project_message';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, project_id', 'required'),
			array('user_id, old_project_status_id, new_project_status_id, project_id', 'numerical', 'integerOnly'=>true),
			array('description', 'length', 'max'=>255),
			array('message', 'length', 'max'=>2000),
			array('dateCreated, dateChanged', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, description, dateCreated, dateChanged, user_id, old_project_status_id, new_project_status_id, project_id, message', 'safe', 'on'=>'search'),
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
			'project' => array(self::BELONGS_TO, 'Project', 'project_id'),
			'oldProjectStatus' => array(self::BELONGS_TO, 'ProjectStatus', 'old_project_status_id'),
			'newProjectStatus' => array(self::BELONGS_TO, 'ProjectStatus', 'new_project_status_id'),
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'description' => 'Description',
			'dateCreated' => 'Date Created',
			'dateChanged' => 'Date Changed',
			'user_id' => 'User',
			'old_project_status_id' => 'Old Project Status',
			'new_project_status_id' => 'New Project Status',
			'project_id' => 'Project',
			'message' => 'Message',
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
		$criteria->compare('description',$this->description,true);
		$criteria->compare('dateCreated',$this->dateCreated,true);
		$criteria->compare('dateChanged',$this->dateChanged,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('old_project_status_id',$this->old_project_status_id);
		$criteria->compare('new_project_status_id',$this->new_project_status_id);
		$criteria->compare('project_id',$this->project_id);
		$criteria->compare('message',$this->message,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProjectMessage the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
