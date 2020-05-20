<?php

// namespace models;
use \Phalcon\Mvc\Model;

class Kategori extends Model
{

    /**
     *
     * @var integer
     */
    public $id_kategori;

    /**
     *
     * @var string
     */
    public $nama_kategori;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("tolong_in");
        $this->setSource("kategori");
        $this->hasMany('id_kategori', '\Item', 'id_kategori', ['alias' => 'Item']);
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Kategori[]|Kategori|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Kategori|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
