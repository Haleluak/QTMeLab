<?php

namespace App\Repository;


use App\Models\GroupLab;

class GroupRepository
{
    public function getModel()
    {
        return new GroupLab();
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
        return $group::with('regulations.specifications')->get();
    }
}