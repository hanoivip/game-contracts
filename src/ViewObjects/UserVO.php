<?php

namespace Hanoivip\GameContracts\ViewOjects;

class UserVO
{
    public $id;
    public $name;
    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
    public function getAuthIdentifier()
    {
        return $this->id;
    }
    public function getAuthIdentifierName()
    {
        return $this->name;
    }
}
