<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashController extends Controller
{
    public function dashView(){
        return view (view:'screens.dashboardnew');
    }

    public function nfineview(){
        return view (view:'screens.newfines');
    }

    public function ofineview(){
        return view (view:'screens.overduefines');
    }

    public function sfineview(){
        return view (view:'screens.settledfines');
    }

    public function vtypesview(){
        return view (view:'screens.violationtypes');
    }

    public function citiesview(){
        return view (view:'screens.cities');
    }

    public function nsrview(){
        return view (view:'screens.newrequests');
    }

    public function asrview(){
        return view (view:'screens.approvedrequests');
    }

    public function rsrview(){
        return view (view:'screens.rejectedrequests');
    }

    public function fineview(){
        return view (view:'screens.fineview');
    }

    public function addnewvlnview(){
        return view (view:'screens.addnewviolation');
    }

    public function editvlnview(){
        return view (view:'screens.editviolation');
    }
   
    public function addnewplsview(){
        return view (view:'screens.addnewpolicestation');
    }

    public function editplsview(){
        return view (view:'screens.editpolice');
    }
    
}
