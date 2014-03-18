<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string $firstname
 * @property string $password
 * @property string $email
 * @property string $mobile
 * @property string $lastname
 * @property string $provider
 * @property string $identifier
 * @property string $address
 * @property string $postnr
 * @property integer $city_id
 * @property string $phone
 *
 * The followings are the available model relations:
 * @property Cart[] $carts
 * @property Purchase[] $purchases
 * @property Resetpassword[] $resetpasswords
 */
class User extends CActiveRecord
{
    public $confirm_password;
    public $county_id;
    
    /**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('city_id, postnr', 'numerical', 'integerOnly'=>true),
			array('name, identifier', 'length', 'max'=>25),
			array('password, email', 'length', 'max'=>45),
            array('email','unique'),
            array('email','email'),
			array('mobile, provider, phone', 'length', 'max'=>15),
			array('address', 'length', 'max'=>85),
			array('postnr', 'length', 'max'=>5),
            array('password, confirm_password','required','on'=>'passwordset'),
            array('password,', 'length', 'min'=>3, 'max'=>20, 'on'=>'passwordset'),
            array('confirm_password','compare','compareAttribute'=>'password'),
            array('password, confirm_password', 'safe'),
            array('name, password, email, mobile', 'required'),
            
			array('name, email, mobile, address, postnr, city_id, phone', 'safe', 'on'=>'search'),
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
			'carts' => array(self::HAS_MANY, 'Cart', 'user_id'),
			'purchases' => array(self::HAS_MANY, 'Purchase', 'user_id'),
			'resetpasswords' => array(self::HAS_MANY, 'Resetpassword', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'password' => 'Password',
            'confirm_password' =>'Confirm Password',
			'email' => 'Email',
			'mobile' => 'Mobile',
			'provider' => 'Provider',
			'identifier' => 'Identifier',
			'address' => 'Address',
			'postnr' => 'Postnr',
			'city_id' => 'City',
			'phone' => 'Phone',
            'county_id'=>'County',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('provider',$this->provider,true);
		$criteria->compare('identifier',$this->identifier,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('postnr',$this->postnr,true);
		$criteria->compare('city_id',$this->city_id);
		$criteria->compare('phone',$this->phone,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    
    public function findBySocial($provider, $identifier) {
		$user = User::model()->findByAttributes(array('provider'=>$provider, 'identifier'=>$identifier));
		return $user;
	}
    
    public function getEmail($user_id) {
        $model= User::model()->findByPk($user_id);
        return $model->email;
    }
    
    public function isRegistered($email) {
        return User::model()->exists('email=:email',array(':email'=>$email));
    }
    
    public function savePassword($user_id, $password) {
        $model= User::model()->findByPk($user_id);
        if(isset($model)) {
            $model->password=$password;
            return $model->save(FALSE);
        } else {
            throw new CHttpException(500, 'Cannot save password');
        }
    }
}
