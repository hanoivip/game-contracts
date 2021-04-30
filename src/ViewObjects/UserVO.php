<?php

namespace Hanoivip\GameContracts\ViewObjects;

class UserVO
{
    private $id;
    private $name;
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
