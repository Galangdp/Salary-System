<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employee';
    protected $guarded = [];

    public function users(){
        return $this -> belongsTo('App\Models\User', 'id_users');
    }

    public function divisi(){
        return $this -> belongsTo('Appx\Models\Divisi', 'id_divisi');
    }
}
