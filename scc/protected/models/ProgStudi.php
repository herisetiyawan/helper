<?php

/**
 * This is the model class for table "prog_studi".
 *
 * The followings are the available columns in table 'prog_studi':
 * @property integer $id_prog_stud
 * @property string $nama
 * @property string $keterangan
 * @property string $date_created
 * @property string $user_created
 * @property string $date_modified
 * @property string $User_modified
 */
class ProgStudi extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return ProgStudi the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'prog_studi';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('nama', 'required'),
            array('nama', 'length', 'max' => 220),
            array('keterangan, user_created, user_modified', 'length', 'max' => 250),
            array('date_created, date_modified', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id_prog_stud, nama, keterangan, date_created, user_created, date_modified, user_modified', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id_prog_stud' => 'Id Prog Stud',
            'nama' => 'Nama',
            'keterangan' => 'Keterangan',
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
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id_prog_stud', $this->id_prog_stud);
        $criteria->compare('nama', $this->nama, true);
        $criteria->compare('keterangan', $this->keterangan, true);
        $criteria->compare('date_created', $this->date_created, true);
        $criteria->compare('user_created', $this->user_created, true);
        $criteria->compare('date_modified', $this->date_modified, true);
        $criteria->compare('User_modified', $this->user_modified, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function beforeSave() {
        if ($this->isNewRecord) {
            $this->date_created = date("Y-m-d H:i:s");
            $this->user_created = Yii::app()->user->name;
        } else {
            $this->date_modified = date("Y-m-d H:i:s");
            $this->user_modified = Yii::app()->user->name;
        }
        $this->nama = ucwords(strtolower($this->nama));
        return TRUE;
    }
    
    public function getAllProgStudi(){
        return $this->findAll();
    }

}