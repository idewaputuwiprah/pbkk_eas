<?php

use \Phalcon\Mvc\Model;

class Item extends Model
{

    /**
     *
     * @var integer
     */
    public $id_item;

    /**
     *
     * @var integer
     */
    public $id_bantuan;

    /**
     *
     * @var integer
     */
    public $id_kategori;

    /**
     *
     * @var string
     */
    public $nama_item;

    /**
     *
     * @var integer
     */
    public $jumlah;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("tolong_in");
        $this->setSource("item");
        $this->belongsTo('id_kategori', '\Kategori', 'id_kategori', ['alias' => 'Kategori']);
        $this->belongsTo('id_bantuan', '\Bantuan', 'id_bantuan', ['alias' => 'Bantuan']);
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Item[]|Item|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Item|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
