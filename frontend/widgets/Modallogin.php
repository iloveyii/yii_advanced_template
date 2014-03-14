<?php
Yii::import('zii.widgets.CPortlet');

/**
 * Login Widget
 * Displays the modal login box
 */
class Modallogin extends CPortlet
{
	public $title='';
	
    public function init()
    {
        parent::init();
    }
 
    protected function renderContent()
    {
        $form=new LoginForm;
        if(isset($_POST['LoginForm']))
        {
            $form->attributes=$_POST['LoginForm'];
            if($form->validate() && $form->login()) {
				$this->controller->redirect(Yii::app()->user->returnUrl);
            } 
        }
        $this->render('modalLogin',array('form'=>$form));
    }
}
?>