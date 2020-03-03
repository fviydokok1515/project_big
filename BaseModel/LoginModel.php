<?php
require_once("BaseModel.php");
class LoginModel extends BaseModel{
    function __construct(){
        if(!static::$db){
            static::$db = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
            mysqli_set_charset(static::$db,"utf8");
        }
    }
    function getLogin($data){


        $sql = "SELECT title.*,user.*,CONCAT(s_position.name) AS position_name
        FROM title
        INNER JOIN `user` ON user.Title_id = title.title_id
        INNER JOIN `s_position` ON s_position.id = user.position_id
        WHERE Id_card = '".$data['Username']."' AND PASSWORD = '".$data['Password']."'
        
        ";
        // $sql = "SELECT * FROM `user` WHERE `Id_card`='".$data['Username']."' AND `passsword`='".$data['Password']."'
        // ";
        
        if ($result = mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) { //ถ้าเผื่อ query ข้อมูลได้ มันจะทำตามเงื่อนไขเรื่อยๆ
            $data = [];
            foreach($result as $row){
                $data[] = $row;
            }
            // while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                
            // }
            $result->close();
            return $data;
        }
        
       
    }
}