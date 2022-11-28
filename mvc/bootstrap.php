<?php
//Xử lí php root
    define('_DIR_ROOT',__DIR__);
//Xử lí html root
    $web_root = $_SERVER['HTTP_HOST'];
    if(!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS']=='on'){
    $web_root = 'https://'.$_SERVER['HTTP_HOST'];
    }else{
    $web_root = 'http://'.$_SERVER['HTTP_HOST'];
    }
    $dir_root = str_replace('\\','/',_DIR_ROOT);
    $folder = str_replace(strtolower($_SERVER['DOCUMENT_ROOT']),'',strtolower($dir_root));

    $web_root = $web_root.$folder;
    define('_WEB_ROOT',$web_root);
/*
*Tự động load config
*/
    $configs_dir = scandir('./app/configs');
    if(!empty($configs_dir)){
        foreach($configs_dir as $config){
            if($config!='.'&&$config!='..'&& file_exists('./app/configs/'.$config)){
                // echo './app/configs/'.$config.'<br>';
                require_once './app/configs/'.$config;
            }
        }
    }
require_once './app/core/Route.php';
require_once './app/App.php';
//Kiểm tra config load database
    if(!empty($configs['database'])){
        $db_config = array_filter($configs['database']);    
        if(!empty($db_config)){
            require_once './app/core/Connection.php';
            require_once './app/core/Database.php';
        }   
    }
require_once './app/core/Model.php';
require_once './app/core/BaseController.php';