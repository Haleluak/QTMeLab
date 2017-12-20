<?php

namespace App\Http\Controllers;


class RegulationController extends Controller
{
    private $_regulationRepository;


    public function __construct()
    {
        $this->_regulationRepository= new SampleRepository();
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $quantity =  $request->get('quantity') ? (int)$request->get('quantity') : 1 ;
        for ($i = 0 ; $i< $quantity ; $i++)
        {
            $this->_sampleRepository->create($data);
        }
        return back();
    }
}