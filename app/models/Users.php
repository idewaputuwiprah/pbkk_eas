<?php

// namespace models;
use \Phalcon\Mvc\Model;

class Users extends Model
{
    public $id_users;
    public $username;
    public $password;
    public $nama;
    public $created_at;
    public $updated_at;

    public function initialize()
    {
        $this->setSchema("tolong_in");
        $this->setSource("users");
        $this->hasMany('id_users', '\Bantuan', 'id_users', ['alias' => 'Bantuan']);
    }

    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find($parameters);
    }
    
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
