<?php

namespace App\Http\Controllers\Front_Office;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function personal(){
        return view('FrontOffice.en.client_dashboard.account-overview');
    }
    public function address(){
        return view('FrontOffice.en.client_dashboard.account-address');
    }
    public function security(){
        return view('FrontOffice.en.client_dashboard.account-security');
    }
    public function my_listing(){
        return view('FrontOffice.en.client_dashboard.account-listings');
    }
    public function my_orders(){
        return view('FrontOffice.en.client_dashboard.account-orders');
    }
    public function saved(){
        return view('FrontOffice.en.client_dashboard.account-saved');
    }
    public function sittings(){
        return view('FrontOffice.en.client_dashboard.sittings-saved');
    }
}
