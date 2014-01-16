<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
        $record = Users::model()->findByAttributes(array('username'=>$this->username));
        if($record===null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if($record->password!==$this->password)
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else
        {
            foreach ($record as $key => $value) {
               $this->setState($key, (string) $value);
            }
            
            $this->setState('papelSession', $record->papel_id);
            $this->setState('idSession', $record->id);
            $this->setName($record->username);
            
            //Registra na tabela logs
            $logObj = new Logs();
            $logObj->user_id = $record->id;
            $logObj->data_login = new CDbExpression('NOW()');
            $logObj->insert();
           
            $this->errorCode=self::ERROR_NONE;
        }
        return !$this->errorCode;
	}
    
    public function setName($value) {
        $this->setState('__name',$value);
    }
    
    public function getName() {
        if(($name=$this->getState('__name'))!==null)
            return $name;
        else
            return $this->guestName;
    }
    
} 