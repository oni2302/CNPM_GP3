<?php
class Database{
    private $__conn;
    function __construct(){
        global $db_config;
        $this->__conn = Connection::getInstance($db_config);
    }
//Thêm
    function insert($table,$data){
        if(!empty($data)){
            $fieldStr='';
            $valueStr='';
            foreach ($data as $key => $value) {
                $fieldStr.=$key.',';
                $valueStr.="'".$value."',";
            }
            $fieldStr = rtrim($fieldStr,',');
            $valueStr = rtrim($valueStr,',');
            
            $sql = "insert into $table($fieldStr) values ($valueStr)";

            $status = $this->query($sql);
            if($status){
                return true;
            }
        }
    }
//Xóa
    function delete($table,$condition=''){
        
        if(!empty($condition)){
            $sql = "delete from $table where $condition";
        }else{
            $sql = "delete from $table";
        }
        $status = $this->query($sql);
        if($status){
            return true;
        }
        return false;
    }
//Sửa
    function update($table,$data,$condition=''){
        if(!empty($data)){
            $updateStr='';
            foreach($data as $key=>$value){
                $updateStr.="$key='$value',";
            }
            $updateStr = rtrim($updateStr,',');

            if(!empty($condition)){
                $sql = "update $table set $updateStr where $condition";
            }else{
                $sql ="update $table set $updateStr";
            }

            $status = $this->query($sql);
            if($status){
                return true;
            }
        }
    }
//Thực thi câu truy vấn
    function query($sql){
        try{
            $statement = $this->__conn->prepare($sql);

        $statement->execute();
        return $statement;
        }catch(Exception $exception){
            $mess = $exception->getMessage();
            $data['message'] = $mess;
            App::$app->loadError('500',$data);
            die();
        }
        
    }
//Trả về id mới nhất sau khi đã insert
    function lastInsertId(){
        return $this->__conn->lastInsertId();
    }
}