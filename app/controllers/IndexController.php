<?php

class IndexController extends ControllerBase
{
    public function indexAction()
    {
        $session = $this->di->getShared("session");
        if($session->has("user"))
        {
            $this->response->redirect("/bantuan");
        }
        else $this->response->redirect("/user/login");
    }

}

