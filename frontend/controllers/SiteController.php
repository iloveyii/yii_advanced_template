<?php
/**
 *
 * SiteController class
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @copyright 2013 2amigOS! Consultation Group LLC
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
class SiteController extends EController
{
    public $debugMode=true;
    
	public function actionIndex()
	{
		$this->render('index');
	}

    /**
	 * Displays the login page
	 */
	public function actionLogin($email=false)
	{
		if (isset($_GET['social'])) {
			$this->authenticateSocial(ucfirst($_GET['social']));
		}
		$model=new LoginForm;
        if($email != false)
            $model->username=$email;
		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
        
		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login()  ) { // && $model->login() $model->validate()
                // if($email != false)
                    // $this->redirect(array('ad/index'));
                echo 'inside if ' . Yii::app()->user->isGuest;
				// $this->redirect(Yii::app()->user->returnUrl);
            }
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}
    
    private  function authenticateSocial($provider='Facebook'){
        if(!Yii::app()->user->isGuest || !Yii::app()->hybridAuth->isAllowedProvider($provider))
            $this->redirect(Yii::app()->homeUrl);
 
        if($this->debugMode)
            Yii::app()->hybridAuth->showError=true;
 
        if(Yii::app()->hybridAuth->isAdapterUserConnected($provider)){
        	try {
            	$socialUser = Yii::app()->hybridAuth->getAdapterUserProfile($provider);
        	} catch (Exception $e) {
        		throw new CHttpException(403, 'Accessed denied or user cancelled social login. ' . $e->getMessage());
        	}
            // return ;
            if(isset($socialUser)){
                // find user from db model with social user info
                $user = User::model()->findBySocial($provider, $socialUser->identifier);
                if(empty($user)){ 
                    // if not exist register new user with social user info.
                    $model = new User;
                    $model->provider = $provider;
                    $model->identifier = $socialUser->identifier;
                    $model->email = $socialUser->email;
                    $model->firstname = $socialUser->firstName;
                    $model->lastname = $socialUser->lastName;
              
                    // ......
                    if($model->save(false)){
                       $user=$model; 
                    }else{
                       $user=false;
                    }
                }
                if($user){
                    $identity = new UserIdentity($user->email, $user->password);
                    $identity->authenticate($social=true);
                    switch ($identity->errorCode) {
                      // ...... 
                      case UserIdentity::ERROR_NONE:
                           Yii::app()->user->login($identity);
                           // $this->redirect(Yii::app()->request->urlReferer);
                           break;
                      // ...... 
                    }
                }
            }
        }
        $this->redirect(Yii::app()->homeUrl);
    }
	
	public function actionForgotpassword() {
        $model=new ForgotpasswordForm;
        if(isset($_POST['ForgotpasswordForm']))
		{
			$model->attributes=$_POST['ForgotpasswordForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->sendPasswordResetLink()) {
                $email=$model->email;
                $model->unsetAttributes();
                Yii::app()->user->setFlash('success', "<strong> An email containg password reset link has been sent to $email. </strong>");
                $message="<p>Go to your email and click the link and the follow the instructions.</p>"; 
            }
		}
		// display the login form
		$this->render('forgotpassword',array(
            'model'=>$model
        ));
    }
	
    public function actionResetpassword($hash) {
        $model = new Resetpassword('resetpassword');
        // check if hash is valid
        $msg = $model->validHash($hash);
        if($msg === TRUE) {
            
            if(isset($_POST['Resetpassword']))
            {
                $model->attributes=$_POST['Resetpassword'];
                // validate user input and redirect to the previous page if valid
                if($model->validate()) {
                    $msg = $model->resetPass($hash);
                    if($msg===TRUE) {
                        $model->password=''; $model->confirm_password='';
                        Yii::app()->user->setFlash('success', "<strong> Password reset successfully. </strong>");
                    } else {
                        Yii::app()->user->setFlash('success', "<strong> $msg </strong>");
                    }
                }
            }
            
        }  else {
            Yii::app()->user->setFlash('success', "<strong> $msg </strong>");
            // display the login form
            $this->actionForgotpassword();
            return;
        }
            
		// display the login form
		$this->render('resetpassword',array(
            'model'=>$model
        ));
    }
    
	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		if(Yii::app()->hybridAuth->getConnectedProviders()){
            Yii::app()->hybridAuth->logoutAllProviders();
        }
		$this->redirect(Yii::app()->homeUrl);
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}
    
    public function actionContact() {
        $this->render('contact');
    }
    
    public function actionProduct() {
        $this->layout="county";
        $this->render('product');
    }
    
    public function actionCounty() {
        $dataProvider=new CActiveDataProvider('County');
		$this->render('county',array(
			'dataProvider'=>$dataProvider,
		));
    }
}