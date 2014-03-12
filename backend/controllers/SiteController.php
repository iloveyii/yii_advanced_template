<?php
/**
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

	/**
	 * Renders index
	 */
	public function actionIndex()
	{
		$this->render('index');
	}
    
    /**
	 * Renders index
	 */
	public function actionHome()
	{
		$this->render('home');
	}
    
	public function actionUsersview()
	{
		$this->render('usersview');
	}
    
	public function actionUsersedit()
	{
		$this->render('usersedit');
	}
    
	public function actionProductedit()
	{
		$this->render('productedit');
	}
    
	public function actionProductview()
	{
		$this->render('productview');
	}
    
    public function actionForms()
	{
		$this->render('forms');
	}
    
    public function actionSeo()
	{
		$this->render('seo');
	}
    
    public function actionFlot()
	{
		$this->render('flot');
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
    
    public function beforeAction($action) {
        if(parent::beforeAction($action)) {
            switch ($action->getId()) {
                case 'usersview':
                    Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/icons.css');
                    Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/index.css');
                    Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/dataTables.bootstrap.css');
                    break;
                case 'home' :
                    Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/timeline.css');
                    break;
                 case 'home' :
                     Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/morris-0.4.3.min.css');
                     break;
            }
            return true;
        }
        
        return FALSE;
    }
}