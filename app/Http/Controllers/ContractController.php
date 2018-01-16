<?php

namespace App\Http\Controllers;


use App\Repository\ContractRepository;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    private $_contractRepository;

    /**
     * ShopifyController constructor.
     */
    public function __construct()
    {
        $this->_contractRepository = new ContractRepository();
    }

    public function index()
    {
        $contracts = $this->_contractRepository->getAll();
        return view('contract.list', compact('contracts'));
    }
    public function detail($id)
    {
        $contract = $this->_contractRepository->getdetail($id);
        return view('contract.detail', compact('contract'));
    }
    public function sumaryContract(Request $request)
    {
        $contracts = $this->_contractRepository->getSumary();
        return view('sumary.list', compact('contracts'));
    }

}