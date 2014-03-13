<div id="language-select">
<?php 
    if(sizeof($languages) < 4) {
        // Render options as links
        $imagesFolder = Yii::app()->baseUrl . '/img/';
        $lastElement = end($languages);
        foreach($languages as $key=>$lang) {
            if($key != $currentLang) {
                echo CHtml::link(
                     "<img class='img-responsive img-thumbnail' src='{$imagesFolder}{$key}.png' alt='Swedish' >", 
                     $this->getOwner()->createMultilanguageReturnUrl($key));
            } else echo "<img class='img-responsive img-thumbnail flag-focus' src='{$imagesFolder}/{$key}.png' alt='Swedish' >";
            if($lang != $lastElement) echo ' ';
        }
    }
    else {
        // Render options as dropDownList
        echo CHtml::form();
        foreach($languages as $key=>$lang) {
            echo CHtml::hiddenField(
                $key, 
                $this->getOwner()->createMultilanguageReturnUrl($key));
        }
        echo CHtml::dropDownList('language', $currentLang, $languages,
            array(
                'submit'=>'',
            )
        ); 
        echo CHtml::endForm();
    }
?>
</div>
