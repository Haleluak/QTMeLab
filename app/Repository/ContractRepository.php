<?php

namespace App\Repository;

use App\Models\Contract;
use Carbon\Carbon;

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
        $contract->save();
    }
    public function getSumary($filters)
    {
        $builder = Contract::with('samples');
        if (isset($filters['contract_code'])) {

            $builder->where('so_hop_dong', $filters['contract_code']);
        }
        if(isset($filters['due_day'])){
            $start = Carbon::createFromFormat('m/d/Y H:i:s', $filters['due_day']. ' 00:00:00')->format('Y-m-d H:i:s');
            $builder->where('ngay_du_kien', '>=', $start);
        }
        $contracts = $builder->get();
        foreach ($contracts as $report) {
            if (sizeof($report->samples)) {
                $reports = [];
                foreach ($report->samples as $sample){
                    foreach ($sample->specifications as $specifications)
                    {
                        $array = [
                            'group_id' => $specifications->group->id,
                            'group_name' => $specifications->group->name,
                            'member_id' => $specifications->member->id,
                            'member_name' => $specifications->member->name,
                            'specification_name' => $specifications->name,
                            'specification_id' => $specifications->id,
                            'status' => $specifications->pivot->status
                        ];
                        array_push($reports, $array);
                        $tmp = array();

                        foreach ($reports as $arg) {
                            $tmp[$arg['group_id']][] = array(
                                'group_id' => $arg['group_id'],
                                'group_name' => $arg['group_name'],
                                'member_id' => $arg['member_id'],
                                'status' => $arg['status'],
                                'specification_name' => $arg['specification_name'],
                                'specification_id' => $arg['specification_id'],
                                'member_name' => $arg['member_name']
                            );
                        }
                        $results = array();
                        foreach ($tmp as $group_id => $labels) {
                            $results[] = array(
                                'group_id' => $group_id,
                                'group_name' => $labels[0]['group_name'],
                                'member' => $labels,
                            );
                        }
                    }

                }
                $report->sumary = $results;
            }
        }

        return $contracts;
    }
}