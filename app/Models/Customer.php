<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $primaryKey = 'id';
    protected $fillable = [
        'contract_id',
        'ten_khach_hang_thanh_toan',
        'dia_chi_khach_hang_thanh_toan',
        'so_dien_thoai',
        'ma_so_thue',
        'khach_hang_ket_qua',
        'dia_chi_khach_hang_ket_qua'
    ];
}