<?php

namespace App\Http\Controllers;


use App\Repository\SampleRepository;
use Illuminate\Http\Request;

class SampleController extends Controller
{
    private $_sampleRepository;


    public function __construct()
    {
        $this->_sampleRepository = new SampleRepository();
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