<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $table = 'contracts';
    protected $primaryKey = 'id';
    protected $fillable = [
        'so_hop_dong',
        'ngay_lap_hd',
        'ngay_du_kien',
        'status'
    ];
    public function customer()
    {
        return $this->hasOne(Customer::class, 'contract_id', 'id');
    }
    public function sample()
    {
        return $this->hasMany(Sample::class, 'contract_id', 'id');
    }
}