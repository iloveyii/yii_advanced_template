<?php

/**
 * This is the model class for table "carousel".
 *
 * The followings are the available columns in table 'carousel':
 * @property integer $id
 * @property string $image_file
 * @property string $heading
 * @property string $para
 * @property integer $active
 * @property string $alt
 */
class Carousel extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'carousel';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('active', 'numerical', 'integerOnly'=>true),
			array('image_file, alt', 'length', 'max'=>45),
			array('heading', 'length', 'max'=>65),
			array('para', 'length', 'max'=>95),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, image_file, heading, para, active, alt', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'image_file' => 'Image File',
			'heading' => 'Heading',
			'para' => 'Para',
			'active' => 'Active',
			'alt' => 'Alt',
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
		$criteria->compare('image_file',$this->image_file,true);
		$criteria->compare('heading',$this->heading,true);
		$criteria->compare('para',$this->para,true);
		$criteria->compare('active',$this->active);
		$criteria->compare('alt',$this->alt,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Carousel the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    
    public function getCarousel() {
        $cars = Carousel::model()->findAllByAttributes(array('active'=>1));
        $first  = TRUE;
        // <!-- Carousel 
        // ============================================= -->
        $carousel =  
        '<div id="carousel-id" class="carousel slide" data-ride="carousel" data-interval="3000">
            <ol class="carousel-indicators">
                <li data-target="#carousel-id" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-id" data-slide-to="1"></li>
                <li data-target="#carousel-id" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" style="height: 200px;">';
        // for each active item
        foreach($cars as $car) {
            if($first) {
                $carousel .=
                    '<div class="item active">';
                $first=FALSE;
            } else {
                $carousel .=
                    '<div class="item">';
            }
            $carousel .=
                '<img alt="'.$car->alt.'" src="'. Yii::app()->baseUrl.'/img/'. $car->image_file . '" />
                <div class="container">
                    <div class="carousel-caption">
                        <h1>'.$car->heading.'</h1>
                        <p>'.$car->para.'</p>
                        <p><a href="#" class="btn btn-primary">Learn more</a></p>
                    </div>
                </div>
            </div>';
        }
        $carousel .= '</div>';
        $carousel .=
        '<a href="#carousel-id" class="left carousel-control" data-slide="next">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a href="#carousel-id" class="right carousel-control" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>';
        $carousel .= '</div>';
        // <!-- Carousel -->
        return $carousel;
    }
                                
}
