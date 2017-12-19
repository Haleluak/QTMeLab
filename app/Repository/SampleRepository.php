<?php

namespace App\Repository;


use App\Models\Sample;

class SampleRepository
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