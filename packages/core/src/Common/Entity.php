<?php

namespace MyOrg\Core\Common;

abstract class Entity implements \JsonSerializable
{
    abstract public function toArray(): array;

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}