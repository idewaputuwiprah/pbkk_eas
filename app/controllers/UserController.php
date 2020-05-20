<?php

use Phalcon\Security;

class UserController extends ControllerBase
{

    public function registerAction()
    {
        if($this->request->isPost())
        {
            $user = new Users;
            $security = new Security();

            $user->nama = $this->request->getPost("nama");
            $user->username = $this->request->getPost("username");
            // $user->password = $this->request->getPost("password");
            $hashed = $security->hash($this->request->getPost("password"));
            $user->password = $hashed;
            $user->created_at = new \Phalcon\Db\RawValue('NOW()');

            $result = $user->save();
            $this->response->redirect('user/login');
        }
    }

    public function loginAction()
    {
        if($this->request->isPost())
        {
            $password = $this->request->getPost("password");
            $username = $this->request->getPost("username");

            $user = Users::findFirst([
                'conditions' => 'username = :usr_name:',
                'bind' => [
                    'usr_name' => $username,
                ]
            ]);

            $check = $this->security->checkhash($password, $user->password);

            if(true === $check) 
            {
                $session = $this->di->getShared("session");
                $session->set("user", $user);
                $this->response->redirect('/bantuan');
            }
            else $this->flashSession->error("username / password salah");
        }
    }

    public function logoutAction()
    {
        $session = $this->di->getShared("session");
        $session->remove("user");
        $this->response->redirect('/user/login');
    }
}

