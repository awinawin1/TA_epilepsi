<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class EpilepsiModel extends Model
{
    public function getData(){
        return DB::table('crud')->get();
    }
    public function addData($data){
        DB::table('crud')->insert($data);
    }
}
  