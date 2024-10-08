<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Fine;
use App\Models\Payment;
use App\Models\Policestation;
use App\Models\Registerrequest;
use App\Models\Violationtype;
use Illuminate\Http\Request;

class DashController extends Controller
{
    public function dashView(){

        $pendingFinecount = Payment::where('paid_status', 2)->count();
        $pendingFineAmount = Payment::where('paid_status', 2)->sum('fine_amount');
        $paidFinecount = Payment::where('paid_status', 1)->count();
        $paidFineAmount = Payment::where('paid_status', 1)->sum('fine_amount');

        return view ('screens.dashboardnew', compact('pendingFinecount','pendingFineAmount','paidFinecount','paidFineAmount'));
    }

    public function nfineview(){

        $fineDetails = Fine::select('fines.id','fines.fine_id', 'fines.police_station', 'fines.vehicle_number', 'fines.date','violationtypes.violation_name')
            ->join('violationtypes', 'violationtypes.id', '=', 'fines.violation_type_id')
            ->get();
        return view ('screens.newfines', compact('fineDetails'));
    }

   
    public function payview(){
        return view (view:'screens.payment');
    }
    

    public function vtypesview(){
        return view (view:'screens.violationtypes');
    }

    public function citiesview(){
        return view (view:'screens.cities');
    }

    public function nsrview(){
        $newrequest = Registerrequest::all();
        return view ('screens.newrequests')->with('newrequest', $newrequest);
    }

   


    public function fineview($id){


        $fineDetails = Fine::select('fines.id','fines.fine_id', 'fines.police_station', 'fines.vehicle_number', 'fines.date','fines.time','fines.police_id','violationtypes.violation_name',
        'violationtypes.fine_amount','drivers.name','drivers.licence_id','drivers.age', 'drivers.mobile_number','drivers.address','drivers.license_expire_date','drivers.competent_to_drive',
        'payments.paid_status')
        ->join('violationtypes', 'violationtypes.id', '=', 'fines.violation_type_id')
        ->join('drivers', 'drivers.id', '=', 'fines.driver_id')
        ->join('payments', 'payments.fine_id', '=', 'fines.id')
        ->where('payments.paid_status', 2)
        ->where('fines.id', $id)
        ->first();


        // dd($fineDetails);

        return view ('screens.fineview', compact('fineDetails'));
    }

    public function addnewvlnview(){
        return view (view:'screens.addnewviolation');
    }

    public function editvlnview($id){
        $violationtypes = Violationtype::findOrFail($id);
        return view('screens.editviolation', compact('violationtypes'));
    }

    public function addnewplsview(){
        return view (view:'screens.addnewpolicestation');
    }

    public function editplsview($id){
       $policestations = Policestation::findOrFail($id);
       return view('screens.editpolice', compact('policestations'));
    }

    public function editrqtview($id){
        $newrequest = Registerrequest::find($id);
        return view('screens.editrequest')->with('newrequest', $newrequest);
    }

    public function update(Request $request) {
        $newrequest = Registerrequest::find($request->request_id);
        $newrequest->approve_status = $request->approve_status;
        $newrequest->update();
        return redirect('nsr')->with('flash_message', 'request Updated!');
    }

    public function search(){
        $search_text = $_GET('query');
        $fineDetails = Fine::where('fine_id','LIKE','%'.$search_text.'%')->get();
        return view('screens.search', compact('fineDetails'));
    }

}
