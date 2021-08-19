<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Newcow;
class Newbabycow extends Controller
{
    
   function newcow(Request $req){
    $babycow=new Newcow;
    $babycow->gender=$req->input('gender');
    $babycow->date_of_birth=$req->input('date_of_birth');
    $babycow->status=$req->input('status');
   $babycow->image=$req->file('file')->storage_path('newcow');
    $babycow->save();
    
    return $babycow;
       }
    }