<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity {

    private $_id;
    public $via;
    /**
     * Authenticates a user.
     * The example implementation makes sure if the username and password
     * are both 'demo'.
     * In practical applications, this should be changed to authenticate
     * against some persistent user identity storage (e.g. database).
     * @return boolean whether authentication succeeds.
     */
    public function authenticate() {
//        var_dump($this) or die();
        if ($this->via == 'student') {
            $record = Pelajar::model()->find('nip = :nip AND password = :password', array(
                ':nip' => $this->username,
                ':password' => md5($this->password),
            ));
        } else {
            $record = Admin::model()->find('username = :username AND password = :password', array(
                ':username' => $this->username,
                ':password' => md5($this->password),
            ));
        }
        if ($record === null)
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        else if ($record->password != md5($this->password))
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        else {
            $this->_id = ($this->via == 'student') ? $record->id_pelajar : $record->id_admin;
            $this->setState('title', ($this->via == 'student') ? $record->nip : $record->username);
            $this->errorCode = self::ERROR_NONE;
            Yii::app()->session[$this->via] = $record;
        }

        return !$this->errorCode;
    }

    public function getId() {
        return $this->_id;
    }

}