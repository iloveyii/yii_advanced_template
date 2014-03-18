<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;
    public $email;
    /**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate($social=FALSE) 	{
		if ($social) {
			$user=User::model()->findByAttributes(array('email'=>$this->username));
			if($user===null) {
	            $this->errorCode=self::ERROR_USERNAME_INVALID;
	            return !$this->errorCode;
			}
			$this->_id=$user->id;
            $this->setState('roles', 'User');            
            $this->errorCode=self::ERROR_NONE;
            return !$this->errorCode;
		}
		$isAdminUser= $this->isAdminUser(); 
		// if (strpos($this->username,'@') !== FALSE) {
		if($isAdminUser) {	
	        $user=Admin::model()->findByAttributes(array('username'=>$this->username));
	        if($user===null)
	            $this->errorCode=self::ERROR_USERNAME_INVALID;
	        else if($user->password!==($this->password))
	            $this->errorCode=self::ERROR_PASSWORD_INVALID;
	        else
	        {
	            $this->_id=$user->id;
	            $this->setState('roles', $user->roles);            
	            $this->errorCode=self::ERROR_NONE;
	        }
	        return !$this->errorCode;
	        
		} else {
			
			/* Uncomment the following if you want to use DB based user authentication, may for external users */
			$user=User::model()->findByAttributes(array('email'=>$this->username));
			if($user===null)
	            $this->errorCode=self::ERROR_USERNAME_INVALID;
	        else if($user->password!==($this->password))
	            $this->errorCode=self::ERROR_PASSWORD_INVALID;
	        else {
	            $this->_id=$user->id;
	            $this->setState('roles', 'User');    // Hard coded as no RBAC
                $this->setState('email', $user->email);
	            $this->errorCode=self::ERROR_NONE;
	        }
	        return !$this->errorCode;	
		}
	}
	
	public function getId() {
		return $this->_id;
	}
	
    private function isAdminUser() {
    	$adminUser= Admin::model()->findByAttributes(array('username'=>$this->username));
    	if ($adminUser===null)
    		return FALSE;
    	else 
    		return TRUE;
    }
}