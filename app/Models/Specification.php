<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
    protected $table = 'specification';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'regulation_id',
        'group_id'
    ];
    public function regulation()
    {
        return $this->belongsTo(Regulation::class, 'regulation_id', 'id');
    }
    public function group()
    {
        return $this->belongsTo(GroupLab::class, 'group_id', 'id');
    }
    public function member()
    {
        return $this->hasOne(Member::class, 'id', 'member_id');
    }
}