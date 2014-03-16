<?php

class CountyUrl extends CBaseUrlRule
{
 
    public function createUrl($manager,$route,$params,$ampersand)
    {
        // check route for this action 
        if ($route==='county/countycities')
        {
//            if (isset(Yii::app()->language) && Yii::app()->language=='sv' )
//                return 'tanka/'. $params['slug'];
//            else 
            // checks if slug exist in DB
            if(County::model()->slugExists($params['slug']))
                return $params['slug'];
        }
        return false;  // this rule does not apply
    }
 
    public function parseUrl($manager,$request,$pathInfo,$rawPathInfo)
    {
        if (preg_match('%^([\w\-]+)$%', $pathInfo, $matches))
        {
            $slug = $matches[1];
            if(County::model()->slugExists($slug)) {
                $_GET['slug']= $slug ; 
                return 'county/countycities';
            }
        }
        return false;  // this rule does not apply
    }
}