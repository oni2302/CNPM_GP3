<?php
class SignUp extends BassController{
    public $model;
    public $data =[];
    public function __construct()
    {
        $this->model = $this->model('SignUpModel');
    }
    public function index(){
        $title ='Đăng kí';
        $this->data['page_title'] = $title;
        $this->data['content'] = 'signup/index';
        $this->render('layouts/account_layout',$this->data);
    }
}