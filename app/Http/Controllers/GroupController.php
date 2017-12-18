<?php

namespace App\Http\Controllers;


use App\Repository\GroupRepository;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    private $_groupRepository;


    public function __construct()
    {
        $this->_groupRepository = new GroupRepository();
    }

    public function index(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $contracts = $this->_groupRepository->create($data);
        }
        $groups = $this->_groupRepository->getAll();
        return view('group.list', compact('groups'));
    }
}