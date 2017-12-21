<?php

namespace App\Repository;


use App\Models\Specification;

class SpecificationRepository
{
    public function getModel()
    {
        return new Specification();
    }

    public function create(array $data)
    {
        $group = $this->getModel();
        $group->fill($data);
        $group->save();
        return $group;
    }
    public function getAll()
    {
        $group = $this->getModel();
        return $group->all();
    }
}