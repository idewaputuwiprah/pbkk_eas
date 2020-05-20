<?php

class UserManager extends BaseManagers
{
    public function find($parameters = null)
    {
        return Users::find();
    }
}