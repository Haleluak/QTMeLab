<?php

namespace App\Http\Controllers;

use App\Repository\ContractRepository;
use App\Repository\CustomerRepository;
use App\Repository\SampleRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImportController extends Controller
{
    private $_contractRepository;
    private $_customerRepository;
    private $_sampleRepository;
    /**
     * ShopifyController constructor.
     */
    public function __construct()
    {
        $this->_contractRepository = new ContractRepository();
        $this->_customerRepository = new CustomerRepository();
        $this->_sampleRepository = new SampleRepository();
    }

    public function index()
    {
        return view('import.index');
    }

    public function importContract(Request $request)
    {
        if ($request->hasFile('imported-file')) {
            $path = $request->file('imported-file')->getRealPath();
            $data = \Excel::load($path)->get();

            if ($data->count()) {
                DB::beginTransaction();
                try {
                    foreach ($data as $key => $value) {
                        $arr = [
                            'so_hop_dong' => $value->so_hop_dong,
                            'ngay_lap_hd' => $value->ngay_lap_hd,
                            'ngay_du_kien' => $value->ngay_du_kien
                        ];
                        $id_contract = $this->_contractRepository->insert($arr);

                        $cus = [
                            'contract_id' => $id_contract,
                            'ten_khach_hang_thanh_toan' => $value->ten_khach_hang_thanh_toan,
                            'dia_chi_khach_hang_thanh_toan' => $value->dia_chi_khach_hang_thanh_toan,
                            'so_dien_thoai' => $value->so_dien_thoai,
                            'ma_so_thue' => $value->ma_so_thue,
                            'khach_hang_ket_qua' => $value->khach_hang_ket_qua,
                            'dia_chi_khach_hang_ket_qua' => $value->dia_chi_khach_hang_ket_qua,
                        ];
                        $sp = [
                            'name' => $value->ten_mau,
                            'contract_id' => $id_contract
                        ];
                        $this->_customerRepository->insert($cus);
                        $this->_sampleRepository->create($sp);
                    }
                    DB::commit();
                } catch (Exception $ex) {
                    DB::rollback();
                    throw $ex;
                }
            }
        }
    }
}
