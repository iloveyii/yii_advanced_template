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
        if (preg_match('%^([\w\-]+)/?(\d+)?$%', $pathInfo, $matches))
        {
            // if county is set
            if(isset($matches[1])) {
                $slug = $matches[1];
            } else 
                return FALSE;
            
            if(County::model()->slugExists($slug)) {
                $_GET['slug']= $slug ;
                if(isset($matches[2])) {
                    $_GET['city_id']= $matches[2]; 
                }
                return 'ad/index';
            }
        }
        return false;  // this rule does not apply
    }
}