<?php
#Kế thừa từ class Model
class SignInModel extends Model{
    protected $table = 'user';
    public function __construct()
    {
        parent::__construct();
    }

    public function getList(){
        $data = $this->db->query("select * from $this->table")->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}