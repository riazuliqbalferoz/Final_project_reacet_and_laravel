<?php

namespace App\Http\Controllers;
use App\Models\Milkcollection;
use Illuminate\Http\Request;

class Milk_collection extends Controller
{
    function milk_collection(Request $req){

        $milk=new Milkcollection;
        
                    $milk->number_of_cow=$req->input('number_of_cow');
                    $milk->milk_collection=$req->input('milk_collection');
                    $milk->aspected_milk=$req->input('aspected_milk');
                    $milk->save();
                return $user;
            }
}
