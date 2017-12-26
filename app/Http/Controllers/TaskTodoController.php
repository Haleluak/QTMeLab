<?php

namespace App\Http\Controllers;


use App\Repository\GroupRepository;
use Illuminate\Http\Request;

class TaskTodoController extends Controller
{
    private $_taskRepository;
    private $_groupRepository;

    public function __construct()
    {
        //$this->_taskRepository = new GroupRepository();
        $this->_groupRepository = new GroupRepository();
    }

    public function index(Request $request, $id = 0)
    {
        $groups = $this->_groupRepository->getAll();
        /*return response()->json([
            'data' => $groups
        ]);*/
        return view('assign.task' ,compact('groups'));
    }
}