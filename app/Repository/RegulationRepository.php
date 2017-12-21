<?php

namespace App\Repository;


use App\Models\Regulation;

class RegulationRepository
{
    public function getModel()
    {
        return new Regulation();
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