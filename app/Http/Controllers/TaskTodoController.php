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
        $sample_id = $request->get('sample_id');
        $sample = Sample::with('specifications')->where('id', $sample_id)->get();;
        $groups = $this->_groupRepository->getAll();
        /*return response()->json([
            'data' => $sample
        ]);*/
        //return $groups[0]->spectifications[0]->regulation->name;
        return view('assign.task' ,compact('groups','sample'));
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