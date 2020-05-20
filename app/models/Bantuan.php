<?php

// namespace models;

use \Phalcon\Mvc\Model;

class Bantuan extends Model
{

    /**
     *
     * @var integer
     */
    public $id_bantuan;

    /**
     *
     * @var integer
     */
    public $id_users;

    /**
     *
     * @var string
     */
    public $created_at;

    /**
     *
     * @var string
     */
    public $updated_at;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("tolong_in");
        $this->setSource("bantuan");
        $this->belongsTo('id_users', '\Users', 'id_users', ['alias' => 'Users']);
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Bantuan[]|Bantuan|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Bantuan|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
