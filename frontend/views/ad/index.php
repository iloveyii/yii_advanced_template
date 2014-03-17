<?php
/* @var $this AdController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ads',
);

//$this->menu=array(
//	array('label'=>'Create Ad', 'url'=>array('create')),
//	array('label'=>'Manage Ad', 'url'=>array('admin')),
//);
?>

    <div class="row">
        <div class="col-md-12">
            <hr>
        </div>
    </div>

    <div class="items">
        <?php foreach ($dataProvider->getData() as $data): ;?>
        <div class="col-md-3">
            <div class="thumbnail">
                <a href="#">
                    <img src="img/<?php echo $data->getImage();?>" class="img-responsive">
                </a>
                <div class="caption">
                    <h4><?php echo $data->name;?></h4>
                    <p>SEK <?php echo $data->price ;?></p>
                    <p>
                        <a class="btn btn-default" href="/buy/<?php echo $data->id?>">Details</a>
                        <a class="btn btn-success add-to-cart" id="1" href="#">Buy</a>
                    </p>
                </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>
