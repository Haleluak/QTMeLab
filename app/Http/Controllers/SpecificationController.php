<?php

namespace App\Http\Controllers;


use App\Repository\GroupRepository;
use App\Repository\MemberRepository;
use App\Repository\RegulationRepository;
use App\Repository\SpecificationRepository;
use Illuminate\Http\Request;

class SpecificationController extends Controller
{
    private $_specificationRepository;
    private $_groupRepository;
    private $_regulationRepository;

    public function __construct()
    {
        $this->_specificationRepository= new SpecificationRepository();
        $this->_groupRepository = new GroupRepository();
        $this->_regulationRepository= new RegulationRepository();
    }

    public function index(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $this->_specificationRepository->create($data);
        }
        //$regulations = $this->_specificationRepository->getAll();
        $groups = $this->_groupRepository->getAll();
        $regulations = $this->_regulationRepository->getAll();
        return view('specification.list', compact('groups','regulations'));
    }
}