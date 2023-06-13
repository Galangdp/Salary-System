<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penggajian extends Model
{
    use HasFactory;

    protected $table = 'penggajian';
    protected $guarded = [];

    public function employee(){
        return $this -> hasMany('App\Models\Employee', 'id_employee');
    }

    public function tunjangan(){
        return $this -> belongsTo('App\Models\Tunjangan', 'id_tunjangan');
    }
}
