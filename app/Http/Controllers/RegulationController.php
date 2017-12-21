<?php

namespace App\Http\Controllers;


use App\Repository\RegulationRepository;
use Illuminate\Http\Request;

class RegulationController extends Controller
{
    private $_regulationRepository;


    public function __construct()
    {
        $this->_regulationRepository= new RegulationRepository();
    }

    public function index(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
             $this->_regulationRepository->create($data);
        }
        $regulations = $this->_regulationRepository->getAll();
        return view('regulation.list', compact('regulations'));
    }
}