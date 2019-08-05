<?php

class Model
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

$user1 = new User(1);
$user2 = new User(2);

echo $user1->getId();
echo '<br>';
echo $user2->getId();