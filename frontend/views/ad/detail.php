    <div class="row">
        <div class="col-md-12">
            <hr>
        </div>
    </div>
    
    <div class="items">
        <div class="col-md-5">
            <div class="thumbnail">
                <a href="#">
                    <img style="height: 225px;" src="<?php echo $pImage ;?>" class="img-responsive">
                </a>
                <div class="caption">
                    <h4><?php echo $model->name ;?></h4>
                    <p>SEK: <?php echo $model->price ;?></p>
                </div>
            </div>
            <?php foreach ($images as $image): ?>
            <div class="col-md-3 no-pad">
                <div class="thumbnail">
                    <a href="<?php echo $image->getAdLink($model->id); ?>">
                        <img style="height: 90px;"  src="<?php echo $image->getImage() ;?>" class="img-responsive">
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <div class="col-md-6 col-md-offset-1">
            <div class="col-md-4" style="padding: 0px; border: 1px solid #DEDEDE; text-align: center;">
                <div class="col-md-3" style="padding: 0px;"><a href="#" style="display: inline-block;width: 100%;background-color:#DEDEDE;">-</a></div>
                <div class="col-md-6" style="padding: 0px; text-align: center;">
                    <span style="margin: 0px;padding: 0px;display: block; border-left:1px solid #DEDEDE; border-right:1px solid #DEDEDE;">1</span>
                </div>
                <div class="col-md-3" style="padding: 0px;"><a href="#" style="display: inline-block;width: 100%;background-color:#DEDEDE;">+</a></div>
            </div>
        </div>
    </div>
	
<?php 
// print_r($_GET); 
echo Yii::app()->request->url;
?>