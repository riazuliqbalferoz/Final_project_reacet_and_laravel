<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Milkcollection extends Model
{
    public $table='milkcollection';
    public $primaryKey='id';
    public $incrementing=true;
    
    public $keyType='int';


    public  $timestamps=true;
}
