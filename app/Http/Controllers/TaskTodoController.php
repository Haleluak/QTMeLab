<?php

namespace App\Http\Controllers;


use App\Models\Sample;
use App\Repository\ContractRepository;
use App\Repository\GroupRepository;
use Illuminate\Http\Request;

class TaskTodoController extends Controller
{
    private $_taskRepository;
    private $_groupRepository;
    private $_contractRepository;

    public function __construct()
    {
        //$this->_taskRepository = new GroupRepository();
        $this->_groupRepository = new GroupRepository();
        $this->_contractRepository = new ContractRepository();
    }

    public function index(Request $request, $id = 0)
    {
        $sample_id = $request->get('sample_id');
        $sample = Sample::with('specifications')->where('id', $sample_id)->first();;
        $groups = $this->_groupRepository->getAll();
        /*return response()->json([
            'data' => $sample
        ]);*/
        //return $groups[0]->spectifications[0]->regulation->name;
        return view('assign.task', compact('groups', 'sample'));
    }

    public function assignTask(Request $request)
    {
        $sample_id = $request->get('sample_id');
        $contract_id = $request->get('contract_id');
        $specification_ids = $request->get('specification_ids');
        $sample = Sample::find($sample_id);
        $sample->specifications()->sync($specification_ids);
        $this->_contractRepository->updateStatus();
        return back();
    }
}