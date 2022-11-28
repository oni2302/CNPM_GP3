<?php
class App
{
    //Attributes
    private $__controller, $__action, $__params, $__routes;
    static public $app;
    function __construct()
    {
        global $routes,$configs;
        self::$app=$this;
        $this->__routes = new Route();
        if (!empty($routes['default_controller'])) {
            $this->__controller = $routes['default_controller'];
        }
        $this->__action = 'index';
        $this->__params = [];

        $this->handleUrl();
    }
    //Lấy URL
    function getUrl()
    {
        if (!empty($_SERVER['PATH_INFO'])) {
            $url = $_SERVER['PATH_INFO'];
        } else {
            $url = '/';
        }
        return $url;
    }

    //Xử lí URL
    public function handleUrl()
    {
        $url = $this->getUrl();

        $url = $this->__routes->handleRoute($url);
        $urlArray = array_filter(explode('/', $url));
        $urlArray = array_values($urlArray);
        $urlCheck = '';
        if (!empty($urlArray)) {
            foreach ($urlArray as $key => $item) {
                $urlCheck .= $item . '/';
                $fileCheck = rtrim($urlCheck, '/');

                $fileArr = explode('/', $fileCheck);
                $fileArr[count($fileArr) - 1] = ucfirst($fileArr[count($fileArr) - 1]);
                $fileCheck = implode('/', $fileArr);

                if (!empty($urlArray[$key - 1])) {
                    unset($urlArray[$key - 1]);
                }
                if (file_exists('./app/controllers/' . $fileCheck . '.php')) {
                    $urlCheck = $fileCheck;
                    break;
                }
            }
            $urlArray = array_values($urlArray);
        }
        //Xử lí Controller
        if (!empty($urlArray[0])) {
            $this->__controller = ucfirst($urlArray[0]);
        } else {
            $this->__controller = ucfirst($this->__controller);
        }
        //Xử lí urlCheck empty
        if(empty($urlCheck)){
            $urlCheck = $this->__controller;
        }

        #Kiểm tra file tồn tại
        if (file_exists('./app/controllers/' . $urlCheck . '.php')) {
            require_once './app/controllers/' . $urlCheck . '.php';
            //Kiểm tra lớp $this có tồn tại hay không?
            if (class_exists($this->__controller)) {
                $this->__controller = new $this->__controller();
                unset($urlArray[0]);
            } else {
                $this->loadError();
            }
        } else {
            $this->loadError();
        }
        // Xử lí Action
        if (!empty($urlArray[1])) {
            $this->__action = $urlArray[1];
            unset($urlArray[1]);
        }
        //Xử lí params
        $this->__params = array_values($urlArray);
        //Kiểm tra phương thức
        if (method_exists($this->__controller, $this->__action)) {
            call_user_func_array([$this->__controller, $this->__action], $this->__params);
        } else {
            $this->loadError();
        }
    }


    // Hiển thị lỗi
    public function loadError($name = '404',$data=[])
    {
        extract($data);
        require_once 'errors/' . $name . '.php';
    }
}
