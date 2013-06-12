<?php

/**
 * This is the model class for table "admin".
 *
 * The followings are the available columns in table 'admin':
 * @property integer $id_admin
 * @property string $username
 * @property string $password
 * @property string $fullname
 * @property string $email
 * @property string $no_phone
 * @property string $access_status
 * @property string $date_created
 * @property string $user_created
 * @property string $date_modified
 * @property string $user_modified
 */
class Admin extends CActiveRecord {

    public $oldpassword;
    public $repassword;

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Admin the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'admin';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('username, password, fullname, email, no_phone, access_status', 'required'),
//            array('username, password, fullname, email, no_phone, access_status', 'required','on'=>'baru'),
//            array('username, fullname, email, no_phone, access_status', 'required','on'=>'update'),
//            array('oldpassword,password,repassword', 'required','on'=>'chpas'),
//            array('username, fullname, access_status, user_created, user_modified', 'length', 'max' => 160),
            array('password', 'length', 'max' => 300),
            array('email', 'length', 'max' => 200),
            array('email', 'email'),
            array('no_phone', 'numerical', 'integerOnly' => true),
            array('no_phone', 'length', 'max' => 25),
            array('date_created, date_modified', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id_admin, username, password, fullname, email, no_phone, access_status, date_created, user_created, date_modified, user_modified', 'safe', 'on' => 'search'),
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
            'id_admin' => 'Id Admin',
            'username' => 'Username',
            'password' => 'Password',
            'fullname' => 'Fullname',
            'email' => 'Email',
            'no_phone' => 'No Phone',
            'access_status' => 'Access Status',
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

        $criteria->compare('id_admin', $this->id_admin);
        $criteria->compare('username', $this->username, true);
        $criteria->compare('password', $this->password, true);
        $criteria->compare('fullname', $this->fullname, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('no_phone', $this->no_phone, true);
        $criteria->compare('access_status', $this->access_status, true);
        $criteria->compare('date_created', $this->date_created, true);
        $criteria->compare('user_created', $this->user_created, true);
        $criteria->compare('date_modified', $this->date_modified, true);
        $criteria->compare('user_modified', $this->user_modified, true);

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
        $this->fullname = ucwords(strtolower($this->fullname));
        $this->setPasswordGen();
        return TRUE;
    }

    public function setPasswordGen() {
        if ($this->scenario == 'chpass' || $this->isNewRecord) {
            $this->password = md5($this->password);
        }
    }

    public function getActionsUser($privilege) {
        $this->hasUser();
        return $privilege[Yii::app()->session['admin']->access_status];
    }

    public function getUserStatus($privilege) {
        $this->hasUser();
        return array(Yii::app()->session['admin']->username);
    }
    
    public function hasUser(){
        if(Yii::app()->session['admin'] == NULL ){
            throw new CHttpException(403, 'You are not authorized to perform this action.');
        }
    }

}