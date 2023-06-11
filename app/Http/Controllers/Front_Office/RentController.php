<?php

namespace App\Http\Controllers\Front_Office;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RentController extends Controller
{
    public function index(){
        return view('FrontOffice.en.views.pick-rent-type');
    }
    public function house(){
        return view('FrontOffice.en.views.rent.house');
    }
    public function apartment(){
        return view('FrontOffice.en.views.rent.apartment');
    }
    public function land(){
        return view('FrontOffice.en.views.rent.land');
    }
    public function vacation_house(){
        return view('FrontOffice.en.views.rent.vacation-house');
    }
}
