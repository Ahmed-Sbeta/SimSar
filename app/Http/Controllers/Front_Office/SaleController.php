<?php

namespace App\Http\Controllers\Front_Office;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index(){
        return view('FrontOffice.en.views.pick-sale-type');
    }
    public function house(){
        return view('FrontOffice.en.views.sale.house');
    }
    public function apartment(){
        return view('FrontOffice.en.views.sale.apartment');
    }
    public function land(){
        return view('FrontOffice.en.views.sale.land');
    }
    public function vacation_house(){
        return view('FrontOffice.en.views.sale.vacation-house');
    }
}
