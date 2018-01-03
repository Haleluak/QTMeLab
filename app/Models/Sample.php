<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    protected $table = 'sample';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'contract_id',
        'category',
        'note',
        'start_date',
        'end_date'
    ];
    public function specifications() {
        return $this->belongsToMany(Specification::class, 'sample_specification', 'sample_id', 'specification_id');
    }
}