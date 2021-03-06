<?php
/**
 *
 * frontend.php configuration file
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @copyright 2013 2amigOS! Consultation Group LLC
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
defined('APP_CONFIG_NAME') or define('APP_CONFIG_NAME', 'frontend');

// web application configuration
return array(
	'basePath' => realPath(__DIR__ . '/..'),
	// path aliases
	'aliases' => array(
		'bootstrap' => dirname(__FILE__) . '/../..' . '/common/lib/vendor/2amigos/yiistrap',
		'yiiwheels' =>  dirname(__FILE__) . '/../..' . '/common/lib/vendor/2amigos/yiiwheels',
	),
    'import'=>array(
		'application.widgets.*',
		'application.components.*',
        'ext.giix-components.*'
	),
	// application behaviors
	'behaviors' => array(),

	// controllers mappings
	'controllerMap' => array(
//        'county'=>array(
//            'class'=>'application.controllers.SiteController',
//         ),
    ),

	// application modules
	'modules' => array(),

	// application components
	'components' => array(

		'bootstrap' => array(
			'class' => 'bootstrap.components.TbApi',
		),

        // for resing card images to 320*150
		'imageResizer'=>array(
			'class'=>'ImageResizer'
		),
		
		'hybridAuth'=>array(
            'class'=>'ext.widgets.hybridAuth.CHybridAuth',
            'enabled'=>true, // enable or disable this component
            'config'=>array(
                "base_url" => "http://fillup.se/login/endpoint", 
                "providers" => array(
                      "Google" => array(
                           "enabled" => false,
                           "keys" => array("id" => "", "secret" => ""),
                       ),
                      "Facebook" => array(
                           "enabled" => true,
                           "keys" => array("id" => "202921523234844", "secret" => "e2ad43fcec1dca4503f990e6b4b68862"),
                       ),
                      "Twitter" => array(
                           "enabled" => false,
                           "keys" => array("key" => "", "secret" => "")
                      ),
                   ),
                   "debug_mode" => false,
                   "debug_file" => "",
               ),
        ),//end hybridAuth

		'clientScript' => array(
			'scriptMap' => array(
				'bootstrap.min.css' => false,
				'bootstrap.min.js' => false,
				'bootstrap-yii.css' => false
			)
		),
		'urlManager' => array(
			// uncomment the following if you have enabled Apache's Rewrite module.
			'urlFormat' => 'path',
			'showScriptName' => false,

			'rules' => array(
				// default rules
                '' => 'ad/index',
                'login'=>'site/login',
                'index' => 'ad/index',
                'product' => 'site/product',
                'contact' => 'site/contact', 
                'konto/registera'=> 'user/create',
                
                'ad/<id:\d+>/<image_id:\d+>' => 'ad/detail',
                'ad/<id:\d+>' => 'ad/detail',
                // <language:(sv|en)>/
                'county' => 'county/admin', // <language:(sv|en)>/
                // 'countycities/<id:\d+>' => 'county/countycities', 
                // 'county/<id:\d+>' => 'county/county', 
                /* county Controller */
                array(
                   'class' => 'application.components.CountyUrl',
                ),
                /* County cities */
                array(
                   'class' => 'application.components.CountyCitiesUrl',
                ),
				'<controller:\w+>/<id:\d+>' => '<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
				'<controller:\w+>/<action:\w+>' => '<controller>/<action>',
			),
		),
		'user' => array(
			'allowAutoLogin' => true,
		),
		'errorHandler' => array(
			'errorAction' => 'site/error',
		),
        'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				), */
				
			),
		),
	),
	// application parameters
	'params' => array(
		// php configuration
		'php.defaultCharset' => 'utf-8',
		'php.timezone' => 'UTC',
        'languages'=>array('sv'=>'Swedish', 'en'=>'English',),
	),
);