<?php

namespace App\Repository;


use App\Models\Customer;

class CustomerRepository
{
    private $_customerModel;

    public function __construct()
    {
        $this->_customerModel = new Customer();
    }

    public function insert(array $data)
    {
        if (!$data['contract_id'])
            return 0;

        $cuatomerModel = $this->_customerModel->findOrNew($data['contract_id']);

        foreach ($this->_customerModel->getFillable() as $k => $v) {
            if (key_exists($v, $data))
                $cuatomerModel->setAttribute($v, $data[$v]);
        }
        $cuatomerModel->save();
    }
}