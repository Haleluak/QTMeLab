<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class TaskTodoController extends Controller
{
    private $_taskRepository;


    public function __construct()
    {
        //$this->_taskRepository = new GroupRepository();
    }

    public function index(Request $request, $id = 0)
    {
        return view('assign.task');
    }
}