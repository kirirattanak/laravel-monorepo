<?php

namespace MyOrg\Core\Employee\ValueObjects;

use MyOrg\Core\Common\ValueObject;

final class Email extends ValueObject
{
    private string $email;

    public function __construct(?string $email, $isOptional = true)
    {
        if (!$isOptional && empty($email)) {
            throw new \InvalidArgumentException('Email cannot be empty');
        }
 
        $this->email = $email;
    }

    public function toString(): string
    {
        return $this->email;
    }

    public function jsonSerialize(): string
    {
        return $this->email;
    }
}