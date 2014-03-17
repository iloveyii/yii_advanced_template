<?php

class CountyCitiesUrl extends CBaseUrlRule
{
 
    public function createUrl($manager,$route,$params,$ampersand)
    {
        // check route for this action 
        if ($route==='county/cities')
        {
            if(! isset($params['slug']))
                return FALSE; // this rule does not apply
               
            // checks if slug exist in DB
            if(County::model()->slugExists($params['slug'])) {
                if(! isset($params['city_slug']))
                    return FALSE; // this rule does not apply
                
                if(City::model()->citySlugExists($params['city_slug'])) {
                    return $params['slug'].'/'.$params['city_slug']; // return the URL
                } else {
                    return FALSE; // this rule does not apply
                }
            }
                
        }
        return false;  // this rule does not apply
    }
 
    public function parseUrl($manager,$request,$pathInfo,$rawPathInfo)
    {
        if (preg_match('%^([\w\-]+)/([\w\-]+)$%', $pathInfo, $matches))
        {
            // if county is set
            if(isset($matches[1])) {
                $slug = $matches[1];
            } else 
                return FALSE;// this rule does not apply
            
            if(isset($matches[2])) {
                $city_slug = $matches[2];
            } else 
                return FALSE;// this rule does not apply
            
            if(County::model()->slugExists($slug)) {
                $_GET['slug']= $slug ;
            } else 
                return FALSE;// this rule does not apply
            
            if(City::model()->citySlugExists($city_slug)) {
                $_GET['city_slug']= $city_slug; 
            } else 
                return FALSE;// this rule does not apply
            
            return 'ad/index';
        }
        return false;  // this rule does not apply
    }
}