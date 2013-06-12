<?php

/**
 * This is the model class for table "type_info".
 *
 * The followings are the available columns in table 'type_info':
 * @property integer $id_type_info
 * @property string $name
 * @property string $description
 * @property string $date_created
 * @property string $user_created
 * @property string $date_modified
 * @property string $user_modified
 *
 * The followings are the available model relations:
 * @property Information[] $informations
 */
class TypeInfo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TypeInfo the static model class
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
		return 'type_info';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'required'),
			array('name, user_created, user_modified', 'length', 'max'=>160),
			array('description, date_created, date_modified', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_type_info, name, description, date_created, user_created, date_modified, user_modified', 'safe', 'on'=>'search'),
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
			'informations' => array(self::HAS_MANY, 'Information', 'id_type_info'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_type_info' => 'Id Type Info',
			'name' => 'Name',
			'description' => 'Description',
			'date_created' => 'Date Created',
			'user_created' => 'User Created',
			'date_modified' => 'Date Modified',
			'user_modified' => 'User Modified',
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

		$criteria->compare('id_type_info',$this->id_type_info);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('date_created',$this->date_created,true);
		$criteria->compare('user_created',$this->user_created,true);
		$criteria->compare('date_modified',$this->date_modified,true);
		$criteria->compare('user_modified',$this->user_modified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}