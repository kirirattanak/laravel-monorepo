<?php

namespace MyOrg\Core\Common\Contracts;

interface RepositoryContract
{
    public function findOneById($id);

    public function findAll();

    public function findBy(array $criteria, array $orderBy = [], $limit = 10, $offset = null);

}