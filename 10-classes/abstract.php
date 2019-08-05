<?php

abstract class Model
{
    protected $id;
}

class User extends Model
{
    function __construct($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }
}

// $model = new Model();
$user = new User(1);
echo $user->getId();