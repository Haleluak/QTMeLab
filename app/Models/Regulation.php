<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Regulation extends Model
{
    protected $table = 'regulation';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'group_id'
    ];
    public function specifications()
    {
        return $this->hasMany(Specification::class, 'regulation_id', 'id');
    }
}