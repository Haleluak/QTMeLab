<?php

namespace App\Repository;

use App\Models\Contract;

class ContractRepository
{
    private $_contractModel;

    const STATUS_PROCESSING = 'processing';
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
        $contracts = Contract::with('customer','samples')->get();
        return $contracts;
    }
    public function getdetail($id)
    {
        $contract = Contract::find($id);
        $contract->load('customer','samples.specifications');
        return $contract;
    }
    public function updateStatus($id)
    {
        $contract = Contract::find($id);
        $contract->status = self::STATUS_PROCESSING;
        $contract->save;
    }

}