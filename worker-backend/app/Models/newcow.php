<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class newcow extends Model
{ 
    
    public $table='newcow';
    public $primaryKey='cnid';
    public $incrementing=true;
    
    public $keyType='int';


    public  $timestamps=false;

}
