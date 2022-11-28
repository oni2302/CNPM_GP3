<?php
#Kế thừa từ class Model
class HomeModel extends Model{
    protected $table = 'anything';

    public function __construct()
    {
        parent::__construct();
    }


    public function getList(){
        $data = [
            'Item1',
            'Item2',
            'Item3'
        ];
        return $data;
    }
}