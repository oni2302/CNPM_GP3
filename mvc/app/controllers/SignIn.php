<?php
class SignIn extends BassController{
    public $model;
    public $data =[];
    public function __construct()
    {
        $this->model = $this->model('SignInModel');
    }
    public function index(){
        $title ='Đăng nhập';
        $this->data['page_title'] = $title;
        $this->data['content'] = 'signin/index';
        $data = $this->model->getList();
        $this->render('layouts/account_layout',$this->data);
    }
}