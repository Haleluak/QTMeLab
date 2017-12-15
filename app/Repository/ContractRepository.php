<?php

namespace App\Repository;

use App\Models\Contract;

class ContractRepository
{
    private $_contractModel;

    public function __construct()
    {
        $this->_contractModel = new Contract();
    }

    public function insert(array $data)
    {
        $contract = $this->_contractModel->where('so_hop_dong', $data['so_hop_dong'])->first();
        if ($contract)
            return 0;

        $contractModel = $this->_contractModel->findOrNew($data['so_hop_dong']);

        foreach ($this->_contractModel->getFillable() as $k => $v) {
            if (key_exists($v, $data))
                $contractModel->setAttribute($v, $data[$v]);
        }

        $isSave = $contractModel->save();
        return $contractModel->id;
    }
    public function getAll()
    {
        $contracts = Contract::all();
        return $contracts;
    }

}