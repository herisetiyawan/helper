<?php

/**
 * This is the model class for table "pelajar".
 *
 * The followings are the available columns in table 'pelajar':
 * @property integer $id_pelajar
 * @property string $nip
 * @property string $password
 * @property string $nama
 * @property string $tempat
 * @property string $tanggal_lahir
 * @property string $email
 * @property string $jenis_kelamin
 * @property string $alamat
 * @property string $agama
 * @property string $sekolah
 * @property integer $kelas
 * @property string $alamat_sekolah
 * @property integer $program
 * @property string $no_formulir
 * @property string $date_created
 * @property integer $is_active
 * @property integer $confirmasi_status
 */
class Pelajar extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pelajar the static model class
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
		return 'pelajar';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, tempat, tanggal_lahir, email, jenis_kelamin, alamat, agama, sekolah, kelas, alamat_sekolah', 'required'),
			array('kelas, program, is_active, confirmasi_status', 'numerical', 'integerOnly'=>true),
			array('nip, no_formulir', 'length', 'max'=>20),
			array('nama', 'length', 'max'=>160),
			array('tempat', 'length', 'max'=>100),
			array('email', 'length', 'max'=>220),
			array('jenis_kelamin', 'length', 'max'=>1),
			array('agama', 'length', 'max'=>60),
			array('sekolah', 'length', 'max'=>10),
			array('password, date_created', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_pelajar, nip, password, nama, tempat, tanggal_lahir, email, jenis_kelamin, alamat, agama, sekolah, kelas, alamat_sekolah, program, no_formulir, date_created, is_active, confirmasi_status', 'safe', 'on'=>'search'),
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
			'id_pelajar' => 'Id Pelajar',
			'nip' => 'Nip',
			'password' => 'Password',
			'nama' => 'Nama',
			'tempat' => 'Tempat',
			'tanggal_lahir' => 'Tanggal Lahir',
			'email' => 'Email',
			'jenis_kelamin' => 'Jenis Kelamin',
			'alamat' => 'Alamat',
			'agama' => 'Agama',
			'sekolah' => 'Sekolah',
			'kelas' => 'Kelas',
			'alamat_sekolah' => 'Alamat Sekolah',
			'program' => 'Program',
			'no_formulir' => 'No Formulir',
			'date_created' => 'Date Created',
			'is_active' => 'Is Active',
			'confirmasi_status' => 'Confirmasi Status',
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

		$criteria->compare('id_pelajar',$this->id_pelajar);
		$criteria->compare('nip',$this->nip,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('tempat',$this->tempat,true);
		$criteria->compare('tanggal_lahir',$this->tanggal_lahir,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('jenis_kelamin',$this->jenis_kelamin,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('agama',$this->agama,true);
		$criteria->compare('sekolah',$this->sekolah,true);
		$criteria->compare('kelas',$this->kelas);
		$criteria->compare('alamat_sekolah',$this->alamat_sekolah,true);
		$criteria->compare('program',$this->program);
		$criteria->compare('no_formulir',$this->no_formulir,true);
		$criteria->compare('date_created',$this->date_created,true);
		$criteria->compare('is_active',$this->is_active);
		$criteria->compare('confirmasi_status',$this->confirmasi_status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}