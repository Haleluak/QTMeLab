<?php

namespace App\Repository;


use App\Models\Member;
use Illuminate\Http\Request;

class MemberRepository
{
    public function getModel()
    {
        return new Member();
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

    public function getMember($group_id)
    {
        return $member = $this->getModel()->where('group_id', $group_id)->get();
    }
}