<?php

namespace MyOrg\Core\Employee\Contracts;

interface EmployeeServiceContract
{
    public function getId(): int;
    public function getName(): string;
    public function getEmail(): string;
}