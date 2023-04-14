<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function __construct()
    {
        
    }

    public function getOffers(){
        return Offer::select('id','name')->get();
    }

    public function store(){
         Offer::create([
            'name'=>'offer3',
            'price'=>'500',
            'details'=>'offer details',
         ]);
         Offer::create([
            'name'=>'offer4',
            'price'=>'500',
            'details'=>'offer details4',
         ]);
    }
}


