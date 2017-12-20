<?php

namespace App\Repository;


class RegulationRepository
{
    public function getModel()
    {
        return new Sample();
    }

    public function create(array $data)
    {
        $group = $this->getModel();
        $group->fill($data);
        $group->save();
        return $group;
    }
}