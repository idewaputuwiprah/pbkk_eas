<?php

class BantuanController extends ControllerBase
{
    public $nama_bantuan = array();
    public $id_kategori_bantuan = array();
    public $kategori_bantuan = array();
    public $jumlah_bantuan = array();

    public function indexAction()
    {
        $items = Item::find();
        $this->view->user = $this->di->getShared("session")->get("user");
        $this->view->items = $items;
    }

    public function tambahAction()
    {
        $this->view->user = $this->di->getShared("session")->get("user");
        if($this->request->isPost())
        {
            $q = $this->request->getPost("banyak_form");
            $this->view->banyak = $q;
            $this->view->categories = Kategori::find();
        }
    }

    public function sumbanganAction()
    {
        if($this->request->isPost())
        {
            $bantuan = new Bantuan;
            $user = $this->di->getShared("session")->get("user");

            $bantuan->id_users = $user->id_users;
            $bantuan->created_at = new \Phalcon\Db\RawValue('NOW()');

            $bantuan->save();

            $nama = $this->request->getPost("nama");
            $kategori = $this->request->getPost("category");
            $jumlah = $this->request->getPost("jumlah");
            $con = true;

            for($i=0; $i < count($nama); $i++)
            {
                $item = new Item();
                $item->id_bantuan = $bantuan->id_bantuan;
                $item->id_kategori = $kategori[$i];
                $item->nama_item = $nama[$i];
                $item->jumlah = $jumlah[$i];

                if(!$item->save()){
                    $con = false;
                    $this->flashSession->error("Gagal masuk ke database");
                }
            }
            if($con) {
                $this->flashSession->success("Berhasil menyimpan");
            }
            $this->view->disable();
            $this->response->redirect('/bantuan');
        }
    }
}