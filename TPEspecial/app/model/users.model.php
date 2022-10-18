<?php
require_once "app/model/model.php";
class UsersModel extends Model{


    function getUser($user){
        $db = $this->connect();
        $query = $db->prepare("SELECT * FROM users WHERE name_user = ?");
        $query->execute([$user]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    
    
}

