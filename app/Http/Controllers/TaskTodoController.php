<?php

namespace App\Http\Controllers;


use App\Models\Sample;
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
    public function assignTask(Request $request)
    {
        $sample_id = $request->get('sample_id');
        $specification_ids  = $request->get('specification_ids');
        $sample = Sample::find($sample_id);
        $sample->specifications()->sync($specification_ids);
        return back();
    }
}